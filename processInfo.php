<?php
/**
 * User: Luis
 * Date: 20/01/2020
 * Time: 09:30 PM
 */
//Mapeo de array aociativo
$Majors = array("CS"=>"Computer Science","WDD"=>"Web Design and Development","CIT"=>"Computer information Technology","CE"=>"Computer Engineering");

$name = $_POST['name'];
$email = $_POST['email'];

$major = $_POST['major'];
$nameMajor = "";
//Mapeo de array aociativo
foreach($Majors as $key => $value)
{
    if($major == $key){ $nameMajor = $value; break; }
}

$comments = $_POST['comments'];
//CONTINENT
if(isset($_POST['NA'])){ $NA = $_POST['NA']; }
if(isset($_POST['SA'])){ $SA = $_POST['SA']; }
if(isset($_POST['EU'])){ $EU = $_POST['EU']; }
if(isset($_POST['AS'])){ $AS = $_POST['AS']; }
if(isset($_POST['AU'])){ $AU = $_POST['AU']; }
if(isset($_POST['AF'])){ $AF = $_POST['AF']; }
if(isset($_POST['AN'])){ $AN = $_POST['AN']; }

echo "Name User: ".$name."<br>";
echo "MailTo: ".$email."<br>";
echo "Major: ".$nameMajor."<br>";
echo "Comments: ".$comments."<br>";
echo "I TRAVELED TO THIS CONTINENTS:<br>";
if(isset($NA)){ echo $NA."<br>"; }
if(isset($SA)){ echo $SA."<br>"; }
if(isset($EU)){ echo $EU."<br>"; }
if(isset($AS)){ echo $AS."<br>"; }
if(isset($AU)){ echo $AU."<br>"; }
if(isset($AF)){ echo $AF."<br>"; }
if(isset($AN)){ echo $AN."<br>"; }