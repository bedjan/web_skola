<!-- vymazani souboru index.html -->
<?php unlink ('obsah.html'); ?>

<!-- stazeni souboru index.html-->
<?php error_reporting(E_ALL);?>

<?php
 $source = "https://raw.githubusercontent.com/bedjan/mamka/master/web/obsah.html";
 $destination = "obsah.html";
 $data = file_get_contents($source);
 $file = fopen($destination, "w+");
 fwrite($file, $data);
 fclose($file);
?>

<!-- pripadne vytisteni znaku primo <?php echo '<p>Vitejte</p>'; ?> -->

<!-- zobrazeni souboru index.html-->
<?php require ('obsah.html'); ?>
