<?php include("headerscripts.php"); ?>

		<div class = navigation></div>
		<div class = "container_12 page_content">
			
			<div class="clear"></div>
			<?php include("uploadNavigation.php"); ?>
			<div class="grid_12 ">
				<h2>Product Catalog Questions</h2>
			</div>
			<div class="clear"></div>
			<div class = "grid_1 empty-cell"></div>
			<div class="grid_10">
				<form action="">
				  	 <!--  Question   -->
				  	<label  class = grid_5>Which vendor are these products from?</label>
				  	<input  class = grid_4 id= "1" type="text" name="vendor" >
				  	<p id = "1-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				  	<!--  Question   -->
				  	<label class = grid_5>Should these products be auto-restocked?</label>
				  	<select class = grid_4 id = "2" type="text" name="auto-restock">
				  		<option value="empty"></option>
				  		<option value="yes">Yes</option>
				  		<option value="no">No</option>
				  		<option value="specified in file">Specified in File</option>
				  	</select>
				  	<p id = "2-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				  	<!--  Question   -->
				  	<label class = grid_5 >Do you track inventory for these products?</label>
				  	<select class = grid_4 id= "3" type="text" name="inventory tracked" >
				  		<option value="empty"></option>
				  		<option value="yes">Yes</option>
				  		<option value="no">No</option>
				  		<option value="specified in file">Specified in File</option>
				  	</select>
				  	<p id = "3-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				  	<!--  Question   -->
				  	<label class = grid_5>Do these products require you to track lots?</label>
				  	<select class = grid_4 id= "4" type="text" name="track lots" >
				  		<option value="empty"></option>
				  		<option value="yes">Yes</option>
				  		<option value="no">No</option>
				  		<option value="specified in file">Specified in File</option>
				  	</select>
				  	<p id = "4-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				  	<!--  Question   -->
				  	<label class = grid_5>Do you want to automatically replenish these products upon use?</label>
				  	<select class = grid_4 id= "5" type="text" name="auto replenish" >
				  		<option value="empty"></option>
				  		<option value="yes">Yes</option>
				  		<option value="no">No</option>
				  		<option value="specified in file">Specified in File</option>
				  	</select>
				  	<p id = "5-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				  	<!--  Question   -->
				  	<label class = grid_5>What is the inventory type?</label>
				  	<select class = grid_4 id= "6" type="text" name="inventory type" >
				  		<option value="empty"></option>
				  		<option value="owned">Owned</option>
				  		<option value="consigned">Consigned</option>
				  	</select>
				  	<p id = "6-validation" class = "validation"></p>
				  	<div class = "clear section-break-small"></div>
				</form>
			</div>
			<!-- Section Break -->
			<div class="clear section-break"></div>
			<div class = "grid_7 empty-cell"></div>
			<div class = "grid_4">
			    <a class = "button button_blue" href = "/productCatalogMapping.php">Next</a>
			</div>

		</div> 

	</div>




<?php include("footer.php"); ?>
