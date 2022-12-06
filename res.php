<?php
$servername = 'localhost';
$username = 'root';

$fullname=$_POST['T1'];
$email=$_POST['T2'];
$phone=$_POST['T3'];
$depart=$_POST['T4'];
$destination=$_POST['T5'];




$conn = mysqli_connect($servername, $username);

if(!$conn)
{
die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie <br>';

mysqli_select_db($conn,'reservation');

$req="select * from client where phone='$phone'";
$res=mysqli_query($conn,$req);

if (mysqli_num_rows($res)>0)
    
    echo"client deja inscrit";
    else
    {
        $req2="insert into client values ('$fullname','$email','$phone','$depart','$destination')";
        mysqli_query($conn,$req2);
        echo"jawk mrigl";
    }


?>