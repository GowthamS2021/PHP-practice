<?php 

  include ("connect.php");

  $sql = 'SELECT Id,Student_name,Roll,Dept,Hostel FROM Students ';

  $result = mysqli_query($conn, $sql);

	$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);

	mysqli_close($conn);

?>


<!DOCTYPE html>
  <html>
    <?php include('header.php')?>
    <br/>
    <br/>
    <table class = 'container highlight white'>
        <thead>
          <tr >
              <th class='center'>Name</th>
              <th class='center'>Roll Number</th>
              <th class='center'>Department</th>
              <th class='center'>Hostel</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($students as $student): ?>
            <tr>
              <td class='center'><?php echo $student['Student_name'] ?> </td>
              <td class='center'><?php echo $student['Roll']  ?> </td>
              <td class='center'><?php echo $student['Dept'] ?> </td>
              <td class='center'><?php echo $student['Hostel'] ?> </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>




    <?php include('footer.php')?>
  </html>
    