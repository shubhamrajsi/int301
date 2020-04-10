<?php
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
    <div class="col-sm-12 pt-5">
        <div class="row justify content-center">
            <div class="col-sm-6 text-left pt-5 pl-5">
                <h1>Welcome to the exciting <br> Game of quiz</h1>
                <h3> Enter Your Name To Get Started</h3>
                <form action="name.php" method="post">
                    <input type="text" name="name1" style="height:35px;border-radius:04px;" placeholder="Enter your name" />
                    <button class="btn btn-primary">Submit</submit>
                </form>

            </div>
            <div class="col-sm-6 pt-3">
                <img style="width:60%;height:50vh;" src="quiz.png">
            </div>
        </div>
    </div>
    </body>
</html> 