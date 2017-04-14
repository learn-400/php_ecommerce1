<?php
include("inc/function/config.php");
include("inc/function/connect.php");
include("inc/function/functions.php");

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type='text/javascript'>
	var $ss = jQuery.noConflict();
</script>
<script src="<?php echo $baseurl;?>js/main.js"></script>



<script src="<?php echo $baseurl;?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script type='text/javascript'>
var $s = jQuery.noConflict();
</script>
	<link rel="<?php echo $baseurl;?>stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->

<script src="<?php echo $baseurl;?>js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo $baseurl;?>js/custom_scripts.js" type="text/javascript"></script>
<script src="<?php echo $baseurl;?>js/jquery.roundabout.min.js" type="text/javascript"></script>

<!-- Tipsy -->
<script src="<?php echo $baseurl;?>js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="<?php echo $baseurl;?>js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $baseurl;?>js/jquery.tweet.js" type="text/javascript"></script>
<link href="<?php echo $baseurl;?>js/jquery.tweet.css" rel="stylesheet" type="text/css" />

	



</head>

<body>


	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container" style="padding: 24px;"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0" style="text-decoration:none">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type='text/javascript'>
	var $ss = jQuery.noConflict();
</script>
<script src="js/main.js"></script>  Gem jQuery -->











<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <!-- SIDEFEATURES -->
  <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping Cart</h4>
            <span id="cart_total">3 item(s) - $1099.99</span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                <tr>
                  <td class="image"><a href="#"><img alt="Spicylicious" src="<?php echo $baseurl;?>image/cart_pic1.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 1</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$117.50</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo $baseurl;?>image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="<?php echo $baseurl;?>image/cart_pic2.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 2</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$328.99</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo $baseurl;?>image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="<?php echo $baseurl;?>image/cart_pic3.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 3</a>
                    <div> - <small>Extra Cheese</small><br/>
                    </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$94.00</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="<?php echo $baseurl;?>image/close.png"/></td>
                </tr>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right">$459.99</td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right">$540.49</td>
                </tr>
              </tbody>
            </table>
            <div class="checkout"><a class="button" href="checkout.php"><span>Checkout</span></a></div>
          </div>
        </div>
      </li>
      <li class="side_currency"><span class="icon">Currency</span>
        <div id="currency"> Currency <a href="#" title="Euro">€</a> <a href="#" title="Pound Sterling">£</a> <a title="US Dollar">$</a> </div>
      </li>
      <li class="side_lang"><span class="icon">Language</span>
        <div id="language"> Language <a href="#" title="English"><img src="<?php echo $baseurl;?>image/gb.png" alt="Spicylicious store"/></a> <a href="#" title="Deutsch"><img src="<?php echo $baseurl;?>image/de.png" alt="Spicylicious store"/></a> <a title="Bylgarski"><img src="image/bg.png" alt="Spicylicious store"/></a> </div>
      </li>
      <li class="side_search"><span class="icon">Search</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <li><a href="account.php">My Account</a></li>
        <li><a href="wish.php">Wish List <b>(3)</b></a></li>
        <li><a href="about.php">About Us</a></li>
        <li class="warning"><a href="index.php">Home</a>
          <ul class="secondary">
            <li><a href="index2.php">Home</a></li>
            <li><a href="#">Test</a></li>
            <li><a href="#">ABC</a></li>
            <li><a href="#">DEF</a></li>
            <li><a href="#">GHI</a></li>
          </ul>
        </li>
      </ul>
      <div id="logo"><a href="index.php"><img src="<?php echo $baseurl;?>image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
        <li><a href="compare.php">Compare</a></li>
        <li><a href="cart.php">Shopping Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <div id="welcome" class="main-nav"> Welcome visitor you can <a class="cd-signin" href="#0">login</a> or <a class="cd-signup" href="#0">create an account</a>. </div>
      <div class="menu">
        <ul id="topnav">
          <li><a href="category.php">Pizza</a>
            <ul class="children">
              <li><a href="category.php">Pizza</a></li>
              <li><a href="category.php">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.php">Pizza</a>
					  <ul class="children2">
					  <li><a href="category.php">ad</a></li>
					  <li><a href="category.php">Lasagna</a></li>
					  <li><a href="category.php">Spaghetti</a></li>
					  <li><a href="category.php">Penne</a></li>
					  <li><a href="category.php">Canelonni</a></li>
					</ul>
				  
				  </li>
                  <li><a href="category.php">Lasagna</a></li>
                  <li><a href="category.php">Spaghetti</a></li>
                  <li><a href="category.php">Penne</a></li>
                  <li><a href="category.php">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.php">Spaghetti</a></li>
              <li><a href="category.php">Penne</a></li>
              <li><a href="category.php">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.php">Lasagna</a>
            <ul class="children">
              <li><a href="category.php">Pizza</a></li>
              <li><a href="category.php">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.php">Pizza</a></li>
                  <li><a href="category.php">Lasagna</a></li>
                  <li><a href="category.php">Spaghetti</a></li>
                  <li><a href="category.php">Penne</a></li>
                  <li><a href="category.php">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.php">Spaghetti</a></li>
              <li><a href="category.php">Penne</a></li>
              <li><a href="category.php">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.php">Spaghetti</a></li>
          <li><a href="category.php">Penne</a>
            <ul class="children">
              <li><a href="category.php">Pizza</a></li>
              <li><a href="category.php">Lasagna</a>
                <ul class="children2">
                  <li><a href="category.php">Pizza</a></li>
                  <li><a href="category.php">Lasagna</a></li>
                  <li><a href="category.php">Spaghetti</a></li>
                  <li><a href="category.php">Penne</a></li>
                  <li><a href="category.php">Canelonni</a></li>
                </ul>
              </li>
              <li><a href="category.php">Spaghetti</a></li>
              <li><a href="category.php">Penne</a></li>
              <li><a href="category.php">Canelonni</a></li>
            </ul>
          </li>
          <li><a href="category.php">Canelonni</a></li>
          <li><a href="category.php">Fettuchini</a></li>
          <li><a href="category.php">Risotto</a></li>
          <li><a href="category.php">Antipasti</a></li>
          <li><a href="category.php">Bar-B-Q</a></li>
          <li><a href="category.php">Desserts</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 