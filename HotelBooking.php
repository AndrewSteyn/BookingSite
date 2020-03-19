<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<!Doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

</head>

<body>


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>

    <form role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> 
    <label for="user">NAME</label><input type="text" name="user" required>
</br>
  <label for="surname">SURNAME</label><input type="text" name="surname" required>
</br>
  <label for="email">EMAIL</label><input type="email" name="email" required>
</br>
  <label for="checkin">Check-In</label><input type="datetime-local" name="checkin">
</br>
  <label for="checkout">Check-Out</label><input type="datetime-local" name="checkout">
     <button class="submitButton" type="submit" value="submit" name="submit">SUBMIT</button>
</br>

</form>
<?php
require_once('scripts/bookingClass.php');
require_once('scripts/compareClass.php');

     //$name,$price,$wifi,$pool,$gym,$parking,$bar,$pets,$restaurant,$spa,$tv,$ac
    $radison = new Hotel('Radisson Blu Hotel, Port Elizabeth',1250,true,true,true,false,true,false,true,false,true,true);
    $kelway = new Hotel('The Kelway Hotel',1150,true,true,false,true,false,false,true,false,true,true);
    $hub = new Hotel('The Hub Boutique Hotel',1050,true,true,false,true,true,false,false,false,true,false);
    $protea = new Hotel('Protea Hotel Port Elizabeth Marine',1450,true,true,true,true,true,false,true,true,true,true);
    
$hotels =array($radison,$kelway,$hub,$protea) ;


    $info = array(array('Raddison Blue Hotel','The Kelway Hotel','The Hub Boutique Hotel','Protea Hotel Port Elizabeth Marine'),
                  array('raddisonBuilding.jpg','kelwayFront.jpg','hubFront.jpg','proteaPool.jpg'),
                  array('Overlooking the Indian Ocean, this stylish hotel sits across the road from Hobie Beach and is 2.3 km from Humewood Golf Course.',
                        'Offering views of Nelson Mandela Bay and its cliffs, this 4-star hotel features spacious rooms and a plunge pool. The hotel is located opposite Bayworld Oceanarium.',
                        'The Hub Boutique Hotel offers modern and stylish rooms with balcony or patio overlooking the garden and pool. Located in Port Elizabeth’s suburb of Walmer, the hotel provides free Wi-Fi throughout.',
                        'Protea Marine offers glorious ocean views within walking distance of Port Elizabeth, the “Friendly City” of the Eastern Cape coast and a favourite destination along South Africa’s Garden Route.'),
                  array($radison->price,$kelway->price,$hub->price,$protea->price));



                  for ($x=0; $x<count($info[0]); ++$x){
                    echo"\n".'<h2>'.$info[0][$x].'</h2>';
                    echo'</br> <img class="front" src="images/'.$info[1][$x].'">';
                    echo'</br><p class="text">'.$info[2][$x].'</p>'; 
                      
               };                

?>







<?php
if (isset($_POST["book"])){
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '3c52a86d140a7b';                     // SMTP username
    $mail->Password   = '1422144da449c9';                               // SMTP password
    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('andre-3f02ff@inbox.mailtrap.io', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>


</body>

</html>