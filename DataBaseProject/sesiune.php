<html>
<head>
    <title>Page Title</title>
    <div class="headerr">
        <h1 style="font-size:40px;">Pagina principală </h1>
        <h1 style="font-size:20px;">Efectuati log-in-ul. </h1>
        <hr style="width:18%;text-align:center;margin-left:40.5%">

    </div>

    <style>
        /* Style the body */
        body {
            font-family: Arial;
            background: #dcdcdc;
            margin: 0%;
        }

        /* Header/Logo Title */
        .headerr {
            padding: 20px;
            text-align: center;
            background: #1abc9c;
            color: white;
        }
    </style>

</head>
<div class="logg">
    <a href="autorizatii.php">Pagina celor autorizati</a>
</div>


<style>
    .logg {
        position: absolute;
        bottom: 80px;
        left: 20px;
        font-size: 20px;
    }

    body {
        background: #dcdcdc;
    }

    .login {
        background-color: #a9a9a9;
        text-align: center;
        margin: auto;
        width: 22%;
        border: 5px solid #BFBFBF;
        padding: 35px;
        margin-top: 60px;
    }
    .p4
   {
        position: absolute;
        bottom: 30px;
        left: 20px;
        font-size: 20px;
   }
   .p3
   {
       font-size:20px;
       text-align:left;
       margin-left:20px;

   }
   .numele
   {
       font-size:20px;
       text-align:left;
       margin-left:20px;
       margin-top:20px;
   }
   .contsecret
   {
       font-size:20px;
       text-align:left;
       margin-left:20px;
   }
   .acces
   {
       font-size:13px;
       text-align:left;
       margin-left:20px;
   }
   .vegre
   {

   }
</style>
</body>

</html>
<?php
session_start();
if (isset($_POST['nume']) && isset($_POST['parola']))
{
    // dacă utilizatorul tocmai a încercat să execute "log in"
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
    if (!$nume)
    {
        echo 'Nu ati introdus numele. Va rog sa incercati din nou.';
        exit;
    }

    if (!$parola)
    {
        echo 'Nu ati introdus parola. Va rog sa incercati din nou.';
        exit;
    }
    // dacă utilizatorul tocmai a încercat să execute "log in"
    $nume = $_POST['nume'];
    $parola = $_POST['parola'];
    $user = 'student2';
    $pass = 'parola1234';
    $host = 'localhost';
    $db_name = 'utilizatori';
    $tb = 'accesptlume';
// se conectează la BD
    $connect = mysqli_connect($host, $user, $pass, $db_name);
// se verifică dacă a funcţionat conectarea
    if ($connect->connect_error)
    {
        die('Eroare la conectare: ' . $connect->connect_error);
    }
    $connect = mysqli_connect($host, $user, $pass, $db_name);
    if (mysqli_connect_errno())
    {
        echo 'Eroare de conectare la BD:'.mysqli_connect_error();
        exit();
    }
    if($nume=='nume1')
    {
        $query = mysqli_prepare($connect, "select count(*) as nr from $tb where nume = ? and parola = ?");
    }
    else
    {
        $query = mysqli_prepare($connect, "select count(*) as nr from $tb where nume = ? and parola = sha1(?)");
    }
    mysqli_stmt_bind_param($query, 'ss', $nume, $parola);

    $result = mysqli_stmt_execute($query );
    if(!$result)
    {
        echo 'Eroare la execuţia interogării.';
        exit;
    }
    mysqli_stmt_bind_result($query, $nr);
    if((mysqli_stmt_fetch($query))&&( $nr > 0 ))
    {
        // dacă utilizatorul există în BD atunci se înregistrează identificator de sesiune
        echo '<div class="acces"><h1>Acces la pagina cu continut secret</h1></ul>';
        echo '<p><hr style="width:99%;text-align:left;margin-left:0px"></p>';
        echo '<ul><li><div class="contsecret">Conținut secret. Aveți acces pentru a utiliza interogările SQL.</div></li></ul>';
        $_SESSION['utilizatori'] = $nume;
    }
    else
    {
        // combinaţie de nume şi parolă incorecte
        echo '<h1>Acces refuzat!</h1>';
        echo 'Această pagină nu este accesibilă.<br>';
        echo 'Nu aveti drepturi de acces la aceasta resursa.';
    }
    mysqli_stmt_close($query);
    mysqli_close($connect);
}
?>
<?php
if (isset($_SESSION['utilizatori']))
{
    echo '<ul><li><div class="numele">Ati accesat cu numele: '.$_SESSION['utilizatori'].'</div></li></ul>';
    echo '<ul><li><div class="p3"><a href="main1.php">Interogări</a></div></li></ul>';
    echo '<div class="p4"><p><a href="iesire.php">Iesire</a></p></div><br/>';
}
else
{
    if (isset($nume))
    {
        // utilizatorul a încercat "log in" şi nu a reuşit
        echo 'Nu se poate efectua log in.<br />';
    }
    else
    {
        // utilizatorul nu a încercat să efectueze "log in" sau a efectuat "log out"
        echo '<html><p style="font-size:20px;text-align:left;margin-left:15px">Nu ati efectuat log in</html>.<br />';
        echo '<hr style="width:99.8%;text-align:left;margin-left:0">';
    }
    // afisare formular log in
    echo '<form method="post" action="sesiune.php">';
    echo ' <div class = "login">';
    echo '<table>';
    echo '<tr><td>Numele:</td>';
    echo '<td><input type="text" name="nume"></td></tr>';
    echo '<tr><td>Parola:</td>';
    echo '<td><input type="password" name="parola"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Intrare"></td></tr>';
    echo '</table></form>';
    echo '<hr style="width:100%;text-align:left;margin-left:0">';
}
?>

