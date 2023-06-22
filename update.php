<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Create new article</h3>

<div>
  <form action="create.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="The article name..">

    <label for="price">Price</label>
    <input type="text" id="price" name="price" placeholder="Article price..">

    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Article quantity..">
  
    <input type="submit" >
  </form>
</div>

</body>
</html>