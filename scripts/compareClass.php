<?php

class Compare{

    
    public $name, $surname, $email, $checkin, $checkout, $selection1, $selection2, $cost1, $cost2;
    
    function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6){
        $_POST['name'] = $this->firstname = $n0;
        $_POST['surname'] = $this->surname = $n1;
        $_POST['email'] = $this->email = $n2;
        $_POST['checkin'] = $this->checkin = $n3;
        $_POST['checkout'] = $this->checkout = $n4;
        $_POST['selection1'] = $this->selection1 = $n5;
        $_POST['selection2'] = $this->selection2 = $n6;
    }
    

    function daysBooked($param1, $param2){

        $this->checkin = $param1;
        $this->checkout = $param2;
 
        $datetime1 = new DateTime($this->checkin);
        $datetime2 = new DateTime($this->checkout);
        $nights = $datetime1->diff($datetime2);

        $this->daysBooked = $nights->format('%R%a');
    }
    

    function displayInfo(){

        echo "<br> First Name : " . $this->name . "<br>" .
        "Surname : " . $this->surname . "<br>" . 
        "Start Date : " . $this->checkin . "<br>" . 
        "End Date : " . $this->checkout . "<br>" .
        "You are booking for " . $this->daysBooked . "Days<br>" .    
        "Hotel Name One : " . $this->selection1 . "<br>" .
        "Hotel Name Two : " . $this->selection2 . "<br>" .    
        "Select your Hotel : <br>
        <form role=\"form\" action=";
        echo htmlspecialchars($_SERVER['PHP_SELF']);  
        echo " method=\"post\">
        <input type=\"radio\" name=\"selectHotel\" value=\"".$this->selection1."\">".$this->selection1."<br>"."
        <input type=\"radio\" name=\"selectHotel\" value=\"".$this->selection2."\">".$this->selection2."<br>";
        
    }
	
	function compareHotels($param1,$param2){
        echo "
<table>
  <tr>
    <th>Features</th>
    <th>Hotel 1 : ". $param1->name."</th>
    <th>Hotel 2: ". $param1->name."</th>
  </tr>
  <tr>
    <td>Pool</td>
    <td>"; 
    echo ($param1->pool) ? "Yes" : "No"; 
    echo    "</td>
    <td>"; 
    echo ($param1->pool) ? "Yes" : "No";
    echo "</tr>
  <tr>
    <td>Bar</td>
    <td>";
    echo ($param1->bar) ? "Yes" : "No";
    echo "</td>
    <td>";
    echo ($param2->bar) ? "Yes" : "No";  
    echo "</td>
  </tr>
  <tr>
    <td>Kid Friendly</td>
    <td>";
    echo ($param1->kidFriendly) ? "Yes" : "No";
    echo "</td>
    <td>";
    echo ($param2->kidFriendly) ? "Yes" : "No";
    echo  "</td>
  </tr>
  <tr>
    <td>Spa</td>
    <td>";
    echo ($param1->spa) ? "Yes" : "No";    
    echo "</td>
    <td>";
    echo ($param2->spa) ? "Yes" : "No";
    echo "</td>
  </tr>
</table>";
    }//End compareHotels
    
function bookButton(){
        echo "<form class='form-inline' role='form' action=" .  htmlspecialchars($_SERVER["PHP_SELF"]).  
         " method='post'>
         <button type=\"submit\" value=\"book\">Book</button>
         </form><br><br>";

    
    
function bookButton(){
        echo "<form class='form-inline' role='form' action=" .  htmlspecialchars($_SERVER["PHP_SELF"]).  
         " method='post'>
         <button type=\"submit\" value=\"book\">Book</button>
         </form><br><br>";
    } 
    
}

?>