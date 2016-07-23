<?php include("headerscripts.php"); ?>

		<div class = navigation></div>
		<div class = "container_12 page_content">
			<div class="grid_12 page_title">
				<h2>Home</h2>
			</div>
			<!--  New row   -->

			<div class="clear"></div>
			<div class="grid_2 empty-cell"></div>
			<label class = "entry-row entry-label grid_2">Meal</label>
	      	<select id= "meal-dropdown" class = "entry-row grid_2" name="cars" >
	       		<option value="empty"></option>
	       		<option value="volvo">Breakfast</option>
	       		<option value="saab">Lunch</option>
	        	<option value="fiat">Brunch</option>
	        	<option value="audi">Dinner</option>
	      	</select>
			<!--  New row   -->	     
			<div class="clear"></div>
			<div class="grid_2 empty-cell"></div>
			<label class = "entry-row entry-label grid_2">City</label>
	      	<select id= "city-dropdown" class = "entry-row grid_2" name="cars"  >  
	       		<option value="empty"></option>
	       		<option value="newyork">New York</option>
	       		<option value="chicago">Chicago</option>
	        	<option value="mexicocity">Mexico City</option>
	        	<option value="buenosaires">Buenos Aires</option>
	      	</select>
    		<!--  New row   -->	      	
	      	<div class="clear"></div>
			<div class="grid_2 empty-cell"></div>
			<div class = grid_8 id = "my-sentence">Where are you going? What are you eating?</div>

	      	<div class="clear section-break"></div>
    		<!--  New row   -->


			<div class="clear"></div>
			<div class="grid_2 empty-cell"></div>
			<div class="grid_4">
			      <a class = "button" href = "/newImport.php">Add New Import</a>
			    
			</div>
			<div class="grid_4">
			    <h3>
			      Continue Existing Import
			    </h3>
			<!--     <ul>
			    	<li><a href ="">Import 1</a></li>
					<li><a href ="">Import 2</a></li>
					<li><a href ="">Import 3</a></li>
					<li><a href ="">Import 4</a></li>
			    </ul> -->
			</div>
			<div class="grid_2 empty-cell"></div>
			<!--  New row   -->
			<div class="clear section-break"></div>
			<div class = "grid_3 empty-cell"></div>
			<div class = "grid_6 help-text">
		      	<p class = download>Do you need assistance in starting your data collection process? Click below to download our template.</p>
		      	<a class = "button button_blue">Download</a>
		    </div>
			<div class = "grid_3 empty-cell"></div>


			
		</div> 

	</div>




<?php include("footer.php"); ?>
