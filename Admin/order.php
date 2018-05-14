<?php
 include("../config.php");
include("../session.php");
 ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title> Novashop I Admin </title>

	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	


	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>
<div id="container">

  
	   <div id="header">
 
        <div class="logo"><a href="index.php" style=" font-size: 48px;margin-top: 15px;
    font-weight: normal;
    color:#000; font-family: logo">NovaShop</a></div>
		</div>
		
	
<div id="content-wrap">		
	<section id="secondary_bar">
		
             <nav><!-- Defining the navigation menu -->
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
                    <li><a href="add_warehouse.php">Add warehouse</a></li>
                    <li><a href="add_product.php">Add product</a></li>
                    <li><a href="Employee.php">Add employee</a></li>
                    <li><a href="add_category.php">Categories</a></li>
                    <li class="logout"> <span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></li>
					
                </ul>
				
            </nav>
		
	</section><!-- end of secondary bar -->
	
	   	
<aside id="sidebar" class="column">
				<!-- Begin Search -->
				<div id="search">
					<form action="searchprod.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Product"   name='search' size=60 maxlength=100 />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
				<!-- End Search -->
		<hr/>
		<h3> Novashop Database Backup:</h3>
		<ul class="toggle">
		    <li class="icn_folder"><a href="Backup.php">Backup Database</a></li>
		</ul>
		
		<h3>Reports:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="OrderReports.php">Order Report</a></li>
			<li class="icn_settings"><a href="EmployeeReport.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Customer Report</a></li>
			<li class="icn_settings"><a href="ProductReport.php"> Product Report</a></li>
     		
		</ul>


		
		<h3>Administrator:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Add Employee</a></li>
			<li class="icn_photo"><a href="add_product.php">Add Product</a></li>
			<li class="icn_tags"><a href="add_warehouse.php">Add Warehouse</a></li>
			<li class="icn_new_article"><a href="add_category.php">Add Category</a></li>
		
		</ul>
		
        <h3>Tables:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Order Detial</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Customer Detail</a></li>
		</ul>

		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
	
		
		<h4 class="alert_info">Welcome To <strong>"Novashop"</strong> Admin Panel As: <?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?>  </h4>
		
          
			<div class="module_content">
			
		
			</div>

	
		
		<?php
$result = mysqli_query($mysqli,"SELECT * FROM payment");
?>
      			<div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 
      <thead>
			<thead><th colspan="15"> Customer Order Detail </th></thead>
		<thead>
			</tr>
   		    <th>Check</th> 
			<th>ID</th>
    	    <th>FullName</th>
            <th>Email</th>			  
    		<th>PCode</th>
		    <th>Adress</th>	
            <th>Country</th>	
            <th>City</th>
            <th>Phone</th>
			<th>Warehouse</th>
			<th>Delivery Address</th>
			<th>Currency</th>
			<th>Total Amount</th>
			<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['order_ID']; ?></td>
    <td><?php echo $row['Full_Name']; ?></td>
    <td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Postal_Code']; ?></td>
	<td><?php echo $row['Address']; ?></td>
	<td><?php echo $row['Country']; ?></td>
	<td><?php echo $row['City']; ?></td>
	<td><?php echo $row['Phone']; ?></td>
	<td><?php echo $row['Warehouse_ID']; ?></td>
	<td><?php echo $row['Dilivery_Address']; ?></td>
	<td><?php echo $row['Currency']; ?></td>
	<td><?php echo $row['Total_Amount']; ?></td>
    <td> <a href="PaymentDelete.php?delete=<?php echo $row['order_ID']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr

	
	
  <?php }mysqli_close($mysqli);?>
</tbody>
</table>


			</div><!-- end of #tab2 -->
	
	     
		
		<div class="clear"></div>
		
		

		<div class="spacer"></div>
	</section>
       </div>
</div>

</body>

</html>