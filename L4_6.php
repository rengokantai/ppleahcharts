<? php
header("content-type:application/json");

$array = array(2,3,5);
echo $_GET['callback'].'('.json_encode($array).')';

?>