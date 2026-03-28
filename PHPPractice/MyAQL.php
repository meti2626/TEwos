<!-- Connecting with MySQLI -->
<!-- MySQLi Procedural Connection -->

<!--

//   $server = "Localhost";
//   $username = "root";
//   $password = "";
//   $database = "testphp_db";

// // Creating a connection
//   $conn = mysqli_connect($server, $username, $password, $database);

//   if(!$conn)
//     {
//          die("Connection faield:".mysqli_connect_error());
//     }

//     echo "Connection successful";



 -->


<!-- MySQLi Object-Oriented Connection -->

<!--
   $server = "localhost";
   $username = "root";
   $password = "";

   $database = "testphp_db";

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; -->





<!-- connecting using PDO -->

<!--

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "testphp_db";

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
     catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
} -->




// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = mysqli_connect($servername, $username, $password);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// $sql = "CREATE DATABASE testpehp_db";

// //mysqli_query() - its function that lets you send SQL commmands to MySQL server
//    if(mysqli_query($conn ,$sql))
//     {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }




//      $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = new mysqli($servername, $username, $password);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// $sql = "CREATE DATABASE testyphp_db";

//  if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }


