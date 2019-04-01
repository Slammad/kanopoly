
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';



$pid = (int) trim($_GET['pid']);

$projectq = "SELECT * FROM `projects` WHERE `id`='$pid'";
$runproject = $conn->query($projectq);
$project=mysqli_fetch_assoc($runproject);
$path = $project['path'];
?>

<br><br>
	
	
	<main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h5><b><?=$project['project_title']?></b></h5></center><br><Br>
                    <p><b>AUTHOR REG NO:</b> <?=$project['reg_no']?></p>
                    <p><B>PROJECT YEAR: </b> <?=$project['project_year']?></p>
                    <p><B>CASE OF STUDY: </b> <?=$project['case_of_study']?></p>
                    <center><h5><b>ABSTRACT</b></h5></center>
                    <center><p><?=$project['abstract']?></p></centeR>
                    <center><a href="download.php?dow=<?=$path?>" class="btn btn-success">Download Report Doc</a></centeR>
                    
                </div>
            </div>
        </div>
	</main>
	<!-- /main content -->
	<br><br>
<?php 


include 'includes/footer.inc.php';


?>