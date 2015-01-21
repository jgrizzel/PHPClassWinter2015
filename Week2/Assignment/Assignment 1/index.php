
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
       
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description"/><br />

                <label>List Price:</label>
                <input type="number" name="list_price"/><br />

                <label>Discount Percent:</label>
                <input type="number" name="discount_percent"/>%<br />
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount" /><br />
            </div>

        </form>
    </div>
</body>
</html>

