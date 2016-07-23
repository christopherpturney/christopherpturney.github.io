<?php include("headerscripts.php"); ?>

		<div class = navigation></div>
		<div class = "container_12 page_content">
			
			<div class="clear"></div>
			<?php include("uploadNavigation.php"); ?>
			<div class="grid_12 ">
				<h2>Product Catalog Mapping</h2>
			</div>
			<div class="clear"></div>
			<div class = "grid_2 empty-cell"></div>
			<div class="grid_5 mapping-left">
				<h3><em>Control </em>Product Catalog Fields</h3>
				<form id = mapping-form action="">
				  	 <!--  Question   -->
				  	<label class = grid_2>Name</label>
				  	<select class = grid_2  type="text" name="name" >
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "1-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				  	<!--  Question   -->
				  	<label class = grid_2>ID</label>
				  	<select class = grid_2  type="text" name="ID">
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "2-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				  	<!--  Question   -->
				  	<label class = grid_2>Number</label>
				  	<select class = grid_2  type="text" name="Number" >
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "3-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				  	<!--  Question   -->
				  	<label class = grid_2>Description</label>
				  	<select class = grid_2 type="text" name="Description" >
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "4-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				  	<!--  Question   -->
				  	<label class = grid_2>For Sale</label>
				  	<select class = grid_2  type="text" name="For Sale" >
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "5-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				  	<!--  Question   -->
				  	<label class = grid_2>List Price</label>
				  	<select class = grid_2 type="text" name="List Price" >
						<option value="empty"></option>
						<option value="Name">Name</option>
						<option value="ID">ID</option>
						<option value="Number">Number</option>
						<option value="Description">Description</option>
						<option value="For Sale">For Sale</option>
						<option value="List Price">List Price</option>
				  	</select>
				  	<!-- <p id = "6-validation" class = "validation"></p> -->
				  	<div class = clear></div>
				</form>
			</div>
			<div class = "grid_3 mapping-right">
				<h3>Your Column Headers</h3>
				<ul id = mapped-field-list>
					<li>Name<span class = icons></span></li>
					<li>ID<span class = icons></span></li>
					<li>Number<span class = icons></span></li>
					<li>Description<span class = icons></span></li>
					<li>For Sale<span class = icons></span></li>
					<li>List Price<span class = icons></span></li>
				</ul>
			</div>
			<!-- Section Break -->
			<div class="clear section-break"></div>
			<div class = "grid_7 empty-cell"></div>
			<div class = "grid_4">
			    <a class = "button button_blue" href = "/validateProductCatalog.php">Next</a>
			</div>

		</div> 

	</div>




<?php include("footer.php"); ?>
