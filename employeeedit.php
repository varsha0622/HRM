<?php
include("function.php");
?>
<?php
		   $id=$_GET['id'];
		 $result=employeeview($id);
		 $rowedit=mysqli_fetch_array($result);
		 ?>
	<form action="employeupdate.php" method="post">
		  <lable>Name</lable>
		  <input style="float:right;width:75%"type="" value="<?php echo $rowedit['name']?>" name="name">
		  <br> <br>
		  <lable>dateofbirth</lable>
		   <input style="float:right;width:75%"type="" value="<?php echo $rowedit['dateofbirth']?>" name="dateofbirth">
		  <br> <br>
		  <lable>age</lable>
		  
		  <input style="float:right;width:75%"type="text" value="<?php echo $rowedit['age']?>" name="age">
		  <br> <br>
		  <lable>email</lable>
		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['email']?>" name="email">
		  <br> <br>
		  <lable>salary</lable>
		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['salary']?>" name="salary">
		  <br> <br>
		  <lable>phone</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['phone']?>" name="phone">
		  <br> <br>
		  <lable>jobposition</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['jobposition']?>" name="job">
		  <br> <br>
		  <lable>department</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['department']?>" name="department">
		  <br> <br>
		  <lable>qualification</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['qualification']?>" name="qualification">
		  <br> <br>
		  <lable>address</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['address']?>" name="address">
		  <br> <br>
		  <lable>workingexperience</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['workingexperience']?>" name="wrokingexperience">
		  <br> <br>
		  <lable>education</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['education']?>" name="education">
		  <br> <br>
		  <lable>lastcompany</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['lastcompany']?>" name="lastcompany">
		  <br> <br>
		  <lable>priviascompany</lable>
          <input style="float:right;width:75%" type="" value="<?php echo $rowedit['priviascompany']?>" name="priviascompany">
		  <br> <br>
		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['id']?>" name="id">
		  <p><input  type="submit" name="submit" value="submit"></p>
		  
		  </form>