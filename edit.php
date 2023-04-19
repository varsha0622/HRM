<?php
include("function.php");
?>
<?php
		   $id=$_GET['id'];
		 $result=leave($id);
		 $rowedit=mysqli_fetch_array($result);
		 ?>
	<form action="updateleave.php" method="post">
	<lable>staff name</lable>
		  <input style="float:right;width:75%"type="" value="<?php echo $rowedit['staff']?>" name="staff">
		  <br> <br>
		  <lable>ID Number</lable>
		  <input style="float:right;width:75%"type="" value="<?php echo $rowedit['idnum']?>" name="idnum">
		  <br> <br>
		  <lable>subject</lable>
		  <input style="float:right;width:75%"type="" value="<?php echo $rowedit['subject']?>" name="subject">
		  <br> <br>
		  <lable>from</lable>
		   <input style="float:right;width:75%"type="" value="<?php echo $rowedit['from']?>" name="from">
		  <br> <br>
		  <lable>to</lable>
		  
		  <input style="float:right;width:75%"type="text" value="<?php echo $rowedit['to']?>" name="to">
		  <br> <br>
		  <lable>leave</lable>
		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['leave']?>" name="leave">
		  <br> <br>
		  <lable>reason</lable>
		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['reason']?>" name="reason">
		  <br> <br>

		  <input style="float:right;width:75%" type="" value="<?php echo $rowedit['id']?>" name="id">
		  <p><input  type="submit" name="submit" value="submit"></p>
		  
		  </form>