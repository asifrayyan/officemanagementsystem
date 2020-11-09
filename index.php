<?php
		error_reporting(E_ERROR | E_PARSE);
 		include('functions.php'); 
		include('loader.php');
	if($users->is_user_logged_in()){
		$users->safe_redirect("dashboard.php");
		exit();
	}
			$page_title="Login";
			get_header($page_title); 

				// echo "thsi s new thing";

?>


<body class="page-body login-page login-form-fall" data-url="http://neon.dev">

	<!-- This is needed when you send requests via Ajax -->
	<script type="text/javascript">
		var baseurl = '';
	</script>
	<div class="login-container">
		<div class="login-header login-caret">
			<div class="login-content">
				<a href="login.php" class="logo">
					<img src="uploads/logo/logo.png" style="width: 300px; height: 230px" alt="" />
				</a>
					<p class="description">This is the administrator access login for AMWAJ NWD.</p>
						<!-- progress bar indicator -->
				<div class="login-progressbar-indicator">
					<h3>43%</h3>
					<span>logging in...</span>
				</div>
			</div>
		</div>
		<div class="login-progressbar">
			<div></div>
		</div>
		<div class="login-form">
			<div class="login-content">
				<div class="form-login-error">
					<h3>Invalid login</h3>
						<!--<p>Enter <strong>admin</strong> / <strong>admin</strong> as login and password.</p>-->
				</div>
				<form method="post" role="form" id="form_login">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
