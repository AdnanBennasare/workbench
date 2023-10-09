
<?php
$hostname = 'localhost:3306'; // Replace with your MySQL server hostname or IP address
$username = 'root'; // Replace with your MySQL username
$password = 'passordmysqlserver'; // Replace with your MySQL password
$database = 'labdebugage'; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select id, full_name, and email from labdebugage table
$sql = "SELECT id, full_name, email FROM stagiaires";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row as a table
    echo "<table border='1'><tr><th>ID</th><th>Full Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["full_name"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Do not close the connection here if you plan to use $conn later in the code

// Close the connection only when you are done using it
// $conn->close();
?>
