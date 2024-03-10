<?php 
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    else{
        session_destroy();
        $_SESSION = array();
    }
    $_SERVER["HTTP_ACCEPT_LANGUAGE"]='en-US';
    require_once('vendor/shippo-php-client-master/lib/Shippo.php');
    // test key shippo_test_e59aa237e0b0519947985acf993131cd8c93bd7c
    // live key shippo_live_2c366c199257cf916d15a08def27ed8d5493621d
    Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");
    $fromAddress = array(
        'name' => 'Rouzier Charles',
        'street1' => '228 Park Ave A',
        'city' => 'New York',
        'state' => 'NY',
        'zip' => 10003,
        'country' => 'United States'
    );

    $toAddress = array(
        'zip' => $_POST['zipcode'],
        'country' => $_POST['r_dest']
    );

    $parcel = array(
        'length'=> $_POST['length'],
        'width'=> $_POST['width'],
        'height'=> $_POST['height'],
        'distance_unit'=> 'in',
        'weight'=> $_POST['weight'],
        // 'quantity' => $_POST['r_qnty'],
        'mass_unit'=> 'lb',
    );

    // Example CustomsItems object.
    // The complete reference for customs object is here: https://goshippo.com/docs/reference#customsitems
    $customs_item = array(
        'description' => $_POST['type'],
        'quantity' => '1',
        'net_weight' => (int)$_POST['weight']*453.592,
        'mass_unit' => 'g',
        'value_amount' => '20',
        'value_currency' => 'USD',
        'origin_country' => 'US',
        'tariff_number' => '',
    );

    // Creating the Customs Declaration
    // The details on creating the CustomsDeclaration is here: https://goshippo.com/docs/reference#customsdeclarations
    $customs_declaration = Shippo_CustomsDeclaration::create(
    array(
        'contents_type'=> 'MERCHANDISE',
        'contents_explanation'=> $_POST['type'],
        'non_delivery_option'=> 'RETURN',
        'certify'=> 'true',
        'certify_signer'=> 'Rouzier Charles',
        'items'=> array($customs_item),
    ));
    
    // $shipObj = json_decode($shipment);
    // foreach($shipObj->rates as $key => $value){
    // }

    // // print_r($shipObj);

try {
    $shipment = Shippo_Shipment::create( array(
        'address_from'=> $fromAddress,
        'address_to'=> $toAddress,
        'parcels'=> array($parcel),
        'customs_declaration' => $customs_declaration -> object_id,
        'async'=> false,
        )
    );
    $shipObj = json_decode($shipment);
    /*echo '<pre>';
    print_R($shipObj->rates);
    exit();*/
    $_SESSION['rates'] = $shipObj->rates;
    $_SESSION['dest'] = $_POST['r_dest'];
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['width'] = $_POST['width'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['zipcode'] = $_POST['zipcode'];
    // print_r($_SESSION); exit();
}

catch(Exception $e) {
    $session['message'] = $e;
}

header("location: ./v7/index.php#shipping_rate");
// header("location: shipping-rates.php");
