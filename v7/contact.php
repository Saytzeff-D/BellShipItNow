<title>Contact</title>

<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

<!-- CSS Import goes here -->
<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="assets/css/normalize.css" rel="stylesheet" type="text/css" />
<link href="assets/css/clientbellshipitnow.css" rel="stylesheet" />

<!--JavaScript Import goes here-->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","PT Serif:400,400italic,700,700italic","Varela:400","Roboto:100,300,regular,500,700,900","Work Sans:100,200,300,regular,500,600,700,800,900","DM Sans:regular,500,700"]  }});</script>
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<!--Internal style goes here-->
<style>body,button,input,select,textarea{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-text-size-adjust:100%;-moz-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%}body{overflow-x:hidden}.demo-btn,.browser-demo{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0)}</style>
<style>
    .gumroad-loading-indicator i {
        background: url(https://uploads-ssl.webflow.com/5ef66c40c73a1f23b6a72987/5ef6bed92a2bee63b0334828_webdev-for-you-loading.svg) !important;
    }
</style>

<?php
    include('header.php')
?>

    <!-- Main Content goes here Start-->
    <div class="cf-form-section-1">
        <div class="cf-form-main-wrapper">
            <div class="cf-form-left-wrapper">
                <div>
                    <div class="text-block-8">Contact Us</div>
                </div>
                <h2 class="cf-form-heading">We&#x27;re happy to help</h2>
                <p class="cf-form-paragraph">Please send us any questions or inquiries you may have.</p>
                <div class="cf-footer-divider"></div>
                <a href="tel:+61(8)94717645" class="cf-footer-info-contain w-inline-block">
                    <div class="cf-form-icon"><img src="./assets/img/Icon-Contact.svg" loading="lazy" alt="" class="cf-features-section-1-image-contai"></div>
                    <div class="cf-footer-headings-wrap">
                        <div class="cf-info-heading">Phone</div>
                        <div class="cf-footer-info">+1 (800) 227-4641</div>
                    </div>
                </a>
                <a href="mailto:humans@conversionflow.co" class="cf-footer-info-contain w-inline-block">
                    <div class="cf-form-icon"><img src="images/Icon-Contact-2.svg" loading="lazy" alt="" class="cf-features-section-1-image-contai"></div>
                    <div class="cf-footer-headings-wrap">
                        <div class="cf-info-heading">Email</div>
                        <div class="cf-footer-info">info@bellshipitnow.com</div>
                    </div>
                </a>
                <a href="#" class="cf-footer-info-contain last w-inline-block">
                    <div class="cf-form-icon"><img src="images/Icon-Contact-3.svg" loading="lazy" alt="" class="cf-features-section-1-image-contai"></div>
                    <div class="cf-footer-headings-wrap">
                        <div class="cf-info-heading">Address</div>
                        <div class="cf-footer-info">228 Park Ave A<em># 698760</em>, New York, 10017</div>
                    </div>
                </a>
            </div>
            <div class="cf-form-right-wrapper">
                <div class="cf-send-message-form w-form">
<!--                    <form action="header.php" id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="6574492d12c60df2f27f6b34" data-wf-element-id="8e3a1454-deea-79f9-309f-96083a563c96">-->
                    <form id="admin_form" method="POST">
                        <h4 class="cf-form-heading-28px">Send me a message</h4>
                        <input type="text" class="cf-borders-text-field w-input" maxlength="256" name="name" data-name="Message Form - Name" placeholder="Name" id="Message-Form-Name" required="">
                        <input type="text" class="cf-borders-text-field w-input" maxlength="256" name="phone" data-name="Message Form Phone" placeholder="Phone Number" id="Message-Form---Phone">
                        <input type="email" class="cf-borders-text-field w-input" maxlength="256" name="email" data-name="Message/Email Address" placeholder="Email address" id="Message-Form-Email-Address" required="">
                        <input type="text" class="cf-borders-text-field w-input" maxlength="256" name="subject" data-name="Message Subject" placeholder="Subject" id="Message-Subject" required="">
                        <div class="cf-form-dropdown">

                        </div>
                        <textarea id="Message-Form---Message" name="Message-Form---Message" maxlength="5000" data-name="Message Form Message" placeholder="Message" required="" class="cf-borders-text-field message w-input"></textarea>
                        <input type="submit" value="Get in touch" data-wait="Please wait..." class="cf-form-gradient-submit w-button" name="doupdate" />
                        <!-- <button class="btn btn-rounded theme-clr-set u-w-170 mt-4" type="submit" name="doupdate">Submit</button> -->
                    </form>
                    <!-- <div class="cf-success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="cf-error-message-dark w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div> -->
                    <div id="js-contact-result" data-success-msg="Success, We will get back to you soon" data-error-msg="Oops! Something went wrong"></div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.350013593107!2d-73.97620860717791!3d40.75432582432606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fdf71d54cd%3A0xc7b7e1ae5bc080ef!2s228%20Park%20Ave%20a%2C%20New%20York%2C%20NY%2010017%2C%20USA!5e0!3m2!1sen!2sin!4v1690998752097!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>
    </div>
    </div>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6572d50afca6a8fb2d71bf88" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="./assets/js/clientbellshipitnow.js" type="text/javascript"></script>
<script src="..assets/js_/script.js" type="text/javascript"></script>
<script type="text/javascript">
    function showResponse(msg)
    {
        // hideLoader();
        if (msg == 'OK')
        {
            result =
                "<div class=\"bggreen\"><p><span class=\"icon-ok-sign\"><\/span><i class=\"close icon-remove-circle\"></i><span>Thank you!<\/span>Your message has been sent successfully<\/p><\/div>";
            $("#fullform").hide();
        }
        else
        {
            result = msg;
        }
        $(this).html(result);
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    }
    $("#admin_form").submit(function (event) {
        event.preventDefault();
        // console.log("hello...")
        const data = {
            name: $("#Message-Form-Name").val(),
            email: $("#Message-Form-Email-Address").val(),
            phone: $("#Message-Form---Phone").val(),
            subject: $("#Message-Subject").val(),
            message: $("#Message-Form---Message").val()
        }
        var options =
            {
                success: showResponse,
                url: "../ajax/sendmail.php",
                type: "POST",
                data
            };
        $.ajax(options);
    })
    // $(document).ready(function()
    // {
    //     var options =
    //         {
    //             target: "#msgholder",
    //             beforeSubmit: showLoader,
    //             success: showResponse,
    //             url: "ajax/sendmail.php",
    //             resetForm: 0,
    //             clearForm: 0,
    //             data: {
    //                 processContact: 1
    //             }
    //         };
    //     $("#admin_form").ajaxForm(options);
    // });
</script>

<?php
    include('footer.php');
?>
