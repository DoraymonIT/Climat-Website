<?php
    session_start();
    $db = mysqli_connect('db4free.net', 'climat', 'Q$B8ZbGs_mPRe.8', 'climat');

    if(!$db) {
        die('Connection failed: ' . mysqli_connect_error());
        echo "Die";
    }

    $errors = array();

    if(isset($_POST['login-submit'])) {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
                $result = mysqli_query($db, $query);
        if  (!$result || mysqli_num_rows($result) === 1) {
            $_SESSION['username'] = $username;
            echo "Yes";
            
            header('location: admin.php');
        } else {
            echo "Non";
            header('location: login.php');
        }
    }
?>
<!-- Q$B8ZbGs_mPRe.8

climat

est db4free.net et le port est 3306. -->
