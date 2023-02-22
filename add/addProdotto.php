<?php
include("lib/connectDB.php");
include("conf/confDB.php");
$conn=connectDB($hostname, $username, $password, $DBname);
if(!$conn){
    echo"immpossibile connettersi";
}else{
    $nome=$_POST["nome"];
    $des=$_POST["des"];
    $costo=$_POST["costo"];
    $sql= "insert into Prodotto (nome,descrizione,costo)values('$nome', '$des', $costo)";
    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        echo "inserimento riuscito";
        exit(0);
    }else{
        echo "impossibile aggiungere il ptodotto $sql";
    }
};
?>