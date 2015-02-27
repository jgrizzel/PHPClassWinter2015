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
        
        $name = trim($name);
        $email = trim($email);
        $email = trim($email);
        
       
        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
         $err_msg ='';
        if ( !is_string($name) || empty($name) ) {
           $err_msg .= '<p>Please enter a name</p>';
        echo $err_msg;}
        // 2. display the name with only the first letter capitalized
         $name = strtolower($name);
        $name = ucwords($name);
        
           if(empty($err_msg))
            {
                 $i = strpos($name, ' ');
                if($i === false){
                $first_name = $name;
                }else{
                $first_name = substr($name, 0, $i);
                }  
            }

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
            $err_msg ='';
        if (empty($email) ) {
           $err_msg .= '<p>Please enter an email</p>';}
           else if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
               $err_msg .= '<p>Email must have an @ and contain at least one dot</p>';
               }

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);
        
        if (strlen($phone) < 7) {
        $err_msg .= '<p>Phone number must have at least seven digits long</p>';
        }
               
               
               
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if (strlen($phone) == 7) {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3);
            $phone = $part1 . '-' . $part2;
        } else {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3, 3);
            $part3 = substr($phone, 6);
            $phone = $part1 . '-' . $part2 . '-' . $part3;
        }

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