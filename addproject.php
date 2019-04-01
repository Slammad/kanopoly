<?php 
include 'core/connection.php'; 
include 'includes/head.inc.php';


if (!isset($_SESSION['user'])){
    echo "<script>window.location.href ='login.php';</script>";
}

$user = $_SESSION['user'];
$userbucket = "SELECT * FROM `users` WHERE `username`='$user'";
$runbucket = $conn->query($userbucket);
$userdata=mysqli_fetch_assoc($runbucket);
$userid=$userdata['id'];
if(isset($_POST['addproject']))
{
 $project_title = $_POST['project_title'];
 $project_author = $_POST['proeject_author'];
 $regno = $_POST['regno'];
 $year = $_POST['year'];
 $case=$_POST['case'];
 $abstract= $_POST['abstract'];
 $name = $_FILES['doc']['name'];
 $tmpname = $_FILES['doc']['tmp_name'];
  
 if($name){
    $location="docs/$name";
    move_uploaded_file($tmpname,$location);
    $query = "INSERT INTO `projects`(`id`, `user_id`, `reg_no`, `project_author`, `project_title`, `case_of_study`, `project_year`, `abstract`, `path`) VALUES (NULL,'$userid','$regno','$project_author','$project_title','$case','$year','$abstract','$location')";
    if($conn->query($query)){
        header('Location:myprojects.php');
    }

 }else{

 }

}


?>

	<br><br><br>
<form method="post" action="addproject.php" enctype="multipart/form-data">
    <div class="container">
            <div id="accordion">
              
            
                <div class="card card-default">
                    <div class="card-header">
                        <h6 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <i class="glyphicon glyphicon-search text-gold"></i>
                                <b>PROJECT UPLOAD FORM</b>
                            </a>
                        </h6>
                    </div>
                    <div id="collapse1" class="collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Project Title</label>
                                        <input type="text" class="form-control" name="project_title" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Project Author</label>
                                        <input type="text" class="form-control" name="project_author" />
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Author RegNo</label>
                                        <input class="form-control" type="text" name="regno" />
                                    </div>
                                </div>
                                    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Project Year</label>
                                        <input class="form-control" type="text" name="year" />
                                        <div class="input-group date">
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                     
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Case Study</label>
                                        <input type="text" class="form-control" name="case" />
                                    </div>
                                </div>
            
                              
                            </div>
           
                            <div class="row">
                            <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Abstract</label>
                                        <textarea class="form-control" name="abstract"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label class="control-label">Upload Report</label>
                                        <input type="file" name="doc" >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
              

                </div>
                <br />
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-12">
                    <div class="pull-right">
                    <a href="" id="btnSubmit">
			        <button class="btn btn-info" type="submit" name="addproject">ADD PROJECT DOCUMENT</button>
			        </a>
    
                    </div>
                </div>
            </div>
            </div>
</form>




<?php 

include 'includes/footer.inc.php';


?>