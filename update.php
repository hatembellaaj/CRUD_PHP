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
  <form action="save.php" method="post">


  <?php
$servername = "127.0.0.1";
$username = "root";
$password = "csf";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM article where id=".$_REQUEST["id"];

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    echo '<label for="id">ID</label>';
    echo '<input type="text" id="id" name="id" placeholder="The id name.." value= ' . $row["id"]. '>';

    echo '<label for="name">Name</label>';
    echo '<input type="text" id="name" name="name" placeholder="The article name.." value= "' . $row["name"]. '">';

    echo '<label for="price">Price</label>';
    echo '<input type="text" id="price" name="price" placeholder="Article price.." value= ' . $row["price"]. '>';

    echo '<label for="quantity">Quantity</label>'; 
    echo '<input type="text" id="quantity" name="quantity" placeholder="Article quantity.." value= ' . $row["quantity"]. '>';

} else {
    echo "0 results";
  }

    $conn->close();
    ?>

    <input type="submit" >
  </form>
</div>

</body>
</html>