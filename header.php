<head>
    <title>Student DataBase</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body class="blue lighten-4" >
    <?php 

        $name = ['Gowtham','Ramesh','Suresh'];
        $RN=[59,60,61];
        $department=['CSE','MEMS','Mech'];
        $hostel=[16,17,18];   
    
    
    ?>
    <nav class="cyan lighten-4">
    <div class="container">
        <a href="index.php" class="brand-logo red-text text-darken-3">Student DataBase</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <li><a href="add.php" class="btn brand z-depth-0 pulse">Add a student </a></li>
            <li><a href="delete.php" class="btn brand z-depth-0 pulse"> Delete a student's info </a></li>
            <li><a href="update.php" class="btn brand z-depth-0 pulse">Update a student's info</a></li>
        </ul>
    </div>
  </nav>