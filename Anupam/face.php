<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        
    </style>


</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-left: 250px; margin-top: 150px; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">            
                <div class="panel-heading">
                    <h1 style="color: black;">Wildlife Image Detection</h1>
                </div>
                <hr>
                <form action="image.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" accept="image/*" class="form-control">
                    <br>
                    <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Detect Image</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>