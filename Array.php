<pre>
<?php 

$object = array ('Ops'=>"Ops","Onsot"=>"Onsot", "Sidika"=>"Sidika", "Ken");
//echo $object[3];
$student = array();
$student['std1'] = "Ops"; 
$student['std2'] = "Onsoti"; 
$student['std3'] = "Sidika";

print_r($object);

function msg($msg) {
		echo $msg  ."<br>";
}
msg("Onsoti Benardi");

function name ($name1, $name2, $name3){
	echo 'Your name is ' . $name1. " " .$name2 . "&nbsp". $name3;
}
 name("Jane" , "Kadzo" ,  "Katana");
?>