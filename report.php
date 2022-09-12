<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: login.php");	
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>ระบบแจ้งซ่อม Helpdesk System</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
<!-- <script src="js/moment.js" type="module"></script> -->
<script src="https://cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js" type="module"></script>
<script src="js/general.js"></script>
<script src="js/reports.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Helpdesk System</h2>	
	<?php include('menus.php'); ?>		
	</div> 
	<div class="">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align ="right">
					<button type="button" name="add" id="createReport" class="btn btn-success btn-xs">แจ้งซ่อม</button>
				</div>
			</div>
		</div>
		<table id="listReports"  class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ลำดับ</th>
					<th>Report ID</th>
					<th>ปัญหา</th>
					<th>อาคาร</th>
					<th>ประเภทอุปกรณ์</th>
					<th>ชื่อผู้แจ้ง</th>					
					<th>สร้างเมื่อ</th>	
					<th>เสร็จสิ้นเมื่อ</th>
					<th>สถานะ</th>
					<th></th>
					<th></th>		
					<th></th>				
				</tr>
			</thead>
		</table>
	</div>
	<?php include('add_report_model.php'); ?>
</div>	
<?php include('inc/footer.php');?>