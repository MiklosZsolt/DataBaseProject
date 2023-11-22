<html style="background-color:LightGray;">
<title>Interogare3b</title>
<body>
<style>
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
    .inapoi
    {
        position: absolute;
        bottom: 50px;
        left: 20px;
        font-size: 20px;
    }
    .nrint
    {
        text-align:left;
        margin-left:20px;
    }

    table, th, td {
        border: 1px solid;
        text-align:left;
        margin-left:20px;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #eee;
    }
    tr:nth-child(odd) {
        background-color: #fff;
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

        <th style="font-size:20px">NRZ</th>
        <th style="font-size:20px">Zbor</th>


    </tr>
    <div class="head" ><h1>Interogare 3b.</h1></div>
    <div class="nrint"><p style="font-size:20px"> 3.. b)Să se găsească zborurile care au durata între 1 și 2 ore (sosire față de plecare), ordonat crescător după de_la și descrescător după durată.</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
    <br>
    <?php
    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');

    $sql = "SELECT NRZ,de_la \"Zbor\" FROM zboruri WHERE TIMEDIFF(SOSIRE, PLECARE) BETWEEN '1:00:00' AND '2:00:00' order by DE_LA asc, TIMEDIFF(SOSIRE, PLECARE) DESC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["NRZ"]. "</td><td>" .$row["Zbor"];
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
<div class="next"<p><a href="interogare4a.php">Next</a> </p>
<div class="back"<p><a href="interogare3a.php">Back</a> </p>

</html>
