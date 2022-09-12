<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: authenticate.php");	
}
include('inc/header.php');
$reportDetails = $reports->reportInfo($_GET['id']);
$reportReplies = $reports->getReportReplies($reportDetails['id']);
$user = $users->getUserInfo();
$reports->updateReportReadStatus($reportDetails['id']);
?>	
<title>Build Helpdesk System with PHP & MySQL</title>
<script src="js/general.js"></script>
<script src="js/reports.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">
	<div class="row home-sections">
	<h2>Helpdesk System</h2>	
	<?php include('menus.php'); ?>		
	</div> 
	
	<section class="comment-list">          
		<article class="row">            
			<div class="col-md-10 col-sm-10">
				<div class="panel panel-default arrow left">
					<div class="panel-heading right">
					<!-- <?php if($reportDetails['resolved']) { ?>
					<button type="button" class="btn btn-danger btn-sm">
					  <span class="glyphicon glyphicon-eye-close"></span>กำลังดำเนินการ 
					</button>
					<?php } else { ?>
					<button type="button" class="btn btn-success btn-sm">
					  <span class="glyphicon glyphicon-eye-open"></span>เสร็จแล้ว
					</button>
					<?php } ?> -->
					<span class="report-title"><?php echo $reportDetails['title']; ?></span>
					</div>
					<div class="panel-body">						
						<div class="comment-post">
						<p>
						<?php echo $reportDetails['message']; ?>
						</p>
						</div>                 
					</div>
					<div class="panel-heading right">
						<span class="glyphicon glyphicon-time"></span> <time class="comment-date"><?php echo ($reportDetails['date']);?>
						&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> <?php echo $reportDetails['creater']; ?>
						&nbsp;&nbsp;<span class="glyphicon glyphicon-briefcase"></span> <?php echo $reportDetails['repairtype']; ?>
					</div>
				</div>			 
			</div>
		</article>		
		
		<?php foreach ($reportReplies as $replies) { ?>		
			<article class="row">
				<div class="col-md-10 col-sm-10">
					<div class="panel panel-default arrow right">
						<div class="panel-heading">
							<?php if($replies['user_type'] == 'admin') { ?>							
								<!-- <span class="glyphicon glyphicon-user"></span> <?php echo $reportDetails['repairtype_id']; ?> -->
								<span class="glyphicon glyphicon-user">ADMIN</span>
							<?php }
							 else { ?>
								<span class="glyphicon glyphicon-user"></span> <?php echo $replies['creater']; ?>
							<?php } ?>
							&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <i class="fa fa-clock-o"></i> <?php echo($replies['date']); ?>						
						</div>
						<div class="panel-body">						
							<div class="comment-post">
							<p>
							<?php echo $replies['message']; ?>
							</p>
							</div>                  
						</div>
						
					</div>
				</div>            
			</article> 		
		<?php } ?>
		
		<form method="post" id="reportReply">
			<article class="row">
				<div class="col-md-10 col-sm-10">				
					<div class="form-group">							
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter your reply..." required></textarea>	
					</div>				
			</div>
			</article>  
			<article class="row">
				<div class="col-md-10 col-sm-10">
					<div class="form-group">							
						<input type="submit" name="reply" id="reply" class="btn btn-success" value="Reply" />		
					</div>
				</div>
			</article> 
			<input type="hidden" name="reportId" id="reportId" value="<?php echo $reportDetails['id']; ?>" />	
			<input type="hidden" name="action" id="action" value="saveReportReplies" />			
		</form>
	</section>	
	<?php include('add_report_model.php'); ?>
</div>
<?php include('inc/footer.php');?>