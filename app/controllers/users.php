<?php 



include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';


if (isset($_POST['register-btn'])) {
    $errors = validateuser($_POST);

    if (count($errors) === 0) {


        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['admin'] = 0;
    
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);
    
        //log user in
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';

        if($_SESSION['admin']) {
            header('location: ' . BASE_URL . '/admin/dashboard.php');
        } else {
            header('location: ' . BASE_URL . '/index.php');
        }

        exit();
        

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }


  

}
