<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Login and Registration</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="./style.css">

<style>
body {
background-image: url(https://miningconstruction-sadc.com/wp-content/uploads/2020/11/Construction-Equipment.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}
</style>

</head>

<body>
<div class="logo" style="margin-left: 10px;margin-top:10px;" >
<a href="index.html"><img src="images/logo.png" ></a>
</div>

<!-- login section start -->
<nav class="main-nav">
<ul>
<li><a class="signin" href="#0">Sign in</a></li>
<li><a class="signup" href="#0">Sign up</a></li>
</ul>

</nav>

<div class="user-modal">
<div class="user-modal-container">
<ul class="switcher">
<li><a href="#0">Sign in</a></li>
<li><a href="#0">New account</a></li>
</ul>

<div id="login">
<form class="form" method="post" action="signin.php">
<p class="fieldset">
<label class="image-replace username" for="signin-username" >Username</label>
<input class="full-width has-padding has-border" id="signin-username" type="text" placeholder="Username" name="signin_username">
<span class="error-message">Your username can only contain numeric and alphabetic symbols!</span>
</p>
<p class="fieldset">
<label class="image-replace password" for="signin-password">Password</label>
<input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Password" name="signin-password">
<a href="#0" class="hide-password">Show</a>
<span class="error-message">Wrong password! Try again.</span>
</p>

<p class="fieldset">
<input type="checkbox" id="remember-me" checked>
<label for="remember-me">Remember me</label>
</p>

<p class="fieldset">
<input class="full-width" type="submit" value="Login">
</p>
</form>

<p class="form-bottom-message"><a href="#0">Forgot your password?</a></p>
<!-- <a href="#0" class="close-form">Close</a> -->
</div>

<div id="signup">
<form class="form" method="post" action="signup.php">
<p class="fieldset">
<label class="image-replace username" for="signup-username" >Username</label>
<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="signup_username">
<span class="error-message">Your username can only contain numeric and alphabetic symbols!</span>
</p>

<p class="fieldset">
<label class="image-replace email" for="signup-email">E-mail</label>
<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="signup_email">
<span class="error-message">Enter a valid email address!</span>
</p>

<p class="fieldset">
<label class="image-replace password" for="signup-password">Password</label>
<input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Password" name="signup_password">
<a href="#0" class="hide-password">Show</a>
<span class="error-message">Your password has to be at least 6 characters long!</span>
</p>

<p class="fieldset">
<input type="checkbox" id="accept-terms">
<label for="accept-terms">I agree to the <a class="accept-terms" href="#0">Terms</a></label>
</p>

<p class="fieldset">
<input class="full-width has-padding" type="submit" value="Create account">
</p>
</form>


</div>

<div id="reset-password">
<p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

<form class="form">
<p class="fieldset">
<label class="image-replace email" for="reset-email">E-mail</label>
<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
<span class="error-message">An account with this email does not exist!</span>
</p>

<p class="fieldset">
<input class="full-width has-padding" type="submit" value="Reset password">
</p>
</form>

<p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
</div>
<a href="#0" class="close-form">Close</a>
</div>
</div>
<!-- login section end -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="./script.js"></script>

</body>
</html>
