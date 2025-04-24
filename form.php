
<?php
session_start();

$matricule = "";
$password = "";
$message1 = "";
$message2 = "";

if (isset($_POST['submit'])) {
    $matricule = $_POST['matricule'];
    $password = $_POST['password'];
    $numberofchars = strlen($matricule);

    // Validate matricule
    if ($numberofchars == 0) {
        $message = "<small style='color: red'>Matricule is required</small>";
    } else if ($numberofchars < 8 ) {
        $message1 = "<small style='color: red'>Invalid matricule, matricule must be above 8 characters long</small>";
    } else {
        $message1 = "<small style='color: green'>Valid matricule</small>";
    }

    // Validate password
    if (strlen($password) < 8) {
        $message2 .= "<br><small style='color: red'>Password must be at least 8 characters long</small>";
    } else if (!preg_match('/[A-Z]/', $password)) {
        $message2 .= "<br><small style='color: red'>Password must contain at least one uppercase letter</small>";
    } else if (!preg_match('/[0-9]/', $password)) {
        $message2 .= "<br><small style='color: red'>Password must contain at least one number</small>";
    } else if (!preg_match('/[\W_]/', $password)) { // \W matches any non-word character
        $message2 .= "<br><small style='color: red'>Password must contain at least one special character</small>";
    } else {
        $message2 .= "<br><small style='color: green'>Password is valid</small>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>login form</title>
</head>
<body>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }
        .card {
            width: 300px;
            height: 500px;
            margin: 100px auto;
            padding: 40px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        /*  .form_card {
            width: 300px;
            height: 300px;
            margin: 100px auto;
            padding: 40px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 

        } */
        .matricule{
            display: block;
            margin-bottom: 10px;

        }
        .password {
            display: block;
            margin-bottom: 10px;

        }
        input[type="text"]{
            width: 100%;
            height: 25px;
            padding: 10px;
            border: 1px solid #ccc;

        }
        input[type="password"]{
            width: 100%;
            height: 25px;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 15px;
        }

        h2 {
            justify-self: center;
            font-size: xx-large;
            font-weight: 1000;
        }
        .forgot {
            display: flex;
            justify-content: flex-end;
        }

        button[type="submit"] {
            margin-top: 15px;
            width: 100%;
            height: 30px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: x-large;
        }

        button[type="submit"]:hover {
            background-color:rgb(64, 187, 20);
        }

        a {
           text-decoration: none;
           color: green;
        }

        a:hover {
           color:rgb(24, 202, 14);
        }




    </style>
     <div class="card">
         <h2>Sign in</h2>
         <p>Enter your matricule number and password in the fields below to sign in</p>
         <div class="form_card">
                 <form class="form" action="form.php" method="post">
                   <input type="text" placeholder="matricule" name="matricule" required>
                    <?php echo $message1; ?>
                    <br>
                    <input type="password" placeholder="password" name="password" required>
                    <?php echo $message2; ?>
                   <br>

                    <br>
                      <input type="checkbox" name="checkbox"> Remember me
                    <div class="forgot">
                     <a class="forgot" href="form.php">Forgot Password?</a>
                    </div>
                    <br>
                    <button type="submit" name="submit">Sign in</button>
                     <p>Not a Student? Click here to <a href="#">Apply</a></p>
                    </form>

             </form>
         </div>
     </div>
</body>
</html>
