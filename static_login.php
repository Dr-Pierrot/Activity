<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<title>Static Login</title>
</head>
<body>
	<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"><img src="img/profile.png" class="img-fluid rounded-circle"></div>
            <div class="form-box">
                <form action="" method="post">
                	<select name="sltAccount" id="sltAccount" class="col-12 p-2">
                		<option value="Admin">Admin</option>
                		<option value="Secretary">Secretary</option>
                		<option value="Manager">Manager</option>
                	</select>
                    <input name="user" id="user" type="text" placeholder="UserName" required>
                    <input name="pass" id="pass" type="password" placeholder="Password" required>
                    <button class="btn btn-info btn-block login" type="submit" name="btnLogin">Login</button>
                </form>
            </div>
        </div>
        
	</div>
	<?php 
		if (isset($_POST['btnLogin'])) {
			$account = $_POST['sltAccount'];
			if ($account == 'Admin') {
				if ($_POST['user'] == 'Honey' && $_POST['pass'] == 'Pie') { ?>
					<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" >
					 	<strong>You have successfully login!</strong>
					 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					 	</button>
					</div>
			<?php	}else{ ?>
						<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" >
						 	<strong>Wrong Input!</strong>
						 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						 	</button>
						</div> <?php

			}
			}elseif ($account == 'Secretary') {
				if ($_POST['user'] == 'Su' && $_POST['pass'] == 'Ngit') { ?>
					<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" >
					 	<strong>You have successfully login!</strong>
					 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					 	</button>
					</div>
			<?php	}else{ ?>
						<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" >
						 	<strong>Wrong Input!</strong>
						 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						 	</button>
						</div> <?php

			}
			}else{
				if ($_POST['user'] == 'Mo' && $_POST['pass'] == 'Ney') { ?>
					<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" >
					 	<strong>You have successfully login!</strong>
					 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					 	</button>
					</div>
			<?php	}else{ ?>
						<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" >
						 	<strong>Wrong Input!</strong>
						 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						 	</button>
						</div> <?php

			}
			}
		}	
	 ?>




	
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>