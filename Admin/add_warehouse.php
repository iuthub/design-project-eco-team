<?php 
include("../session.php");
include("../config.php");

 ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Novashop I Admin </title>
	
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
</head>


<body>
<div id="container">
	   <div id="header">
		<div class="logo"><a href="index.php" style=" font-size: 48px;margin-top: 15px;
    font-weight: normal;
    color:#000; font-family: logo">NovaShop</a></div>
		</div>
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
					<form action="searchware.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Warehouse"   name='search' size=60 maxlength=100 />
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
	

<script type="text/javascript">
function validateForm()
{
var a=document.forms["addwarehouse"]["wname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the The Warehouse Name !!!");
  return false;
  }
var b=document.forms["addwarehouse"]["country"].value;
if (b==null || b=="")
  {
  alert("Pls. Country Is Missing !!!");
  return false;
  }
 var c=document.forms["addwarehouse"]["email"].value;
if (c==null || c=="")
  {
  alert("Pls. Email Is MIsssing !!!");
  return false;
  }
var d=document.forms["addwarehouse"]["address"].value;
if (d==null || d=="")
  {
  alert("Pls. Address Is Missing !!!");
  return false;
  }
 var e=document.forms["addwarehouse"]["city"].value;
if (e==null || e=="")
  {
  alert("Pls. City Is Misssing");
  return false;
  }
 var e=document.forms["addwarehouse"]["pcode"].value;
if (e==null || e=="")
  {
  alert("Pls. Postal Code Is Misssing !!!");
  return false;
  }

}
</script>



    <script type="text/javascript">
        $(function() {
            $('#wareValid').keyup(function() {
			
                if (this.value.match(/[^a-zA-Z]/g)) {
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					
                }
				Alart("Numbers IS NOT Allowed Sir!!!!!! !!!");
            });
        });
    </script>
			

				
	<div id="form_wrapper" class="form_wrapper"  >

		 <table>
					<form class="register active" id="myForm" action="insertWarehouse.php"  method="POST" enctype="multipart/form-data" name="addwarehouse" onsubmit="return validateForm()">

					<th colspan="3"><h2>ADD WAREHOUSE:</h2> </th> 
						
	<tr>
    <td>  
	
	
		<label> Warehouse Name:</label>
		<input type="text" name="wname" id="wareValid"/>
		<span class="error">This is an error</span>

	
	

		
	</td>
   <td>  



	
	
	<label>Country:</label>
		<select name="country" id="select">
	
		  <option value="AF" countrynum="93">Afghanistan</option>
		  <option value="ALA" countrynum="358">Aland Islands</option>
		  <option value="AL" countrynum="355">Albania</option>
		  <option value="GBA" countrynum="493">Alderney</option>
		  <option value="DZ" countrynum="213">Algeria</option>
		  <option value="AS" countrynum="684">American Samoa</option>
		  <option value="AD" countrynum="376">Andorra</option>
		  <option value="AO" countrynum="244">Angola</option>
		  <option value="AI" countrynum="1-264">Anguilla</option>
		  <option value="AQ" countrynum="672">Antarctica</option>
		  <option value="AG" countrynum="1-268">Antigua and Barbuda</option>
		  <option value="AR" countrynum="54">Argentina</option>
		  <option value="AM" countrynum="374">Armenia</option>
		  <option value="AW" countrynum="297">Aruba</option>
		  <option value="ASC" countrynum="247">Ascension Island</option>
		  <option value="AU" countrynum="61">Australia</option>
		  <option value="AT" countrynum="43">Austria</option>
		  <option value="AZ" countrynum="994">Azerbaijan</option>
		  <option value="BS" countrynum="1-242">Bahamas</option>
		  <option value="BH" countrynum="973">Bahrain</option>
		  <option value="BD" countrynum="880">Bangladesh</option>
		  <option value="BB" countrynum="1-246">Barbados</option>
		  <option value="BY" countrynum="375">Belarus</option>
		  <option value="BE" countrynum="32">Belgium</option>
		  <option value="BZ" countrynum="501">Belize</option>
		  <option value="BJ" countrynum="229">Benin</option>
		  <option value="BM" countrynum="1-441">Bermuda</option>
		  <option value="BT" countrynum="975">Bhutan</option>
		  <option value="BO" countrynum="591">Bolivia</option>
		  <option value="BA" countrynum="387">Bosnia and Herzegovina</option>
		  <option value="BW" countrynum="267">Botswana</option>
		  <option value="BV" countrynum="47">Bouvet Island</option>
		  <option value="BR" countrynum="55">Brazil</option>
		  <option value="IO" countrynum="1-284">British Indian Ocean Territory</option>
		  <option value="BN" countrynum="673">Brunei Darussalam</option>
		  <option value="BG" countrynum="359">Bulgaria</option>
		  <option value="BF" countrynum="226">Burkina Faso</option>
		  <option value="BI" countrynum="257">Burundi</option>
		  <option value="KH" countrynum="855">Cambodia</option>
		  <option value="CM" countrynum="237">Cameroon</option>
		  <option value="CA" countrynum="1">Canada</option>
		  <option value="CV" countrynum="238">Cape Verde</option>
		  <option value="KY" countrynum="1-345">Cayman Islands</option>
		  <option value="CF" countrynum="236">Central African Republic</option>
		  <option value="TD" countrynum="235">Chad</option>
		  <option value="CL" countrynum="56">Chile</option>
		  <option value="CX" countrynum="61">Christmas Island</option>
		  <option value="CC" countrynum="61">Cocos (Keeling) Islands</option>
		  <option value="CO" countrynum="57">Colombia</option>
		  <option value="KM" countrynum="269">Comoros</option>
		  <option value="ZR" countrynum="243">Congo, The Democratic Republic Of The</option>
		  <option value="CG" countrynum="242">Congo, The Republic of Congo</option>
		  <option value="CK" countrynum="682">Cook Islands</option>
		  <option value="CR" countrynum="506">Costa Rica</option>
		  <option value="CI" countrynum="225">Cote D'Ivoire</option>
		  <option value="HR" countrynum="385">Croatia (local name: Hrvatska)</option>
		  <option value="CU" countrynum="53">Cuba</option>
		  <option value="CY" countrynum="357">Cyprus</option>
		  <option value="CZ" countrynum="420">Czech Republic</option>
		  <option value="DK" countrynum="45">Denmark</option>
		  <option value="DJ" countrynum="253">Djibouti</option>
		  <option value="DM" countrynum="1-767">Dominica</option>
		  <option value="DO" countrynum="1-809">Dominican Republic</option>
		  <option value="TP" countrynum="670">East Timor</option>
		  <option value="EC" countrynum="593">Ecuador</option>
		  <option value="EG" countrynum="20">Egypt</option>
		  <option value="SV" countrynum="503">El Salvador</option>
		  <option value="GQ" countrynum="240">Equatorial Guinea</option>
		  <option value="ER" countrynum="291">Eritrea</option>
		  <option value="EE" countrynum="372">Estonia</option>
		  <option value="ET" countrynum="251">Ethiopia</option>
		  <option value="FK" countrynum="500">Falkland Islands (Malvinas)</option>
		  <option value="FO" countrynum="298">Faroe Islands</option>
		  <option value="FJ" countrynum="679">Fiji</option>
		  <option value="FI" countrynum="358">Finland</option>
		  <option value="FR" countrynum="33">France</option>
		  <option value="FX" countrynum="33">France Metropolitan</option>
		  <option value="GF" countrynum="594">French Guiana</option>
		  <option value="PF" countrynum="689">French Polynesia</option>
		  <option value="TF" countrynum="33">French Southern Territories</option>
		  <option value="GA" countrynum="241">Gabon</option>
		  <option value="GM" countrynum="220">Gambia</option>
		  <option value="GE" countrynum="995">Georgia</option>
		  <option value="DE" countrynum="49">Germany</option>
		  <option value="GH" countrynum="233">Ghana</option>
		  <option value="GI" countrynum="350">Gibraltar</option>
		  <option value="GR" countrynum="30">Greece</option>
		  <option value="GL" countrynum="299">Greenland</option>
		  <option value="GD" countrynum="1-473">Grenada</option>
		  <option value="GP" countrynum="590">Guadeloupe</option>
		  <option value="GU" countrynum="1-671">Guam</option>
		  <option value="GT" countrynum="502">Guatemala</option>
		  <option value="GGY" countrynum="44">Guernsey</option>
		  <option value="GN" countrynum="224">Guinea</option>
		  <option value="GW" countrynum="245">Guinea-Bissau</option>
		  <option value="GY" countrynum="592">Guyana</option>
		  <option value="HT" countrynum="509">Haiti</option>
		  <option value="HM" countrynum="61">Heard and Mc Donald Islands</option>
		  <option value="HN" countrynum="504">Honduras</option>
		  <option value="HK" countrynum="852">Hong Kong</option>
		  <option value="HU" countrynum="36">Hungary</option>
		  <option value="IS" countrynum="354">Iceland</option>
		  <option value="IN" countrynum="91">India</option>
		  <option value="ID" countrynum="62">Indonesia</option>
		  <option value="IR" countrynum="98">Iran (Islamic Republic of)</option>
		  <option value="IQ" countrynum="964">Iraq</option>
		  <option value="IE" countrynum="353">Ireland</option>
		  <option value="IM" countrynum="44">Isle of Man</option>
		  <option value="IL" countrynum="972">Israel</option>
		  <option value="IT" countrynum="39">Italy</option>
		  <option value="JM" countrynum="1-876">Jamaica</option>
		  <option value="JP" countrynum="81">Japan</option>
		  <option value="JEY" countrynum="44">Jersey</option>
		  <option value="JO" countrynum="962">Jordan</option>
		  <option value="KZ" countrynum="7">Kazakhstan</option>
		  <option value="KE" countrynum="254">Kenya</option>
		  <option value="KI" countrynum="686">Kiribati</option>
		  <option value="KS" countrynum="381">Kosovo</option>
		  <option value="KW" countrynum="965">Kuwait</option>
		  <option value="KG" countrynum="996">Kyrgyzstan</option>
		  <option value="LA" countrynum="856">Lao People's Democratic Republic</option>
		  <option value="LV" countrynum="371">Latvia</option>
		  <option value="LB" countrynum="961">Lebanon</option>
		  <option value="LS" countrynum="266">Lesotho</option>
		  <option value="LR" countrynum="231">Liberia</option>
		  <option value="LY" countrynum="218">Libya</option>
		  <option value="LI" countrynum="423">Liechtenstein</option>
		  <option value="LT" countrynum="370">Lithuania</option>
		  <option value="LU" countrynum="352">Luxembourg</option>
		  <option value="MO" countrynum="853">Macau</option>
		  <option value="MK" countrynum="389">Macedonia</option>
		  <option value="MG" countrynum="261">Madagascar</option>
		  <option value="MW" countrynum="265">Malawi</option>
		  <option value="MY" countrynum="60">Malaysia</option>
		  <option value="MV" countrynum="960">Maldives</option>
		  <option value="ML" countrynum="223">Mali</option>
		  <option value="MT" countrynum="356">Malta</option>
		  <option value="MH" countrynum="692">Marshall Islands</option>
		  <option value="MQ" countrynum="596">Martinique</option>
		  <option value="MR" countrynum="222">Mauritania</option>
		  <option value="MU" countrynum="230">Mauritius</option>
		  <option value="YT" countrynum="269">Mayotte</option>
		  <option value="MX" countrynum="52">Mexico</option>
		  <option value="FM" countrynum="691">Micronesia</option>
		  <option value="MD" countrynum="373">Moldova</option>
		  <option value="MC" countrynum="377">Monaco</option>
		  <option value="MN" countrynum="976">Mongolia</option>
		  <option value="MNE" countrynum="382">Montenegro</option>
		  <option value="MS" countrynum="1-664">Montserrat</option>
		  <option value="MA" countrynum="212">Morocco</option>
		  <option value="MZ" countrynum="258">Mozambique</option>
		  <option value="MM" countrynum="95">Myanmar</option>
		  <option value="NA" countrynum="264">Namibia</option>
		  <option value="NR" countrynum="674">Nauru</option>
		  <option value="NP" countrynum="977">Nepal</option>
		  <option value="NL" countrynum="31">Netherlands</option>
		  <option value="AN" countrynum="599">Netherlands Antilles</option>
		  <option value="NC" countrynum="687">New Caledonia</option>
		  <option value="NZ" countrynum="64">New Zealand</option>
		  <option value="NI" countrynum="505">Nicaragua</option>
		  <option value="NE" countrynum="227">Niger</option>
		  <option value="NG" countrynum="234">Nigeria</option>
		  <option value="NU" countrynum="683">Niue</option>
		  <option value="NF" countrynum="672">Norfolk Island</option>
		  <option value="KP" countrynum="850">North Korea</option>
		  <option value="MP" countrynum="1670">Northern Mariana Islands</option>
		  <option value="NO" countrynum="47">Norway</option>
		  <option value="OM" countrynum="968">Oman</option>
		  <option value="Other" countrynum="">Other Country</option>
		  <option value="PK" countrynum="92">Pakistan</option>
		  <option value="PW" countrynum="680">Palau</option>
		  <option value="PS" countrynum="970">Palestine</option>
		  <option value="PA" countrynum="507">Panama</option>
		  <option value="PG" countrynum="675">Papua New Guinea</option>
		  <option value="PY" countrynum="595">Paraguay</option>
		  <option value="PE" countrynum="51">Peru</option>
		  <option value="PH" countrynum="63">Philippines</option>
		  <option value="PN" countrynum="872">Pitcairn</option>
		  <option value="PL" countrynum="48">Poland</option>
		  <option value="PT" countrynum="351">Portugal</option>
		  <option value="PR" countrynum="1-787">Puerto Rico</option>
		  <option value="QA" countrynum="974">Qatar</option>
		  <option value="RE" countrynum="262">Reunion</option>
		  <option value="RO" countrynum="40">Romania</option>
		  <option value="RU" countrynum="7">Russian Federation</option>
		  <option value="RW" countrynum="250">Rwanda</option>
		  <option value="BLM" countrynum="590">Saint Barthelemy</option>
		  <option value="KN" countrynum="1">Saint Kitts and Nevis</option>
		  <option value="LC" countrynum="1">Saint Lucia</option>
		  <option value="MAF" countrynum="590">Saint Martin</option>
		  <option value="VC" countrynum="1">Saint Vincent and the Grenadines</option>
		  <option value="WS" countrynum="685">Samoa</option>
		  <option value="SM" countrynum="378">San Marino</option>
		  <option value="ST" countrynum="239">Sao Tome and Principe</option>
		  <option value="SA" countrynum="966">Saudi Arabia</option>
		  <option value="SCT" countrynum="">Scotland</option>
		  <option value="SN" countrynum="221">Senegal</option>
		  <option value="SRB" countrynum="381">Serbia</option>
		  <option value="SC" countrynum="248">Seychelles</option>
		  <option value="SL" countrynum="232">Sierra Leone</option>
		  <option value="SG" countrynum="65">Singapore</option>
		  <option value="SK" countrynum="421">Slovakia (Slovak Republic)</option>
		  <option value="SI" countrynum="386">Slovenia</option>
		  <option value="SB" countrynum="677">Solomon Islands</option>
		  <option value="SO" countrynum="252">Somalia</option>
		  <option value="SOM" countrynum="252" selected="">Somaliland</option>
		  <option value="ZA" countrynum="27">South Africa</option>
		  <option value="SGS" countrynum="44">South Georgia and the South Sandwich Islands</option>
		  <option value="KR" countrynum="82">South Korea</option>
		  <option value="SS" countrynum="">South Sudan</option>
		  <option value="ES" countrynum="34">Spain</option>
		  <option value="LK" countrynum="94">Sri Lanka</option>
		  <option value="SH" countrynum="290">St. Helena</option>
		  <option value="PM" countrynum="508">St. Pierre and Miquelon</option>
		  <option value="SD" countrynum="249">Sudan</option>
		  <option value="SR" countrynum="597">Suriname</option>
		  <option value="SJ" countrynum="47">Svalbard and Jan Mayen Islands</option>
		  <option value="SZ" countrynum="268">Swaziland</option>
		  <option value="SE" countrynum="46">Sweden</option>
		  <option value="CH" countrynum="41">Switzerland</option>
		  <option value="SY" countrynum="963">Syrian Arab Republic</option>
		  <option value="TW" countrynum="886">Taiwan</option>
		  <option value="TJ" countrynum="992">Tajikistan</option>
		  <option value="TZ" countrynum="255">Tanzania</option>
		  <option value="TH" countrynum="66">Thailand</option>
		  <option value="TLS" countrynum="670">Timor-Leste</option>
		  <option value="TG" countrynum="228">Togo</option>
		  <option value="TK" countrynum="690">Tokelau</option>
		  <option value="TO" countrynum="676">Tonga</option>
		  <option value="TT" countrynum="1-868">Trinidad and Tobago</option>
		  <option value="TN" countrynum="216">Tunisia</option>
		  <option value="TR" countrynum="90">Turkey</option>
		  <option value="TM" countrynum="993">Turkmenistan</option>
		  <option value="TC" countrynum="1-649">Turks and Caicos Islands</option>
		  <option value="TV" countrynum="688">Tuvalu</option>
		  <option value="UG" countrynum="256">Uganda</option>
		  <option value="UA" countrynum="380">Ukraine</option>
		  <option value="AE" countrynum="971">United Arab Emirates</option>
		  <option value="UK" countrynum="44">United Kingdom</option>
		  <option value="US" countrynum="1">United States</option>
		  <option value="UM" countrynum="1">United States Minor Outlying Islands</option>
		  <option value="UY" countrynum="598">Uruguay</option>
		  <option value="UZ" countrynum="998">Uzbekistan</option>
		  <option value="VU" countrynum="678">Vanuatu</option>
		  <option value="VA" countrynum="39">Vatican City State (Holy See)</option>
		  <option value="VE" countrynum="58">Venezuela</option>
		  <option value="VN" countrynum="84">Vietnam</option>
		  <option value="VG" countrynum="1284">Virgin Islands (British)</option>
		  <option value="VI" countrynum="1340">Virgin Islands (U.S.)</option>
		  <option value="WF" countrynum="681">Wallis And Futuna Islands</option>
		  <option value="EH" countrynum="685">Western Sahara</option>
		  <option value="YE" countrynum="967">Yemen</option>
		  <option value="YU" countrynum="381">Yugoslavia</option>
		  <option value="ZM" countrynum="260">Zambia</option>
		  <option value="EAZ" countrynum="255">Zanzibar</option>
		  <option value="ZW" countrynum="263">Zimbabwe</option>
	
</select>    


   </td>
   <td>  

		<label>Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>
		
	</td>
   </tr>

   
   <tr>
    <td>  

		<label> Address:</label>
		<input type="text" name="address"  id="address"/>
		<span class="error">This is an error</span>
                               
	</td>
	
   <td>  

       		<label> City:</label>
		<input type="text" name="city"  id="wareValid"/>
		
		<span class="error">This is an error</span>
   
		
  </td>
   
   <td>   
         
	    <label> Postal Code:</label>
	<input type="text" name="pcode"  id="pcode"/>
		<span id="pass-info"> </span>
   </td>
   </tr>
   
   
   
   <tr>
						<div class="bottom">

						<td colspan="3">	
						<button name="save" id="myButton" class="a-btn"> <span class="a-btn-text"> Add Warehouse </span></ </button>
							
							<div class="clear"></div>
						</div>
						
		
   </tr>
</form>
					
					</table>
	</div>
	
		
<script type="text/javascript">

$(document).ready(function(){ 
    $("#myButton").click(function() { 
     alert("Pls. Postal Code Is Misssing !!!");
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'jointCustomer.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>




<?php
$result = mysqli_query($mysqli,"SELECT * FROM warehouse");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

		<thead>  <th Colspan="9">  Novashop Warehouse Data Table </th></thead>
		<thead>
		<thead>
			</tr>
   		    <th>Check ID</th> 
    	      <th>ID</th>
              <th> Name</th>			  
    		<th>Country</th>
		    <th>City</th>				
    		<th> Address</th>
			 <th>Postal Code</th>				
    		<th> Email</th>
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Warehouse_ID']; ?></td>
    <td><?php echo $row['Warehouse']; ?></td>
   <td><?php echo $row['Country']; ?></td>
	<td><?php echo $row['City']; ?></td>
	<td><?php echo $row['Address']; ?></td>
	<td><?php echo $row['PostalCode']; ?></td>
	<td><?php echo $row['Email']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Warehouse_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Warehouse_ID']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
      </tbody>
</table>
	  
 </div> 
		
	</section>
          </div>
   </div>
   
  
   
</body>

</html>