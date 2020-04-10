<?php
$servername ='localhost';
$database = 'question';
$password = '';
$username='root';

$conn = mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    
}
else
{
    echo 'not connected';
}
?>