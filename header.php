<?php

    if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  
	  $news = $core->renderNews();
	  $courier_onlinerow = $user->getCourier_list_booking();
	  $courier_deliveriesrow = $user->getCourier_deliveries_list();
	  $deliverpackagerow = $user->getDeliverpackage_list();
	  $courierrow = $user->getConsolidateonline_list();
?>

 <a class="navbar-brand" href="index.php">
    <span class="logo-default">
        <?php /*echo ($core->logo) ? '<img src="'.SITEURL.'/uploads/'.$core->logo.'" width="290" height="49" alt="'.$core->site_name.'" class="logo"/>': $core->site_name;*/?>
        <img src="https://www.bellshipitnow.com/uploads/logo.png" width="290" height="49" class="logo">
    </span>
    <span class="logo-inverse">
        <?php /* echo ($core->logo) ? '<img src="'.SITEURL.'/uploads/'.$core->logo.'" width="290" height="49" alt="'.$core->site_name.'" class="logo"/>': $core->site_name;*/?>

        <img src="https://www.bellshipitnow.com/uploads/logo.png" width="290" height="49" class="logo"
            alt="shop us stores and save on international shipping with Bellshipitnow">
    </span>
 </a>

<button class="navbar-toggler p-0" data-toggle="collapse" data-target="#navbarNav">
    <div class="hamburger hamburger--spin js-hamburger">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <?php if($user->is_Admin()):?>

        <?php elseif($user->userlevel == 1):?>
        <li class="nav-item active">
        <a class="nav-link eng" href="index.php">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">
                <span class="eng" style="display:none;">Rates</span>
                <span class="hin" style="display:none;">
                दरें</span>
                <span class="arabic" style="display:none;">معدلات</span>
                <span class="indonesian" style="display:none;">Tarif</span>
                <span class="ban" style="display:none;">হার</span>
                <span class="french" style="display:none;">Les taux</span>
                <span class="italian" style="display:none;">Aliquote</span>
                <span class="spanish" style="display:none;">Tarifas</span>
                <span class="german" style="display:none;">Preise</span>
                <span class="polish" style="display:none;">Stawki</span>
                <span class="portuguese" style="display:none;">Cotações</span>
                <span class="mandrin" style="display:none;">费率</span>
                <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>
            </a>
            <div class="dropdown-menu box-shadow-v2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item indonesian" href="shipping-rates.php">Rates List</a>            
                <a class="dropdown-item" href="track_shipment.php">Track Shipment</a>
            </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="consolidated_list.php">
            My consolidated
        </a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Booking <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>
        </a>
        <div class="dropdown-menu box-shadow-v2" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="booking_list.php">Booking List</a>
        </div>
        </li>

        <?php elseif($user->userlevel == 3):?>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            TRACK <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>
            </a>
        <div class="dropdown-menu box-shadow-v2" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="track_shipment.php">Track Shipment</a>
        </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="deliveries_list.php">
                Deliver List
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="consolidated_deliveries.php">
            Consolidated deliveries List
            </a>
        </li>

        <?php else:?>
        <li class="nav-item active">
            <a class="nav-link eng" href="index.php">
                <span class="eng" style="display:none;">HOME</span>
                <span class="hin" style="display:none;">
                    घर</span>
                <span class="arabic" style="display:none;">الصفحة الرئيسية</span>
                <span class="indonesian" style="display:none;">rumah</span>
                <span class="ban" style="display:none;">বাড়ি</span>
                <span class="french" style="display:none;">ACCUEIL</span>
                <span class="italian" style="display:none;">casa</span>
                <span class="spanish" style="display:none;">hogar</span>
                <span class="german" style="display:none;">Zuhause</span>
                <span class="polish" style="display:none;">Dom</span>
                <span class="portuguese" style="display:none;">casa</span>
                <span class="mandrin" style="display:none;">家</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="login.php?destination=Assistant-Shop">
                <span class="eng">Assistant Shop</span>
                <span class="hin" style="display:none;">
                    सहायक की दुकान</span>
                <span class="arabic" style="display:none;">متجر المساعدة</span>
                <span class="indonesian" style="display:none;">Asisten Toko</span>
                <span class="french" style="display:none;">Assistant Shop</span>
                <span class="ban" style="display:none;">সহকারী দোকান</span>
                <span class="italian" style="display:none;">Assistente negozio</span>
                <span class="spanish" style="display:none;">Asistente de compras</span>
                <span class="german" style="display:none;">Assistent Shop</span>
                <span class="polish" style="display:none;">Sklep asystenta</span>
                <span class="portuguese" style="display:none;">Assistente de Loja</span>
                <span class="mandrin" style="display:none;">助手店</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">
                <span class="eng">Rates</span>
                <span class="french" style="display:none;">Les taux</span>
                <span class="hin" style="display:none;">दरें</span>
                <span class="arabic" style="display:none;">معدلات</span>
                <span class="indonesian" style="display:none;">Tarif</span>
                <span class="ban" style="display:none;">হার</span>
                <span class="italian" style="display:none;">Aliquote</span>
                <span class="spanish" style="display:none;">Tarifas</span>
                <span class="german" style="display:none;">Preise</span>
                <span class="polish" style="display:none;">Stawki</span>
                <span class="portuguese" style="display:none;">Cotações</span>
                <span class="mandrin" style="display:none;">费率</span>
                <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>
            </a>
            <div class="dropdown-menu box-shadow-v2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="shipping-rates.php">
                    <span class="eng">Rates List</span>
                    <span class="hin" style="display:none;">
                        दरों की सूची</span>
                    <span class="arabic" style="display:none;">قائمة الأسعار</span>
                    <span class="indonesian" style="display:none;">Daftar Tarif</span>
                    <span class="french" style="display:none;">
                        Liste des tarifs</span>
                    <span class="ban" style="display:none;">মূল্য তালিকা</span>
                    <span class="italian" style="display:none;">
                        Elenco delle tariffe</span>
                    <span class="spanish" style="display:none;">Lista de tarifas</span>
                    <span class="german" style="display:none;">Preisliste</span>
                    <span class="polish" style="display:none;">
                        Lista cen</span>
                        <span class="mandrin" style="display:none;">价格表</span>
                    <span class="portuguese" style="display:none;">Lista de tarifas</span>
                    <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>
                </a>
                <a class="dropdown-item" href="track_shipment.php">
                    <span class="eng">Track Shipment</span>
                    <span class="hin" style="display:none;">शिपमेंट ट्रैक करना</span>
                    <span class="arabic" style="display:none;">شحنة المسار</span>
                    <span class="indonesian" style="display:none;">
                        Lacak Pengiriman</span>
                    <span class="french" style="display:none;">Suivi de livraison</span>
                    <span class="ban" style="display:none;">ট্রাকে পরিবহন করা</span>
                    <span class="italian" style="display:none;">Tracciare la spedizione</span>
                    <span class="spanish" style="display:none;">
                        Rastrear envio</span>
                    <span class="german" style="display:none;">Sendung verfolgen</span>
                    <span class="polish" style="display:none;">
                        Śledź przesyłkę</span>
                    <span class="portuguese" style="display:none;">
                        Rastrear Remessa</span>
                        <span class="mandrin" style="display:none;">追踪货运</span>
                    <i class="lnr lnr-chevron-down u-fs-12 ml-1"></i>

                </a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" href="about.php">
                <span class="eng">About us</span>
                <span class="hin" style="display:none;">
                    हमारे बारे में</span>
                <span class="arabic" style="display:none;">معلومات عنا</span>
                <span class="indonesian" style="display:none;">Tentang kami</span>
                <span class="french" style="display:none;">
                    À propos de nous</span>
                <span class="ban" style="display:none;">
                    আমাদের সম্পর্কে</span>
                <span class="italian" style="display:none;">
                    Riguardo a noi</span>
                <span class="spanish" style="display:none;">Sobre nosotras</span>
                <span class="german" style="display:none;">Über uns</span>
                <span class="polish" style="display:none;">
                    O nas</span>
                <span class="portuguese" style="display:none;">Sobre nós</span>
                <span class="mandrin" style="display:none;">关于我们</span>
            </a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link" href="contact.php">
                <span class="eng">Contact</span>
                <span class="hin" style="display:none;">
                    संपर्क करें</span>
                <span class="arabic" style="display:none;">اتصل</span>
                <span class="indonesian" style="display:none;">Kontak</span>
                <span class="french" style="display:none;">Contact</span>
                <span class="ban" style="display:none;">
                    যোগাযোগ</span>
                <span class="italian" style="display:none;">
                Contatto</span>
                <span class="spanish" style="display:none;">Contacto</span>
                <span class="german" style="display:none;">Kontakt</span>
                <span class="polish" style="display:none;">
                Kontakt</span>
                <span class="portuguese" style="display:none;">Contato</span>
                <span class="mandrin" style="display:none;">联系</span>
            </a>
        </li>

        <li class="nav-item dropdown"></li>
        <li class="nav-item dropdown"></li>
        <li class="nav-item dropdown"></li>
        <li class="nav-item dropdown"></li>

        <?php endif;?>

        <?php if($user->is_Admin()):?>

        <li class="nav-item dropdown">
            <a class="nav-link" href="dashboard/user.php?do=main&action=edit&id=1"><span
                    class="icon icon-User text-warning"></span>
                <?php echo $user->username;?>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="dashboard"><span class="icon icon-Web text-warning"></span>
                Dashboard
            </a>
        </li>
        <?php elseif($user->logged_in):?>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link" href="login.php">
                |
            </a>
        </li> -->
        <li class="nav-item dropdown ml-0 pl-0 mr-0 pr-0"> <a class="nav-link ml-0 pl-0 mr-0 pr-0"
                href="dashboard/order-form.php"><span
                    class="fa fa-shopping-bag text-warning ml-0 pl-0 mr-0 pr-0"></span><?php echo " Assistant Shop" ?></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="account.php"><span class="icon icon-User text-warning"></span>
                <?php echo $user->username;?>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="dashboard/invoice.php">
                <span class="icon icon-Web text-warning"></span>
                Dashboard
            </a>
        </li>
        <?php else:?>
        <li class="nav-item dropdown">
            <a class="nav-link" href="login.php">
                <span class="eng">Log In</span>
                <span class="hin" style="display:none;">
                    लॉग इन करें</span>
                <span class="arabic" style="display:none;">تسجيل الدخول</span>
                <span class="indonesian" style="display:none;">Gabung</span>
                <span class="french" style="display:none;">
                    s'identifier</span>
                <span class="ban" style="display:none;">
                    প্রবেশ করুন</span>
                <span class="italian" style="display:none;">
                accesso</span>
                <span class="spanish" style="display:none;">iniciar sesión</span>
                <span class="german" style="display:none;">Anmeldung</span>
                <span class="polish" style="display:none;">
                Zaloguj sie</span>
                <span class="portuguese" style="display:none;">Conecte-se</span>
                <span class="mandrin" style="display:none;">登录</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="sign-up.php">
                <span class="eng">Sign Up</span>
                <span class="hin" style="display:none;">
                    साइन अप करें</span>
                <span class="arabic" style="display:none;">سجل</span>
                <span class="ban" style="display:none;">
                    নিবন্ধন করুন</span>
                <span class="indonesian" style="display:none;">Daftar</span>
                <span class="french" style="display:none;">
                    S'inscrire</span>
                <span class="italian" style="display:none;">
                    Iscriviti</span>
                <span class="spanish" style="display:none;">Regístrate</span>
                <span class="german" style="display:none;">Anmelden</span>
                <span class="polish" style="display:none;">
                    Zapisz się</span>
                <span class="portuguese" style="display:none;">Inscrever-se</span>
                <span class="mandrin" style="display:none;">注册</span>
            </a>
        </li>
        <?php endif;?>
        <li class="nav-item dropdown p-2">
            <select id="select_language" class="form-control" style="padding-left: 10px !important;padding-right: 2px !important; padding: .3rem .75rem !important;">
                <option value="english" id="english">English</option>
                <option value="french" id="french">French</option>
                <option value="hin" id="hin">Hindi</option>
                <option value="spanish" id="spanish">Spanish</option>
                <option value="portuguese" id="portuguese">Portuguese</option>
                <option value="arabic" id="arabic">Arabic</option>
                <option value="ban" id="ban">Bangla</option>
                <option value="german" id="german">German</option>
                <option value="italian" id="italian">Italian</option>
                <option value="polish" id="polish">Polish</option>
                <option value="indonesian" id="indonesian">Indonesian</option>
                <option value="mandrin" id="mandrin">Mandarin</option>
            </select>
        </li>
        <?php if($user->logged_in):?>
        <li class="nav-item dropdown">
            <a class="nav-link" href="logout.php"><span class="icon-signout text-primary"></span>
                Logout
            </a>
        </li>
        <?php endif;?>
    </ul>
</div>