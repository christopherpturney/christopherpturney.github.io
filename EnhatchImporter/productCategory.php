<?php include("headerscripts.php"); ?>
<!-- set variable for current page  -->


		<div class = navigation></div>
		<div class = "container_12">
			<div class="clear"></div>
	
			<?php include("uploadNavigation.php"); ?>
 			<div class="grid_12 ">
				<h2>Product Category</h2>
			</div>
 			<div class = "page-content">
				<div class="clear"></div>
				<div class="grid_2 empty-cell"></div>
				<div class="grid_8">
					<form action="">
					  <input class = "file-upload" type="file" name="pic" accept="image/*">
					  <input class =  "button button_submit" type="submit">
					</form>
				</div>
				<div class="grid_1"></div>
				<div class="clear"></div>
				 <!-- - new row -  -->
				<div class="grid_2 empty-cell"></div>
				<div class="grid_5 submit-message">10 Rows Uploaded Successfully</div>
			
				<!-- Section Break -->
				<div class="clear section-break"></div>
				
	
				

				<div class = "grid_7 empty-cell"></div>
				<div class = "grid_4">
				    <a class = "button button_blue" href = "/validateProductCategory.php">Next</a>
				</div>
			</div> <!-- end main page div -->
		</div> 

	</div>




<?php include("footer.php"); ?>
