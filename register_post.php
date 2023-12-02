<?php
//conectar com o banco de dados
connectDatabase();
function connectDatabase(){
$sever='localhost';
$user='root';
$password='';
$database="cadé o caju";
$connection = mysqli_connect($sever,$user,$password,$database);
if(!$connection){
die('conexão falhou:'.mysqli_connect_error());

}
return $connection;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$connection=connectDatabase();

$name=mysqli_real_escape_string($connection, $name);
$email=mysqli_real_escape_string($connection, $email);
$senha=mysqli_real_escape_string($connection, $senha);
$password_hashed = password_hash($password, PASSWORD_DEFAULT);
$quary="INSERT INTO USERS('NAME', 'EMAIL' , 'PASSWORD')(VALUES('$name', '$email', '$password')";

if(mysqli_query($connection, $quary)){

    echo"usuario cadastrado";
}
else{
echo"usuario não cadastrado";


}

}

?>