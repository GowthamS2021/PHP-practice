<?php 
    include ("connect.php");

    $errors = array("name"=>"","roll"=>"");

    if (isset($_POST['submit'])){
        
        if(empty($_POST['name'])){
			$errors["name"] = 'An name is required <br />';
		} 

        if(empty($_POST['roll'])){
			$errors["roll"] =  'An number is required <br />';
		} 


        if (!array_filter($errors)){
            $name = mysqli_real_escape_string($conn, $_POST['name']);
			$roll = mysqli_real_escape_string($conn, $_POST['roll']);
            
            $sql1 = "SELECT * FROM Students WHERE Roll = $roll";
            $result = mysqli_query($conn, $sql1);

            $student = mysqli_fetch_assoc($result);
            
            $id = $student['Id'];
            
			$sql2 = "DELETE FROM Students WHERE Id = $id";

			if(mysqli_query($conn, $sql2)){
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

            mysqli_free_result($result);
            mysqli_close($conn);
        }
    }

    

?>





<!DOCTYPE html>

<html>
    <?php include("header.php") ?>

    <section class="container red-text text-darken-4">
        <h3 class="center" >Delete a Student's Info</h3>
        
        <form class="white" action="delete.php" method="POST">
            <label>Your Name</label> <input type="text" name="name" value = "<?php echo htmlspecialchars($_POST['name']);?>">
            <div class="red-text"><?php echo $errors['name']; ?></div>
            <label>Roll Number</label> <input type=number name="roll" value="<?php echo htmlspecialchars($_POST['roll']) ;?>">
            <div class="red-text"><?php echo $errors['roll']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>


    <?php include("footer.php") ?>
</html>
