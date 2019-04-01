
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';

if (isset($_SESSION['user'])){
    echo "<script>window.location.href ='index.php';</script>";
}
?>


	
	
	<main>
		<div class="hero_home version_1">
            
			<div class="content">
                <br><br>
            <div class="col-md-4 offset-md-4">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">User Login</h5>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="row">
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter UserName">
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                      </div>
                    </div>
                  
                  </div>
                
               
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="login" class="btn btn-primary btn-round">Login</button>
                    </div>
                    <br>
                  </div><br>
                </form>
              </div>
            </div>
          </div>
			</div>
		</div>
		<!-- /Hero -->

	
	</main>
	<!-- /main content -->
	
<?php 

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $password = md5($_POST['password']);


  $querry = "SELECT * FROM `users` WHERE `username`='$user' AND `password`='$password'";
  $runq= $conn->query($querry);
  $userexist = mysqli_num_rows($runq);

  if($userexist > 0 ){
    $_SESSION['user']=$user;
    echo "<script>window.location.href ='index.php';</script>";
  }else{
    echo "<script>console.log('user record not found')</script>";
 }

}
include 'includes/footer.inc.php';


?>