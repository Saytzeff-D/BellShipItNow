<?php
    define("_VALID_PHP", true);

    require_once("init.php");

    if (isset($_POST['doLogin']))
    {
        $result = $user->login($_POST['username'], $_POST['password']);

        /* Login Successful */

        // if ($result)

        //     : redirect_to("dashboard/index.php");

        // endif;
        if ($result) 
        {   
            $user_level = $_SESSION['userlevel'];
            if (isset($_GET['destination'])) 
            {
                if ($_GET['destination'] == 'Assistant-Shop' || $user_level == 1) 
                {
                    redirect_to("dashboard/order-form.php");
                }
                else 
                {
                    redirect_to("dashboard/index.php");
                }
            } 
            else 
            {   
                if (isset($_SESSION['userlevel']) && $_SESSION['userlevel'] == 1) 
                {
                    // print_R($_SESSION);
                    redirect_to("dashboard/order-form.php");
                    // exit;
                }
                else 
                {
                    redirect_to("dashboard/index.php");
                }
            }
        }
    }

    if(isset($_SESSION) && ($_SESSION['userlevel'] == 1 || isset($_SESSION['user_name']))) 
    {
        redirect_to("dashboard/order-form.php");
    }
    else if(isset($_SESSION['userlevel']) && $_SESSION['userlevel'] == 9) 
    {
        redirect_to("dashboard/index.php");
    }

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
</head>

<body id="top">
<!--headers-->
    <header class="header header-shrink header-inverse fixed-top header-bg-clr">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-md-0">
            	<?php require_once("header.php");?>
            </nav>
        </div> <!-- END container-->
    </header> <!-- END header -->
	
	<section data-dark-overlay="5" class="u-h-100vh u-flex-center"
        style="background:url(assets-theme/img/login/bg-1_1.jpg) no-repeat; background-size:cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="card box-shadow-v2 bg-white u-of-hidden mt-4">
                        <h2 class="theme-clr m-0 py-3 text-white"><?php echo $lang['langs_01099'] ?></h2>
                        <div class="p-4 p-md-5">
                            <div id="msgholder2"><?php print Filter::$showMsg;?></div>
							<!-- <form style=""> 
							<div class="input-icons"> 
								<i class="fa fa-user icon fa-2x"></i> 
								<input class="input-field brdr-clr-change" type="text" placeholder="Email"> 
							</div> 
				
							<div class="input-icons"><i class="fa fa-key icon fa-2x"></i> 
								<input class="input-field brdr-clr-change" type="password" placeholder="Password"> 
							</div> 
							</form>  -->
							<form method="post" id="login_form" name="login_form">
								<div class="input-container">
								    <i class="fa fa-user bg-icon"></i>
									<input class="input-field" type="text" name="username"
                                        placeholder="<?php echo $lang['langs_010100'] ?>" required>
								</div>

								<div class="input-container">
									<i class="fa fa-key bg-icon"></i>
									<input class="input-field" type="password" name="password"
                                        placeholder="*******" required>
								</div>
								<div class="d-flex justify-content-between align-items-center">
                                    <label class="custom-control custom-checkbox text-left">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator mt-1"></span>
                                        <span class="custom-control-description text-dark"><?php echo $lang['langs_010101'] ?></span>
                                    </label>
									<a id="do-passreset" class="bg-white" href="pass-reset.php"><?php echo $lang['langs_010102'] ?>
									    <img src="assets/img/250130-200.png" alt="how to ship" class="reset-pass">
								    </a>
                                </div>
                                <button name="dosubmit" class="btn theme-clr-set btn-rounded u-mt-20 u-w-230">
                                    <?php echo $lang['langs_010103'] ?>
                                </button>
                                <input name="doLogin" type="hidden" value="1" />
                            </form>
                            <?php /*<form method="post" id="login_form" name="login_form">
                                <div class="input-group u-rounded-50 border u-of-hidden u-mb-20 brdr-clr-change">
                                    <div class="input-group-addon bg-white border-0 pl-4 pr-0">
                                        <span class="icon icon-User text-primary"></span>
                                    </div>
                                    <input type="text" class="form-control border p-3 brdr-clr-change" name="username"
                                        placeholder="<?php echo $lang['langs_010100'] ?>">
								</div>
								
                                <div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
                                    <div class="input-group-addon bg-white border-0 pl-4 pr-0">
                                        <span class="icon icon-ClosedLock text-primary"></span>
                                    </div>
                                    <input type="password" class="form-control border-0 p-3" name="password"
                                        placeholder="*******">
								</div>
								
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="custom-control custom-checkbox text-left">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator mt-1"></span>
                                        <span class="custom-control-description text-dark"><?php echo $lang['langs_010101'] ?></span>
                                    </label>
                                    <a id="do-passreset" class="bg-white href="pass-reset.php"><?php echo $lang['langs_010102'] ?></a>
                                </div>
                                <button name="dosubmit" class="btn theme-clr-set btn-rounded u-mt-20 u-w-230">
                                    <?php echo $lang['langs_010103'] ?>
                                </button>
                                <input name="doLogin" type="hidden" value="1" />
                            </form> */?>
                            </br>
                            <p>
                                <?php echo $lang['langs_010104'] ?> 
                                <?php if($core->reg_allowed):?>
                                <a href="sign-up.php"
                                class="text-primary bg-white">
                                    <?php echo $lang['langs_010105']; ?>
                                </a>
                                <?php endif;?>
                            </p>

                        </div> <!-- END p-4 p-md-5-->

                    </div> <!-- END card-->

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
<script src="assets-theme/js/bundle.js"></script>
<script src="assets-theme/js/fury.js"></script>
<script>
    $('document').ready(function() 
    {
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
</body>
</html>