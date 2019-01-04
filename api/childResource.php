

<?php 



# assign variables

$name = $_POST['name'];
$email =$_POST['email'];
$childName =$_POST['childname'];
$childAge =$_POST['childage'];
$childZodiac =$_POST['childzodiac'];
$childPet =$_POST['childpet'];
$childMovie =$_POST['childmovie'];
$childCartoon =$_POST['childcartoon'];
$childPlace =$_POST['childplace'];
$childFood =$_POST['childfood'];
$childHobby =$_POST['childhobby'];
$childOther =$_POST['childother'];
$childPhoto =$_POST['childphoto'];


#connect to database

$servername = "localhost";
$username = "jonathan";
$password = "Shukuk@1";
$dbname = "customcards";

# Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

# Check connection

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql =
    "INSERT INTO child_details (name, email, childname, childage, childZodiac, childpet, childmovie, childcartoon, childplace, childfood, childhobby, childother, childphoto)
    VALUES ('$name', '$email', '$childName', $childAge, '$childZodiac', '$childPet', '$childMovie', '$childCartoon', '$childPlace', '$childFood', '$childHobby', '$childOther', '$childPhoto')";


if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
}

else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>

