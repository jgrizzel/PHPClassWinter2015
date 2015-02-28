<?php

function emailIsValid( $email ) {
     if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
        return true;
     } else {
         return false;
     }
}


function phoneIsValid( $phone ) {
    
     if ( is_numeric($phone) && !empty($phone) ) {
        return true;
    } else {
        return false;
    }
}

function fullNameIsValid( $name ) {
    if ( !empty($name) ) {
        return true;
    } else {
        return false;
    }
}


function commentsIsValid( $comments ) {
     if ( !empty($comments) ) {
        return true;
    } else {
        return false;
    }
}


function displayErrorMsgs( $error_msgs ) {
     if ( is_array($error_msgs) && count($error_msgs) > 0 ) {
        foreach ($error_msgs as $err) {
          echo '<p>', $err, '</p>'; 
        }                    
    }
}


function displaySucessMsg($msg) {
    if ( is_string($msg) && !empty($msg) ) {
        echo '<h1>', $msg , '</h1>';
    }
}


function addNewComments($fullname,$email,$comments,$phone) {
    // remember to change the port
    $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
    $dbs = $db->prepare('insert into comments set name = :name, email = :email, comments =:comments, phone =:phone'); 

    // you must bind the data before you execute
    $dbs->bindParam(':name', $fullname, PDO::PARAM_STR);
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);
    $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);

    // When you execute remember that a rowcount means a change was made
     if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
        return true;
    } else {
        return false;
    }     
}