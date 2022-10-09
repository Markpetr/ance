<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/nstyle.min.css" />
<link rel="stylesheet" type="text/css" href="css/select2.min.css" />
<style type="text/css">
body {
	background-color: #101010;
}
</style>
<script type="text/javascript" src="css/jquery.min.js"></script>
<script type="text/javascript" src="css/bootstrap.min.js"></script>
<script type="text/javascript" src="css/bootstrap-noconflict.js"></script>
<script type="text/javascript" src="css/jquery-ui-no-conflict.min.js"></script>

<title>Unicvv - New Register Account</title>
<meta name="keywords" content="unicc registration, unicvv registration, uniccshop registration, uniccshop.bazar registration, unicc.bazar registration" />
<meta name="description" content="Unicc New Register Link Unicvv">
</head>
<body class='login'>
    <div class='blocklogin'>
    <div class='titlelogin'>
        <img src='images/logo.png'>

        <p>Sign-up</p>
    </div>
    <div class='loginform'>
        <div class='inputslogin'>
            <form class="form-signin form" autocomplete="off"  action="register.php" method="post" name="registration" id="registration">
            
            
            		<input type="hidden" name="op" value="register"/>
					<input type="hidden" name="sha1" value=""/>
            
            <div class="form-group"><div><input class="form-control" placeholder="Username" name="username" id="RegistrationForm_username" type="text" maxlength="20" /><div class="help-block error" id="RegistrationForm_username_em_" style="display:none"></div></div></div> 
           
                       <div class="form-group"><div><input class="form-control" placeholder="Password" name="password1" id="RegistrationForm_password" type="password" maxlength="40" /><div class="help-block error" id="RegistrationForm_password_em_" style="display:none"></div></div></div>            <div class="form-group"><div><input class="form-control" placeholder="Confirm Password" name="password2" id="RegistrationForm_confirm_password" type="password" /><div class="help-block error" id="RegistrationForm_confirm_password_em_" style="display:none"></div></div></div><div class="form-group"><div><input style="" class="form-control" placeholder="Email" name="email" id="RegistrationForm_captcha" type="text" /><div class="help-block error"  style="display:none"></div></div></div>
                       
            <a href="login.php">
                <button type='button'>cancel</button>
            </a>
<a href="#"  onclick="document.getElementById('registration').submit();"><button type='button'>sign-up</button></a>
            </form>

        </div>
        <strong><div class="text-center" id="yw1"></div></strong>
    </div>
</div><script type="text/javascript" src="css/main.min.js?156498465"></script>
<script type="text/javascript" src="css/placeholders.min.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('[data-toggle=popover]').popover();
jQuery('[data-toggle=tooltip]').tooltip();

jQuery(document).on('click', '#yw0', function(){
	jQuery.ajax({
		url: "register.php",
		dataType: 'json',
		cache: false,
		success: function(data) {
			jQuery('#yw0').attr('src', data['url']);
			jQuery('body').data('captcha.hash', [data['hash1'], data['hash2']]);
		}
	});
	return false;
});

jQuery('#yw1_0 .alert').alert();
});
/*]]>*/
</script>
</body>
</html>