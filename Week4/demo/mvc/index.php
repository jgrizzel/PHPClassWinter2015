<?php

    include_once './models/db.php';
    include_once './views/header.php';
    
    $view = filter_input(INPUT_GET, 'view');
    
    
    if ( $view == 'all' ) {
        include_once './models/getnames.php';
        include_once './views/all.php';
    } else if( $view == 'details' ) {
        include_once './models/getdetail.php';
        include_once './views/details.php';
    } else {
        echo '<h2>Home</h2>';
    }
    
    
    include_once'./views/footer.php';footer.php;