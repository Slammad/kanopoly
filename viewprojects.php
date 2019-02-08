
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';




$userprojects = "SELECT * FROM `projects`";
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

include 'includes/footer.inc.php';


?>