<?php
function qwe(){
  $arr = preg_split('/[\s!?.]/u', $_POST['name'], -1, PREG_SPLIT_NO_EMPTY);
  $arr_v = array_count_values($arr);
  $fp = fopen('file.csv', 'w');

  foreach ($arr_v as $key =>$fields) {
    fputcsv($fp, array($key,$fields),'-','"');
  }
  fputcsv($fp, array("Words in text:",count($arr)),'-');
  fclose($fp);
}
qwe();
?>
