<?php
session_start();
echo $_SESSION['name2'];
include('config.php');
$id = $_GET['id'];
$sql = "select * from question where id = $id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
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
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1>Question no. <?php echo $id; ?></h1>
                <br/>
                <div class="card pl-4">
                    <h1><?php echo $row['question'];?></h1>
                    <form action="answer.php" method="post">
                        <input type="radio" name="option" value='<?php echo $row['option1'];?>' />
                        <label><?php echo $row['option1'];?></label><br>
                        <input type="radio" name="option" value='<?php echo $row['option2'];?>' />
                        <label><?php echo $row['option2'];?></label><br>
                        <input type="radio" name="option" value='<?php echo $row['option3'];?>' />
                        <label><?php echo $row['option3'];?></label><br>
                        <input type="radio" name="option" value='<?php echo $row['option4'];?>' />
                        <label><?php echo $row['option4'];?></label><br>
                        <input type="hidden" name="answer" value="<?php echo $row['answer'];?>" />
                        <input type="hidden" name="id" value="<?php echo $id;?>" />
                        <button type="submit">Submit</submit>
                    </form>

                </div>
                
            </div>
        </div>
        
    </body>
</html>
<?php
}
?>