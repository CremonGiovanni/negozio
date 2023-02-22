<?php
include("lib/connectDB.php");
include("conf/confDB.php");
$conn=connectDB($hostname, $username, $password, $DBname);
if(!$conn){
    echo"immpossibile connettersi";
}else{
    if($costoMin=null &&$costoMax=null&&$nome=null){
        $sql= " select*from Prodotto ";
        $query_run=mysqli_query($conn,$sql);
        $numRows=mysqli_num_rows($query_run);
        if ($numRows> 0) {
            echo "<table>
            <caption>
                    <p>Tutti prodotti</p>
            </caption>
            <thead>
            <tr><th>id </th> <th>nome</th><th>descrizione</th><th>costo</th></tr>
            </thead>
            </table>"
            while($row = mysqli_fetch_assoc($query_run)) {
               $str "<tr><td>id: "$row["id"]"/td><td>nome: "$row["nome"]"</td><td>descrizione: "$row["descrizione"]"</td><td>costo: "$row["costo"]"</td></tr>"+$str;
               echo "<table>
               <caption>
                       <p>Tutti prodotti</p>
               </caption>
               <thead>
               <tr><th>id </th> <th>nome</th><th>descrizione</th><th>costo</th></tr>
               </thead>
               <tbody>
               "$str"
               </tbody>
               </table>"
            }
        }
    }
};

?>
