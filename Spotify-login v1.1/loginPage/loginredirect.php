<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once ('loginfunc.php');

    require ('mysqli_connect.php'); 

    list ($check, $data) = check_login($dbc, $_POST['username'], $_POST['password']);

    if ($check) {

        session_start();
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['date_of_birth'] = $data['date_of_birth'];
        $_SESSION['country_or_region'] = $data['country_or_region'];


        redirect_user('accountOverview.php'); // redirects to .php landing

    } else {
        echo "error: try again";
        $errors = $data;
    }

    mysqli_close($dbc);

}
?>