<!-- <!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1>
	<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("templates/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css')?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form action="<?php echo base_url('index.php/login/aksi_login'); ?> " method="post">
					<!-- <span class="login100-form-title p-b-33">
						Account Login
					</span> -->
					<label class="login100-form-title p-b-33">Account Login</label>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<!-- <input class="input100" type="text" name="username"></<input> -->
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<!-- <input class="input100" type="password" name="password"></<input> -->
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	<?php $this->load->view("templates/js.php") ?>
</body>
</html>
