<?php
session_start();
$name1 = $_POST['name1'];
$_SESSION['name2'] = $name1;
echo $_SESSION['name2'];
if($name1)
{
    echo "<script>
    alert('Welcome ".$_SESSION['name2']." to the quiz');
    window.location.href='question.php?id=1';
    </script>";
}
else
{
    echo "<script>
    alert('sorry please try again');
    window.location.href='home.php';
    </script>";

}
?>