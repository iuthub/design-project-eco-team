<?php
include("../session.php");
include("../config.php");
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Novashop I Admin </title>
	<style>
@font-face {
    font-family: 'logo';
    src: url('fonts/logo.ttf');
}
.logo a:hover{
text-decoration: none;
}
.logo { float: left; display: inline; padding: 10px 0 0 20px; }
.logo a { width: 300px; height: 69px;display: block;  height: 90px;}
.mini-logo:hover{
text-decoration: none;
}
</style>
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

<SCRIPT language="Javascript">
      <!--
      function isNumberKey(evt)
      {
	 
         var charCode = (evt.which) ? evt.which : event.keyCode
		  window.alert("Pls. Sir In A Price Field Only Numbers Allowed !!!");
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		
            return false;
            
         return true;
		  
      }
     

   </SCRIPT>


    <script type="text/javascript">
        $(function() {
		
            $('.user').keyup(function() {
			
                if (this.value.match(/[^a-zA-Z]/g)) {
				
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					 window.alert("Pls. Sir In A UserName Field Only Charecters Allowed !!!");
                }
				
            });
        });
    </script>
	
   
	
	<div id="form_wrapper" class="form_wrapper">

		 <table>
					<form class="register active"  action=" insertProduct.php"method="POST" id="myForm">

					<th colspan="3"><h2>ADD PRODUCT:</h2> </th> 
						

   <tr>
    <td>  

		<label> Name:</label>
		<input type="text" name="name" id="name"  class="user" required>
		<span class="error">This is an error</span>
		
	</td>
   <td>   
	<label>Category:</label>

 <?php
include('../config.php');
$name= mysqli_query($mysqli,"select * from category");

echo '<select  name="select"  id="ml" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{

echo '<option>';
echo $res['Category_ID'];
echo'</option>';
}
echo'</select>';

?>
		<span class="error">This is an error</span>

   </td>
   
      <td>  

		<label> Model:</label>
		<input type="text"  name="model"  id="model"  required> 
		<span id="pass-info"> </span>
                               
	</td>
	
   </tr>

   
   <tr>
 
	
   <td> 
       
	   <label> Type:</label>
		<input type="text" name="type" id="type"  required>
		<span id="pass-info"> </span>
   
		
  </td>
    <td> 
    	<label> Warehouse:</label>
<?php
include('../config.php');
$name= mysqli_query($mysqli,"select * from warehouse");

echo '<select   name="WH"  id="ml" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{

echo '<option>';
echo $res['Warehouse_ID'];
echo'</option>';
}
echo'</select>';

?>
		<span class="error">This is an error</span>
                    
	</td>
	
   <td>   
	    <label> Description:</label>
		<input type="text"  name="ml"  id="ml"  maxlength="19" required> 
		<span id="pass-info"> </span>
		
  </td>
  
   </tr>
   
   
   <tr>
    <td>  

		<label>Price:</label>
		<input type="text"  name="price"  id="price"  onkeypress="return isNumberKey(event)"  required>
		<span class="error">This is an error</span>
		
	
	</td>
   <td>   

		<label> Picture:</label>
		<input type="file" name="picture" id="picture"  required>
		<span class="error">This is an error</span>

   </td>


   </tr>
   
 
			<div class="bottom">

			<td colspan="3">	
		
			<button name="save" id="delbutton" title="Click to Save"  class="a-btn" > <span class="a-btn-text"> Add Product</span></</button>
			<div class="clear"></div>
			</div>

</form>
					
					</table>
					

		<script src="js/jquery.js"></script>
		  <script type="text/javascript">
		$(function() {


		$("#delbutton").click(function(){

		//Save the link in a variable called element
		var element = $(this);

		 if(confirm("Now(), You Preesed  Save Button \n Are You REady To Save It A PRODUCT? There is NO PLS.undo!"))
				  {

		 $.ajax({
		   type: "GET",
		   url: "prodDelete.php",
		   data: info,
		   success: function(){
		   
		   }
		 });
				 $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
				.animate({ opacity: "hide" }, "slow");

		 }

		return false;

		});

		});
		</script> 


	</div>

<?php
$result = mysqli_query($mysqli,"SELECT * FROM product");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

			<thead>  <th Colspan="11">  Suncart Product Data Table </th></thead>
		<thead>
			</tr>
   		      <th>Check</th> 
    	      <th>ID</th>
              <th> Name</th>			  
    		<th>Category</th>
		    <th>Model</th>				
    		<th> Type</th>
			 <th>WareHouse</th>				
    		<th> Description</th>
			<th>Price</th>				
    		<th> Picture</th>
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
     <?php while($row = mysqli_fetch_array($result))
    {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Product_ID']; ?></td>
    <td><?php echo $row['productName']; ?></td>
   <td><?php echo $row['Category_ID']; ?></td>
	<td><?php echo $row['Model']; ?></td>
	  <td><?Php echo $row['Type']; ?></td>
    <td><?php echo $row['Warehouse_ID']; ?></td>
   <td><?php echo $row['Description']; ?></td>
	<td><?php echo $row['Price']; ?></td>
		<td> <img src="../images/<?php echo $row['Picture']; ?> " width="40" height="40"   ></td>
    <td> <a href="prodViewUpdate.php?update=<?php echo $row['Product_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="prodDelete.php?delete=<?php echo $row['Product_ID']; ?>" onClick="del(this);" title="Delete" class="delbutton"><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
</tbody>
</table>
	  
 </div> 


 
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

 if(confirm("Sure you want to delete this PRODUCT? There is NO PLS.undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "prodDelete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script> 

	</section>
          </div>
   </div>
 
   
</body>

</html>