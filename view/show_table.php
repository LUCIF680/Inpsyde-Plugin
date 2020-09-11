<!DOCTYPE html>
<html lang="en">
<head>
	<title>Users</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$url;?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=$url;?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">

		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								User Id
							</div>
							<div class="cell">
								Username
							</div>
							<div class="cell">
								Name
							</div>
						</div>
                        <?php foreach($users as $user ){?>
						<div class="row" id="<?=$user["id"]?>">
							<div class="cell" data-title="User Id">
								<a href="#"><?=$user["id"]?></a>
							</div>
							<div class="cell" data-title="Username">
                                <a href="#" ><?=$user["username"]?></a>
							</div>
							<div class="cell" data-title="Name">
                                <a href="#"><?=$user["name"]?></a>
							</div>
                        </div>	
						<?php } ?>	
                    </div>
                    <div>Id: <span id="id"></span></div>
                    <div>Name: <span id="name"></span></div>
                    <div>Username: <span id="username"></span></div>
                    <div>Blog <span id="blog"></span></div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="<?=$url;?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$url;?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=$url;?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$url;?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$url;?>js/main.js"></script>

</body>
</html>