
<html style="background-color:LightGray;">
<body>
<style>

    h1 {text-align: center;}
    th, td {
        border: 1px solid #ccc;
        padding: 8px;
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
    .lista
    {
        position: absolute;
        bottom: 75px;
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
        <th style="font-size:20px">idav</th>

        <th style="font-size:20px">numeav</th>

        <th style="font-size:20px">SalariuMax</th>

        <th style="font-size:20px">SalariuMin</th>

        <th style="font-size:20px">SalariuMediu</th>
    </tr>
    <div class="head"><h1>Interogare 6a.</h1></div>
    <div class="nrint"><p style="font-size:20px"> 6.. b) Să se găsească aeronavele ce pot opera zboruri cu plecare de la ’Copenhaga’ la ’Cluj-Napoca’..</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <?php
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
    $sql = "select ae.idav, numeav, max(salariu)  \"SalariuMax\", min(salariu) \"SalariuMin\", round(avg(salariu),2)  \"SalariuMed\" FROM angajati a INNER JOIN certificare c ON a.idan = c.idan INNER JOIN aeronave ae ON ae.idav = c.idav GROUP BY ae.idav, numeav ORDER BY ae.idav;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["idav"] ."</td><td>" .$row["numeav"] ."</td><td>" .$row["SalariuMax"] ."</td><td>" .$row["SalariuMin"] ."</td><td>" .$row["SalariuMed"];
        }
    }
    else
    {
        echo "no result";
    }
    $conn->close();
    ?>

</table>
</body>
</html>
<?php
?>

<html>
<div class="lista"><a href="main2.php" style="font-size:20px">Inapoi la lista cu interogari.</a></div>
<div class="inapoi"><a href="main1.php" style="font-size:20px">Inapoi la meniu.</a></div>
<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>
<div class="next"<p><a href="interogare6b.php">Next</a> </p>
<div class="back"<p><a href="interogare5b.php">Back</a> </p>
</html>
