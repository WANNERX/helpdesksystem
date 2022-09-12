<nav class="navbar navbar-inverse" style="background:#00796B;color:#f6f8f9;font-weight:bold;">
	<div class="container-fluid">		
		<ul class="nav navbar-nav menus">
			<li id="report"><a href="report.php" class="navbar-brand">รายการแจ้ง</a></li>
			<?php if(isset($_SESSION["admin"])) { ?>
				<li id="repairtype"><a href="repairtype.php" >ประเภทงานซ่อม</a></li>
				<li id="building"><a href="building.php" >อาคาร</a></li>
				<li id="user"><a href="user.php" >สมาชิก</a></li>
				<li id="export_reports"><a href="export_reports.php" >รายงาน</a></li>
				
			<?php } ?>						
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> 
				<img src="//gravatar.com/avatar/<?php echo md5($user['email']); ?>?s=100" width="20px">&nbsp;<?php if(isset($_SESSION["userid"])) { echo $user['user_name']; } ?></a>
				<ul class="dropdown-menu">					
					<li><a href="logout.php">ออกจากระบบ</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>