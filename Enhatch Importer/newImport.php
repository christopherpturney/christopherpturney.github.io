<?php include("headerscripts.php"); ?>

		<div class = navigation></div>
		<div class = "container_12 page_content">
			<div class="grid_12 page_title">
				<h2>New Import</h2>
			</div>
			<div class="clear"></div>
			<div class="grid_2 empty-cell">
			    <p>
			    </p>
			</div>
			<div class="grid_5">
				<form action="">
				  <label>Company</label>
				  <div>
				  	<input id= "company" type="text" placeholder="Company" >
				  	<p id = "company-validation" name = "validation"></p>
				  </div>
				  <label>Import Name</label>
				  	<input id = "import-name" type="text" placeholder="Import Name">
				  	<p id = "import-name-validation" class = "validation"></p>
				</form>
			    
			</div>
			<div class="grid_3 empty-cell"></div>
			<!-- Row -->
			<div class = "clear"></div>
			<div class = "grid_7 empty-cell"></div>
			<div class = "grid_4">
			    <a href = '#' id = "new-import-next" class = "button button_blue">Next</a>
			</div>
		</div> 

	</div>

<?php include("footer.php"); ?>
