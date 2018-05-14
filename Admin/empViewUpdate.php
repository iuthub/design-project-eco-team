	<?php 
	include("../config.php"); 
   include("../session.php");
	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Suncart I Admin </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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
	
	

<?php
$update=$_GET['update'];
$result = mysqli_query($mysqli,"SELECT * FROM employee where Employee_ID ='$update'");
?>
<?php if($row = mysqli_fetch_array($result))
  {?> 
  
	
	<div id="form_wrapper" class="form_wrapper">
	
		 <table>
					<form class="register active" action="empUpdate.php" method="POST" autocomplete="off">

					<th colspan="3"><h2>Register</h2> </th> 
						

   <tr>
   
   <td>
		<input type="hidden" id="ID" name="ID" value="<?php echo $row['Employee_ID'];?>"  placeholder="Full name" required>
		<span class="error">This is an error</span>
	</td>
   
   
    <td>  

	  <label>Full Name:</label>
		
		<input type="text" id="name" name="name" value="<?php echo $row['Employee_Name'];?>"  placeholder="Full name" required>
		<span class="error">This is an error</span>
	</td>
   <td>   

	<label>Username:</label>

		<input type="text" id="username" name="username" value="<?php echo $row['Username'];?>" placeholder="User name" required>
		<span class="error">This is an error</span>
		

   </td>
    <td>  

		<label> Enter Password:</label>
		
		<input type="password" id="password" name="password" value="<?php echo $row['Password'];?>" placeholder="*******" required>
		<span id="pass-info"> </span>
                               
	</td>

   </tr>



   
   <tr>
						<div class="bottom">

						<td colspan="3">	
						
						<button type="submit"  name="submit" value="Update" class="a-btn"> <span class="a-btn-text">Update Employee</span></button>
						
						</td>
							
							<div class="clear"></div>
						</div>
						
		
	</tr>
	</form>
					
	</table>
	</div>
         <?php }?>

	
		
		<article class="module width_3_quarter">
		
		
	    </article><!-- end of content manager article -->
		
	</section>
          </div>
   </div>
    
</body>

</html>