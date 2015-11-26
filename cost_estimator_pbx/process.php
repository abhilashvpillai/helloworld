<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

/*

Array ( [radiog_lite] => existing [checkboxG1] => on [name] => abhilash [company] => testcompany [email] => test@gmail.com
[phone] => 2276745 [numUser] => 10 [dedicatedData] => false [optionalAddon] => true [estimatedCost] => 240 [_] => 1436900329251 ) 1


*/

    $mail = new PHPMailer;

    $clientName = $_GET['name'];
    $companyName = $_GET['company'];
    $clientEmail = $_GET['email'];
    $clientPhone = $_GET['phone'];
    $numUsers = $_GET['numUser'];
    if($_GET['optionalAddon']=='true') {
        $optionalAddon = 'Yes';
    } else {
        $optionalAddon = 'No';
    }
    if($_GET['dedicatedData']=='false') {
        $existingPlan = 'Yes';
        $dedicatedData = 'No';
    } else {
        $dedicatedData = 'Yes';
        $existingPlan = 'No';
    }
    $estimatedCost = $_GET['estimatedCost'];
    $requestDate = date("d-m-Y");

    $firstTdStyle = 'background-color:#FF6C00;text-align:center;font-size:16px;font-family:Arial;font-weight:bold;color:#ffffff;-moz-border-radius: 10px 10px 0px 0px;-webkit-border-radius:10px 10px 0px 0px;border-radius: 10px 10px 0px 0px;';
    $tdStyle = 'vertical-align:middle;background-color:#f2c296;border:1px solid white;text-align:center;padding:8px;font-size:14px;font-family:Arial;font-weight:bold;color:#000000;';
    $tdDStyle = 'vertical-align:middle;background-color:#f2c296;border:1px solid white;text-align:right;padding:8px;padding-right:60px;font-size:14px;font-family:Arial;font-weight:bold;color:#000000;';
    $slTdStyle = $tdDStyle . '-moz-border-radius-bottomleft:10px;-webkit-border-bottom-left-radius:10px;border-bottom-left-radius:10px;';
    $lTdStyle = $tdStyle . '-moz-border-radius-bottomright:10px;-webkit-border-bottom-right-radius:10px;border-bottom-right-radius:10px;';

    $message = '<html><body><div style="height:35px;"><table style="border-collapse:collapse;border-spacing:0;width:100%;height:100%;margin:0px;padding:0px;text-align:center;">';
    $message .= '<tr style="height:35px;"><td colspan="2" style="'. $firstTdStyle .'">';
    $message .= 'Request For Detailed Estimate</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Date (d/m/y)</td><td style="'.$tdStyle.'">' . $requestDate . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Name</td><td style="'.$tdStyle.'">' . $clientName . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Company Name</td><td style="'.$tdStyle.'">' . $companyName . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Email</td><td style="'.$tdStyle.'">' . $clientEmail . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Phone</td><td style="'.$tdStyle.'">' . $clientPhone . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Number of Users</td><td style="'.$tdStyle.'">' . $numUsers. '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Use Existing Internet (BYOB)</td><td style="'.$tdStyle.'">' . $existingPlan . '<br>';
    $message .= '<tr><td style="'.$tdDStyle.'">Dedicated Data for Voice<br />(For Voice Quality/Security Guarantee)</td><td style="'.$tdStyle.'">' . $dedicatedData . '</td></tr>';
    $message .= '<tr><td style="'.$tdDStyle.'">Optional 4G/LTE addon</td><td style="'.$tdStyle.'">' . $optionalAddon . '</td></tr>';
    $message .= '<tr><td style="'.$slTdStyle.'">Estimated Cost</td><td style="'.$lTdStyle.'">$' . $estimatedCost. '.00/month</td></tr>';
    $message .= '</table></div></body></html>';


    $mail->isSMTP();                                        // Set mailer to use SMTP
    $mail->Host = 'mail.slidesharegurus.com';               // Specify main and backup SMTP servers ('mail.slidesharegurus.com')
    $mail->SMTPAuth = true;                                 // Enable SMTP authentication
    $mail->Username = 'projects@slidesharegurus.com';       // SMTP username
    $mail->Password = 'abhilash123';                        // SMTP password
    $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                      // TCP port to connect to (25)

    $mail->From = 'projects@slidesharegurus.com';
    $mail->FromName = 'Broadsoft';
    $mail->addAddress('abhilashviswanath@gmail.com');    // Add a recipient
    $mail->addAddress('nayanauiux@gmail.com');
    $mail->isHTML(true);                                    // Set email format to HTML

    $mail->Subject = 'Request for detailed estimate';
    $mail->Body    = $message;
    $mail->AltBody = 'Request for detailed estimate';

    $retval = $mail->send();

    if( $retval == true ) {
        echo "1";
    }
    else {
        echo "0";
    }


?>
