<?php
$template = "https://anotheregi.github.io/alinisa/?to=";
text_custom = $_POST['text'];

if(isset($text_custom)) {
  $hasil = $template . " " .
  $text_custom;
  echo $hasil;
} else {
  echo "masukan nama jir";
}
?>
