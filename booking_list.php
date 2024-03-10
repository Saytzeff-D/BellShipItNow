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


  define("_VALID_PHP", true);
  require_once("init.php"); 
  include_once 'lib/BookingClass.php';
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
  <link rel="icon" href="uploads/favicon.pngg">
  
  <!-- Title-->
  <title><?php echo $lang['langs_01056'] ?> | <?php echo $core->site_name;?></title>
  
  <!--Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">
  
	<!--Icon fonts-->
	<link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
	<link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">
  
	<link rel="stylesheet" href="assets-theme/css/bundle.css">
	<link rel="stylesheet" href="assets-theme/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.js"></script>
	<script src="assets/js/jquery.wysiwyg.js"></script>
	<script src="assets/js/global.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<link rel="stylesheet" type="text/css" href="assets-theme/main.css">
	<link rel="stylesheet" href="assets-theme/themify-icons.css">
	<!--[if lt IE 8]><!-->
	<link rel="stylesheet" href="assets-theme/ie7/ie7.css">
	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
	<script>
	/* global paypal */
		function pymnt_initiate(total, order, el , id) {
			paypal.Button.render({
				env: 'production',
				style: {
					label: 'buynow',
					fundingicons: true, // optional
					branding: true, // optional
					size: 'small', // small | medium | large | responsive
					shape: 'rect', // pill | rect
					color: 'gold'   // gold | blue | silver | black
				},
				client: {
					sandbox: '',
					production: '<?php echo $core->client_id ?>'
				},
				commit: true,
				payment: function (data, actions) {
					return actions.payment.create({
						payment: {
							transactions: [
								{
									amount: {total: total, currency: '<?php echo $core->currency ?>'}
								}
							]
						}
					});
				},
				// onAuthorize() is called when the buyer approves the payment
				onAuthorize: function (data, actions) {

					// Make a call to the REST api to execute the payment
					return actions.payment.execute().then(function (payment) {

					  

						var path = "<?php echo SITEURL ?>/lib/success.php";
						$.ajax({
							type: 'POST',
							url: path,
							data: {
								tid: payment.id,
								state: payment.state,
								amount:total,
								track:order,
								item_id:id

							},
							success: function (response) {

								console.log(response);

								if (response == "success") {
									$('#'+el).html('<h6><?php echo $lang['langs_01059'] ?></h6>');
									setTimeout(function () {
										//after succefull payment send user to specific page
										window.location.href = "";

									}, 2500);
								}

							}
						});

					});
				}

			}, '#' + el);
		}
		</script>
		
	
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

<section data-dark-overlay="6" data-init="parallax" class="u-py-30 u-pt-lg-200 u-pb-lg-50 u-flex-center" style=" background:url(assets-theme/img/booking/head.jpg) no-repeat; background-size:cover; background-position: center;">
  <div class="container">
    <div class="row">
    	<div class="col-12 text-center text-white">
    		<h1 class="text-white"><?php echo $lang['langs_01057'] ?></h1>
    		<div class="u-h-4 u-w-50 bg-white rounded mx-auto my-4"></div>
    	</div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END intro-hero-->

<section>
  <div class="container">
	   <div class="row align-items-center">
			<div class="col-lg-12 my-4">
				<table class="table table-responsive text-center text-md-left">
					<thead class="bg-secondary border-0 text-white">
						<tr class="row100 head">
						  <th class="column100 column1" data-column="column1"><?php echo $lang['booking-list2'] ?></th>
						  <th class="column100 column2" data-column="column2"><?php echo $lang['booking-list3'] ?></th>
						  <th class="column100 column3" data-column="column3"><?php echo $lang['booking-list4'] ?></th>
						  <th class="column100 column4" data-column="column4"><?php echo $lang['booking-list5'] ?></th>
						  <th class="column100 column5" data-column="column5"><?php echo $lang['booking-list6'] ?></th>
						  <th class="column100 column6" data-column="column6"><?php echo $lang['booking-list7'] ?></th>
						  <th class="column100 column7" data-column="column7"><?php echo $lang['booking-list8'] ?><th>
						  <th class="column100 column8" data-column="column8"><?php echo $lang['booking-list9'] ?></th>
						</tr>
					</thead>
					<tbody>
					<?php if(!$courier_onlinerow):?>
						<tr>
							<td colspan="11">
							
							<?php echo "
							<i align='center' class='display-3 text-warning d-block'><img src='dashboard/assets/images/alert/ohh_shipment.png' width='143' /></i>
							</br>
							<p style='font-size: 18px; -webkit-font-smoothing: antialiased; color: #737373;' align='center'>".$lang['booking-list10']."</p>						
							",false;?>
							
							</td>
						</tr>
						
						<tr class="row100">
						<?php else:?>
						<?php foreach ($courier_onlinerow  as $row):?>							
							<td class="column100 column1" data-column="column1"><a  href="edit_booking.php?do=edit_booking&amp;action=ship&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['booking-list11'] ?>"><?php echo $row->order_inv;?></a></td>
							<td class="column100 column2" data-column="column2"><?php echo $row->created;?> </td>
							<td class="column100 column3" data-column="column3"><?php echo $row->r_description;?></td>
							<td class="column100 column4" data-column="column4"><?php echo $row->r_name;?> </td>
							<td class="column100 column5" data-column="column5"><?php echo $row->r_dest;?></br><?php echo $row->r_city;?> </td>
							<td class="column100 column6" data-column="column6"><?php echo $row->status_courier;?> </td>
							<td class="column100 column7" data-column="column7"><?php echo $row->r_curren;?> <span class="text-black"><strong><?php echo $row->r_costtotal;?></strong></span></td>
							<?php if ($row->status_courier == 'Pending'){ ?>
							<td class="column100 column8" data-column="column8"><span class="text-danger"><?php echo $lang['langs_01058'] ?></span></td>
							<?php }else{ ?>
							
								<?php if ($row->pay_mode == 'Paypal' && $row->payment_status == 0){ ?>
								<script>
									pymnt_initiate("<?php echo $row->r_costtotal; ?>","<?php echo $row->order_inv;?>","pay-btn<?php echo $row->id; ?>","<?php echo $row->id;?>");
								</script>
								<td id="pay-btn<?php echo $row->id; ?>"></td>
								<?php }elseif ($row->pay_mode == 'Credit Card' && $row->payment_status == 0){ ?>
								<script>
									pymnt_initiate("<?php echo $row->r_costtotal; ?>","<?php echo $row->order_inv;?>","pay-btn<?php echo $row->id; ?>","<?php echo $row->id;?>");
								</script>
								<td id="pay-btn<?php echo $row->id; ?>"></td>
								<?php }elseif ($row->pay_mode == 'Cash' && $row->payment_status == 0){ ?>
								<td><img src='dashboard/assets/images/alert/paid.png' width='68' alt="shopping in USA stores"/></td>
								<?php }else{ ?>
								<td><img src='dashboard/assets/images/alert/paid.png' width='68' alt="how to ship"/></td>
								<?php } ?>
							<?php } ?>	
							
							<td class="column100 column9" data-column="column9">
								<a  href="edit_booking.php?do=edit_booking&amp;action=ship&amp;id=<?php echo $row->id;?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['booking-list11'] ?>"><i style="color:#343a40" class="ti-pencil"></i></a>
								<?php if ($row->status_courier == 'Pending'){ ?>
								<?php }else{ ?>
									<a  href="invoice/inv_ship.php?do=inv_ship&amp;action=ship&amp;id=<?php echo $row->id;?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['booking-list12'] ?>"><i style="color:#343a40" class="ti-printer"></i></a>
								<?php } ?>
							</td>
						</tr>
						<?php endforeach;?>
						<?php unset($row);?>
						<?php endif;?>
					</tbody>
				</table>
			</div>	
		</div>

	</div> <!-- END container-->
</section> <!-- END section-->
       

<?php require_once("footer.php");?> 

	<div class="scroll-top bg-white box-shadow-v1">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</div> 
	
	<script src="assets-theme/js/fury.js"></script>
	<script src="assets/js_/script.js"></script>
    <!-- Validate JS -->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
		
  </body>	
</html>