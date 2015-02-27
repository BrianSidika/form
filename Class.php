<pre>
<?php 
class Phone
{
	private $imei;
	private $color;
	private $manufacturer;
	private $model;
	private $owner;
	private $camera;
	private $screen_size;
	private $newtork;
	
	function __construct($serial_no,$color,$manufacturer, $phone_model){
		$this->imei = $serial_no;
		$this->color = $color;
		$this->manufacturer = $manufacturer;
		$this->model = $phone_model;
	}
	
	function set($property, $value){
		if(property_exists(__CLASS__ , $property)){
			$this->$property = $value;
		}else{
			echo 'Property '. $property . ' does not exist in ' . __CLASS__ .' class <br/>';
		}
	}
	
	function get($property){
		if(property_exists(__CLASS__ , $property) && ($property !='owner')){
			echo "The value of ". $property . ' in class ' .__CLASS__ . ' is ' .$this->$property ."<br/>";
		}elseif(property_exists(__CLASS__ , $property) && ($property =='owner')){
			echo "We are working on this<br>";
		}
		else{
			echo 'Property '. $property . ' does not exist in ' . __CLASS__ .' class <br/>';
		}
	}
	
	function __destruct(){
		echo "Hello there";
	}
	
	function setOwner(User $owner){
		$this->owner = $owner;
	}
}

class User {
	private $name;
	private $dob;
	private $residence;
	
	function __construct($serial_no,$color,$manufacturer){
		$this->name = $serial_no;
		$this->dob = $color;
		$this->residence = $manufacturer;
	}
}

$ops = new User('Opportuna Marura','22/04/1991','Kilifi');
$bsidika = new User('Brian Sidika','22/04/1991','Mombasa');
$ops_phone = new Phone(125112452, 'Black','Samsung', 'Galaxy Mini');

$ops_phone->setOwner($ops);
print_r($ops_phone);
$ops_phone->set('screen_size','4*2');
$ops_phone->set('camera',true);
$ops_phone->set('newtork','3G');
$ops_phone->set('test','3G');
$ops_phone->setOwner($bsidika);
$ops_phone->get('camera');
$ops_phone->get('owner');
print_r($ops_phone);
print_r($ops);
?>