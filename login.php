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

    // if(isset($_SESSION) && ($_SESSION['userlevel'] == 1 || isset($_SESSION['user_name']))) 
    // {
    //     redirect_to("dashboard/order-form.php");
    // }
    // else if(isset($_SESSION['userlevel']) && $_SESSION['userlevel'] == 9) 
    // {
    //     redirect_to("dashboard/index.php");
    // }

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
    <!-- <link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
    <link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets-theme/css/bundle.css">
    <link rel="stylesheet" href="assets-theme/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->

    <!--------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------->
    <link rel="stylesheet" href="./v7/assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./v7/assets/css/webflow.css" type="text/css">
    <link rel="stylesheet" href="./v7/assets/css/client-dashboard-b4a1b1.webflow.css" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <!--------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------->

</head>
<body id="top">
	<!-- <section data-dark-overlay="5" class="u-h-100vh u-flex-center"
        style="background:url(assets-theme/img/login/bg-1_1.jpg) no-repeat; background-size:cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="card box-shadow-v2 bg-white u-of-hidden mt-4">
                        <h2 class="theme-clr m-0 py-3 text-white"><?php echo $lang['langs_01099'] ?></h2>
                        <div class="p-4 p-md-5">
                            <div id="msgholder2"><?php print Filter::$showMsg;?></div>
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

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
<section class="u-py-30 bg-gray-v5">
    <div class="container">				
        <p class="mb-0 text-center text-white"> 
            &copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?> | <a href="tnc.php"> Terms and Conditions </a>
        </p>
    </div>
</section> -->


<!----------------------------------------------------------------->

<div class="split-page-wrapper">
      <div class="short-page-wrapper">
        <div class="navbar">
          <div class="container-2">
            <div class="div-block-20">
                <!-- <img src="./v7/assets/img/logo_1.png" loading="lazy" alt="" class="image-16" > -->
                Logo
            </div>
          </div>
        </div>
        <div class="flex-stack-center">
          <div class="form-wrapper">
            <div class="w-form">
              <form
                id="login_form"
                name="login_form"
                data-name="signup"
                method="post"
                data-ms-form="signup"
                class="form-field-wrapper"
                data-wf-page-id="659382e99c234dd69d88f885"
                data-wf-element-id="5f88a7a0-f104-87f5-72ec-3a6d4fbfafc8"
              >
                <h1 class="signup-header">Hey Jaya</h1>
                <div class="margin-bottom">
                  Glad you&#x27;re here! Please enter your details.
                </div>
                <div class="_100">
                  <a
                    data-ms-auth-provider="google"
                    href="#"
                    class="social-btn google w-inline-block"
                  >
                    <div class="social-content-2">
                      <img
                        src="https://assets-global.website-files.com/62029a917ad3964ae634185c/634e98a36c5c231d54eee7f1_google.svg"
                        loading="lazy"
                        alt=""
                        class="social-image"
                      />
                      <div
                        data-ms-auth-connected-text="Disconnect Google"
                        class="social-text-2"
                      >
                        Continue with Google
                      </div>
                      <div
                        data-ms-auth-disconnect="true"
                        class="disconnect-link-2"
                      >
                        <img
                          src="https://assets-global.website-files.com/62029a917ad3964ae634185c/634e98a36c5c2314d5eee7f2_close_black_24dp.svg"
                          loading="lazy"
                          alt=""
                          class="disconnect-image"
                        />
                      </div>
                    </div>
                  </a>
                  <a
                    data-ms-auth-provider="facebook"
                    href="#"
                    class="social-btn facebook solid w-inline-block"
                  >
                    <div
                      class="social-content-2"
                      style="justify-content: center; align-items: center"
                    >
                      <img
                        src="https://assets-global.website-files.com/62029a917ad3964ae634185c/634e98a36c5c23b072eee7f3_facebook-white.svg"
                        loading="lazy"
                        alt=""
                        class="social-image"
                      />
                      <div
                        data-ms-auth-connected-text="Disconnect Facebook"
                        class="social-text-2"
                      >
                        Continue with Facebook
                      </div>
                      <div
                        data-ms-auth-disconnect="true"
                        class="disconnect-link-2"
                      >
                        <img
                          src="https://assets-global.website-files.com/62029a917ad3964ae634185c/634e98a36c5c2314d5eee7f2_close_black_24dp.svg"
                          loading="lazy"
                          alt=""
                          class="disconnect-image white"
                        />
                      </div>
                    </div>
                  </a>
                </div>
                <div class="form-divider">
                  <div class="form-div-line"></div>
                  <div>OR</div>
                  <div class="form-div-line"></div>
                </div>
                <label for="Email-2" class="field-label">Email</label
                ><input
                  class="text-field email-field w-input input-field"
                  maxlength="256"
                  name="username"
                  data-name="Email 2"
                  placeholder="<?php echo $lang['langs_010100'] ?>"
                  type="text"
                  id="Email-2"
                  required=""
                />
                <div class="hide-on-load w-embed">
                  [Double-Click] to show password CSS
                  <style>
                    .email-field:valid ~ .password-wrap {
                      height: 122px;
                    }
                  </style>
                </div>
                <div class="text-field-wrapper password-wrap">
                  <label for="Password-2" class="field-label">Password</label
                  ><input
                    class="text-field w-input input-field"
                    maxlength="256"
                    name="password"
                    data-name="Password 2"
                    placeholder="Password"
                    type="password"
                    id="Password-2"
                    data-ms-member="password"
                    required=""
                    -098762t5r
                    DxZS
                  />
                  <div class="field-description">
                    Must be at least 8 characters
                  </div>
                  <label class="w-checkbox checkbox-field"
                    ><input
                      type="checkbox"
                      name="Checkbox-2"
                      id="Checkbox-2"
                      data-name="Checkbox 2"
                      required=""
                      data-ms-member="opt-in-required"
                      class="w-checkbox-input checkbox"
                    /><span for="Checkbox-2" class="checkbox-label w-form-label"
                      ><?php echo $lang['langs_010135'] ?></span
                    ></label
                  >
                </div>
                <!-- <input
                  type="submit"
                  name="dosubmit"
                  data-wait="Please wait..."
                  class="button-2 black w-button"
                  value="Let&#x27;s get started"
                /> -->
                <button
                  name="dosubmit"
                  class="btn theme-clr-set btn-rounded u-mt-20 u-w-230"
                >
                  <?php echo $lang['langs_010103'] ?>
                </button>
                <input name="doLogin" type="hidden" value="1" />
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="flex-row-center">
              <div>
                Already have an account?
                <a href="#" data-ms-modal="login" class="link black">Log in</a>
              </div>
            </div>
          </div>
        </div>
        <footer id="footer" class="footer">
          <div class="container-2">
            <div class="footer-flex-container">
              <div>Copyright © 2024 Bellshipitnow.</div>
            </div>
          </div>
        </footer>
      </div>
      <div
        data-poster-url="https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-poster-00001.jpg"
        data-video-urls="https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-transcode.mp4,https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-transcode.webm"
        data-autoplay="true"
        data-loop="true"
        data-wf-ignore="true"
        class="colorful-section video w-background-video w-background-video-atom"
      >
        <video
          id="5f88a7a0-f104-87f5-72ec-3a6d4fbfb005-video"
          autoplay=""
          loop=""
          style="
            background-image: url('https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-poster-00001.jpg');
          "
          muted=""
          playsinline=""
          data-wf-ignore="true"
          data-object-fit="cover"
        >
          <source
            src="https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-transcode.mp4"
            data-wf-ignore="true"
          />
          <source
            src="https://assets-global.website-files.com/62029a917ad3964ae634185c/62029e650e8203b971186942_pexels-vanessa-garcia-6319879-transcode.webm"
            data-wf-ignore="true"
          />
        </video>
      </div>
    </div>

<!----------------------------------------------------------------->




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