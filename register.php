
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';

?>


	
	
	<main>
		<div class="hero_home version_1">
            
			<div class="content">
                <br><br>
            <div class="col-md-4 offset-md-4">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">User SignUp</h5>
              </div>
              <div class="card-body">
                <form action="register.php" method="POST">
                  <div class="row">
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname">
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                      </div>
                    </div>
                  
                  </div>
                
               
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="signup" class="btn btn-primary btn-round">Sign up</button>
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
if(isset($_POST['signup'])){
    $fullname=$_POST['fullname'];
    $email = $_POST['email'];
    $user= $_POST['username'];
    $key = $_POST['password'];
    $phone = $_POST['phone'];
    $password = md5($key);


    $check = "SELECT * FROM `users` WHERE `username`='$user' AND `password`='$password'";
    $runcheck = $conn->query($check);
    $row_cnt = mysqli_num_rows($runcheck);

    if($row_cnt == 0){
        $newuser = "INSERT INTO `users`(`id`, `fullname`, `email`, `username`, `password`, `phone`) VALUES (NULL,'$fullname','$email','$user','$password','$phone')";
        $runnewuser = $conn->query($newuser);
        if($runnewuser){
            echo "<script>window.location.href ='index.php';</script>";
        }
    }else{
        echo "<script>console.log('user exist')</script>";
    }
}
include 'includes/footer.inc.php';


?>