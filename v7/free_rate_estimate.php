<title>Free Rate Estimate</title>

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

    <!-- Start Main Body Here -->
    <div class="efi-hr-5">
        <div class="efi-hr-04-container">
            <div class="w-layout-grid efi-hr-04-grid">
                <div id="w-node-ea93e2df-3315-f60d-5e97-4279e21eb74a-0606ea11" class="efi-hr-04-right-content-2">
                    <div class="efi-hr-04-title-wrapper">
                        <div class="efi-label-2 big">Free rate estimates</div>
                        <h1 class="heading-8">Know the price before you ship it</h1>
                        <p class="efi-big-paragraph-2">We&#x27;ll offer a selection of rates to choose from that best match your preferences. </p>
                        <div class="div-block-19">
                            <div class="form-block w-form">
                                <!-- <form action="header.php" id="wf-form-Email-Form" name="wf-form-Email-Form" data-name="Email Form" method="get" class="form" data-wf-page-id="65744f282f80a56a0606ea11" data-wf-element-id="ea93e2df-3315-f60d-5e97-4279e21eb754"> -->
<!--                                <form action="--><?php //echo '../shipping_cost_calculator.php'; ?><!--" id="ReceiptKind" method="POST" class="form" accept-charset="utf-8">-->
                                <form action="./index.php" id="ReceiptKind" method="POST" class="form" accept-charset="utf-8">
                                    <input type="text" class="text-field w-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="First Name" id="Last-Name">
                                    <input type="text" class="text-field w-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="Last Name" id="Last-Name" required="">
                                    <input type="text" class="w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email" id="Email" required="">
                                    <input type="text" class="text-field w-node-ea93e2df-3315-f60d-5e97-4279e21eb758-0606ea11 w-input" maxlength="256" name="Last-Name-3" data-name="Last Name 3" placeholder="Phone Number" id="Last-Name-3" required="">
                                    <select id="Package-Type" name="Package-Type" data-name="Package Type" required="" class="w-node-ea93e2df-3315-f60d-5e97-4279e21eb759-0606ea11 w-select">
                                        <option value="">Package type</option>
                                        <option value="First">Parcel</option>
                                        <option value="Second">Cosmetic</option>
                                        <option value="Third">Home Goods</option>
                                        <option value="Fourth option">Other</option>
                                    </select>
                                    <input type="text" class="text-field w-node-ea93e2df-3315-f60d-5e97-4279e21eb75a-0606ea11 w-input" maxlength="256" name="Last-Name-3" data-name="Last Name 3" placeholder="Weight " id="Last-Name-3" required="">
                                    <input type="text" class="text-field w-node-fc343296-5c1f-d03e-d675-33dfb59f84a1-0606ea11 w-input" maxlength="256" name="Demensions" data-name="Demensions" placeholder="Dimensions ( length/ width/ height )" id="Demensions" required="">
                                    <div id="w-node-ea93e2df-3315-f60d-5e97-4279e21eb75c-0606ea11" class="w-form-formrecaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div>
                                    <input type="submit" value="Submit" data-wait="Please wait..." class="w-button">
                                </form>
                                <div class="success-message w-form-done">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="w-form-fail">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-ea93e2df-3315-f60d-5e97-4279e21eb766-0606ea11" class="efi-hr-04-left-content-2"><img src="./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg" loading="lazy" width="403" sizes="(max-width: 479px) 83vw, 402.98828125px" alt="" srcset="./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 500w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 800w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 1080w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 1600w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 2000w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 2600w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 3200w, ./assets/img/added_imgs/preparing-to-ship-for-e-commerce-sellers-2023-11-27-05-20-51-utc-min.jpg 6240w" class="image-9"></div>
            </div>
        </div>
    </div>
    <!-- End Main Body Here -->

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6572d50afca6a8fb2d71bf88" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/js/clientbellshipitnow.js" type="text/javascript"></script>

<?php
    include('footer.php');
?>
