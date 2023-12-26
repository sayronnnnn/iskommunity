<?php 


function validateRegister($stud){
    $table = 'student';
    $errors = array();
    
    if(empty($stud['stud_Webmail'])){
        array_push($errors, 'Webmail is required!');
    }

    if(empty($stud['stud_Username'])){
        array_push($errors, 'Username is required!');
    }

    if(empty($stud['stud_Password'])){
        array_push($errors, 'Password is required!');
    }

    if($stud['stud_Password'] !== $stud['confirmpassword']){
        array_push($errors, 'Passwords do not match!');
    }

    $existingUser = selectOne($table, ['stud_Webmail' => $stud['stud_Webmail']]);
    if($existingUser){
        array_push($errors, 'Webmail is already used!');
    }
    return $errors;
}

function validateLogin($user){
    $table = 'student';

    $errors = array();
    if(empty($user['username'])){
        array_push($errors, 'Username or email is required!');
    }

    if(empty($user['password'])){
        array_push($errors, 'Password is required!');
    }

    return $errors;
}