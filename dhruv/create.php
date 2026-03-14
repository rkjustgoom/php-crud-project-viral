<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
</head>

<body>
    

<h2>Add Product</h2>


<form action="insert.php" method="POST">

Product Name:
<input type="text" name="product_name"><br><br>

price:
<input type="text" name="price"><br><br>
quantity:
<input type="text" name="quantity"><br><br>

Category:
<select name="category_id">

<option value="1">ball</option>
<option value="2">bat</option>
<option value="3">grip</option>
<option value="4">blub</option>
<option value="5">fan</option>
<option value="6">swich</option>
<option value="7">pen</option>
<option value="8">book</option>


</select>

<br></br>

<input type="submit" value="INSERT">

</form>

</body>

</html>

