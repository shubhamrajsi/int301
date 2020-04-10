<?php
include('config.php');
session_start();
$name1 = $_SESSION['name2'];

$sql = "insert into winner(name) values('shubham')";
$result = mysqli_query($conn,$sql);
if($result)
{





?>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row justify-content-center p-5">
            <div class="col-sm-8 card p-5 text-center">
                <h1>Congrats <?php echo $name1;?> You won</h1>
            </div>
        </div>
    </body>
</html>

<?php
}
else
{
    echo "some error occured";
}
?>