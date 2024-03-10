    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#cost-estimator">Cost Estimator</a></li>
        <li><a class="nav-link scrollto" href="#services">Benefits</a></li>
        <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
        <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
        <li class="nav-link dropdown">
          <a class="nav-link scrollto" href="#ecom">E-commerce Sites</a>
          <ul>
            <li><a href="https://www.amazon.com/">Amazon</a></li>
            <li><a href="https://www.ebay.com/">eBay</a></li>
            <li><a href="https://walmart.com/">Walmart</a></li>
            <li><a href="https://www.bestbuy.com/">Best Buy</a></li>
          </ul>
        </li>
        
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <?php
        if(empty($username))
        {
        ?>
        <li><a class="nav-link scrollto" href="../login.php">Login</a></li>
        <li style="padding-right:10px !important">
          <a class="bg bg-success getstarted scrollto" href="../sign-up.php">Register</a>
        </li>
        <?php
        }
        else
        {
        ?>
        <li><a class="nav-link scrollto" href="../dashboard">Dashboard</a></li>
        <li style="padding-right:10px !important">
          <a class="bg bg-success getstarted scrollto" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp; Logout</a>
        </li>
        <?php
        }
        ?>
        <li>
          <a class="nav-link scrollto">
            <div id="google_translate_element" style="padding:1em;"></div>
              <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,sq,am,ar,hy,as,ay,az,bm,eu,be,bn,bho,bs,bg,ca,ceb,co,hr,cs,da,dv,doi,nl,en,eo,et,ee,fil,fi,fr,fy,gl,ka,de,el,gn,gu,ht,ha,haw,he,hi,hmn,hu,is,ig,ilo,id,ga,it,ja,jv,kn,kk,km,rw,gom,ko,kri,ku,ckb,ky,lo,la,lv,ln,lt,lg,lb,mk,mai,mg,ms,ml,mt,mi,mr,mni-Mtei,lus,mn,my,ne,no,ny,or,om,ps,fa,pl,pt,pa,qu,ro,ru,sm,sa,gd,nso,sr,st,sn,sd,si,sk,sl,so,es,su,sw,sv,tl,tg,ta,tt,te,th,ti,ts,tr,tk,ak,uk,ur,ug,uz,vi,cy,xh,yi,yo,zu', autoDisplay: false}, 'google_translate_element');
                }
              </script>
              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
          </a>
        </li>
      </ul>