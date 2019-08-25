<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div class="container">
        <h1>A Simple Example Of PHP CAPTCHA Script</h1>
        <?php  
        session_start();  
        if(isset($_POST["captcha"]))  
        if($_SESSION["captcha"]==$_POST["captcha"])  
        {  
            header('Location:welcome.php');
        }  
        else  
        {  
            echo '<div class="alert alert-danger">CAPTHCA is not valid!</div><br><br>';  
        }  
        ?>
        <form role="form" method="post">
        <div class="form-group">
            <div class="col-sm-5 pull-left"><label for="pwd">Anti Spam code, Please Enter 3 Black Symbols</label><br>
            <img src="captcha.php" alt="captcha image"></div><br>
            <div class="col-sm-7 pull-right"><input type="text" name="captcha" size="3″ maxlength="3″ class="form-control"></div>
        </div><br><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>   
</body>
</html>

