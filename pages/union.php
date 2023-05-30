<?php
    require 'app/tmpl/includes/DB.php';

    $links = R::findAll('warunion');
?>

<div class="title">Телеграм-каналы</div>
<div class="content">
    <p>
        <?php if($links) { ?>
            <ul>
                <?php foreach($links as $result) {?>
                    <li><?php if(!empty($result->telegram)) {?> <a href="https://t.me/<?php echo($result->telegram); ?>">@<?php echo($result->telegram); ?></a> <?php } else { ?> <a href="https://t.me/<?php echo($result->link); ?>">@<?php echo($result->link); ?></a> <?php } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
</div>