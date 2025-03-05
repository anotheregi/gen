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

<form action="" method="post">
  <input type="text" name="text" placeholder="ketik nama jir">
  <input type="submit" value="Generate">
</form> 
