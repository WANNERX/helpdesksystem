<?php
include 'init.php';

if(!empty($_POST['action']) && $_POST['action'] == 'listRepairtype') {
	$repairtype->listRepairtype();
}

if(!empty($_POST['action']) && $_POST['action'] == 'getRepairtypeDetails') {
	$repairtype->repairtypeId = $_POST["repairtypeId"];
	$repairtype->getRepairtypeDetails();
}

if(!empty($_POST['action']) && $_POST['action'] == 'addRepairtype') {
	$repairtype->repairtype = $_POST["repairtype"];
    // $repairtype->status = $_POST["status"];    
	$repairtype->insert();
}

if(!empty($_POST['action']) && $_POST['action'] == 'updateRepairtype') {
	$repairtype->repairtypeId = $_POST["repairtypeId"]; 
	$repairtype->repairtype = $_POST["repairtype"];
    // $repairtype->status = $_POST["status"]; 
	$repairtype->update();
}

if(!empty($_POST['action']) && $_POST['action'] == 'deleteRepairtype') {
	$repairtype->repairtypeId = $_POST["repairtypeId"];
	$repairtype->delete();
}

?>