<?php

$username = $_POST['username'];
$password = $_POST['passwordverify'];
echo $username;

$result = validatepassword($username, $password);
if ($result) {
    ?>
<div class="container">
	<h1>Login SucessFully</h1>
</div>

<?php

} else {


    ?>
<!doctype html>
<html lang="en">

<body class="text-center">


	<main class="form-signin w-100 m-auto">
		<form method="post" action="login.php">
			<img class="mb-4" src="/assets/brand/mk.logo.jpg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

			<div class="form-floating">
				<input name="username" type="text" class="form-control" id="floatingInput"
					placeholder="Enter your usname">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
				<input name="passwordverify" type="password" class="form-control" id="floatingPassword"
					placeholder="Password">
				<label for="floatingPassword">Password</label>

			</div>

			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>

			<button class="w-100 btn btn-lg btn-primary" type="submit">Login
			</button>
			<p class="mt-5 mb-3 text-muted">&copy; mkmuthu</p>
		</form>
	</main>

</body>

</html>
<?php
}
?>