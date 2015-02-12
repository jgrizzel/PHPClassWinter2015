<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
       $err_msg ='';
        if ( !is_string($name) || empty($name) ) {
           $err_msg .= '<p>Please enter a name</p>';}
echo $err_msg;
        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        
           if(empty($err_msg))
            {
                 $i = strpos($name, '');
                if($i == false){
                $message='no space found';
                }else{
                $first_name = substr($name, 0, $i);
                $last_name = substr($name, $i+1);
                }  
            }

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
            $err_msg ='';
        if (empty($email) ) {
           $err_msg .= '<p>Please enter a name</p>';}
           if(empty ($err_msg)){
               
               
           }

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

        /*************************************************
         * Display the validation message
         ************************************************/
          if(empty ($err_msg)){
               
               
           $message = "Hello $first_name,\n"
                . "Thank you for entering this data:\n"
                . "Name: $name\n"
                . "Email: $email\n"
                . "Phone: $phone";
          }

        break;
}
include 'string_tester.php';
?>