<?php
    require 'app/tmpl/includes/DB.php';

    $names = R::findAll('names');
?>

<div class="title">Псевдонимы и предыдущие названия</div>
<div class="content">
    <p>
        <?php if($names) { ?>
            <ul>
                <?php foreach($names as $result) {?>
                    <li><?php echo($result->name); ?></li>
                <?php } ?>
            </ul>
        <?php } else { echo 'Скоро...'; } ?>
    </p>
</div>