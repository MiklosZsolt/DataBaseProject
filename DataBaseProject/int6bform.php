<?php
$dela2 = $_POST['dela2'];
$dela2 = trim($dela2);
?>

<html style="background-color:LightGray;">
<title>Int.6b</title>
<body>
<style>

    h1 {text-align: center;}
    th, td {
        border: 1px solid #ccc;
        padding: 9px;
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
    .back
    {
        position: absolute;
        bottom: 0px;
        right: 20px;
        font-size: 20px;
    }
</style>
<table>
    <tr>
        <th style="font-size:20px">DistantaMaxima</th>


    </tr>
    <div class="head"><h1>Interogare 6b.</h1></div>
    <div class="nrint"><p style="font-size:20px"> Să se găsească distanța maximă a zborurilor cu plecare de pe aeroportul <?php echo $dela2?> (de_la) și aeroportul de sosire (la)..</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>
    <br>
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

    if (!$dela2) {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc()) {
        $dela2 = addslashes($dela2);
    }

    $sql = "CALL `getDistantaMaxima`('%$dela2%')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["Distanta maxima"];
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
<div class="inapoi"><a href="main3.php">Inapoi la lista cu interogi.</a></div>

</html>
