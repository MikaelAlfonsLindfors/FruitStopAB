<?php
include('db_connect.php');
include('head.php');

if(isset($_POST) && !empty($_POST)) {

  $row = [
    ':id' => $_POST['id'],
    ':name' => $_POST['name'],
    ':category' => $_POST['category'],
    ':amount' => $_POST['amount'],
	':description' => $_POST['description']
  ];

  $sql2 = "UPDATE greens
          SET name=:name, category=:category, amount=:amount, description=:description
           WHERE id=:id";
  $res2 = $conn->prepare($sql2)->execute($row);

  if($res2) {
    $output = $_POST['name'] . " uppdaterad!";
  } else {
    $output = "Ups, nånting gick fel..";
  }

}

$q_select = "SELECT * FROM greens";
$stmt = $conn->query($q_select);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>FruitStop AB Stocks</title>
</head>
<body>

<?php if(!empty($output)) { echo '<h3>' . $output . '</h3>'; } ?>

<h1>FruitStop AB Stocks</h1>
<table>
<tr>
  <th>Name</th>
  <th>Category</th>
  <th>Amount</th>
  <th>Description</th>
</tr>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<tr>
<td>
<input type="text" name="name" value="<?php echo $row['name']; ?>">
</td><td>
<input type="text" name="category" value="<?php echo $row['category']; ?>">
</td><td>
<input type="text" name="amount"value="<?php echo $row['amount']; ?>">
</td><td>
<input type="text" name="description"value="<?php echo $row['description']; ?>">
</td><td>
<button type="submit" name="update">updatera</button>
</td>
<td>
<button type="submit" name="delete">radera</button>
</td>
</tr>
</form>
<?php } //end tableloop ?>
</table>
	<a href="index.php" class="btn btn-info">Back to storefront!</a>
</body>
</html>
