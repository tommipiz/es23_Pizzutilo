<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo</title>
</head>
<style>
    table, th,td {
        border-style: solid ;
    }

</style>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $mail = $_GET["mail"];

        $dati = array("nome" => $nome, "cognome" => $cognome , "mail" => $mail);

        echo "<h1>Dati inviati: $nome , $cognome , $mail</h1>";
        
        echo "<table>";
        echo "<tr>";
                echo "<th>Nome: </th>";
                echo "<th>Cognome: </th>";
                echo "<th>Mail: </th>";
        echo "</tr>";
        echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$cognome</td>";
                echo "<td>$mail </td>";
        echo "</tr>";

        echo "</table>";


    ?>

</body>
</html>