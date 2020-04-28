<!DOCTYPE html>
<html lang="en">
<head>
<title>job details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </head>
   
  <body>
	  
   <fieldset>   
<legend align="center">   
        <li><h3>JOB DETAIL</h3></li>
             
   <form method="post" action="kamdine.php">
   
<label>Job Title:</label>
<input type="text" name="jobtitle"/><br /><br />

<label>No. of vaccancies:</label>
<input type="text" name="noofvaccancies"/><br /><br />
 
<label>Job Location</label>
<input type="text" name="joblocation"/>
<br></br>

<label>Job Type</label>
<select name="jobtype">
<option name="1">--select one--</option>
<option value="2">PartTime</option>
<option value="3">FullTime</option>
</select><br></br>

<label>Job Category</label>
<select name="jobcat">
<option name="1">--select one--</option>
<option value="2">receptionist</option>
<option value="3">engineer</option>
<option value="4">banker</option>
<option value="5">manager</option>
<option value="6">cook</option>
<option value="7">waiter</option>
</select><br></br>

<label>Sub Category:</label></br>
<textarea name="subcat" rows="5" cols="30"></textarea><br /><br/>

<label>Job Posted On:</label>
<input type="text" name="jobpostedon"/><br /><br />

<label>Apply Before:</label>
<input type="text" name="applybefore"/><br /><br />



<fieldset id="salary">
<label>Offered Salary:</label>
<input type="radio" name="salary">Fixed
<input type="radio" name="salary">Negotiable
<input type="radio" name="salary">Range
<br /><br />
</fieldset>

<fieldset id="level">
<label>Job level:</label>
<input type="radio" name="level">Entry Level
<input type="radio" name="level">Mid Level
<input type="radio" name="level">Senior Level
<input type="radio" name="level">Top Level
<br /><br />
</fieldset>

<li><h3>JOB REQUIREMENTS</h3></li><br></br>

<label>Prefered age range:</label>
<input type="checkbox" name="agerange"/>No Age Bar<br></br>

<fieldset id="gender">
<label>Gender:</label>
<input type="radio" name="gender">Any
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<br /><br />
</fieldset>

<label>Prefered Education Qualification:</label>
<select name="educationqualification">
<option value="1">masters</option>
<option value="2">bachlor</option>
<option value="3">higher level</option>
</select><br></br>

<label>Preferd Year of Experience</label>
<input type="text" name="pye"/>
<br></br>


<label>Job description:</label>
<textarea name="jd" rows="5" cols="30"></textarea><br><br/>

<label>Job specification:</label>
<textarea name="js" rows="5" cols="30"></textarea><br><br/>

<fieldset id="cname">
<label>Dispaly Company Name:</label>
<input type="radio" name="cname">Yes
<input type="radio" name="cname">No
<br /><br />
</fieldset>

<fieldset id="address">
<label>Hide Company Address:</label>
<input type="radio" name="address">Yes
<input type="radio" name="address">No
<br /><br />
</fieldset>

<input type="submit" name="savechanges" value="Save Changes" />
</form>
</legend>
</fieldset>

</body>

</html>
