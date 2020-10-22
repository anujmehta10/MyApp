<?php include('header.php'); 
	 include('sidebar.php'); 
	 include('config1.php');
	
	
	if(isset($_POST['submit']))
	{
		$name = isset($_POST['name']) ? ($_POST['name']) : '';
		$price = isset($_POST['price']) ? ($_POST['price']) : '';
		$image = isset($_POST['image']) ? ($_POST['image']) : '';
		$category = isset($_POST['category']) ? ($_POST['category']) : '';
		$tags = isset($_POST['tags']) ? ($_POST['tags']) : '';
		$description = isset($_POST['description']) ? ($_POST['description']) : '';
	
	$insert = "INSERT INTO products(`name`, `price`, `image`,`category`,`tags`,`description`)
	VALUES('$name', '$price', '$image',  '$category','$tags','$description')";
		mysqli_query($conn, $insert);
	
	}
	
	
	?>
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Name</th>
								   <th>Price</th>
								   <th>Image</th>
								   <th>Category</th>
								   <th>Tags</th>
								   <th>Description</th>
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>
								
								<?php
									$query = mysqli_query($conn, "SELECT * FROM products");

									while($row = mysqli_fetch_array($query))
									{
										echo"<tr>";
											echo'<td> <input type="checkbox" /></td>';
											echo "<td>" . $row['name'] ."</td>";
											echo "<td>" . $row['price'] ."</td>";
											echo "<td>" . $row['image'] ."</td>";
											echo "<td>" . $row['category'] ."</td>";
											echo "<td>" . $row['tags'] ."</td>";
											echo "<td>" . $row['description'] ."</td>";
											echo "<td>";
												echo "<a href='#' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>";
												echo "<a href='#' title='Delete'><img src='resources/images/icons/cross.png' alt='Delete'/></a>";
												echo "<a href='#' title='Edit Meta'><img src='resources/images/icons/hammer_screwdriver.png' alt='Edit Meta' /></a>";
											echo "</td>";
										echo"</tr>";
									}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="products.php" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<!DOCTYPE html>
							<html>
							<body>
							<h2>Products</h2>
							
							<form>
							<label for="name">Name:</label><br>
							<input type="text" id="name" name="name"><br>
							<label for="price">Price:</label><br>
							<input type="text" id="price" name="price"><br>
							<label for="img">Select image:</label><br>
							<input type="file" id="image" name="image" accept="image"><br>
							<label for="category">Category:</label><br>
							<select name="category" id="category">
							<option value=""></option>
							<option value="Men">Men</option>
							<option value="Women">Women</option>
							<option value="Kids">Kids</option>
							</select><br>
							<label for="tags">Tags:</label><br>
							<input type="checkbox" id="fashion" name="fashion" value="">
							<label for="fashion"> fashion</label>
							<input type="checkbox" id="Ecommerce" name="Ecommerce" value="">
							<label for="Ecommerce">Ecommerce</label>
							<input type="checkbox" id="Shop" name="Shop" value="">
							<label for="Shop">Shop</label>
							<input type="checkbox" id="HandBag" name="HandBag" value="">
							<label for="HandBag">HandBag</label>
							<input type="checkbox" id="Laptop" name="Laptop" value="">
							<label for="Laptop">Laptop</label>
							<input type="checkbox" id="Headphones" name="Headphones" value="">
							<label for="Headphones">Headphones</label><br>
							<label for="text">Description:</label><br>
							<textarea id="description" name="description" rows="4" cols="50"></textarea><br>
							<p>
									<input class="button" type="submit" name="submit" value="submit" />
								</p>
							</body>
							</html>
															
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			<!--
			<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			-->
			<!-- End Notifications -->
			
			<?php include('footer.php'); ?>
			