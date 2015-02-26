<?php 
$connection = new mysqli('localhost','root','','employees');
if($connection->connect_error){
	echo "Could not connect due to an error"; exit;
}
$age = $currentYear - $birthYear;
if($currentMonth < $birthMonth) $age--;
if($currentMonth == $birthMonth && $currentDay < $birthDay) $age--;
function GetAge($dob="1970-01-01") 
{ 
        $dob=explode("-",$dob); 
        $curMonth = date("m");
        $curDay = date("j");
        $curYear = date("Y");
        $age = $curYear - $dob[0]; 
        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 
                $age--; 
        return $age; 
}

?>