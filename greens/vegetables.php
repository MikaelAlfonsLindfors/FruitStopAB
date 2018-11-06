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
          <a class="dropdown-item" href="fruits.php">Fruits </a>
          <a class="dropdown-item" href="#">Vegetables (current)</a>
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
			<img src="cucumber.jpg"  alt='Cucumber' 
				 width='300' height='300'>
			<h2>Cucumber</h2>
		<p>Gurka</p>
		<p>75kg</p>
		<p>1.2.2019</p>	
		</div>
    <div class="col-sm-12, col-sm-4">
			<img src="tomatos.jpg" alt='Tomato' 
				 width='300' height='300'>
			<h2>Tomato</h2>
		<p>Tomat</p>
		<p>55kg</p>
		<p>3.1.2019</p>
		</div>
	<div class="col-sm-12, col-sm-4">
			<img src="broccoli.jpg" alt='Broccoli' 
				 width='300' height='300'>
			<h2>Broccoli</h2>
		<p>Broccoli</p>
		<p>60kg</p>
		<p>22.12.2018</p>
		</div>
</div>
</div>