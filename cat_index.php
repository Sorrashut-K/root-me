
<?php
$strFileName = "index.php";
$objFopen = fopen($strFileName, 'r');
if ($objFopen) {
    while (!feof($objFopen)) {
        $file = fgets($objFopen, 4096);
        echo $file."<br>";
    }
    fclose($objFopen);
}
?>
