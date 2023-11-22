<?php
$nr_matr = $_POST['nr_matr'];
$nr_matr = trim($nr_matr);
?>

<html style="background-color:LightGray;">
<title>Int.4a</title>
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
    .result
    {
        position: absolute;
        bottom: 45%;
        left: 30px;
        font-size: 24px;
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
    .p4
    {
        position: absolute;
        bottom: 5px;
        left: 20px;
        font-size: 20px;
    }


</style>
<table>
    <tr>
        <th style="font-size:20px">NUMEAN</th>
    </tr>
    <br><br>
    <div class="head"><h1>Interogare 4a.</h1></div>
    <div class="nrint"><p style="font-size:20px"> 4.. a)Numele piloților certificați pe aeronave <?php echo $nr_matr?>..</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
    <?php


    // creare variabile cu nume scurte
    if (!$nr_matr)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc())
    {
        $nr_matr = addslashes($nr_matr);
    }

    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');
    $sql = "CALL `piloticertificati`('%$nr_matr%')";
    $result = mysqli_query($conn, $sql);
    // verifică dacă rezultatul este în regulă
    if (!$result)
    {
        die('Interogare gresita: ' .mysqli_error($conn));
    }
    // se obţine numărul tuplelor returnate
    $num_results = mysqli_num_rows($result);
    // se afişează fiecare tuplă returnată
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["numean"] ;
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
