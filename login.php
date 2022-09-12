<?php 
include 'init.php';
if($users->isLoggedIn()) {
	header('Location: report.php');
}
$errorMessage = $users->login();
include('inc/header.php');
?>
<title>เข้าสู่ระบบ Helpdesk System</title>
<?php include('inc/container.php');?>

<div class="container contact">	

	<img src="https://miro.medium.com/max/1000/1*9lPq-X92oDqRQIEubQyn3Q.gif">	

	<h2>Helpdesk System</h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">เข้าสู่ระบบ</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>

				<div class="b">
        		<!--  notification message -->
        		<?php if (isset($_SESSION['success'])) : ?>
					<div class="alert alert-success col-sm-12" role="alert" >
						<h5>
							<?php 
								echo $_SESSION['success'];
								unset($_SESSION['success']);
							?>
						</h5>
					</div>
        		<?php endif ?>

				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="อีเมล" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="รหัสผ่าน" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="ล็อคอิน" class="btn btn-success">		
						  <a href="register.php" class="btn btn-success">สมัครสมาชิก</a>				  
						</div>						
						
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>