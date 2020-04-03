<?php session_start(); ?>
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
    Booking Site
  </a>
</nav>
<div id="compare">
<script src="scripts/java.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<h1>TEST</h1>
<?php
require('scripts/bookingClass.php');


     //$name,$price,$wifi,$pool,$gym,$parking,$bar,$pets,$restaurant,$spa,$tv,$ac
    $radison = new Hotel('Radisson Blu Hotel, Port Elizabeth',1250,'yes','yes','yes','no','yes','no','yes','no','yes','yes');
    $kelway = new Hotel('The Kelway Hotel',1150,'yes','yes','no','yes','no','no','yes','no','yes','no');
    $hub = new Hotel('The Hub Boutique Hotel',1050,'yes','yes','no','yes','yes','no','no','no','yes','no');
    $protea = new Hotel('Protea Hotel Port Elizabeth Marine',1450,'yes','yes','yes','yes','yes','yes','yes','yes','yes','yes');
    
$hotels =array($radison,$kelway,$hub,$protea) ;


if (isset($_POST["submit"])){
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['surname'] = $_POST['surname'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['checkin'] = $_POST['checkin'];
  $_SESSION['checkout'] = $_POST['checkout'];
require_once('scripts/compareClass.php');
$compare = new Compare($_POST['name'],$_POST['surname'],$_POST['email'],$_POST['checkin'],$_POST['checkout'],$_POST['selection1'],$_POST['selection2']);   


echo $compare->displayInfo();
echo $compare->bookButton();
switch ($_POST['selection1']) {
  case 'radison':
      $op1=$radison;
      break;
  case 'kelway':
      $op1=$kelway;
      break;
  case 'hub':
      $op1=$hub;
      break;

  default:
    $op1=$protea;
}
switch ($_POST['selection2']) {
  case 'radison':
      $op2=$radison;
      break;
  case 'kelway':
      $op2=$kelway;
      break;
  case 'hub':
      $op2=$hub;
      break;

  default:
    $op2=$protea;
}

$datetime1 = new DateTime($_POST['checkin']);
$datetime2 = new DateTime($_POST['checkout']);
$nights = $datetime1->diff($datetime2);
$daysBooked = $nights->format('%R%a');
$_SESSION['days'] = $daysBooked;
$cost1=$daysBooked*$op1->price;
$cost2=$daysBooked*$op2->price;

echo '<table>
      <tr>
      <th>Features</th>
      <th>Hotel 1 : '. $op1->name." @R'$cost1'</th>
      <th>Hotel 2: ". $op2->name." @R'$cost2'</th>
      </tr>
      <tr>
      <td>WIFI</td>
      <td>"; 
      echo ($op1->wifi); 
      echo    "</td>
      <td>"; 
      echo ($op1->wifi);
      echo "</tr>
      <tr>
      <td>POOL</td>
      <td>";
      echo ($op1->pool);
      echo "</td>
      <td>";
      echo ($op2->pool);  
      echo "</td>
      </tr>
      <tr>
      <td>GYM</td>
      <td>";
      echo ($op1->gym);
      echo "</td>
      <td>";
      echo ($op2->gym);
      echo  "</td>
      </tr>
      <tr>
      <td>PARKING</td>
      <td>";
      echo ($op1->spa);    
      echo "</td>
      <td>";
      echo ($op2->spa);
      echo "</td>
      </tr>
      <td>BAR</td>
      <td>";
      echo ($op1->bar);    
      echo "</td>
      <td>";
      echo ($op2->bar);
      echo "</td>
      </tr>
      <td>PETS</td>
      <td>";
      echo ($op1->pets);    
      echo "</td>
      <td>";
      echo ($op2->pets);
      echo "</td>
      </tr>
      <td>RESTAURANT</td>
      <td>";
      echo ($op1->restaurant);    
      echo "</td>
      <td>";
      echo ($op2->restaurant);
      echo "</td>
      </tr>
      <td>SPA</td>
      <td>";
      echo ($op1->spa);    
      echo "</td>
      <td>";
      echo ($op2->spa);
      echo "</td>
      </tr>
      <td>TV</td>
      <td>";
      echo ($op1->tv);    
      echo "</td>
      <td>";
      echo ($op2->tv);
      echo "</td>
      </tr>
      <td>AC</td>
      <td>";
      echo ($op1->ac);    
      echo "</td>
      <td>";
      echo ($op2->ac);
      echo "</td>
      </tr>
      </table>'";
      }

?></div>



    <form class="inputField" role="form" method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> 
    <label class="inputField" for="name">NAME</label><input class="inputField" type="text" name="name" required>
</br>
  <label class="inputField" for="surname">SURNAME</label><input class="inputField" type="text" name="surname" required>
</br>
  <label class="inputField" for="email">EMAIL</label><input class="inputField" type="email" name="email" required>
</br>
  <label class="inputField" for="checkin">Check-In</label><input id="checkin" class="inputField" type="text" name="checkin">
</br>
  <label class="inputField" for="checkout">Check-Out</label><input id="chekout" class="inputField" type="text" name="checkout">
     
</br>



<!-- front info -->
<?php
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
 <option name="radison" value="radison">Raddison Blue Hotel</option>
 <option name="kelway" value="kelway">The Kelway Hotel</option>
 <option name="hub" value="hub">The Hub Boutique Hotel</option>
 <option name="protea" value="protea">Protea Hotel Port Elizabeth Marine</option>
</select>

<select id="selection2" name="selection2">
 <option name="radison" value="radison">Raddison Blue Hotel</option>
 <option name="kelway" value="kelway">The Kelway Hotel</option>
 <option name="hub" value="hub">The Hub Boutique Hotel</option>
 <option name="protea" value="protea">Protea Hotel Port Elizabeth Marine</option>
</select>
<button class="submitButton" type="submit" name="submit">SUBMIT</button>
</form>




<!-- Email -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
if (isset($_POST["boook"])){
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader


// Instantiation and passing `true` enables exceptions


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
    $mail->addAddress($_SESSION['email'], $_SESSION['email']);     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Booking for'.$_SESSION['selectHotel'];
    $mail->Body    = 'Hello Hotel Manager there has been an enquiry to book a room for'.$_SESSION['days'].'nights @.
                      From'.$_SESSION['checkin'].' till'.$_SESSION['checkout'].'. Please Contact the guests for further information.
                      Here are their details, Name='.$_SESSION['name'].'Surname='.$_SESSION['surname'].'email='.$_SESSION['email'].'.';
    $mail->AltBody = 'Hello Hotel Manager there has been an enquiry to book a room for'.$daysBooked.'nights.
                      From'.$_SESSION['checkin'].' till'.$_SESSION['checkin'].'. Please Contact the guests for further information.
                      Here are their details, Name='.$_SESSION['name'].'Surname='.$_SESSION['surname'].'email='.$_SESSION['email'].'.';

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