
<?php 
$servername='localhost:4306'; 
$username = 'root'; 
$password = ''; 
$database = 'edu_db'; 
  

$conn = new mysqli($servername, $username, $password, $database); 
  

if (!$conn){ 
    echo "Connection Unsuccessful!!!"; 
} 
  
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $user=$_POST['name'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];

    $sql = "INSERT INTO users(uname, upass, ucountry) VALUES ('$user', '$pass', '$country')"  ;
    $res = $conn->query($sql);
    echo $res;
    if($res){
        echo "Login Successful";
        
        header("Location: ./index.html"); 
        
    }
    else{
        echo "Invalid username or passward";
    }
    echo $user;
}

$conn->close();


?>