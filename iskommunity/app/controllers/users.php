<?php

// REGISTRATION AND LOGIN

include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateStudent.php');

$errors = array();
$email = '';
$username = '';
$password = '';
$confirmpassword = '';
$usernameemail = '';
$table = 'student';
$table1 = 'student';
$table2 = 'organization';

function loginStudent($stud){
    $_SESSION['id'] = $stud['stud_ID'];
    $_SESSION['username'] = $stud['stud_Username'];
    $_SESSION['message'] = 'You are now logged in!';
    header('location: ' . BASE_URL . '/index.php');
    exit();
}

function loginOrg($org){
    $_SESSION['id'] = $org['org_Code'];
    $_SESSION['username'] = $org['org_Username'];
    $_SESSION['message'] = 'You are now logged in!';
    header('location: ' . BASE_URL . '/index.php');
    exit();
}

if(isset($_POST['register'])){
    // First, CHECK FOR ERRORS
    $errors = validateRegister($_POST);

    // IF THERE ARE NO ERRORS
    if(count($errors) === 0){
        unset($_POST['register'], $_POST['confirmpassword']);
        $_POST['stud_Password'] = password_hash($_POST['stud_Password'], PASSWORD_DEFAULT);
        $stud_id = create($table, $_POST);
        $stud = selectOne($table, ['stud_ID' => $stud_id]);
        loginStudent($stud);
    }
    else{
        // IF THERE ARE ERRORS
        $email = $_POST['stud_Webmail'];
        $username = $_POST['stud_Username'];
        $password = $_POST['stud_Password'];
        $confirmpassword = $_POST['confirmpassword'];
    }
}

if(isset($_POST['login'])){
    // CHECK FOR ERRORS
    $errors = validateLogin($_POST);

    if(count($errors) === 0){
        $stud_record = selectOneUsingOr($table1, ['stud_Webmail' => $_POST['username'], 'stud_Username' => $_POST['username'] ]);
        $org_record = selectOneUsingOr($table2, ['org_Email' => $_POST['username'], 'org_Username' => $_POST['username']]);

        if($stud_record && password_verify($_POST['password'], $stud_record['stud_Password'])){
            loginStudent($stud_record);
            
        }
        else if($org_record && password_verify($_POST['password'], $org_record['org_Password'])){
            loginOrg($org_record);
        }
        else{
            array_push($errors, 'Invalid credentials!');
        }
        $usernameemail = $_POST['username'];
        $password = $_POST['password'];
    }
}