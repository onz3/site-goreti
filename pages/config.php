<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "</br>Usuário ou senha inválidos";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("db773957428.hosting-data.io", "dbo773957428", "Aguia019$$$", "db773957428");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from users where username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $username; // Initializing Session
          header("location: Gerenciador.php"); // Redirecting To Profile Page
        }
else {
       $error = "Usuário ou senha inválidos";
     }
mysqli_close($conn); // Closing Connection
}
}

?>