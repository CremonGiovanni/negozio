<?php
include("lib/connectDB.php");
include("conf/confDB.php");
$conn=connectDB($hostname, $username, $password, $DBname);
if(!$conn){
    echo "impossibile connettersi";
}else{
    $sql="SELECT * FROM Prodotto";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Nome</th><th>Descrizione</th><th>Prezzo</th></tr></thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["descrizione"] . "</td><td>" . $row["costo"] . "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
};
?>