<?php
include("lib/connectDB.php");
include("conf/confDB.php");
$conn=connectDB($hostname, $username, $password, $DBname);
if(!$conn){
    echo "impossibile connettersi";
}else{
     switch($_POST["Select"]){
        //tutti i prodotti
        case "tutti i prodotti":
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
            break;
            //costo maggiore di 50
            case "costo maggiore di 50": 
                $sql="SELECT * FROM Prodotto WHERE costo>50";
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
                break;
                //costo maggiore di 50 e minore di 120
                case "costo maggiore di 50 e minore di 120": 
                    $sql="SELECT * FROM Prodotto WHERE costo>50 AND costo<120";
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
                    break;
                    //penne
                    case "penne":
                        $sql="SELECT * FROM Prodotto WHERE nome='penna'";
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
                        break;
                        //penne con costo tra 50 e 120
                        case "penne con costo tra 50 e 120":
                            $sql="SELECT * FROM Prodotto WHERE nome='penna'costo>50 AND costo<120";
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
                            break;
     };
};