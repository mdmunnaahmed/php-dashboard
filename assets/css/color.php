<?php
header("Content-Type:text/css");
include_once("../../class/adminBack.php");
$admin_obj = new adminBack();
$data = $admin_obj->colorPrint();
$info = mysqli_fetch_assoc($data);

$color = $info['base_color'];

if (isset($color)) {
    $color = "#" . $color;
}

if (!$color) {
    $color = "#336699";
}
?>


:root{
--base: <?php echo $color; ?>;
}
