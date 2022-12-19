<?php  
require_once('model.php');
if (isset($_GET['proName'])) {
	$proName = $_GET['proName'];
	$proId = getLocateIdByName($proName);
	$listHS = getLocateByProId($proId); 
} else echo "Notworking";
$string = '<option style="font-size:16px;">Chọn Địa điểm</option>';
foreach ($listHS as $l) {
	$string = $string . ('<option name="id_homestay" style="font-size:16px;" value="' . $l['id_homestay'] . '">' . $l['homestay_name'] . '</option>');
}
echo $string;
?>