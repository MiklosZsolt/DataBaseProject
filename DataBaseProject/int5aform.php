<?php
$salmax = $_POST['salmax'];
$salmax = trim($salmax);
?>

<html style="background-color:LightGray;">
<title>Int.5a</title>
<body>
<style>

    h1 {text-align: center;}
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    table, th,td
    {
        text-align:left;
        margin-left:20px;
    }
    tr:nth-child(even) {
        background-color: #eee;

    }
    tr:nth-child(odd) {
        background-color: #fff;

    }
    .head
    {
        padding: 20px;
        text-align: center;
        background: #1abc9c;
        color: white;
    }
    .result
    {
        position: absolute;
        bottom: 55%;
        left: 30px;
        font-size: 24px;
    }

    body {
        font-family: Arial;
        background: #dcdcdc;
        margin: 0.00%;
    }
    .nrint
    {
        text-align:left;
        margin-left:20px;
    }
    .inapoi
    {
        position: absolute;
        bottom: 50px;
        left: 20px;
        font-size: 20px;
    }
    .p4
    {
        position: absolute;
        bottom: 5px;
        left: 20px;
        font-size: 20px;
    }
    .next
    {
        position: absolute;
        bottom: 40px;
        right: 20px;
        font-size: 20px;

    }
    .back
    {
        position: absolute;
        bottom: -25px;
        left: 0px;
        font-size: 20px;
    }
</style>
<table>
    <tr>
        <th style="font-size:20px">numean</th>
        <th style="font-size:20px">salariu</th>

    </tr>
    <div class="head"><h1>Interogare 5a.</h1></div>
    <div class="nrint"><p style="font-size:20px"> 5.. a)Cel mai mare salariu al piloților certificați pe aeronave <?php echo $salmax ?>.</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
    <?php

    if (!$salmax)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    //conectare baza de date
    $user = 'student2';
    $pass = 'parola1234';
    $host = 'localhost';
    $db_name = 'colocviufinal';
    // se conectează la BD
    $conn = mysqli_connect($host, $user, $pass, $db_name);
    // se verifică dacă a funcţionat conectarea
    if ($conn->connect_error)
    {
        die('Eroare la conectare: ' . $conn->connect_error);
    }
    $sql = "SELECT numean, salariu FROM angajati WHERE idan IN ( SELECT DISTINCT a.idan FROM angajati a INNER JOIN certificare c ON a.idan = c.idan INNER JOIN aeronave ae ON ae.idav = c.idav WHERE numeav LIKE ('%$salmax%')) LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["numean"] ."</td><td>" .$row["salariu"];
        }
    }
    else
    {
        echo '<div class="result"><p>no result</p></div>';
    }
    $conn->close();
    ?>

</table>
</body>
</html>

<html>
<div class="inapoi"><a href="main3.php">Inapoi la lista de interogari.</a></div>
<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>

</html>
