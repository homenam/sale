
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $_SESSION["login"] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>

		<?php

		$loction=$_SERVER['PHP_SELF'];
		?>
		<ul class="nav menu">
			<li <?php if ($loction=="/pro/admin/index.php") {
			?>
			class="active"
			<?php
			}?>><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li  
			<?php if ($loction=="/pro/admin/products.php") {
			?>
			class="active"
			<?php
			}?>

			><a href="products.php"><em class="fa fa-calendar">&nbsp;</em> products</a></li>
			<li

			<?php if ($loction=="/pro/admin/customer.php") {
			?>
			class="active"
			<?php
			}?>  

			><a href="customer.php"><em class="fa fa-bar-chart">&nbsp;</em> customer</a></li>
			<li  

			<?php if ($loction=="/pro/admin/process.php") {
			?>
			class="active"
			<?php
			}?>
			><a href="process.php"><em class="fa fa-toggle-off">&nbsp;</em> UI process</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		