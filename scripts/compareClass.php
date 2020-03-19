<?php
	
	class compareClass
	{
		public $firstname;
		public $lastname;
		public $email;
		public $checkindate;
		public $checkoutdate;
		public $hotel1;
		public $hotel2;
		public $cost1;
		public $cost2;

		//setting the publicc properties
		function __construct($n0,$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8)
		{
			$_SESSION["user"] = $this->firstname = $n0;
			$_SESSION["surname"] = $this->lastname = $n1;
			$_SESSION["email"] = $this->email = $n2;
			$_SESSION["checkin"] = $this->checkindate = $n3;
			$_SESSION["checkout"] = $this->checkoutdate = $n4;
			$_SESSION["hotel1"] = $this->hotel1 = $n5;
			$_SESSION["hotel2"] = $this->hotel2 = $n6;
			$_SESSION["cost1"] = $this->cost1 = $n7;
			$_SESSION["cost2"] = $this->cost2 = $n8;
		}

		function daysBooked($parm1, $param2);
		//set protected properties
		$this->checkin = $param1;
		$this->checkout = $param2;
		//number of days
		$totaldays = $param1->diff($param2);

		echo "Total of Duration is: ", .$totaldays. " Days";
	}
?>