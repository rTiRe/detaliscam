<footer>
    <?php
        include_once 'Router.php';
        $class = Router::classInc();
        if(file_exists('pages/'.$class.'.php' ) && $class != 'main') {
            echo '<div class="btnBack_wrapper"><a href="/"><button class="back"><i class="twa twa-backhand-index-pointing-left" style="font-size: 26px;"></i> Назад</button></a></div>';
        }
    ?>
</footer>
<script src="app/libs/jquery.js"></script>
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#changer', {strings: ['детали.', 'накал.', 'кварцевание.', 'метаморфоза.', 'прогресс.', 'материя.', 'дела.'], typeSpeed: 40, backSpeed: 40, backDelay: 5000, startDelay: 100, loop: true, showCursor: false, shuffle: true});
</script>