<?php

class Compare
{  
    public $firstname;
    public $surname;
    public $email;
    public $checkin;
    public $checkout;
    public $selection1;
    public $selection2;
    public $cost1;
    public $cost2; 
    
    function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6)
    {
        $_POST['firstname'] = $this->firstname = $n0;
        $_POST['surname'] = $this->surname = $n1;
        $_POST['email'] = $this->email = $n2;
        $_POST['checkin'] = $this->checkin = $n3;
        $_POST['checkout'] = $this->checkout = $n4;
        $_POST['selection1'] = $this->selection1 = $n5;
        $_POST['selection2'] = $this->selection2 = $n6;
    }
    
    function daysBooked($param1, $param2)
    {
         //set protected properties
        $this->checkin = $param1;
        $this->checkout = $param2;
        //amount of days
        $datetime1 = new DateTime($this->checkin);
        $datetime2 = new DateTime($this->checkout);
        $nights = $datetime1->diff($datetime2);
        //returns number of days booked back to main program
        $this->daysBooked = $nights->format('%R%a');
        /*
        $datetime1 = new DateTime($_POST['checkin']);
        $datetime2 = new DateTime($_POST['checkout']);
        $nights = $datetime2->diff($datetime1);
        $daysBooked = $nights->format('%R%a');
        $_SESSION['days'] = $daysBooked;
        $cost1=$daysBooked*$op1->price;
        $cost2=$daysBooked*$op2->price;
        */
    }

    function displayInfo()
    {

        echo "<div class=\"results\"><br> First Name : " . $this->firstname . "<br>" .
        "Surname : " . $this->surname . "<br>" . 
        "Start Date : " . $this->checkin . "<br>" . 
        "End Date : " . $this->checkout . "<br>" .
        "Booking Days: " . $this->daysBooked . "<br>" ." Days<br>" .  //Instantiate an Object then call a function and method  
        "Hotel One : " . $this->selection1 . "<br>" .
        "Hotel Two : " . $this->selection2 . "<br>" .    
        "Select your Hotel : <br>
        <form role=\"form\" action="; //?
        echo htmlspecialchars($_SERVER['PHP_SELF']); //? 
        echo " method=\"post\">
        <input type=\"radio\" name=\"selectHotel\" value=\"'.$this->selection1.'\">".$this->selection1."<br>"."
        <input type=\"radio\" name=\"selectHotel\" value=\"'.$this->selection2.'\">".$this->selection2."<br></div>";
        
    }
	
	
    
    function bookButton()
    {
            echo "<form class='form-inline' role='form' action=" .  htmlspecialchars($_SERVER["PHP_SELF"]).  
             " method='post'>
             <button type=\"submit\" value=\"boook\" name=\"boook\">Book</button>
             </form><br><br>";
        
    }
}
?>