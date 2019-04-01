
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';


$user = $_SESSION['user'];
$userbucket = "SELECT * FROM `users` WHERE `username`='$user'";
$runbucket = $conn->query($userbucket);
$userdata=mysqli_fetch_assoc($runbucket);
$userid=$userdata['id'];

$userprojects = "SELECT * FROM `projects` WHERE `user_id`='$userid'";
$runit = $conn->query($userprojects);
?>

<br><br>
	
	
	<main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table class="table">
                    <thead class="">
                      <th>
                        PROJECT TITLE
                      </th>
                      <th>
                        PROJECT AUTHOR
                      </th>
                      <th>
                        AUTHOR REGNO
                      </th>
                      <th>
                        PROJECT YEAR
                      </th>
                      <th class="text-right">
                        ACTIONS
                      </th>
                    </thead>
                    <tbody>
                   <?php while($project = mysqli_fetch_assoc($runit)){ ?>
                   <tr>
                        <td>
                          <?=$project['project_title']?>
                        </td>
                        <td>
                        <?=$project['project_author']?>
                        </td>
                        <td>
                        <?=$project['reg_no']?>
                        </td>
                        <td>
                        <?=$project['project_year']?>
                        </td>
                        <td class="text-right">
                        <a href="projectdetail.php?pid=<?=$project['id']?>" class="btn btn-success">View</a>
                        <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?=$project['id'];?>">
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