<?
$filename = $uploadfile;

list($width, $height) = getimagesize($filename);
$new_width = 200;
$new_height = 100;

$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

imagejpeg($image_p,$filename, 50); //50% это качество 0-100%
?>