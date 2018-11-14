<?php
$thispage = "Berries";
include('head.php');

$q_select = "SELECT * FROM greens";
$stmt = $conn->query($q_select);

if(isset($_POST) && !empty($_POST)) {
  $sql ="INSERT INTO students (name, category, amount(kg), description)
          VALUES(:name, :category, :amount(kg), :description)";
  $result = $conn->prepare($sql);
  $res = $result->execute(
    array(
      ':name' => $_POST['name'],
      ':category' => $_POST['category'],
      ':amount(kg)' => $_POST['amount(kg)'],
      ':description' => $_SERVER['description']
    )
  );
  if($res) {
    $output = "Ny elev tillagd!";
  } else {
    $output = "Ups, nånting gick fel..";
  }

}
?>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm">
	<?php include('header.php'); ?>
	</div>
</div>

<div class="container">
<div class="row" >	
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="col-sm-12 col-md-4">
				 
<div class="lines">
<?php echo $row['name']; ?> <br><br> <?php echo $row['category']; ?> <br><br> <?php echo $row['amount(kg)']; ?>kg <br><br> <?php echo $row['description']; ?>
</div>		
		</div>
		<?php } //stänger while ?>	

<?php if(!empty($output)) { echo '<h3>' . $output . '</h3>'; } ?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h1>Ge oss något grönt!</h1>
<p><label>Namn</label><br>
  <input type="text" name="name"></p>
<p><label>Kategori</label><br>
  <input type="text" name="category"></p>
<p><label>Mängd(kg)</label><br>
  <input type="number" name="amount(kg)"></p>
<p><label>Beskrivning</label><br>
  <textarea rows="4" cols="50" name="description"></textarea></p>
<p><button type="submit">Spara Grönsaken!</button></p>
		
</div>
</div>
<!-- End of content -->
<?php include('footer.php');?>

</body>




