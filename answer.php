<?php
include('config.php');
$id = $_POST['id'];
$new_id = $id+1;
$answer = $_POST['answer'];
$selected = $_POST['option'];
session_start();
$_SESSION['name2'] = $name1;
if($selected == $answer)
{
    if($id == 5)
    {
        echo "<script>
        alert('Congrats You won the game')
        window.location.href='congrats.php';
        </script>";

    }
    else
    {
        echo "<script>
        alert('Correct Answer Proceed to neext question');
        window.location.href='question.php?id=".$new_id."';
        </script>";
    }

}
else
{
    echo "<script>
        alert('sorry you lost');
        window.location.href='lost.php';
        </script>";
}
    
?>