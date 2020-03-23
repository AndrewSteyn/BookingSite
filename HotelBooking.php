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
<div id="compare">
<?php
if (isset($_POST["submit"])){
require_once('scripts/compareClass.php');
echo $_POST['surname'].$_POST['name'].$_POST['email'].$_POST['checkin'].$_POST['checkout'].$_POST['selection1'].$_POST['selection2'];
$compare = new Compare($_POST['name'],$_POST['surname'],$_POST['email'],$_POST['checkin'],$_POST['checkout'],$_POST['selection1'],$_POST['selection2']);       
echo $compare->displayInfo();
echo $compare->bookButton();


}
?></div>



    <form class="inputField" role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> 
    <label class="inputField" for="name">NAME</label><input class="inputField" type="text" name="name" required>
</br>
  <label class="inputField" for="surname">SURNAME</label><input class="inputField" type="text" name="surname" required>
</br>
  <label class="inputField" for="email">EMAIL</label><input class="inputField" type="email" name="email" required>
</br>
  <label class="inputField" for="checkin">Check-In</label><input class="inputField" type="date" name="checkin">
</br>
  <label class="inputField" for="checkout">Check-Out</label><input class="inputField" type="date" name="checkout">
     
</br>


<?php
require_once('scripts/bookingClass.php');


     //$name,$price,$wifi,$pool,$gym,$parking,$bar,$pets,$restaurant,$spa,$tv,$ac
    $radison = new Hotel('Radisson Blu Hotel, Port Elizabeth',1250,true,true,true,false,true,false,true,false,true,true);
    $kelway = new Hotel('The Kelway Hotel',1150,true,true,false,true,false,false,true,false,true,true);
    $hub = new Hotel('The Hub Boutique Hotel',1050,true,true,false,true,true,false,false,false,true,false);
    $protea = new Hotel('Protea Hotel Port Elizabeth Marine',1450,true,true,true,true,true,false,true,true,true,true);
    
$hotels =array($radison,$kelway,$hub,$protea) ;

// front info
    $info = array(array('Raddison Blue Hotel','The Kelway Hotel','The Hub Boutique Hotel','Protea Hotel Port Elizabeth Marine'),
                  array('raddisonBuilding.jpg','kelwayFront.jpg','hubFront.jpg','proteaPool.jpg'),
                  array('Overlooking the Indian Ocean, this stylish hotel sits across the road from Hobie Beach and is 2.3 km from Humewood Golf Course.',
                        'Offering views of Nelson Mandela Bay and its cliffs, this 4-star hotel features spacious rooms and a plunge pool. The hotel is located opposite Bayworld Oceanarium.',
                        'The Hub Boutique Hotel offers modern and stylish rooms with balcony or patio overlooking the garden and pool. Located in Port Elizabeth’s suburb of Walmer, the hotel provides free Wi-Fi throughout.',
                        'Protea Marine offers glorious ocean views within walking distance of Port Elizabeth, the “Friendly City” of the Eastern Cape coast and a favourite destination along South Africa’s Garden Route.'),
                  array($radison->price,$kelway->price,$hub->price,$protea->price),
                  array('radison','kelway','hub','protea'));



                  for ($x=0; $x<count($info[0]); ++$x){
                    echo"\n".'<h2 class="headings">'.$info[0][$x].'</h2>';
                    echo'</br> <img class="image" src="images/'.$info[1][$x].'">';
                    echo'</br><p class="text">'.$info[2][$x].'</p>'; 
                  }; 
                  
?>

<select id="selection1" name="selection1">
 <option name="radison">Raddison Blue Hotel</option>
 <option name="kelway">The Kelway Hotel</option>
 <option name="hub">The Hub Boutique Hotel</option>
 <option name="protea">Protea Hotel Port Elizabeth Marine</option>
</select>

<select id="selection2" name="selection2">
 <option name="radison">Raddison Blue Hotel</option>
 <option name="kelway">The Kelway Hotel</option>
 <option name="hub">The Hub Boutique Hotel</option>
 <option name="protea">Protea Hotel Port Elizabeth Marine</option>
</select>
<button class="submitButton" type="submit" value="submit" name="submit">SUBMIT</button>
</form>




<!-- Email -->
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
    $mail->setFrom('andrew-3f02ff@inbox.mailtrap.io', 'Mailer');
    $mail->addAddress($_POST, $_POST);     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Booking for'.$_POST[''];
    $mail->Body    = 'Hello Hotel Manager there has been an enquiry to book a room for'.$_POST[''].'nights.
                      From'.$_POST['checkin'].' till'.$_POST['checkout'].'. Please Contact the guests for further information.
                      Here are their details, Name='.$_POST['name'].'Surname='.$_POST['surname'].'email='.$_POST['email'].'.';
    $mail->AltBody = 'Hello Hotel Manager there has been an enquiry to book a room for'.$_POST[''].'nights.
                      From'.$_POST['checkin'].' till'.$_POST['checkin'].'. Please Contact the guests for further information.
                      Here are their details, Name='.$_POST['name'].'Surname='.$_POST['surname'].'email='.$_POST['email'].'.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
<!-- End Email -->

</body>

</html>