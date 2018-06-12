<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Small Login / Register form</title>
  
 
      <link href="index.css" rel="stylesheet" type="text/css"/>
  
</head>

<body>

  <!-- Need jquery for this, not standard Javascript -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div id="container">

		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Login</li>
			<li class="tab-link" data-tab="tab-2">Register</li>
		</ul>

		<div id="tab-1" class="login tab-content current">

			<form>
				<div class="form-section">
					<span class="fa fa-user-o input-icon"></span>
					<input type="text" name="name" placeholder="Username">
				</div>
				<div class="form-section">
					<span class="fa fa-unlock-alt input-icon"></span>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="form-section btn-container">
					<input type="submit" value="Login">
				</div>
			</form>

		</div>
		<div id="tab-2" class="register tab-content">
			<form>
				<div class="form-section">
					<span class="fa fa-user-o input-icon"></span>
					<input type="text" name="name" placeholder="Username">
				</div>
				<div class="form-section">
					<span class="fa fa-envelope-o input-icon"></span>
					<input type="email" name="name" placeholder="Email" class="email">
				</div>
				<div class="form-section">
					<span class="fa fa-unlock-alt input-icon"></span>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="form-section btn-container">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>

	</div>


<div class="new">
   <p>I've made a new version of this you can click <a href="https://codepen.io/Gibbu/pen/prBGLz" target="_blank">HERE</a> to view it.</p>
</div>
  
  

    <script src="index.js" type="text/javascript"></script>


</body>

</html>







