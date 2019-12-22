
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <textarea name="name" rows="8" cols="80"></textarea>
      <input type="submit" name="button" value="Enter">
      <button type="button" name="button"><a href="download.php">Download file</a></button>
      <p><b>Example text: </b>Snow on the ground. Snow on the tree. Snow on the house. Snow on me !</p>
    </form>
  </body>
</html>
<?php
function qwe(){
  $arr = preg_split('/[\s!?.]/u', $_POST['name'], -1, PREG_SPLIT_NO_EMPTY);
  $arr_v = array_count_values($arr);
  $fp = fopen('file.csv', 'w');

  print_r(array_count_values($arr));
  echo "<br>Всего слов:". count($arr);
  foreach ($arr_v as $key =>$fields) {
    fputcsv($fp, array($key,$fields),'-','"');
  }
  fputcsv($fp, array("Words in text:",count($arr)),'-');
  fclose($fp);
}
qwe();
?>
