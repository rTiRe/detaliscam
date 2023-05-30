<?php
    //require 'app/tmpl/includes/DB.php';

    $con = new mysqli('localhost', 'root', '', 'detaliscam');
    if(isset($_POST['upload'])) {    
        if(!empty($_FILES['img_upload']['tmp_name'])) {
            $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
            $con->query("INSERT INTO reviewsimg (img) VALUES ('$img')");
        }
    }
?>

<div class="tittle">ОТзывы посетителей</div>
<div class="content">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img_upload">
        <input type="submit" name="upload" value="Загрузить">
    </form>

    <br><br><br><br>

    <?php
        $query = $con->query("SELECT * FROM reviewsimg");
        while($row = $query->fetch_assoc()) {
            $show_img = base64_encode($row['img']);
    ?>
            <img src="data:image/jpeg;base64, <?php echo($show_img); ?>" alt="" width="100px">
    <?php
        }
    ?>
</div>