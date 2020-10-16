<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//check to see if score is set
if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
//Get Total
$query="SELECT * FROM questions";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);//will tell us what's the error if something is wrong
$total =$results->num_rows;
if($_POST){
$number=$_POST['number'];
$selected_choice=$_POST['choice'];

$next=$number+1;
$query="SELECT * FROM choices WHERE question_number=$number AND is_correct=1";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);//will tell us what's the error if something is wrong
$row=$result->fetch_assoc();
$correct_choice=$row['id'];
if($correct_choice==$selected_choice){
$_SESSION['score']++;
}

if($number==$total){
 header("Location:final.php");
 exit();
}
else{
    header("Location:question.php?n=".$next);
    exit();
}
}
?>