<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $arr = array();
        
        $arr[0] = 'hello';
        $arr[1] = 'world';
        $arr["cars"] = array();
        
        $arr["cars"][0] = 'ford';
        $arr["cars"][2] = 'chevy';
        $arr["cars"][5] = 'honda';
        
        
        print_r($arr);
        
        echo $arr[0] , ' ' , $arr[1] , ' ', $arr["1"];
        
        
        foreach ($arr as $key => $value) {
            if ( $key === 2 ) break;
            if ( !is_array($value) ) {
             echo '<br />', $key, ' =>',   $value ;   
            }
        }
         
        
        ?>
    </body>
</html>