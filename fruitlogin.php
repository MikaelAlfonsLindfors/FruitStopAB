<?php
session_start();
include('db_connect.php');
include('head.php');
if(isset($_POST['action'])){
		$action = $_GET['action'];
		
		//om inte inloggad
		
		if($action == 'nosession'){
			$output = 'Var god och logga in';
		}
		if($action == 'logout'){
			$output = 'Tack för besöket';
			unset($_SESSION['user']);
		}
}

if(isset($_POST) && !empty($_POST)) {
	$sql = 'SELECT * FROM users 
			WHERE user_email=:user_email
			AND user_password=:user_password 
			LIMIT 1';
			
	$row = [
	":user_email" => $_POST["user_email"],
	':user_password' => md5($_POST['user_password'])
	];
	$res = $conn->prepare($sql);
	$res->execute($row);
	
	if($res->fetchColumn() < 1) {
		header('Location: error.php'); //$output = 'Hittade inga användare ' . $res->fetchColumn();
	}else{
		//$output = 'Användare ok';
		$_SESSION['user'] = 1;
		header('Location: index.php');
	}	
};

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Fruitstop LogIn</title>
  </head>
 <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1>Logga in och se det gröna!</h1>
			<?php if(!empty($output)) { echo '<h3 class="alert alert=warning">' . $output . '</h3>'; } ?>
          <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
				<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
				</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
 <!-- / container -->
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>