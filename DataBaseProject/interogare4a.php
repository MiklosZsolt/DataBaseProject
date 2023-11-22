<html style="background-color:LightGray;">
<title>Interogare4a</title>
<body>
<style>
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
        text-align: center;
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
        <th style="font-size:20px">NUMEAN</th>
    </tr>
    <br><br>
    <div class="head"><h1>Interogare 4a.</h1></div>
    <div class="nrint"><p style="font-size:20px"> 4.. a)Să se găsească numele piloților certificați pe aeronave ’ATR’..</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
    <?php
    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');
    $sql = "SELECT DISTINCT numean FROM angajati a INNER JOIN certificare c ON a.idan = c.idan INNER JOIN aeronave ae ON ae.idav = c.idav WHERE numeav LIKE '%ATR%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["numean"] ;
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
<div class="next"<p><a href="interogare4b.php">Next</a> </p>
<div class="back"<p><a href="interogare3b.php">Back</a> </p>
</html>
