<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************
  
// if (session_status() == PHP_SESSION_DISABLED) {

//   }
  	session_start();
  	
define("_VALID_PHP", true);
require_once("init.php");

$ratesrow = $core->getRates();
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
	<title>Shipping rates | <?php echo $core->site_name;?></title>

	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<!--Icon fonts-->
	<link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
	<link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets-theme/css/bundle.css">
	<link rel="stylesheet" href="assets-theme/css/style.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.js"></script>
	<script src="assets/js/jquery.wysiwyg.js"></script>
	<script src="assets/js/global.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/modernizr.mq.js" type="text/javascript" ></script>
	<script src="assets/js/checkbox.js"></script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	<script>
      window.projectServices = {
         ASSETS_ENV: "prod",
         brand: "safm",
         version: "stable",
         disableOpacityChange: true
      };
   </script>
   <script type="text/javascript" src="assets.maerskline.com/integrated-global-nav/2/loader.js"></script>
   <style>
   </style>
</head>

<body id="top">

	<!--headers-->
	<header class="header header-shrink header-inverse fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg px-md-0">

				<?php require_once("header.php");?> 

			</nav>
		</div> <!-- END container-->
	</header> <!-- END header --> 

	<section class="u-py-30 u-pt-lg-200 u-pb-lg-50 u-flex-center box-shadow-v2" style="
	background: #e15300;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #f69001, #e15300);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #f69001, #e15300); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center text-white">
				<h1 class="text- font--display-3"style="font-size:px;color:#004994;">SHIPPING COST CALCULATOR</h1>
				<div class="u-h-4 u-w-50 rounded mx-auto my-4"style="font-size:px;background-color:#004994;"></div>
				<p class="lead font--display-3"style="font-size:px;color:#004994;">The Best Solution in Wordwide Shipment
					<!-- THE BEST SOLUTION IN WORLDWIDE SHIPMENTS -->
				</p>
			</div>
		</div> <!-- END row-->
	</div> <!-- END container-->
</section> <!-- END intro-hero-->

<section class="shiping-sec">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-8 m-auto mt-5 mb-4">
				<form class="shipping_form" action="<?php echo 'shipping_cost_calculator.php'; ?>" method="POST" accept-charset="utf-8">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<img src="assets/img/download.png" alt="Shipping Calculator">
							</div>
						</div><!-- col -->
					</div><!-- row -->

					<div class="row">
						<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="boxes shadow-md mb-2 bg-light rounded">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="ReceiptKind" class="font--display-3" style="font-size:20px;color:#004994;">Type</label>
										<select class="form-control add-listing_form input-field" id="ReceiptKind" <?php if(!empty($_SESSION['type'])) echo $_SESSION['type']; ?> name="type" required="required">
											<option value="Parcel">Parcel</option>
											<option value="Document">Document</option>
											<option value="Cosmetic">Cosmetic</option>
											<option value="Food">Food</option>
											<option value="Home Goods">Home Goods</option>
											<option value="Shoes">Shoes</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="ReceiptKind" class="font--display-3" style="font-size:20px;color:#004994;">Zip / Post code</label>
										<input type="text" class="form-control input-field"  name="zipcode" id="zipcode" placeholder="Zip/post code" value="<?php if(!empty($_SESSION['zipcode'])) echo $_SESSION['zipcode'];?>" required="required">
									</div>
								</div>
								<div class="col-md-6 parcel_country">
									<div class="form-group">
										<label for="ReceiptCountryId" class="font--display-3" style="font-size:20px;color:#004994;">Destination Country</label>
										<input type="text" class="form-control input-field"  name="r_dest" id="ReceiptCountryId" placeholder="Select Country" list="browsers" value="<?php if(!empty($_SESSION['dest'])) echo $_SESSION['dest'];?>" autocomplete="off" required="required">
										<datalist id="browsers">
											<option value="United States">United States</option> 
											<option value="United Kingdom">United Kingdom</option> 
											<option value="Afghanistan">Afghanistan</option> 
											<option value="Albania">Albania</option> 
											<option value="Algeria">Algeria</option> 
											<option value="American Samoa">American Samoa</option> 
											<option value="Andorra">Andorra</option> 
											<option value="Angola">Angola</option> 
											<option value="Anguilla">Anguilla</option> 
											<option value="Antarctica">Antarctica</option> 
											<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
											<option value="Argentina">Argentina</option> 
											<option value="Armenia">Armenia</option> 
											<option value="Aruba">Aruba</option> 
											<option value="Australia">Australia</option> 
											<option value="Austria">Austria</option> 
											<option value="Azerbaijan">Azerbaijan</option> 
											<option value="Bahamas">Bahamas</option> 
											<option value="Bahrain">Bahrain</option> 
											<option value="Bangladesh">Bangladesh</option> 
											<option value="Barbados">Barbados</option> 
											<option value="Belarus">Belarus</option> 
											<option value="Belgium">Belgium</option> 
											<option value="Belize">Belize</option> 
											<option value="Benin">Benin</option> 
											<option value="Bermuda">Bermuda</option> 
											<option value="Bhutan">Bhutan</option> 
											<option value="Bolivia">Bolivia</option> 
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
											<option value="Botswana">Botswana</option> 
											<option value="Bouvet Island">Bouvet Island</option> 
											<option value="Brazil">Brazil</option> 
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
											<option value="Brunei Darussalam">Brunei Darussalam</option> 
											<option value="Bulgaria">Bulgaria</option> 
											<option value="Burkina Faso">Burkina Faso</option> 
											<option value="Burundi">Burundi</option> 
											<option value="Cambodia">Cambodia</option> 
											<option value="Cameroon">Cameroon</option> 
											<option value="Canada">Canada</option> 
											<option value="Cape Verde">Cape Verde</option> 
											<option value="Cayman Islands">Cayman Islands</option> 
											<option value="Central African Republic">Central African Republic</option> 
											<option value="Chad">Chad</option> 
											<option value="Chile">Chile</option> 
											<option value="China">China</option> 
											<option value="Christmas Island">Christmas Island</option> 
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
											<option value="Colombia">Colombia</option> 
											<option value="Comoros">Comoros</option> 
											<option value="Congo">Congo</option> 
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
											<option value="Cook Islands">Cook Islands</option> 
											<option value="Costa Rica">Costa Rica</option> 
											<option value="Cote D'ivoire">Cote D'ivoire</option> 
											<option value="Croatia">Croatia</option> 
											<option value="Cuba">Cuba</option> 
											<option value="Cyprus">Cyprus</option> 
											<option value="Czech Republic">Czech Republic</option> 
											<option value="Denmark">Denmark</option> 
											<option value="Djibouti">Djibouti</option> 
											<option value="Dominica">Dominica</option> 
											<option value="Dominican Republic">Dominican Republic</option> 
											<option value="Ecuador">Ecuador</option> 
											<option value="Egypt">Egypt</option> 
											<option value="El Salvador">El Salvador</option> 
											<option value="Equatorial Guinea">Equatorial Guinea</option> 
											<option value="Eritrea">Eritrea</option> 
											<option value="Estonia">Estonia</option> 
											<option value="Ethiopia">Ethiopia</option> 
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
											<option value="Faroe Islands">Faroe Islands</option> 
											<option value="Fiji">Fiji</option> 
											<option value="Finland">Finland</option> 
											<option value="France">France</option> 
											<option value="French Guiana">French Guiana</option> 
											<option value="French Polynesia">French Polynesia</option> 
											<option value="French Southern Territories">French Southern Territories</option> 
											<option value="Gabon">Gabon</option> 
											<option value="Gambia">Gambia</option> 
											<option value="Georgia">Georgia</option> 
											<option value="Germany">Germany</option> 
											<option value="Ghana">Ghana</option> 
											<option value="Gibraltar">Gibraltar</option> 
											<option value="Greece">Greece</option> 
											<option value="Greenland">Greenland</option> 
											<option value="Grenada">Grenada</option> 
											<option value="Guadeloupe">Guadeloupe</option> 
											<option value="Guam">Guam</option> 
											<option value="Guatemala">Guatemala</option> 
											<option value="Guinea">Guinea</option> 
											<option value="Guinea-bissau">Guinea-bissau</option> 
											<option value="Guyana">Guyana</option> 
											<option value="Haiti">Haiti</option> 
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
											<option value="Honduras">Honduras</option> 
											<option value="Hong Kong">Hong Kong</option> 
											<option value="Hungary">Hungary</option> 
											<option value="Iceland">Iceland</option> 
											<option value="India">India</option> 
											<option value="Indonesia">Indonesia</option> 
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
											<option value="Iraq">Iraq</option> 
											<option value="Ireland">Ireland</option> 
											<option value="Israel">Israel</option> 
											<option value="Italy">Italy</option> 
											<option value="Jamaica">Jamaica</option> 
											<option value="Japan">Japan</option> 
											<option value="Jordan">Jordan</option> 
											<option value="Kazakhstan">Kazakhstan</option> 
											<option value="Kenya">Kenya</option> 
											<option value="Kiribati">Kiribati</option> 
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
											<option value="Korea, Republic of">Korea, Republic of</option> 
											<option value="Kuwait">Kuwait</option> 
											<option value="Kyrgyzstan">Kyrgyzstan</option> 
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
											<option value="Latvia">Latvia</option> 
											<option value="Lebanon">Lebanon</option> 
											<option value="Lesotho">Lesotho</option> 
											<option value="Liberia">Liberia</option> 
											<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
											<option value="Liechtenstein">Liechtenstein</option> 
											<option value="Lithuania">Lithuania</option> 
											<option value="Luxembourg">Luxembourg</option> 
											<option value="Macao">Macao</option> 
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
											<option value="Madagascar">Madagascar</option> 
											<option value="Malawi">Malawi</option> 
											<option value="Malaysia">Malaysia</option> 
											<option value="Maldives">Maldives</option> 
											<option value="Mali">Mali</option> 
											<option value="Malta">Malta</option> 
											<option value="Marshall Islands">Marshall Islands</option> 
											<option value="Martinique">Martinique</option> 
											<option value="Mauritania">Mauritania</option> 
											<option value="Mauritius">Mauritius</option> 
											<option value="Mayotte">Mayotte</option> 
											<option value="Mexico">Mexico</option> 
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
											<option value="Moldova, Republic of">Moldova, Republic of</option> 
											<option value="Monaco">Monaco</option> 
											<option value="Mongolia">Mongolia</option> 
											<option value="Montserrat">Montserrat</option> 
											<option value="Morocco">Morocco</option> 
											<option value="Mozambique">Mozambique</option> 
											<option value="Myanmar">Myanmar</option> 
											<option value="Namibia">Namibia</option> 
											<option value="Nauru">Nauru</option> 
											<option value="Nepal">Nepal</option> 
											<option value="Netherlands">Netherlands</option> 
											<option value="Netherlands Antilles">Netherlands Antilles</option> 
											<option value="New Caledonia">New Caledonia</option> 
											<option value="New Zealand">New Zealand</option> 
											<option value="Nicaragua">Nicaragua</option> 
											<option value="Niger">Niger</option> 
											<option value="Nigeria">Nigeria</option> 
											<option value="Niue">Niue</option> 
											<option value="Norfolk Island">Norfolk Island</option> 
											<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
											<option value="Norway">Norway</option> 
											<option value="Oman">Oman</option> 
											<option value="Pakistan">Pakistan</option> 
											<option value="Palau">Palau</option> 
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
											<option value="Panama">Panama</option> 
											<option value="Papua New Guinea">Papua New Guinea</option> 
											<option value="Paraguay">Paraguay</option> 
											<option value="Peru">Peru</option> 
											<option value="Philippines">Philippines</option> 
											<option value="Pitcairn">Pitcairn</option> 
											<option value="Poland">Poland</option> 
											<option value="Portugal">Portugal</option> 
											<option value="Puerto Rico">Puerto Rico</option> 
											<option value="Qatar">Qatar</option> 
											<option value="Reunion">Reunion</option> 
											<option value="Romania">Romania</option> 
											<option value="Russian Federation">Russian Federation</option> 
											<option value="Rwanda">Rwanda</option> 
											<option value="Saint Helena">Saint Helena</option> 
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
											<option value="Saint Lucia">Saint Lucia</option> 
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
											<option value="Samoa">Samoa</option> 
											<option value="San Marino">San Marino</option> 
											<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
											<option value="Saudi Arabia">Saudi Arabia</option> 
											<option value="Senegal">Senegal</option> 
											<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
											<option value="Seychelles">Seychelles</option> 
											<option value="Sierra Leone">Sierra Leone</option> 
											<option value="Singapore">Singapore</option> 
											<option value="Slovakia">Slovakia</option> 
											<option value="Slovenia">Slovenia</option> 
											<option value="Solomon Islands">Solomon Islands</option> 
											<option value="Somalia">Somalia</option> 
											<option value="South Africa">South Africa</option> 
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
											<option value="Spain">Spain</option> 
											<option value="Sri Lanka">Sri Lanka</option> 
											<option value="Sudan">Sudan</option> 
											<option value="Suriname">Suriname</option> 
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
											<option value="Swaziland">Swaziland</option> 
											<option value="Sweden">Sweden</option> 
											<option value="Switzerland">Switzerland</option> 
											<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
											<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
											<option value="Tajikistan">Tajikistan</option> 
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
											<option value="Thailand">Thailand</option> 
											<option value="Timor-leste">Timor-leste</option> 
											<option value="Togo">Togo</option> 
											<option value="Tokelau">Tokelau</option> 
											<option value="Tonga">Tonga</option> 
											<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
											<option value="Tunisia">Tunisia</option> 
											<option value="Turkey">Turkey</option> 
											<option value="Turkmenistan">Turkmenistan</option> 
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
											<option value="Tuvalu">Tuvalu</option> 
											<option value="Uganda">Uganda</option> 
											<option value="Ukraine">Ukraine</option> 
											<option value="United Arab Emirates">United Arab Emirates</option> 
											<option value="United Kingdom">United Kingdom</option> 
											<option value="United States">United States</option> 
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
											<option value="Uruguay">Uruguay</option> 
											<option value="Uzbekistan">Uzbekistan</option> 
											<option value="Vanuatu">Vanuatu</option> 
											<option value="Venezuela">Venezuela</option> 
											<option value="Viet Nam">Viet Nam</option> 
											<option value="Virgin Islands, British">Virgin Islands, British</option> 
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
											<option value="Wallis and Futuna">Wallis and Futuna</option> 
											<option value="Western Sahara">Western Sahara</option> 
											<option value="Yemen">Yemen</option> 
											<option value="Zambia">Zambia</option> 
											<option value="Zimbabwe">Zimbabwe</option>
										</datalist>
									</div>
								</div>
								<div class="col-md-6 nondoc">
									<div class="form-group">
										<label for="sum2" class="font--display-3" style="font-size:20px;color:#004994;">Weight (lbs).</label>
										<input  class="form-control add-listing_form uintTextBox input-field" placeholder="Weight" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();"  id="sum2" name="weight" value="<?php if(!empty($_SESSION['weight'])) echo $_SESSION['weight'];?>" required="required">
									</div>
								</div>
								<div class="col-sm-4 doconly">
									<div class="form-group required">

									</div>
								</div>							
							</div>
							
							<!-- <div class="row">
								
							</div> -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="font--display-3" style="font-size:20px;color:#004994;">Dimensions: Length x Width x Height (cm)</label>
										<div class="input-group">
											<input class="form-control add-listing_form uintTextBox input-field" placeholder="Length"   onKeyUp="suma();" id="l1" name="length" class="form-control" step="any" type="" value="<?php if(!empty($_SESSION['length'])) echo $_SESSION['length'];?>" required="required"/>
											<span class="input-group-addon cross-custom"><strong class="text-white">X</strong></span>
											<input  class="form-control add-listing_form uintTextBox input-field" placeholder="Width"   onKeyUp="suma();" id="w2" name="width" step="any" type="" value="<?php if(!empty($_SESSION['width'])) echo $_SESSION['width'];?>" required="required"/>
											<span class="input-group-addon cross-custom"><strong class="text-white">X</strong></span>
											<input class="form-control add-listing_form uintTextBox input-field" placeholder="Height"   onKeyUp="suma();" id="h3" name="height" class="form-control" step="any" value="<?php if(!empty($_SESSION['height'])) echo $_SESSION['height'];?>" required="required"/>
											<input type="number" class="form-control"  placeholder="" id="total_result" name="total_res" style="display:none;">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn btn-rounded btn-custom m-3 px-md-5 pull-right" name="submit"><i class="fa fa-cube mr-1"></i> Find the best price</button>
									</div>	
								</div>
							</div>

							<p class="u-fs-12 u-lh-1_8 my-4 text-red">
								****Bellshipitnow’s membership is free, customer will only pay for their shipping and $35 administration/service fee of shipment items enclosed in a box with max dimensions 12x10x9, any additional boxes or anything exceeding these dimensions will not exceed half of administration/service fee.****
							</p>
						</div>
						</div><!-- col -->

						<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="box2 <?php if(empty($_SESSION['rates'])){echo 'd-none';} ?> boxes shadow-md mb-2 bg-light rounded">
								<div class="main-info d-flex justify-content-between mb-4">
									<h3 class="padd-set">Shipping To: <span><?php echo $_SESSION['dest'];?></span></h3>
									<h3>Billable Weight: <span><?php echo $_SESSION['weight'];?> Lbs</span></h3>
								</div>
								
				                <?php /*<div class="main-info d-flex mb-4">
				                    <h2>Billable Weight: <span><?php echo $_SESSION['weight'];?> Lbs</span></h2>
								</div>*/?>
								
								<?php foreach($_SESSION['rates'] as $Key => $value){	
									echo '<h3>'.$value->amount.' ( '.$value->duration_terms.' )<img src="'.$value->provider_image_75.'" alt="bellshipitnow_shpping_partner" style="float:right"></h3>';
									echo '<dl>
											<dt> Shipping cost :</dt>
											<dd>$'.$value->amount.'</dd>
										 </dl>';
									} 
								?>	
								   
							</div><!-- box2 -->
						</div><!-- col -->
					</div><!-- row -->
				</form>	
			</div>	
		</div> <!-- END 	row-->

		<hr class="u-my-60">

		<div class="row align-items-center">
			<div class="col-lg-12 my-4 order-2 order-lg-1">
				<?php if(!$ratesrow):?>
					<tr>
						<td colspan="4">

							<?php echo "
							<i align='center' class='display-3 text-warning d-block'><img src='dashboard/assets/images/alert/ohh_shipment_rate.png' width='130' alt='shop USA stores' /></i>					
							",false;?>

						</td>
					</tr>
					<?php else:?>

						<table class="table shopping-cart-wrap">	
							<thead class="text-muted">
								<tr>
									<th scope="col"></th>
									<th scope="col" width="250">Delivery Time</th>
									<th scope="col" width="200">Services</th>
									<th scope="col" width="200" class="text-center">Shipping Cost
										<img src="uploads/tooltip.svg" data-toggle="tooltip" data-html="true" data-placement="top" title="Please note that the final price may vary depending on: - Parcel size - Delivery/pickup loctions - Taxes &amp; duties  S"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($ratesrow  as $row):?>
										<tr>
											<td class="align-middle">
												<div class="price-wrap">
													<img src="thumbmaker.php?src=<?php echo UPLOADURL;?><?php echo ($row->brand) ? $row->brand : "no_photo.png";?>&amp;w=120&amp;h=60&amp;s=1&amp;a=t1" alt="" title="<?php echo $row->n_courier;?>">	 <?php echo $row->services;?>
												</div>								
											</td>
											<td class="align-middle"> 
												<div class="price-wrap">
													<span><?php echo $row->deli_time;?></span>
												</div>
											</td>
											<td class="align-middle"> 
												<div class="price-wrap">
													<dl class="param param-inline small">
														<?php if($row->free_ship == 'Free Pickup'){ ?><span><img src="uploads/free.svg" alt="bellshipitnow-unbox the possibilities" class="img-fluid"> <?php echo $row->free_ship;?></span><?php }else{ ?> <?php } ?></br>
														<?php if($row->drop_off == 'Drop-off'){ ?><span><img src="uploads/drop_off.svg" alt="think global expert for import and export" class="img-fluid"> <?php echo $row->drop_off;?></span><?php }else{ ?> <?php } ?>
													</dl>	
												</div>
											</td>
											<td class="align-middle"> 
												<div class="price-wrap"> 
													<b><?php echo $core->currency;?> <span><?php echo $row->rate;?></span></b> 
													<a href="booking.php?do=booking&amp;action=ship&amp;id=<?php echo $row->id;?>&amp;length=<?php if(isset($_POST['length'])){echo $_POST['length'];}else{ echo 0; }?>&amp;width=<?php if(isset($_POST['width'])){echo $_POST['width'];}else{ echo 0;}?>&amp;height=<?php if(isset($_POST['height'])){echo $_POST['height'];}else{echo 0;}?>&amp;weight=<?php if(isset($_POST['weight'])){echo $_POST['weight'];}else{echo $_POST['r_weight'];}?>&amp;type=<?php if(isset($_POST['type'])){echo $_POST['type'];}else{ echo " "; }?>&amp;scountry=<?php if(isset($_POST['scountry'])){echo $_POST['scountry'];}else{ echo " "; }?>"><button class="btn btn-sm btn-rounded btn-outline-green px-md-3 m-3">Ship</button></a> 
												</div>
											</td>								
										</tr>
									<?php endforeach;?>
									<?php unset($row);?>
								<?php endif;?>
							</tbody>
						</table>
					</div> <!-- END col-md-6-->
				</div> <!-- END 	row-->
			</div> <!-- END container-->
		</section> <!-- END section-->


		<?php require_once("footer.php");?> 

		<div class="scroll-top bg-white box-shadow-v1">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</div> 

		<script type="text/javascript">
			function suma()
			{
				// <!--General sale formula-->
				var num2 = "5.56789";
				var sum2 = document.getElementById("sum2");

				// <!--VOLUMETRIC WEIGHT-->
				var l1 = document.getElementById("l1");
				var w2 = document.getElementById("w2");


				var input = document.getElementById("total_result");

				// <!--Formula Values-->
				var volumetric = <?= !empty(trim($core->meter))?$core->meter:0 ?>;

				var total_metric = l1.value * w2.value * h3.value/volumetric; 		//<!--Volumetric weight result-->
				var total_weight = sum2.value; 										//<!--Shipping weight value-->	


				var calculate_weight;
				if (total_weight > total_metric) {
					calculate_weight = total_weight;
				} else {
					calculate_weight = total_metric;
				}


				total_result = parseFloat(parseFloat(calculate_weight)) .toFixed(2);  //<!--Total result formula-->

				input.value = total_result;

			}

			function kindCheck()
			{
				if ($('#ReceiptKind').val() != 'Document')
			 	{
					$('.nondoc').show();
					$('.doconly').hide();

					document.getElementById('sum2').required = true;

					$('.input-group input').prop('disabled',false);
				} 
				else 
				{
					$('.nondoc').hide();
					$('.doconly').show();

					document.getElementById('sum2').required = false;

					$('.input-group input').prop('disabled',true);
				}
			}

			$('#ReceiptCompareForm .countryselect').select2();

			$(document).ready(function(){
				kindCheck();
			});

			$('#ReceiptKind').change(function() {
				kindCheck();
			});
			//]]>
		</script>

<script src="assets-theme/js/fury.js"></script>
<script src="assets/js_/script.js"></script>
<!-- Validate JS -->
<script src="assets/js_/validate.js"></script>
<!-- Contact JS -->
<script src="assets/js_/contact.js"></script>

<script src="assets/js_/popper.min.js"></script>
<script src="assets/js_/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>

<script>
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      	} 
	  else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));

$(".uintTextBox").inputFilter(function(value) {
  return /^\d*$/.test(value); });
</script>


<script>
	$( document ).ready(function() {
		// $('form.shipping_form').submit(function(){			
		// 	$('.box2').addClass('d-block');
		// });

		//Validate postal-code
		$('#zipcode').on('keyup, input',function(){ 
            zip = $(this).val();
            zip_len = zip.length;
            $.ajax({
                url  : 'https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&sensor=true&key=AIzaSyD6zLsfMk3jv6bydjtXy5hXxk7nD-y-rzg',
                success : function( data, textStatus ) {
					try{
						console.log(data.results[0]['address_components']);
						// if(zip_len<6){
						// 	long_name = data.results[0]['address_components'][5].long_name;
						// }
						// else{
						// 	long_name = data.results[0]['address_components'][2].long_name;
						// }
						// if(typeof long_name !== "undefined" || long_name != ''){
							$(".validate_zip").remove();
						// 	// $("#ReceiptCountryId").val(long_name);
						// 	// $("#ReceiptCountryId").prop("disabled", true);
						// }
					}
					catch(e){
						var warn = '<p id="validate_zip" class="validate_zip" style="font-size:12px; color:red;">Invalid postal code!</p>';
						$(".validate_zip").remove();
						$("#zipcode").after(warn);
						// $("#ReceiptCountryId").val('');
					}
                }
            });    
        });
	});
</script>

</body>	
</html>