<?
include_once('code128.php');
$objcode =  new Image_Barcode_code128;
$objcode -> draw("9810031","");
$num=62626383;
?>
<img
 src="barcode.php?num=<?php echo($num) ?>&type=code128&imgtype=png"
 alt="PNG: <?php echo($num) ?>" title="PNG: <?php echo($num) ?>">
</div>