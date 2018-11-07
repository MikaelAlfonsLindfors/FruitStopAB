<?php
$thispage = "Vegetables";
include('head.php');

$q_select = "SELECT * FROM greens WHERE category = 'vegetable'";
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

<div class="container">
<div class="row" >	
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="col-sm-12 col-md-4">
			<img src="greens/cucumber.jpg"  alt='Cucumber'
				width='350' height='350'>
				 

<?php echo $row['name']; ?> <br><br> <?php echo $row['amount(kg)']; ?>kg <br><br> <?php echo $row['description']; ?>
		
		</div>
		<?php } //stänger while ?>	
    			
</div>
</div>
<!-- End of content -->
<?php include('footer.php');?>