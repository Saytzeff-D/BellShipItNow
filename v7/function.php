<?php
include('config.php');
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$action = isset($_POST['action']) && !empty($_POST['action'])?$_POST['action']:'none';

if($action == 'send-otp')
{
    $recipient_email = isset($_POST['sa_email']) && !empty($_POST['sa_email'])?$_POST['sa_email']:'';
    
    $sql = "SELECT * FROM  `users` WHERE `email` = '$recipient_email'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();

    if ($result->num_rows > 0) 
    {
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_name'] = $row['fname'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['state'] = $row['state'];
        $_SESSION['state_shortname'] = $row['state_shortname'];
        $_SESSION['postal'] = $row['postal'];
        $response['status'] = 201;
        $response['message'] = 'Welcome back '.$row['fname'].'!';
        $response['submission-error'] = '';
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }
    else
    {

        $code = mt_rand(1000,9999);
    
        $img = 'https://bellshipitnow.com/uploads/logo.png';
    
        $mailContent = '<!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Bellshipitnow Shop Assistant Email Verification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </head>
        <body style="border: 2px solid #e4e0e0; width: 98%;
        margin: auto; font-family: Times, Times New Roman, Georgia, serif">
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td align="center">
                        <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                            <tbody>
                                <tr>
                                    <td align="center">
                                    <img style="width:6rem;" loading="lazy" src="'.$img.'">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center">
                            <hr style="color:black;">
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <h3 style="color:#0994dcff;font-size: 1.6rem;">
                                        Bellshipitnow Shop Assistant Email Verification
                                    </h3>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td align="center">
                    <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                        <tbody>
                            <tr>
                                <h6 align="center" style="font-size: 1.5rem;">Verification Code : '.$code.'
                                </h6>
                            </tr>
    
                            <tr>
                                <h6 align="center" style="font-size: 1.5rem;">Please enter the above code to verify your email and continue with Bellshipitnow Shop Assistant
                                </h6>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td align="center">
                    <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                        <tbody>
                        <tr></tr>
                        <tr>
                            <h4 align="center" style="font-size: 1.5rem; font-weight:bold;">
                            THANKS,
                            </h4>
                            <h4 align="center" style="font-size: 1.5rem;">
                                Bellshipitnow
                            </h4>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td align="center">
                    <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                        <tbody>
                        <tr>
                            <p align="center" style="font-size: 1.2rem;">
                                Need help? Have feedback? Feel free to contact us at info@Bellshipitnow.com, or at our helpline  1-844-227-4641
                            </p>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <p align="center" style="font-size: 1.2rem;">&copy; All Rights Reserved - Bellshipitnow '.date("Y").'
                        </p>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>';
        $toName = 'Rouzier Charles';
        $fromName = "BellShipItNow";
        $fromEmail = "info@bellshipitnow.com";
        $subject = "Bellshipitnow Shop Assistant Email Verification";
        $htmlMessage = $mailContent;
    
        $data = array
        (
            "sender" => array
            (
                "email" => $fromEmail,
                "name" => $fromName
            ),
            "to" => array
            (
                array
                (
                    "email" => $recipient_email,
                    "name" => $recipient_email
                ),
                array
                (
                    "email" => 'rouziercx@gmail.com',
                    "name" => $toName
                ),
                array
                (
                    "email" => 'dev@hachiweb.com',//$property_email,
                    "name" => "HACHIWEB"
                )
            ),
            "subject" => $subject,
            "htmlContent" => $htmlMessage
        );
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Api-Key: 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';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // $result = 1;
        $result = curl_exec($ch);
        curl_close($ch);
    
        if (!$result)
        {
            $response['status'] = 400;
            $response['message'] = 'Something went wrong';
            $response['submission-error'] = 'Something went wrong';
            $response = json_encode($response);
            echo $response;
            exit();
            die;
        }
        else
        {
            $response['status'] = 200;
            // header('Content-Type: application/json');
            // header("HTTP/1.1 400 Bad request");
            $response['message'] = 'The verification code has been sent to your email. Please check and enter code';
            $response['data'] = $code;
            $response['success'] = 'The verification code has been sent to your email. Please check and enter code';
            $response = json_encode($response);
            echo $response;
            exit();
            die;
        }
    }
}

if($action == 'validate-username')
{
    $username = isset($_POST['username']) && !empty($_POST['username'])?$_POST['username']:'';
    $sql = "SELECT * FROM  `users` WHERE `username` = '$username'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();

    if ($result->num_rows === 1) 
    {
        $response['status'] = 400;
        $response['message'] = 'Username already exist. Please choose a different username';
        $response['data'] = '';
        $response['success'] = 'Username already exist. Please choose a different username';
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }
    else
    {   
        $name = isset($_POST['name']) && !empty($_POST['name'])?$_POST['name']:'';
        $email = isset($_POST['email']) && !empty($_POST['email'])?$_POST['email']:'';
        $country_code = isset($_POST['country_code']) && !empty($_POST['country_code'])?$_POST['country_code']:'';
        $phone = isset($_POST['phone']) && !empty($_POST['phone'])?$_POST['phone']:'';
        $password = isset($_POST['password']) && !empty($_POST['password'])?md5($_POST['password']):'';
        $username = isset($_POST['username']) && !empty($_POST['username'])?$_POST['username']:'';
        $street_address = isset($_POST['street_address']) && !empty($_POST['street_address'])?$_POST['street_address']:'';
        $city = isset($_POST['city']) && !empty($_POST['city'])?$_POST['city']:'';
        $country = isset($_POST['country']) && !empty($_POST['country'])?$_POST['country']:'';
        $zipcode = isset($_POST['zipcode']) && !empty($_POST['zipcode'])?$_POST['zipcode']:'';
        $state = isset($_POST['state']) && !empty($_POST['state'])?$_POST['state']:'';
        $state_shortname = isset($_POST['state_shortname']) && !empty($_POST['state_shortname'])?$_POST['state_shortname']:'';
        if (empty($state) || empty($state_shortname)) 
        {
            $response['status'] = 400;
            $response['message'] = 'Please enter a valid zipcode!';
            $response['data'] = '';
            $response['success'] = 'Please enter a valid zipcode!';
            $response = json_encode($response);
            echo $response;
            exit();
            die;
        }
        $customer_number = 'BSN'.rand(111111,999999);
        $sql = "INSERT INTO `users` (`fname`,`username`, `email`, `userlevel`,`code_phone`,`phone`,`password`,`customer_number`,`state_shortname`,`state`,`avatar`,`ip`,`address`,`city`,`country`,`postal`) VALUES('$name','$username','$email',1,'$country_code','$phone','$password','$customer_number','$state_shortname','$state','NA','NA','$street_address','$city','$country','$zipcode');";
        
        if ($conn->query($sql) === TRUE) 
        {   
            require(dirname(__DIR__).'/vendor/fpdf/fpdf.php');
            $letter_logo = dirname(__DIR__).'/assets/img/bellshipitnow_logo.png';
            $pdf = new FPDF();
            $pdf->AddPage('P','A5');
            $msg = 'Dear '.$name.',
            On behalf of the entire Bellshipitnow team, I would like to take this opportunity to welcome you as a new customer.  We are thrilled to have you with us. Your new US address is:
            Name: '.$name.'
            Address (line 1): 228 Park Ave A # 698760 ('.$customer_number.')
            City:  228 Park Ave A # 698760 
            State: New York, New York
            Zip Code/Postal Code: 10003
            At Bellshipitnow, we pride ourselves on offering our customers responsive, competent and excellent service. Our customers are the most important part of our business, and we work tirelessly to ensure your complete satisfaction, now and for as long as you are a customer. 
            I am so happy to inform you that I will be your primary point of contact at the company, and I encourage you to contact me at any time with your questions, comments and feedback.
            I can be reached during regular business hours in the following ways:
            Phone:  1-844-227-4641
            Email:  support@bellshipitnow.com
            Thank you again for entrusting Bellshipitnow as your personal worldwide shipper business needs. We are honored to serve you. 

            Sincerely,
            Bellshipitnow Team
            ';
            $html_msg = '<h4>Dear '.$name.',</h4><br>
            <p>On behalf of the entire Bellshipitnow team, I would like to take this opportunity to welcome you as a new customer.  We are thrilled to have you with us. Your new US address is:</p>
            <p>Name: '.$name.'</p>
            <p>Address (line 1): 228 Park Ave A # 698760 ('.$customer_number.')</p>
            <p>City:  228 Park Ave A # 698760 </p>
            <p>State: New York, New York</p>
            <p>Zip Code/Postal Code: 10003</p><br>
            <p>At Bellshipitnow, we pride ourselves on offering our customers responsive, competent and excellent service. Our customers are the most important part of our business, and we work tirelessly to ensure your complete satisfaction, now and for as long as you are a customer. </p>
            <p>I am so happy to inform you that I will be your primary point of contact at the company, and I encourage you to contact me at any time with your questions, comments and feedback.</p>
            <p>I can be reached during regular business hours in the following ways:</p>
            <p>Phone:  1-844-227-4641</p>
            <p>Email:  support@bellshipitnow.com</p>
            <br>
            <p>Thank you again for entrusting Bellshipitnow as your personal worldwide shipper business needs. We are honored to serve you. </p>
            <br>
            <h5>Sincerely,<h5>
            <h4>Bellshipitnow Team</h4>
            ';
            $pdf->Image($letter_logo, 22, 5, 100, 22);
            $pdf->SetFont('Arial','B',7);
            $pdf->SetXY(60, 28); 
            $pdf->Cell(10,4,' 1-844-227-4641');
            $pdf->SetXY(54, 31); 
            $pdf->Cell(10,4,'support@bellshipitnow.com');
            $pdf->Line(5, 36, 140, 36); 
            $pdf->SetLineWidth(2);

            // $pdf->SetFont('Arial','B',13);
            // $pdf->Cell(10,10,'BELLSHIPITNOW');

            $pdf->SetFont('Arial','',8.5);
            // $pdf->setDisplayMode('fullpage');
            $pdf->SetXY(10, 42); 
            // $pdf->cMargin = 0;
            $pdf->Write(6, $msg);
            $file_name = 'welcome_letter('.$customer_number.').pdf';
            $filename = dirname(__DIR__).'/storage/welcome_letters/'.$file_name;
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $welcome_letter_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']).'/..'.'/storage/welcome_letters/'.$file_name;
            $pdf->Output($filename,'F');
            
            $fromName = "BellShipItNow";
            $fromEmail = "info@bellshipitnow.com";
            $subject = "Bellshipitnow Welcome Letter";
            
            $data = array
            (
                "sender" => array
                (
                    "email" => $fromEmail,
                    "name" => $fromName
                ),
                "to" => array
                (
                    array
                    (
                        "email" => $email,
                        "name" => $name
                    ),
                    array
                    (
                        "email" => 'rouziercx@gmail.com',
                        "name" => 'Rouzier Charles'
                    ),
                    array
                    (
                        "email" => 'dev@hachiweb.com',//$property_email,
                        "name" => "HACHIWEB"
                    )
                ),
                "subject" => $subject,
                "htmlContent" => $html_msg,
                "attachment" => array
                (
                    array("url"=>$welcome_letter_url, "name"=>$file_name)
                )
            );
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            $headers = array();
            $headers[] = 'Accept: application/json';
            $headers[] = 'Api-Key: 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';
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            curl_close($ch);

            $response['status'] = 200;
            $response['message'] = 'User registered successfully!';
            $response['data'] = '';
            $response['success'] = 'User registered successfully!';
            $response = json_encode($response);
            if($response)
            {   
                $login_data = 
                array
                ( 
                    "doLogin" => 1,
                    "username" => $username,
                    "password" => $password
                );
                $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $login_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/login.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $login_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $login_data);
                $headers = array();
                $headers[] = 'Api-Key: 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';
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $result = curl_exec($ch);
                curl_close($ch);
            }
            echo $response;
            exit();
            die;
        }
        else
        {
            $response['status'] = 400;
            $response['message'] = 'Something went wrong';
            $response['data'] = '';
            $response['success'] = 'Something went wrong';
            $response = json_encode($response);
            echo $response;
            exit();
            die;
        }
    }
}

if($action == 'get-shipping-charges')
{   
    $email = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
    $width = isset($_POST['width']) && !empty($_POST['width']) ? $_POST['width'] : '1';
    $length = isset($_POST['length']) && !empty($_POST['length']) ? $_POST['length'] : '1';
    $height = isset($_POST['height']) && !empty($_POST['height']) ? $_POST['height'] : '1';
    $weight = isset($_POST['weight']) && !empty($_POST['weight']) ? $_POST['weight'] : '1';
    $type = isset($_POST['type']) && !empty($_POST['type']) ? $_POST['type'] : 'Parcel';
    $cost = isset($_POST['cost']) && !empty($_POST['cost']) ? (float)$_POST['cost'] : '50.00';

    $sql = "SELECT * FROM  `users` WHERE `email` = '$email' LIMIT 1;";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    $country = isset($row['country']) && !empty($row['country']) ? $row['country'] : 'United States';
    $postal = isset($row['postal']) && !empty($row['postal']) ? $row['postal'] : '10003';

    require_once('../vendor/shippo-php-client-master/lib/Shippo.php');
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
        'zip' => $postal,
        'country' => $country
    );

    $parcel = array(
        'length'=> $length,
        'width'=> $width,
        'height'=> $height,
        'distance_unit'=> 'in',
        'weight'=> $weight,
        // 'quantity' => 1,
        'mass_unit'=> 'lb',
        "value_amount" => $cost,
        // "value_currency" => 'USD',
        "metadata" => "",
        "line_items" => [],
        "test" => true,
    );

    // The complete reference for customs object is here: https://goshippo.com/docs/reference#customsitems
    $customs_item = array
    (
        'description' => $type,
        'quantity' => '1',
        'net_weight' => $weight,
        'mass_unit' => 'lb',
        "value_amount" => $cost,
        "metadata" => "",
        "line_items" => [],
        "test" => true,
        'value_currency' => 'USD',
        'origin_country' => 'US',
        'tariff_number' => '',
    );
    // Creating the Customs Declaration
    // The details on creating the CustomsDeclaration is here: https://goshippo.com/docs/reference#customsdeclarations
    $customs_declaration = Shippo_CustomsDeclaration::create(
    array
    (
        'contents_type'=> 'MERCHANDISE',
        'contents_explanation'=> $type,
        'non_delivery_option'=> 'RETURN',
        'certify'=> 'true',
        'certify_signer'=> 'Rouzier Charles',
        'items'=> array($customs_item),
    ));

    try
    {
        $shipment = Shippo_Shipment::create
        ( 
            array
            (
                'address_from'=> $fromAddress,
                'address_to'=> $toAddress,
                'parcels'=> array($parcel),
                'customs_declaration' => $customs_declaration -> object_id,
                'async'=> false,
            )
        );

        $shipObj = json_decode($shipment);
        
        foreach($shipObj->rates as $key => $value)
        {
            $rate = $value->amount;
            break;
        }
       
        $response['status'] = 200;
        $response['data'] = $rate;
        $response['message'] = 'Total cost has been estimated';
    }
    catch(Exception $e)
    {
        $response['status'] = 400;
        $response['data'] = '';
        $response['message'] = "Something went wrong ".$e;
    }
    $response = json_encode($response);
    echo $response;
    exit;
}

if($action == 'send-shopping-list')
{
    $shopping_list = isset($_POST['shopping_list']) && !empty($_POST['shopping_list'])?$_POST['shopping_list']:'';
    $customer_email = isset($_POST['customer_email']) && !empty($_POST['customer_email'])?$_POST['customer_email']:'';
    if(empty($shopping_list) || empty($customer_email))
    {
        $response['status'] = 400;
        $response['message'] = 'Please enter a valid response';
        $_SESSION['error'] = 'Please enter a valid response';
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }
    
    $customer_sql = "SELECT * FROM  `users` WHERE `email` = '$customer_email' LIMIT 1;";
    $customer_result = $conn->query($customer_sql);
    $customer_row = $customer_result -> fetch_assoc();
    
    $customer_number = isset($customer_row['customer_number']) && !empty($customer_row['customer_number']) ? $customer_row['customer_number'] : 'BSN000001';
    $fname = isset($customer_row['fname']) && !empty($customer_row['fname']) ? $customer_row['fname'] : 'NA';
    $email = isset($customer_row['email']) && !empty($customer_row['email']) ? $customer_row['email'] : 'NA';
    $code_phone = isset($customer_row['code_phone']) && !empty($customer_row['code_phone']) ? $customer_row['code_phone'] : '+1';
    $phone = isset($customer_row['phone']) && !empty($customer_row['phone']) ? $customer_row['phone'] : '000';
    $address = isset($customer_row['address']) && !empty($customer_row['address']) ? $customer_row['address'] : 'NA';
    $city = isset($customer_row['city']) && !empty($customer_row['city']) ? $customer_row['city'] : 'NA';
    $state = isset($customer_row['state']) && !empty($customer_row['state']) ? $customer_row['state'] : 'NA';
    $country = isset($customer_row['country']) && !empty($customer_row['country']) ? $customer_row['country'] : 'United States';
    $postal = isset($customer_row['postal']) && !empty($customer_row['postal']) ? $customer_row['postal'] : '10003';

    $img = 'https://bellshipitnow.com/assets/img/bellshipitnow_logo.png';
            
    $mailContent = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Bellshipitnow Shop Assistant List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="border: 2px solid #e4e0e0; width: 98%;
    margin: auto; font-family: Times, Times New Roman, Georgia, serif">
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <img style="width:6rem;" loading="lazy" src="'.$img.'">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center">
                            <hr style="color:black;">
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <h3 style="color:#0994dcff;font-size: 1.6rem;">
                                        Bellshipitnow Shop Assistant
                                    </h3>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table align="center">
                            <hr style="color:black;">
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <h3 style="color:#0994dcff;font-size: 1.2rem;">
                                        Customer Details
                                    </h3>
                                </tr>
                            </tbody>
                            <hr style="color:black;">
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td>Customer Number</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>Postal Code</td>
                </tr>
                <tr>
                    <td>'.$customer_number.'</td>
                    <td>'.$fname.'</td>
                    <td>'.$email.'</td>
                    <td>'.$code_phone.' '.$phone.'</td>
                    <td>'.$address.'</td>
                    <td>'.$city.'</td>
                    <td>'.$state.'</td>
                    <td>'.$country.'</td>
                    <td>'.$postal.'</td>
                </tr>
            </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                '.$shopping_list.'
            </tbody>
        </table>
        <br>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td align="center">
                <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                    <tbody>
                        <tr></tr>
                        <tr>
                            <h4 align="center" style="font-size: 1.5rem; font-weight:bold;">
                            THANKS,
                            </h4>
                            <h4 align="center" style="font-size: 1.5rem;">
                                Bellshipitnow
                            </h4>
                        </tr>
                    </tbody>
                </table>
                </td>
            </tr>
            </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table align="center" cellpadding="0" cellspacing="0" style="width:90%;">
                            <tbody>
                                <tr>
                                    <p align="center" style="font-size: 1.2rem;">
                                        Need help? Have feedback? Feel free to contact us at info@Bellshipitnow.com, or at our helpline  1-844-227-4641
                                    </p>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <p align="center" style="font-size: 1.2rem;">
                        &copy; All Rights Reserved - Bellshipitnow '.date("Y").'
                    </p>
                </tr>
            </tbody>
        </table>
    </body>
    </html>';
    $toName = 'Rouzier Charles';
    $fromName = "BellShipItNow";
    $fromEmail = "info@bellshipitnow.com";
    $subject = "Bellshipitnow Shop Assistant List";
    $htmlMessage = $mailContent;

    $data = array
    (
        "sender" => array
        (
            "email" => $fromEmail,
            "name" => $fromName         
        ),
        "to" => array
        (
            array
            (
                "email" => 'rouziercx@gmail.com',
                "name" => $toName 
            ),
            array
            (
                "email" => 'dev@hachiweb.com',//$property_email,
                "name" => "HACHIWEB" 
            )
        ), 
        "subject" => $subject,
        "htmlContent" => $htmlMessage 
    ); 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Api-Key: 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';
    $headers[] = 'Content-Type: application/json';  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);

    if (!$result) 
    {
        $response['status'] = 400;
        $response['message'] = 'Something went wrong!';
        $_SESSION['error'] = 'Something went wrong!';
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = 'Thank you for shopping with us. We will soon proccess your order';
        $_SESSION['error'] = '';
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }
}