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

    echo "<p>Original Text: $text</p>";
    echo "<p>Number of Words: $Bil_perkataan</p>";
    echo "<p>Number of Characters: $Bil_huruf</p>";
    echo "<p>Reversed Text: $reversedtext</p>";
}
?>
</body>
</html>