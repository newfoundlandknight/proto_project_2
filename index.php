<?php
 session_start();

// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true
//  && isset($_SESSION["run"]) && $_SESSION["run"] === true
// ) {pass} else {fail}

if (isset($_SESSION["loggedin"]) ) 
{    
    //passed   <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    //header("location: pass.php");
    header("location: problem.php");
    //exit;
}
else 
{ 
    //failed <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
    //session_destroy();
    //$_SESSION["loggedin"]="";
    //echo "fail";
    //exit;
    //header("location: fail.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>Not working</title>
</head>
<body>
<?php require 'menu-bar.php';?>

<div id ="main" class="form_100">
<div class ="form">
             <h3 >IT SUPPORT login</h3>
                <form method="post" action="problem.php">
                    <select name="title">
                        <option value="Mr." selected>Mr.</option>    
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss">Miss</option>
                        <option value="Master">Master</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                        <option value="other">other</option>
                    </select>

                    <input type="text" name="firstName" placeholder="First Name" value ="tuna" required style="width:170px;">
                    <input type="text" name="lastName" placeholder="Last Name" value="fish" required style="width:170px;">

                    <select name="role" required>
                        <option value="admin" selected>Admin</option>    
                        <option value="manager">manager</option>
                        <option value="ceo">CEO</option>
                    </select>
                    <!-- <input type="text" name="role" placeholder="Role" value ="admin" required> -->
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
</div>

<?php require 'footer.php'; ?>
</body>
</html>