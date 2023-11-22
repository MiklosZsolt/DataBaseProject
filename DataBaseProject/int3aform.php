<?php
$gama1 = $_POST['gama1'];
$gama1 = trim($gama1);
$gama2 = $_POST['gama2'];
$gama2 = trim($gama2);
?>
<html style="background-color:LightGray;">
<title>Int.3a </title>
<body>
<style>

    h1 {text-align: center;}
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    .result
    {
        position: absolute;
        bottom: 55%;
        left: 30px;
        font-size: 24px;
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
    <div class="nrint"><p style="font-size:20px">3. a)Aeronavele cu gamă_croazieră între <?php echo$gama1?>-<?php echo $gama2?> ordonat descrescător după gamă_croazieră...</p></div>
    <hr style="width:99px%;text-align:left;margin-left:0">
    <br>


    <?php
    if (!$gama1)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc())
    {
        $gama1 = addslashes($gama1);
    }

    if (!$gama2)
    {
        echo 'Nu ati introdus criteriul de cautare. Va rog sa incercati din nou.';
        exit;
    }
    /** @noinspection PhpDeprecationInspection */
    if (!get_magic_quotes_gpc())
    {
        $gama2 = addslashes($gama2);
    }
    $conn=mysqli_connect('localhost','student2','parola1234','colocviufinal');
    $sql = "select IDAV, NUMEAV from aeronave where gama_croaziera BETWEEN '$gama1' and '$gama2' order by gama_croaziera desc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>" .$row["IDAV"] ."</td><td>" .$row["NUMEAV"];
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
<br>
<br>
<div class="inapoi"><a href="main3.php" style="font-size:20px">Inapoi la lista de interogari.</a></div>
<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>


</html>
