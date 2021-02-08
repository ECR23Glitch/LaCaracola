$conn = mysqli_connect("162.241.60.208","samurai1_ecr23","B%*vf?1MDQBv","samurai1_caracola");
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}