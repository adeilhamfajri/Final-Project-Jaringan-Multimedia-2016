<!DOCTYPE html>
<?php
    if(isset($this->session->userdata['logged_in'])){
?>
    <script>
        location.href = '<?php echo base_url(); ?>index.php/relawan/index';
    </script>
<?php
    }
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"> <span></span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Login Relawan</h2>
			</div>
			<form method="post" action="<?php echo base_url() ?>index.php/relawan/login">
				<label for="username">Username</label>
				<br/>
				<input type="text" id="username" name="username">
				<br/>
				<label for="password">Password</label>
				<br/>
				<input type="password" id="password" name="password">
				<br/>  
				<input type="submit" value="Login">
				<br/>
			</form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>