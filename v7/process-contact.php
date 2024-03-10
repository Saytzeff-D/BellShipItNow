<?php
    /**
     * Requires the "PHP Email Form" library
    * The "PHP Email Form" library is available only in the pro version of the template
    * The library should be uploaded to: vendor/php-email-form/php-email-form.php
    */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader
    require 'vendor/autoload.php';

    session_start();
    
    $name = isset($_POST['name']) && !empty($_POST['name'])?$_POST['name']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $subject = isset($_POST['subject']) && !empty($_POST['subject'])?$_POST['subject']:'';
    $message = isset($_POST['message']) && !empty($_POST['message'])?$_POST['message']:'';

    if(empty($name) || empty($email) || empty($subject) || empty($message))
    {
        $response['status'] = 400;
        $response['message'] = 'Please enter your name, email, subject and message';
        $_SESSION['message'] = 'Please enter your name, email, subject and message';
        $_SESSION['status'] = 400;
        $_SESSION['error'] = 'Please enter your name, email, subject and message';
        header("location:index.php");
        exit();
        die;
        $response = json_encode($response);
        echo $response;
        exit();
        die;
    }

    $img = 'https://bellshipitnow.com/uploads/logo.png';
            
    $mailContent = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Bellshipitnow Customer Enquiry</title>
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
                            Bellshipitnow
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
                        <h6 align="center" style="font-size: 1.5rem;">Name : '.$name.'
                        </h6>
                    </tr>
                    <tr>
                        <h6 align="center" style="font-size: 1.5rem;">Email : '.$email.'
                        </h6>
                    </tr>
                    <tr>
                        <h6 align="center" style="font-size: 1.5rem;">Subject : '.$subject.'
                        </h6>
                    </tr>
                    <tr>
                        <h6 align="center" style="font-size: 1.5rem;">Message : '.$message.'
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
    $subject = "Bellshipitnow Customer Enquiry";
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
        $_SESSION['status'] = 400;
        $_SESSION['message'] = 'Something went wrong';
        $_SESSION['submission-error'] = 'Something went wrong';
        // header("location: index.php");
        // echo json_encode($_SESSION);
        header("location:index.php");
        exit();
        die;
    }
    else
    {
        $_SESSION['status'] = 200;
        // header('Content-Type: application/json');
        // header("HTTP/1.1 400 Bad request");
        $_SESSION['message'] = 'Thank you! We have received your message! We will contact you shortly.';
        $_SESSION['success'] = 'Thank you! We have received your message! We will contact you shortly.';
        // echo $_SESSION;
        header("location:index.php");
        exit();
        die;
    }
        
?>
