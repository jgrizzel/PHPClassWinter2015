<?php

/*Joshua Grizzel*/


//include './functions.php';
//include './display_results.php';

    
    //$error_msgs = array();
    //$sucess_msg = '';
    
     $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $heard_from = filter_input(INPUT_POST, 'heard_from');
        $contact_via = filter_input(INPUT_POST, 'contact_via');
        $comments = filter_input(INPUT_POST, 'comments');
        
    //$email = '';
    //$phone = '';
    //$heard_from = '';
    //$contact_via = '';
    //$comments = '';
    /*
     if ( !empty($_POST) ) {
        // collect the data
       
        
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
                //$sucess_msg = 'Comments were added.';
                header('Location: display_results.php');
            } else {
                $error_msgs[] = 'Comments were NOT added.';
            }
        }
        
        
    }
    
    
    
    */
    
    
?>







<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        
        <?php 
         if (isset($error_msgs) && count ($error_msgs) > 0) { ?>
    <h2>Errors:</h2>
    <ul>
        <?php 
         
        foreach($error_msgs as $error) { ?>
            <li><?php echo $error; ?></li>
        <?php } ?>
    </ul>
          <?php } ?>
        
        
         <div id="content">
            <h1>Account Sign Up</h1>
            <form action="display_results.php" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php echo $email; ?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard_from" value="Search Engine" />
                Search engine<br />
                <input type="radio" name="heard_from" value="Friend" />
                Word of mouth<br />
                <input type=radio name="heard_from" value="Other" />
                Other<br />

                <p>Contact via:</p>
                <select name="contact_via">
                        <option value="email">Email</option>
                        <option value="text">Text Message</option>
                        <option value="phone">Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"></textarea>
            </fieldset>

            <input type="submit" value="Submit" />

            </form>
            <br />
        </div>
    </body>
</html>
