<?php
    session_start();
	include './howdy_Header.php';
	include 'config/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Success</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<style>
    .login-form {
        width: 340px;
        margin-left: auto; 
		margin-right: 0;
        font-size: 15px;
    }
    </style>
</head>

<body>
    <div class="login-form">
        <?php
if (isset($_SESSION["name"])) {
?>
        
           
          
    </div>
<div class="container border justify-content-center" style="background-color:gray; margin:auto">
		<div class="depart">
			<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'London')" id="defaultOpen">Upload Content</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Add Contacts</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Edit Banner</button>
			</div>
			<div id="London" class="tabcontent" style="display: block;"></div>
			
  <form id="dept-upload-form" method="post" enctype="multipart/form-data" style="text-align: center;" class="dept-form">
  <table>
	<tbody><tr>
		<td><label for="deptName">Department</label></td>
		<td><input id="deptName" type="hidden" name="dept_name" value="Human Resource Development"><?php echo $_SESSION["name"]; ?></td>
	</tr>
	<tr>
		<td><label for="deptIp">User IP Address</label></td>
		<td><input id="deptIp" type="hidden" name="user_ip" value="10.143.11.174">10.143.11.174</td>
	</tr>
	<tr>
		<td><label for="deptMenu">Select menu</label></td>
		<td><select name="menu_name" id="deptMenu" ""="" required="">
			<option value="">Select Menu</option>
			<option value="Circular">Circular</option>
			<option value="Plan Vs Performance">Plan Vs Performance</option>
			<option value="Programmes">Programmes</option>
			<option value="Misc. Documents">Misc. Documents</option>
			<option value="Presentations">Presentations</option>
			<option value="HRDConnect">HRDConnect</option>
			<option value="eLearning">eLearning</option>
			<option value="Apprenticeship Training">Apprenticeship Training</option>
				<option value="HRD Sections - Administration">HRD Sections - Administration</option>
								<option value="HRD Sections - External &amp; Forign Trainning">HRD Sections - External &amp; Forign Trainning</option>
								<option value="HRD Sections - Managemnet Development">HRD Sections - Managemnet Development</option>
								<option value="HRD Sections - Workshop">HRD Sections - Workshop</option>
								<option value="HRD Sections - MIS">HRD Sections - MIS</option>
								<option value="HRD Sections - Lab">HRD Sections - Lab</option>
								<option value="HRD Sections - NEC">HRD Sections - NEC</option>
								<option value="HRD Sections - PTC">HRD Sections - PTC</option>
								<option value="QMS - ATR">QMS - ATR</option>
								<option value="QMS - CAPA">QMS - CAPA</option>
								<option value="QMS - Common SOPs">QMS - Common SOPs</option>
								<option value="QMS - Quality Objectives">QMS - Quality Objectives</option>
						</select></td>
	</tr>
	<tr>
		<td><label for="deptTitle">Post Title</label></td>
		<td><input id="deptTitle" type="text" name="cnt_title" placeholder="Max 100 Characters" required=""></td>
			</tr>
	<tr>
		<td>Select Duration</td>
		<td class="time-dur" style="align-items: center; display: flex;">
			<input type="radio" id="for-time" name="for_time" value="52">
			<label for="html">For Time Period</label>
			<input type="radio" id="forever" name="for_time" value="2222-12-30">
			<label for="css">Forever</label><br>
		</td>
	</tr>
	<tr id="dept-durdate" style="display:none">
		<td><label for="for-date">Select Duration <br>(Till Date)</label></td>
		<td>
			<input type="date" id="for-date" name="last-date" onchange="getComboA(this)">
		</td>
	</tr>
	<tr>
    	<td><label for="fileType">Select FIle/Link</label></td>
        <td><select name="up_type" id="fileType" onchange="dptFILE(this);" required="">
			<option value="">Select</option>
			<option value="PDF">Upload</option>
			<option value="URL">URL Link</option>
		</select></td>
    </tr>
	<tr id="type-Pdf" style="display: none;">
    	<td><label for="typePdf">Upload File</label></td>
<!--        <td><input type="file" name="cnt_pdf" id="typePdf" accept=".doc,.docx,.pdf"></td>	-->
        <td><input type="file" name="cnt_pdf" id="typePdf"></td>
    </tr>
	<tr id="type-Url" style="display: none;">
    	<td><label for="typeUrl">Enter URL</label></td>
        <td><input type="text" name="cnt_url" id="typeUrl" placeholder="https://"></td>
    </tr> 
	</tbody></table>
	<input type="submit" value="Submit" name="addrecord" class="button button-primary">
  </form>
  <div class="contacts" style="text-align: center; font-size: 14px; margin-top: 100px; padding: 15px 0; border: 1px solid #eee; background-color: #155f39; color: #fff;">
		<h3>Existing Documents in This Department</h3>
		<table style="overflow-x: scroll; width: 100%;">
			<tbody><tr>
				<th>Title</th>
				<th>Uploaded Date</th>
				<th>Uploaded Upto</th>
				<th style="text-align: center">Delete</th>
			</tr>
						<tr>
				
				<td>समृद्धि - Business Quiz 2021-22</td>
				<td>2022-06-24</td>
				<td>2222-12-30</td>
				<td style="text-align: center"><input type="submit" id="130" name="delethis" class="close doc_del" value="Delete"></td>
			</tr>
						
						</tbody></table>
	</div>
	</div>
	<?php
} else 
{
	?>
	<div class="justify-content-center align-items-center">
 <h1 class=" ">Please Login First</h1>
  <div class="text-center m-4"><a class="btn btn-primary" href="login.php" tite="Login">Login .</a></div>
  </div>
<?php
}
?> 
<!-- <div class="showlog">
		<h1> Please login first .</h1>
<a href="./login.php" <button class="btn-primary btn">Login</button></a>
		</div>  -->




	</div>
		</div>
		
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function dptFILE(that) {
    if (that.value == "PDF") {
  // alert("check");
        document.getElementById("type-Pdf").style.display = "table-row";
        document.getElementById("type-Url").style.display = "none";
		document.getElementById("typePdf").setAttribute('required', 'true');
		document.getElementById("typeUrl").removeAttribute('required');
    } else if(that.value == "URL")  {
        document.getElementById("type-Pdf").style.display = "none";
        document.getElementById("type-Url").style.display = "table-row";
		document.getElementById("typeUrl").setAttribute('required', 'true');
		document.getElementById("typePdf").removeAttribute('required');
    } else {
        document.getElementById("type-Pdf").style.display = "none";
        document.getElementById("type-Url").style.display = "none";
		document.getElementById("typePdf").removeAttribute('required');
		document.getElementById("typeUrl").removeAttribute('required');
    }
}
function preview() {
   thumb.src=URL.createObjectURL(event.target.files[0]);
}

	jQuery(document).ready(function() {
	   jQuery('input[type="radio"]').click(function() {
		   if(jQuery(this).attr('id') == 'for-time') {
				jQuery('#dept-durdate').show();
				jQuery('#for-date').prop('required',true);
		   }

		   else {
				jQuery('#dept-durdate').hide();
				jQuery('#for-date').prop('required',false);
		   }
	   });
	});
	
	   function getComboA(that) {
		   var obid = document.getElementById("for-date");
		  // var value = obid.value;
		  document.getElementById("for-time").value = obid.value;
	}
</script>

</body>

</html>