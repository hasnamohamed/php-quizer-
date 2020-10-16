<?php
//connect to mysql
$mysqli=new mysqli("localhost","root","","quizzer");
//Test Connection
if($mysqli->connect_error)
{
printf("Connect Failed: %s/n", $mysqli->connect_error);
exit();
}

?>