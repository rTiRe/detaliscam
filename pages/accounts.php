<?php
    require 'app/tmpl/includes/DB.php';

    $telegram = R::findAll('accounts', 'WHERE social = "telegram"');
    $instagram = R::findAll('accounts', 'WHERE social = "instagram"');
?>


<div class="title">Аккаунты</div>
<div class="content">
    <p>
        <div class="subtitle">Телеграм-аккаунты:</div>
        <?php if($telegram) { ?>
            <ul>
                <?php foreach($telegram as $result) {?>
                    <li><a href="<?php echo($result->link); ?>"> <?php if($result->name) { echo($result->name); } else { echo($result->link); } ?> </a></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
    <p>
        <div class="subtitle">Instagram-аккаунты:</div>
        <?php if($instagram) { ?>
            <ul>
                <?php foreach($instagram as $result) {?>
                    <li><a href="<?php echo($result->link); ?>"> <?php if($result->name) { echo($result->name); } else { echo($result->link); } ?> </a></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
    <p><i>Некоторые из аккаунтов могут уже не существовать.</i></p>
</div>