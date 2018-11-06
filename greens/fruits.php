<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navigation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($thispage == "Startsida") { echo "active"; } ?>">
        <a class="nav-link" href="../index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item <?php if($thispage == "Produkter") { echo "active"; } ?>">
        <a class="nav-link" href="../products.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Fruits (current)</a>
          <a class="dropdown-item" href="vegetables.php">Vegetables</a>
          <a class="dropdown-item" href="berries.php">Berries</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">WIP</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">

<div class="row">	
    <div class="col-sm-12, col-sm-4">
			<img src="oranges.jpg" alt='Orange' 
				 width='300' height='300'>
			<h2>Oranges</h2>
		<p>Apelsin</p>
		<p>85kg</p>
		<p>4.2.2019</p>
		</div>
    <div class="col-sm-12, col-sm-4">
			<img src="pears.jpg" alt='Pear' 
				 width='300' height='300'>
			<h2>Pears</h2>
		<p>Päron</p>
		<p>125kg</p>
		<p>3.3.2019</p>
		</div>
    <div class="col-sm-12, col-sm-4">
			<img src="peaches.jpg" alt='Peach' 
				 width='300' height='300'>
			<h2>Peaches</h2>
		<p>Persika</p>
		<p>45kg</p>
		<p>31.12.2018</p>
		</div>	
</div>
</div>