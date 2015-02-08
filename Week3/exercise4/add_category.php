<?php
$category_id = $_POST['category_id'];
$name = $_POST['name'];

require_once('database.php');
    $query = "INSERT INTO categories (categoryName)
              VALUES ('$name')";
    $db->exec($query);
    
    include('category_list.php');
    ?>