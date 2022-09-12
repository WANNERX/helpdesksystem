<?php 
include 'init.php';
include('inc/header.php');
$errorMessage = $users->register();
?>

<title>สมัครสมาชิกHelpdesk System</title>
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>Helpdesk System</h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">สมัครสมาชิก</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
			<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>

				<?php if (isset($_SESSION['error'])) : ?>
					<div class="alert alert-danger col-sm-12" role="alert" >
						<h5>
							<?php 
								echo $_SESSION['error'];
								unset($_SESSION['error']);
							?>
						</h5>
					</div>
        		<?php endif ?>

				<form id="userForm" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="email" class="form-control" id="email" name="email" placeholder="อีเมล" style="background:white;" required>                                        
					</div>
                    <div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" style="background:white;" required>                                        
					</div>                        
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="รหัสผ่าน" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="register" value="สมัครสมาชิก" class="btn btn-success">				  
						</div>						
					</div>
					<a href="login.php">กลับไปที่หน้าล็อคอิน</a>
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>