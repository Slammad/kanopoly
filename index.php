
<?php 

include 'core/connection.php'; 
include 'includes/head.inc.php';

?>


	
	
	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>Project Reports!</h3>
				<p>
					Computerized Project Record System
				</p>
			<a class="btn" href="register.php">
			<a href="viewprojects.php" class="btn btn-info" type="submit">VIEW PROJECTS</a>
			<a href="addproject.php" class="btn btn-danger">ADD PROJECT REPORT
			</a>
			<br><br>
			<div id="custom-search-input">
				<div class="input-group">
					<input type="text" class=" search-query" placeholder="Search Project by title or year ">
					<input type="submit" class="btn_search" value="Search">
				</div>
				</div>
			</div>
		</div>
		<!-- /Hero -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>COMPUTERIZED <strong>PROJECT RECORD </strong> SYSTEM!</h2>
				<p>This platform simply automates the manual storage of project report documents to an easy to use document organization system for Kano state polytechnic!
				</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<br>
						<p>Text.......</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<Br>
						<p>Text.......</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<br>
						<p>Text.......</p>
					</div>
				</div>
			</div>
			<!-- /row -->
		

		</div>
		<!-- /container -->

		<!-- /white_bg -->

	
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	
<?php 

include 'includes/footer.inc.php';


?>