<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // connect database ด้วย mysqli

    // $host ='localhost';
    // $username ='root';
    // $password = '';
    // $database = 'db68s_product';

    //$conn = new mysqli($host,$username,$password,$database);
    //if($conn->connect_error){
      //  die("Connection failed: " . $conn->connect_error);

    //}else{
     //   echo "Connected successfully";
    //}
    
    // connect database ด้วย PDO


    $host ='localhost';
    $username ='root';
    $password = '';
    $database = 'db68s_product';

    $dns = "mysql:host=$host;dbname=$database";

    try{
        //$conn = new PDO("mysql:host=$host;dbname=$database",$username,$password);
        $conn= new PDO ($dns,$username,$password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

         //echo "PDO: Connected successfully";
        
      
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
 


?>
 <a href="Index.php">Home</a>