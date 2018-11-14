<?php
$thispage = "Startsida";
include('head.php');

if(isset($_POST) && !empty($_POST)) {
  $sql ="INSERT INTO greens (name, category, amount, description)
          VALUES(:name, :category, :amount, :description)";
  $result = $conn->prepare($sql);
  $res = $result->execute(
    array(
      ':name' => $_POST['name'],
      ':category' => $_POST['category'],
      ':amount' => $_POST['amount'],
      ':description' => $_POST['description']
    )
  );
  if($res) {
    $output = "Ny grönsak tillagd!";
  } else {
    $output = "Ups, nånting gick fel..";
  }

}

if(isset($_GET["delete"]) && !empty($_GET["delete"])) {

  $row = [
    ':id' => $_GET["delete"]
  ];

  $sql1 = "DELETE FROM greens WHERE id=:id";
  $res1 = $conn->prepare($sql1)->execute($row);

  if($res1) {
    $output = "Grönsaken raderad!";
  } else {
    $output = "Ups, nånting gick fel..";
  }

}
if(isset($_GET['groupbycategory'])) {
	$groupbycategory = $_GET['groupbycategory'];
	if($groupbycategory == 1) {
		$q_select = "SELECT * FROM greens WHERE category='fruit'";
	}elseif($groupbycategory == 2) {
		$q_select = "SELECT * FROM greens WHERE category='vegetable'";
	}elseif($groupbycategory == 3) {
		$q_select = "SELECT * FROM greens WHERE category='berry'";
	}
} else {
	
$q_select = "SELECT * FROM greens";
}
$stmt = $conn->query($q_select);

?>

</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm">
	<?php include('header.php'); ?>
	</div>
</div>

<div class="begin">
  <div class="row">
    <div class="col-md-9">
			<img src="greens/Fruits.jpg">
		</div>
    <div class="box-1">
	<div class="col-md-3">
		<br>
		</div>
</div>
</div>
</div>
</div>

<div class="container">

<div class="row">
    <div class="col-sm">
	</div>
</div>
<div class="container">
	<div class="row" >	
		<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

		<div class="col-sm-12 col-md-4">				 
			<div class="lines">
				<?php echo $row['name']; ?> <br>
				<?php echo $row['category']; ?> <br>
				<?php echo $row['amount']; ?>kg <br>
				<?php echo $row['description']; ?> <br>
				<a href="<?php echo $_SERVER ['PHP_SELF'] . "?delete=" . $row["id"]; ?>" class="btn btn-danger" role="button">Delete</a>
			</div>		
		</div>
		<?php } //stänger while ?>	
	</div>
</div>
<div class='output'>
<?php if(!empty($output)) { echo '<h3>' . $output . '</h3>'; } ?>
</div>
<div class="mine">
<div class='mine2'>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h2>Ge oss något grönt!</h2>
<p><label>Namn</label><br>
  <input type="text" name="name"></p>
<p><label>Kategori</label><br>
  <input type="text" name="category"></p>
<p><label>Mängd</label><br>
  <input type="number" name="amount"></p>
<p><label>Beskrivning</label><br>
  <textarea rows="4" cols="50" name="description"></textarea></p>
<p><button type="submit">Lägg till det gröna!</button></p>
</form>
</div>		
</div>

<!-- End of content -->
<?php include('footer.php');?>