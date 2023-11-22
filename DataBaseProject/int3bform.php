<?php
$timp2 = $_POST['timp2'];
$timp2 = trim($timp2);
$timp1 = $_POST['timp1'];
$timp1 = trim($timp1);
$b= $timp1 .":00:00";
$b2= $timp2 .":00:00";

?>
<html style="background-color:LightGray;">
<title>Int.3b</title>
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
    .result
    {
        position: absolute;
        bottom: 55%;
        left: 30px;
        font-size: 24px;
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
    <div class="nrint"><p style="font-size:20px"> 3.. b)Zborurile care au durata de la <?php echo $b?>  la  <?php echo $b2?> ore (sosire față de plecare), ordonat crescător după de_la și descrescător după durată.</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
    <br>
    <?php
    if (!$timp1)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc())
    {
        $timp1 = addslashes($timp1);
    }

    if (!$timp2)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc())
    {
        $timp2 = addslashes($timp2);
    }

    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');

    $sql = "SELECT NRZ,de_la \"Zbor\" FROM zboruri WHERE TIMEDIFF(SOSIRE, PLECARE) BETWEEN '$b' AND '$b2' order by DE_LA asc, TIMEDIFF(SOSIRE, PLECARE) DESC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["NRZ"]. "</td><td>" .$row["Zbor"];
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
<?php

?>

<html>
<div class="inapoi"><a href="main3.php">Inapoi la lista de interogari.</a></div>
<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>


</html>
