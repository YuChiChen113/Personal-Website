<?php
require_once dirname(__FILE__)."/include/head.php";

unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['username']);
?>
<title>Log In</title>
<div class="container">
	<div class="wrapper">
		<form
			id="form"
			method="get"  
			action="/php_project_demo/models/login_check.php" 
		>       
			<div class="title">Log In</div>
			<input
				id="username"
				name="username" 
				type="text" 
				class="form-control" 
				placeholder="Username" 
				required=""
			>
			<input
				id="password"
				name="password"  
				type="password" 
				class="form-control" 
				placeholder="Password" 
				required=""
			>     		  
			<button  
				name="submit" 
				value="Login" 
				type="submit"
			><b>登入</b></button>  			
		</form>			
	</div>
</div>

<script>
if(getUrlVars()['error']) {
	Swal.fire({
			icon: 'warning',
			title: 'Oops...',
			text: decodeURIComponent(getUrlVars()['error']),
	});
}
function getUrlVars()
{
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++)
	{
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}
</script>

<style>
.wrapper {    
	margin-top: 80px;
	margin-bottom: 20px;
}

.form-signin {
	max-width: 420px;
	padding: 30px 38px 66px;
	margin: 0 auto;
	background-color: #eee;
}

.form-control {
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
}

input[type="text"] {
	margin-bottom: 0px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

input[type="password"] {
	margin-bottom: 20px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
</style>