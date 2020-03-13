<?php
session_start();
if(isset($_POST['username'])&&isset($_POST['pwd'])){
    $username=$_POST['username'];
    $pwd = $_POST['pwd'];

    include "connectDB.php";
     
     $sql="SELECT * FROM Users WHERE UserName=:username AND Password = :pwd;";
     $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':username' => $username,
        ':pwd' => $pwd       
     ));
    
    if($stmt->rowCount()>0){
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            $_SESSION['id']=$row['UserID'];
             }
        
        header("Location:index.php");
        
    }else{
        echo '<span style="color: red;">Login Fail</span>';
        header("Location:login.php?errcode=1");
    }
     
}
?>