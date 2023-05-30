<?php
    require 'app/tmpl/includes/DB.php';

    $reviews = R::findAll('other_reviews');
?>

<div class="title">Отзывы</div>
<div class="content" style="word-wrap: break-word; line-height: 160%;">
    <p>
        <div class="subtitle">Отзывы на скамера</div>
        <?php if($reviews) { ?>
            <ul>
                <?php foreach($reviews as $result) { ?>
                    <li><a href="<?php echo($result->link); ?>"><?php echo($result->link); ?></a></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; }?>
    </p>
</div>