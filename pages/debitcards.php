<?php
    require 'app/tmpl/includes/DB.php';

    $cards = R::findAll('debitcards');
?>

<div class="title">Карты</div>
<div class="content">
    <p>
        <?php if($cards) { ?>
            <ul>
                <?php foreach($cards as $result) {?>
                    <li><?php echo($result->number); if($result->name) { ?> - <?php echo($result->name); } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
</div>