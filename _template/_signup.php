<?php
$signup = false;
if (isset($_POST['username']) and !empty($_POST['username'])  and isset($_POST['password']) and !empty($_POST['password'])and!empty($_POST['emailaddress'])and isset($_POST['emailaddress'])and !empty($_POST['phone'])and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['emailaddress'];
    $phone = $_POST['phone'];
    $result = user::signup($username, $password, $email, $phone);
    $signup = true;
}

?>
<?php
if ($signup) {

    if ($result) {

        ?>
<div class="container">
	<h1>SucessFully Signup</h1>
	<p>Now you can go to login<a href="/login.php">here</a>.</p>
</div>
<?php
    } else {
        ?>
<div class="container">
	<h1>Signup fail</h1>
	<a href="/signup.php">go to signup</a>
</div>
<?php
    }
} else {
    
    ?>


<!doctype html>
<html lang="en">

<body class="text-center"></body>
<main class="form-signup w-100 m-auto">
	<form method="post" action="signup.php">
		<img class="mb-4" src="/app/assets/brand/mk.logo.jpg" alt="" width="72" height="57">
		<h1 class="h3 mb-3 fw-normal">Please sign up here</h1>


		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatinguser" placeholder="Username">
			<label for="floatingPassword">Username</label>
		</div>
		<div class="form-floating">
			<input name="password" type="text" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>
		<div class="form-floating">
			<input name="emailaddress" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="number" class="form-control" id="floatingMobile" placeholder="Mobile">
			<label for="floatingPassword">Mobile</label>
		</div>


		<button style="margin-top: 20px;" class="w-100 btn btn-lg btn-primary" type="submit">Signup
		</button>
		<p class="mt-5 mb-3 text-muted">&copy; mkmuthu</p>
	</form>
</main>

</body>

</html>

<?php
}
?>