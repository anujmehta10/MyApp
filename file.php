<!DOCTYPE html>
<html>
<body>
<h2>Products</h2>

<form>
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br>
<label for="price">Price:</label><br>
<input type="text" id="price" name="price"><br>
<label for="img">Select image:</label><br>
<input type="file" id="img" name="img" accept="image/*"><br>
<label for="category">Category:</label><br>
<select name="category" id="category">
<option value=""></option>
<option value="Men">Men</option>
<option value="Women">Women</option>
<option value="Kids">Kids</option>
</select><br>
<label for="tags">Tags:</label><br>
<input type="checkbox" id="fashion" name="fashion" value="">
<label for="fashion"> fashion</label>
<input type="checkbox" id="Ecommerce" name="Ecommerce" value="">
<label for="Ecommerce">Ecommerce</label>
<input type="checkbox" id="Shop" name="Shop" value="">
<label for="Shop">Shop</label>
<input type="checkbox" id="HandBag" name="HandBag" value="">
<label for="HandBag">HandBag</label>
<input type="checkbox" id="Laptop" name="Laptop" value="">
<label for="Laptop">Laptop</label>
<input type="checkbox" id="Headphones" name="Headphones" value="">
<label for="Headphones">Headphones</label><br>
<label for="text">Description:</label><br>
<textarea id="text" name="text" rows="4" cols="50"></textarea><br>
<input type="submit"><br>
</body>
</html>