<?php
    require 'app/tmpl/includes/DB.php';

    $numbers_now = R::findAll('numbers', 'WHERE usenow IS NOT NULL AND NOT usenow = "16" ORDER BY number DESC;');
    $numbers = R::findAll('numbers', 'WHERE usenow IS NULL OR usenow = "16" ORDER BY number DESC;');
?>

<script>
    function tformat(phone) {
        var lenPhone = phone.length;
        var tt=phone.split('');
        if(lenPhone == 12){
        tt.splice(2,"", " (");
        tt.splice(6,"", ") ");
        tt.splice(10,"", "-");
        tt.splice(13,"", "-");
        }else if(lenPhone == 13){
        tt.splice(3,"", " (");
        tt.splice(7,"", ") ");
        tt.splice(11,"", "-");
        tt.splice(14,"", "-");
        }
        return tt.join('');
    }
</script>

<div class="title">Номера телефонов</div>
<div class="content">
    <p>
        <div class="subtitle">Действующие номера:</div>
        <?php if($numbers_now) { ?>
            <ul>
                <?php foreach($numbers_now as $result) {?>
                    <li><a href="tel:<?php echo($result->number); ?>"><?php echo("<script>document.write(tformat('$result->number'));</script>") ?></a> - <a href="<?php echo(R::findOne('links', 'WHERE id ='.$result->usenow)->link) ?>"><?php echo(R::findOne('links', 'WHERE id ='.$result->usenow)->link_name) ?></a></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
    <p>
        <div class="subtitle">Ранее использовавшиеся номера:</div>
        <?php if($numbers) { ?>
            <ul>
                <?php foreach($numbers as $result) { ?>
                    <li><a href="tel:<?php echo($result->number); ?>"><?php echo("<script>document.write(tformat('$result->number'));</script>") ?></a> <?php if($result->usenow != NULL) { ?> - <a href="<?php echo(R::findOne('links', 'WHERE id ='.$result->usenow)->link) ?>"><?php echo(R::findOne('links', 'WHERE id ='.$result->usenow)->link_name) ?></a> <?php } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
</div>