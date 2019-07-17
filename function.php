 <?php

include"../database/index.php";
include"../vista/.vista";
$vista=new vista();
$vista->get_connection($con);
 $email=$_COOKIE["student_email"];
  $password=$_COOKIE["student_password"];
  $sql="SELECT * FROM `students_information` WHERE `email`='$email' AND `password`='$password'";
$code1=$vista->data($sql,"code1");
$code2=$vista->data($sql,"code2");
$name=$vista->data($sql,"name");
$class=$vista->data($sql,"class");

$function=$vista->realstr($_POST["function"]);
if($function=="displaytodayseris"){
	
$date=date("Y-m-d");

$sql="SELECT * FROM `video` WHERE `date`='$date' AND `class`='$class'";
$video=$vista->data($sql,"link");



$sid=$vista->data($sql,"subject");
$sqlsub="SELECT * FROM `subject` WHERE `id`='$sid'";
$subject=$vista->data($sqlsub,"name");



$title=$vista->data($sql,"title");


$description=$vista->data($sql,"description");
echo $video."@@@".$title."@@@".$description."@@@".$subject;

}


 ?>