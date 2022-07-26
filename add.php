<?php 
    include ("connect.php");

    $errors = array("name"=>"","roll"=>"","department"=>"","hostel"=>"");

    if (isset($_POST['submit'])){
        
        if(empty($_POST['name'])){
			$errors["name"] = 'An name is required <br />';
		} 

        if(empty($_POST['roll'])){
			$errors["roll"] =  'An number is required <br />';
		} 

        if(empty($_POST["department"])){
			$errors["department"] =  'An department is required <br />';
		} 

        if(empty($_POST["hostel"])){
			$errors["hostel"] = 'An hostel is required <br />';
		} 

        if (!array_filter($errors)){
            $name = mysqli_real_escape_string($conn, $_POST['name']);
			$roll = mysqli_real_escape_string($conn, $_POST['roll']);
			$dept = mysqli_real_escape_string($conn, $_POST['department']);
            $hostel = mysqli_real_escape_string($conn, $_POST['hostel']);

			$sql = "INSERT INTO Students(Student_name,Roll,Dept,Hostel) VALUES('$name','$roll','$dept','$hostel')";

			if(mysqli_query($conn, $sql)){

				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
        }
    }

    

?>





<!DOCTYPE html>

<html>
    <?php include("header.php") ?>

    <section class="container red-text text-darken-4">
        <h3 class="center" >Add a student</h3>
        <p class ='center'>Note: Roll no of the student cannot be changed,<br/>
             So make sure the Roll number of student is correct.</p>
        <form class="white" action="add.php" method="POST">
            <label>Your Name</label> <input type="text" name="name" value = "<?php echo htmlspecialchars($_POST['name']);?>">
            <div class="red-text"><?php echo $errors['name']; ?></div>
            <label>Roll Number</label> <input type=number name="roll" value="<?php echo htmlspecialchars($_POST['roll']) ;?>">
            <div class="red-text"><?php echo $errors['roll']; ?></div>
            <label>Department</label><input type="text" name="department" value="<?php echo htmlspecialchars($_POST['department']) ;?>">
            <div class="red-text"><?php echo $errors['department']; ?></div>
            <label>Hostel No.</label> <input type=number name="hostel" value="<?php echo htmlspecialchars($_POST["hostel"]) ;?>">
            <div class="red-text"><?php echo $errors['hostel']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>


    <?php include("footer.php") ?>
</html>
