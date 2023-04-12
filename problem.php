<?php
require 'header.php';
if ( !isset($_SESSION["run"]) || $_SESSION["run"] !== true 
) {


// blank all the variables
$title = "";
$firstName = "";
$lastName = "";
$role = "";
$emailType="";

// now we check to this if a form has posted data
if (isset($_POST['title']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['role'])  ) {
    if (!empty($_POST['title']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['role']) ) 
    // now we set the variables from the post
    {
        $title = $_POST["title"];        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $role = $_POST['role'];
       if (isset($_POST['emailtype'])){ $emailType = $_POST['emailType'];}
    }
}

$_SESSION["loggedin"] = true;
$_SESSION['title'] = $title;
$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;
$_SESSION['role'] = $role;
$_SESSION["run"] = true;
// if ($_SESSION['role'] ="ceo") {exit;}

// we set emailType depending on the returned session role.
if ($_SESSION['role'] =="admin") {$_SESSION['emailType'] ="newAccount";
    header("location: problem.php");
}

if ($_SESSION['role'] =="manager") {$_SESSION['emailType'] ="lostPassword";
    header("location: problem.php");
}

if ($_SESSION['role'] =="ceo") {$_SESSION['emailType'] ="Needs help";
    header("location: problem.php");
}




    //header("location: index.php");
    //exit;
}


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include 'menu-bar.php';?>
    <div class="form_100">
        <div class="form">



            <?php
                echo "<h2> Welcome ". $_SESSION['title'] ." ". $_SESSION['firstName']." ". $_SESSION['lastName'] ." (". $_SESSION['role'] .") </h2><br>";

                if ($_SESSION['role'] =="admin") {echo "<h2><a href='new-account.php'>New account</a><br><a href='isnt-working.php'>isnt-working</a>  </h2> ";
                }
        
                if ($_SESSION['role'] =="manager") {echo "<a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>isnt-working</a>   ";
                }
        
                if ($_SESSION['role'] =="ceo") {echo "<a href='need-help.php'>Need Help</a><br><a href='isnt-working.php'>isnt-working</a>  ";
                }

                //var_dump($_SESSION);

            ?>


        </div>
    </div>



   
   
            
    <?php
require 'footer.php';
?></body>
    </html>
   