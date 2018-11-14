<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="navbar-brand">
  <a class="navbar-brand" href="#">FRUITSTOP-AB</a>
 </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($thispage == "Startsida") { echo "active"; } ?>">
        <a class="nav-link" href="index.php">Alla produkter!<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?groupbycategory=1">Frukt</a>
          <a class="dropdown-item" href="?groupbycategory=2">Grönsaker</a>
          <a class="dropdown-item" href="?groupbycategory=3">Bär</a>
        </div>
      </li>
    </ul>
	<form class="form-inline my-2 my-lg-0">
        <a class='btn btn-primary' href="fruitstop_stocks.php">Update</a> 
    <form class="form-inline my-2 my-lg-0">
        <a class='btn btn-danger' href="fruitlogin.php">Logout</a> 
    </form>
  </div>
</nav>