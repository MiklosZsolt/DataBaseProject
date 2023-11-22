
<html style="background-color:LightGray;">
<title>Interogare3a</title>
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
        bottom: 5px;
        right: 20px;
        font-size: 20px;
    }
</style>
<table>
    <tr>
        <th style="font-size:20px">IDAV</th>
        <th style="font-size:20px">NUMEAV</th>

    </tr>
    <div class="head"><h1>Interogare 3a.</h1></div>
    <div class="nrint"><p style="font-size:20px">3. a)Să se găsească aeronavele cu gamă_croazieră între 4100 și 4800 ordonat descrescător după gamă_croazieră...</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>


    <?php
    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');
    $sql = "select IDAV, NUMEAV from aeronave where gama_croaziera BETWEEN 4100 and 4800 order by gama_croaziera desc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["IDAV"] ."</td><td>" .$row["NUMEAV"];
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
<html>
<br>
<br>
<div class="lista"><a href="main2.php" style="font-size:20px">Inapoi la lista cu interogari.</a></div>
<div class="inapoi"><a href="main1.php" style="font-size:20px">Inapoi la meniu.</a></div>
<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>
<div class="next"<p><a href="interogare3b.php">Next</a> </p>

</html>
