<!DOCTYPE html>
<html lang="en">
<head>
    <title>Papar</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["Pdiri"];
    $reversedtext = strrev($text);
    $Bil_perkataan = str_word_count($text);
    $Bil_huruf = strlen($text);
    ?>
    <p>Original Text: <?php echo $text; ?></p>
    <p>Number of Words: <?php echo $Bil_perkataan; ?></p>
    <p>Number of Characters: <?php echo $Bil_huruf; ?></p>
    <p>Reversed Text: <?php echo $reversedtext; ?></p>
    <?php
}
?>
</body>
</html>
