<?php
include("./conf/config.inc.php");
$patientData = $_POST;
if(!empty($patientData)){
	$Data['email'] = $patientData['email'];
	$Data['firstname'] = $patientData['firstname'];
	$Data['lastname'] = $patientData['lastname'];
	$Data['dob'] = date("Y-m-d", strtotime($patientData['dob']));
	$Data['phone'] = $patientData['phone'];
	 $condition="id=".$_SESSION['userID'];
	
	echo	$userID =  $scad->update('users',$Data,$condition);
//		ech$userID;
} else{
	echo $errorflag = 0;
}
?>