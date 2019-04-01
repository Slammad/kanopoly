
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';


$user = $_SESSION['user'];
$userbucket = "SELECT * FROM `users` WHERE `username`='$user'";
$runbucket = $conn->query($userbucket);
$userdata=mysqli_fetch_assoc($runbucket);
$userid=$userdata['id'];

$users = "SELECT * FROM `users`";
$runit = $conn->query($users);
?>

<br><br>
	
	
	<main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table class="table">
                    <thead class="">
                      <th>
                        FULL NAME
                      </th>
                      <th>
                        EMAIL
                      </th>
                      <th>
                        PHONE
                      </th>
                      <th>
                        ISADMIN
                      </th>
                      <th class="text-right">
                        ACTIONS
                      </th>
                    </thead>
                    <tbody>
                   <?php while($userlist = mysqli_fetch_assoc($runit)){ ?>
                   <tr>
                        <td>
                          <?=$userlist['fullname']?>
                        </td>
                        <td>
                        <?=$userlist['email']?>
                        </td>
                        <td>
                        <?=$userlist['phone']?>
                        </td>
                        <td>
                        <?=$userlist['isAdmin']?>
                        </td>
                        <td class="text-right">
                        <a href="#" class="btn btn-success">Edit</a>
                        <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?=$userlist['id'];?>">
                                    <button type="submit" name="deletereport" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                      </tr>

                   <?php } ?>
                   
                   
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
	</main>
	<!-- /main content -->
	<br><br>
<?php 


if(isset($_POST['deletereport'])){
  $id=$_POST['id'];

  $query = "DELETE FROM `projects` WHERE `id`='$id'";
  $delete = $conn->query($query);

  if($delete){
     
      echo "<script>window.location.href = window.location.href;</script>";
  }

}

include 'includes/footer.inc.php';


?>