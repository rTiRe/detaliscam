<?php
    require 'app/tmpl/includes/DB.php';

    $main = R::findAll('links', 'type = "main"');
    $other = R::findAll('links', 'type = "other"');
    $reviews = R::findAll('links', 'type = "reviews"');
?>

<div class="title">Телеграм-каналы</div>
<div class="content">

    <p>
        <div class="subtitle">Основные каналы</div>
        <?php if($main) { ?>
            <ul>
                <?php foreach($main as $result) { ?>
                    <li><a href="<?php echo $result->link; ?>"><?php echo $result->link_name ?></a> <?php if(!empty($result->subname)) { echo ' - '.$result->subname; } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
    
    <p>
        <div class="subtitle">Каналы по продаже вещей</div>
        <?php if($other) { ?>
            <ul>
                <?php foreach($other as $result) { ?>
                    <li><a href="<?php echo $result->link; ?>"><?php echo $result->link_name ?></a> <?php if(!empty($result->subname)) { echo ' - '.$result->subname; } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>

    <p>
        <div class="subtitle">Канал с отзывами</div>
        <?php if($reviews) { ?>
            <ul>
            <?php foreach($reviews as $result) { ?>
                    <li><a href="<?php echo $result->link; ?>"><?php echo $result->link_name ?></a> <?php if(!empty($result->subname)) { echo ' - '.$result->subname; } ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
    
</div>