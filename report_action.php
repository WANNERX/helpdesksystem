<?php
include 'init.php';
if(!empty($_POST['action']) && $_POST['action'] == 'auth') {
	$users->login();
}
if(!empty($_POST['action']) && $_POST['action'] == 'listReport') {
	$reports->showReports();
}
if(!empty($_POST['action']) && $_POST['action'] == 'createReport') {
	$reports->createReport();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getReportDetails') {
	$reports->getReportDetails();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateReport') {
	$reports->updateReport();
}
// if(!empty($_POST['action']) && $_POST['action'] == 'closeReport') {
// 	$reports->closeReport();
// }
if(!empty($_POST['action']) && $_POST['action'] == 'getRooms') {
	$reports->getRooms();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getComs') {
	$room_id = $_GET['room_Id'];
	$reports->getComs($room_id);
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteReport') {
	$reports->deleteReport();
}
if(!empty($_POST['action']) && $_POST['action'] == 'saveReportReplies') {
	$reports->saveReportReplies();
}
?>