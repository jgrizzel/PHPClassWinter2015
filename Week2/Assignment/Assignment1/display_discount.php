<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--if ( !is_string($product_description)||empty( $product_description) ) {
        $error_message = 'Product description is a required field.'; }
                                   
 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <?php 
    $product_description= '';
    $list_price='';
    $discount_percent='';
    $list_price_formatted='';
    $discount_percent_formatted='';
    $discount_formatted='';
    $discount_price_formatted='';
    $error_message='';
    
    
      
     
        
        $product_description= $_POST['product_description'];
        $list_price=$_POST['list_price'];
        $discount_percent=$_POST['discount_percent'];
        
//Validate Product Description*****************************************
    if ( empty($product_description) ) {
        $error_message .= '<p>Product description is a required field.</p>';
    }
    else if ( !is_string($product_description) )  {
        $error_message .= '<p>Prodcut description must be a string.</p>'; }
//Validate List Price*************************************************
    if ( !is_numeric($list_price) )  {
        $error_message .= '<p>List Price must be a number.</p>'; }
//Validate List Price*************************************************
        if ( !is_numeric($discount_percent) )  {
        $error_message .= '<p>Discount must be a number.</p>'; }
        // if an error message exists, go to the index page
        
if ($error_message != '') {
        include('index.html');
        exit();
    }
    
    if(!empty($_POST)) {     
        $list_price_formatted='$'.number_format($list_price,2);
        $discount_percent_formatted=$_POST['discount_percent'].'%';
        $discount_formatted=$list_price*($discount_percent/100);
        $discount_price_formatted=$list_price - $discount_formatted;
      
        }
       
    ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
         
        <label>Product Description:</label>
        <span><?php echo $product_description;?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php  echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>