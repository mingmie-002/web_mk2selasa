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

    echo "Original Text: $text";
    echo "Number of Words: $Bil_perkataan";
    echo "Number of Characters: $Bil_huruf";
    echo "Reversed Text: $reversedtext";
}
?>
</body>
</html>
