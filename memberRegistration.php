<?php
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
      
  <title> GMS </title>
    
<?php 
   include("includes/cs-js.php");
?>



</head>

<body>
  <?php 
      include("includes/header.php");
      include("includes/nav.php");
   ?>
  
<section>
<form action="memberRegAction.php" method="post">

<fieldset>
<legend>Personal Information</legend>
<label for="fname">First Name :*</label>
<input type="text" name="fname" required />

<label for="lname">Last Name :* </label>
<input type="text" name="lname" required />

<label for="cnic"> Cnic No :* </label>
<input type="number" min="17"/>
</fieldset>

<fieldset>
<legend> Acadamic Information </legend>
Education Level &nbsp; : <input type="text" list="eductionlevel" />
<label for="eductionlevel"> 
<datalist id="eductionlevel">
<select>
<option value="Intermediate">Intermediate</option>
<option value="Bacholar">Bacholar </option>
<option value="Master">Master </option>
<option value="PHD">Doctorate</option>
<option value="Postdoctoral">Post Doctoral</option>
</select>
</datalist>
 </label>

</fieldset>


<fieldset>

<legend> Education Record </legend>
<table>
<thead>
<tr>
<th> Degree Name </th>
<th>College / School / University </th>
<th> Marks Obtained | CGPA</th>
<th> Total Marks  </th>
<th> Percentage | Grade </th>
</tr>
</thead>
<tbody>
<tr>
<td><input type="text" /> </td>
<td><input type="text" /></td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
</tr>


<tr>
<td><input type="text" /> </td>
<td><input type="text" /></td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
</tr>


<tr>
<td><input type="text" /> </td>
<td><input type="text" /></td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
</tr>

<tr>
<td><input type="text" /> </td>
<td><input type="text" /></td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
<td><input type="text" /> </td>
</tr>




</tbody>
</table>

</fieldset>

</form>
    
</section>

<?php 
include("includes/footer.php");
?>

</body>

</html>