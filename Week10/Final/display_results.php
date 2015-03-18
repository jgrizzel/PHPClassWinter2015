<?php
include'./functions.php';

        if ( !empty($_POST) ) {
        // collect the data
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $heard_from = filter_input(INPUT_POST, 'heard_from');
        $contact_via = filter_input(INPUT_POST, 'contact_via');
        $comments = filter_input(INPUT_POST, 'comments');
        
        
        //Validate the data
        if ( !emailIsValid($email) ) {
            $error_msgs[] = 'Email is not Valid.';
        }      
        
        if ( !phoneIsValid($phone) ) {
            $error_msgs[] = 'Please enter your Phone number.';
        }
        if ( !heardFromIsValid($heard_from) ) {
            $error_msgs[] = 'Please enter where you heard of us.';
        }
        
        if ( !contactIsValid($contact_via) ) {
            $error_msgs[] = 'Please enter how we should contact you.';
        }
        
        
        if ( count($error_msgs) == 0 ) {
            //add to database
            
            $addedUsers = addUser($email,$phone,$heard_from,$contact_via,$comments);
            
            if ( $addedUsers === true  ) {
                $sucess_msg = 'Comments were added.';
            } else {
                $error_msgs[] = 'Comments were NOT added.';
            }
        }
        
        
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span></span><br />
            
             <label>Phone:</label>
            <span></span><br />

            <label>Heard From:</label>
            <span></span><br />

            <label>Contact Via:</label>
            <span></span><br /><br />

            <span>Comments:</span><br />
            <span></span><br />

        </div>
    </body>
</html>
