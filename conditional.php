

<?php 
$message = 'Enter yuor name';
$password = "";


if (isset($_POST['submit'])) {
    $ussername = $_POST['ussername'];
    $numberofchars = strlen($ussername);
    if ($numberofchars == 0) {
        $message = "<small style='color: red'>username is required </small>";
    } else if ($numberofchars < 6) {
        $message = "<small style='color: red'> </small>";
    }
}


?>