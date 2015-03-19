<?php

/*Joshua Grizzel*/


include './functions.php';
    
    $error_msgs = array();
    $sucess_msg = '';
    
    
    $email = '';
    $phone = '';
    $heard_from = '';
    $contact_via = '';
    $comments = '';
    
     if ( !empty($_POST) ) {
        // collect the data
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $heard_from = filter_input(INPUT_POST, 'heard_from');
        $contact_via = filter_input(INPUT_POST, 'contact_via');
        $comments = filter_input(INPUT_POST, 'comments');
        
        //$comments = htmlspecialchars($comments);
        
        
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
        }else{
        include'./index.php';
        exit();
        }
        
    }
    
    
    
    
    
    



 if (empty ($error_msgs)){
     
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $heard_from = filter_input(INPUT_POST, 'heard_from');
        $contact_via = filter_input(INPUT_POST, 'contact_via');
        $comments = filter_input(INPUT_POST, 'comments');
        
        $email =  htmlspecialchars($email);
        $phone =  htmlspecialchars($phone);
        $comments = htmlspecialchars($comments);
     
     
        
        /*$email = $_POST['email'];
        $phone = $_POST['phone'];
        $heard_from = $_POST['heard_from'];
        $contact_via = $_POST['contact_via'];
        $comments = $_POST['comments'];*/
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
            <span><?php echo htmlspecialchars($email); ?></span><br />
            
             <label>Phone:</label>
            <span><?php echo $phone; ?></span><br />

            <label>Heard From:</label>
            <span><?php echo $heard_from; ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo $contact_via; ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo nl2br($comments); ?></span><br />

        </div>
    </body>
</html>
