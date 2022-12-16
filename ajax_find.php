<?php  
require_once('model.php');
if (isset($_GET['proName'])) {
	$proName = $_GET['proName'];
	$proId = getLocateIdByName($proName);
	$listHS = getLocateByProId($proId); 
} else echo "Notworking";
$string = '';
foreach ($listHS as $l) {
	$string = $string . ('<option style="font-size:16px;" value="' . $l['homestay_name'] . '">' . $l['homestay_name'] . '</option>');
}
echo $string;
?>