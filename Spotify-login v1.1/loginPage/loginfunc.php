<?php

function redirect_user ($page = 'accountOverview.php') {

    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

    $url = rtrim($url, '/\\');

    $url .= '/' . $page;

    header("Location: $url");
    exit();
}

function check_login($dbc, $username = '', $pass = '') {
    $errors = array();

    if (empty($username)) {
        $errors[] = 'Username required';
    } else {
        $u = mysqli_real_escape_string($dbc, trim($username));
    }

    if (empty($pass)) {
        $errors[] = 'Password required';
    } else {
        $p = mysqli_real_escape_string($dbc, trim($pass));
    }

    if (empty($errors)) {
        $q = "SELECT user_id, username, email, date_of_birth, country_or_region FROM users WHERE username='$u' AND password=SHA1 ('$p')";
        $r = @mysqli_query ($dbc, $q);

        if (mysqli_num_rows($r) == 1) {
            $row = mysqli_fetch_array ($r, MYSQLI_ASSOC);

            return array(true, $row);

        } else {
            $errors[] = 'Incorrect username or password';
        }

    }
    return array(false, $errors);
}

?>
