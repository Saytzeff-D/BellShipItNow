<?php
// require(dirname(__FILE__).'/vendor/fpdf/fpdf.php');
// require(dirname(__FILE__).'/vendor/phpmailer/autoload.php');
// require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/Exception.php');
// require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/PHPMailer.php');
// require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/SMTP.php');
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

define("_VALID_PHP", true);
require_once("init.php");
	
if ($user->logged_in)
redirect_to("dashboard/account.php");
	
if (isset($_POST['doLogin']))
: $result = $user->login($_POST['username'], $_POST['password']);

/* Login Successful */
if ($result)
: redirect_to("dashboard");
endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Courier DEPRIXA-Integral Web System" />
    <meta name="author" content="Jaomweb">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon-->
    <link rel="icon" href="uploads/favicon.png">
    <!-- Title-->
    <title><?php echo $lang['langs_01098'] ?> | <?php echo $core->site_name;?></title>
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">
    <!--Icon fonts-->
    <link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
    <link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets-theme/css/bundle.css">
    <link rel="stylesheet" href="assets-theme/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<!-- Validate JS -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.js"></script>
    <!-- <script src="assets/js/jquery.wysiwyg.js"></script> -->
    <script src="assets/js/global.js"></script>
    <!-- <script src="assets/js/custom.js"></script> -->
    <!-- <script src="assets-theme/js/fury.js"></script> -->
    <script src="assets/js_/script.js"></script>
    <!-- Validate JS -->
    <script src="assets/js_/validate.js"></script>

    <script src="assets/js_/popper.min.js"></script>
    <script src="assets/js_/bootstrap.min.js"></script>
</head>

<body id="top">
	<header class="header header-shrink header-inverse fixed-top header-bg-clr">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-md-0">
            	<?php require_once("header.php");?>
            </nav>
        </div> <!-- END container-->
    </header> <!-- END header -->
	<script>
	function showLoader()
	{
		//
	}
    $('document').ready(function() 
	{	
		function showLoader()
		{
			//
		}
        $("#select").click(function() 
		{
            var select = $(this).val();
            if (select == 'arabic') 
			{
                $('.german').hide();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').show();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'french') 
			{
                $('.french').show();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'indonesian') 
			{
                $('.indonesian').show();
                $('.french').hide();
                $('.eng').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'hin') 
			{
                $('.hin').show();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
            } 
			else if (select == 'arabic') 
			{
                $('.arabic').show();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'ban') 
			{
                $('.ban').show();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'german') 
			{
                $('.german').show();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'italian') 
			{
                $('.italian').show();
                $('.german').hide();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'polish') 
			{
                $('.german').hide();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').show();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'indonesian') 
			{
                $('.german').hide();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').show();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'english') 
			{
                $('.german').hide();
                $('.french').hide();
                $('.eng').show();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'spanish') 
			{
                $('.german').hide();
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').show();
                $('.mandrin').hide();
            } 
			else if (select == 'portuguese') 
			{
                $('.french').hide();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').show();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
                $('.mandrin').hide();
            } 
			else if (select == 'mandrin') 
			{
                $('.french').hide();
                $('.mandrin').show();
                $('.eng').hide();
                $('.indonesian').hide();
                $('.hin').hide();
                $('.italian').hide();
                $('.german').hide();
                $('.portuguese').hide();
                $('.ban').hide();
                $('.polish').hide();
                $('.arabic').hide();
                $('.spanish').hide();
            }
        });
		
    });                     
	</script>	
	<section data-dark-overlay="5" class="u-h-100vh u-flex-center" style="background:url(assets-theme/img/login/bg-1_1.jpg) no-repeat; background-size:cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 m-auto text-center">
					<div class="card box-shadow-v2 bg-white u-of-hidden">
						<h2 class="theme-clr m-0 py-3 text-white">
							<?php echo $lang['langs_010107']; ?>
						</h2>
						<div id="show-passreset" class="p-4 p-md-5">
							<?php include("div_loader.php");?>
							<div id="msgholder2">
								<?php print Filter::$showMsg;?>
							</div>
							<form id="admin_form" method="post">
								<div class="input-container">
									<i class="fa fa-user bg-icon"></i>
									<input class="input-field" type="text" name="uname" placeholder="Username" required>
								</div>
								
								<!-- <div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
									<div class="input-group-addon bg-white border-0 pl-4 pr-0">
										<span class="icon icon-User text-primary"></span>
									</div>
									<input type="text" class="form-control border-0 p-3" name="uname" placeholder="Username">
								</div> -->

								<div class="input-container">
									<i class="fa fa-envelope bg-icon"></i>
									<input class="input-field" type="email" name="email" placeholder="Email address" required>
								</div>
								
								<!-- <div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
									<div class="input-group-addon bg-white border-0 pl-4 pr-0">
										<span class="icon icon-Mail text-primary"></span>
									</div>
									<input type="text" class="form-control border-0 p-3" name="email" placeholder="Email address">
								</div> -->

								<div class="input-container">
									<i class="fa fa-key bg-icon"></i>
									<input class="input-field" type="text" name="captcha" placeholder="Captcha code" required>
								</div>
								<h6>
									<img src="lib/captcha.php" class="bg-dark p-2 px-3 captcha-append" alt="get a bellshipitnow adderess"/>
								</h6>
								
								<!-- <div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
									<div class="input-group-addon bg-white border-0 pl-4 pr-0">
										<span class="icon icon-ClosedLock text-primary"></span>
										<img src="lib/captcha.php" class="captcha-append" />
									</div>
									<input type="text" class="form-control border-0 p-3" name="captcha" placeholder="Captcho code">
								</div> -->

								<button type="submit" name="dosubmit" class="btn theme-clr-set btn-rounded u-mt-20 u-w-170">
									<?php echo $lang['langs_010108'] ?>
								</button>
							</form>
							<?php 
								echo Core::doForm("passReset","ajax/user.php");
							?>
							</br>
							<p>
								<?php echo $lang['langs_010109'] ?> 
							</br>
							<?php if($core->reg_allowed):?>
								<a href="sign-up.php" class="text-primary bg-white">
									<?php echo $lang['langs_010110']; ?>
								</a>
								<?php endif;?> | 
								<a href="login.php" class="text-primary bg-white">
									<?php echo $lang['langs_010111']; ?>
								</a>
							</p>
						</div> <!-- END p-4 p-md-5-->
					</div>  <!-- END card-->
				</div> <!-- END col-lg-5-->
			</div> <!-- END row-->
		</div> <!-- END container-->
	</section> <!-- END intro-hero-->
	<section class="u-py-30 bg-gray-v5">
		<div class="container">				
			<p class="mb-0 text-center text-white"> 
				&copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?> | <a href="tnc.php"> Terms and Conditions </a>
			</p>
		</div>
	</section>
						
	
</body>
</html>
