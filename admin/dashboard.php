<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/dashboard.css">
</head>

<body>
    <div class="sidebar">
      <h2>Dashboard</h2>
        <ul>
            <li><a href="admins.php"><button>Admin</button></a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="student.php">Student</a></li>
            <li><a href="faculty.php">Faculty</a></li>
            <li><a href="subject.php">Subject</a></li>
            <li><a href="course.php">Course</a></li>
            <li><a href="institute.php">Institute</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h1>Welcome to the Dashboard!</h1>
        </header>
        <main>
        <form  class="form1">
            <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all faculty IDs from the table
            $sql = "SELECT id FROM faculty";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $totalFacultyIds = $result->num_rows;
            
                echo "Total Faculty : " . $totalFacultyIds;
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
           </form>

           <form class="form2">
            <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all students IDs from the table
            $sql = "SELECT id FROM students";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $total = $result->num_rows;
            
                echo "Total Students : " . $total . "<br>";
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
        
           <form class="form3">
            <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all faculty IDs from the table
            "SELECT COUNT(*) as total FROM students WHERE institute = 'FCDSET'";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $total = $result->num_rows;
            
                echo "Total Student In the Institute of FCDSET : " . $total;
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
          
           
        


            <p>Dashboard content goes here.</p>
           <a href="../view/login.php"><button>Log out</button></a>
        </main>
    </div>
</body>

</html>

</body>
</html>