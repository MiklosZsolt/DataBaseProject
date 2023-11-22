<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
// se verifică dacă utilizatorul curent a efectuat "log in"
$ut_prec = $_SESSION['utilizatori'];
unset($_SESSION['utilizatori']);
session_destroy();
?>
<html>
<title>Iesire</title>
<body>
<style>
    /* Style the body */
    body {
        font-family: Arial;
        background: #dcdcdc;
        margin: 0%;
    }

    /* Header/Logo Title */
    .header {
        padding: 20px;
        text-align: center;
        background: #1abc9c;
        color: white;
    }
    .p1
    {
        font-size:20px;
        text-align:left;
        margin-left:20px;
        margin-top:20px;

    }
    .p2
    {
        font-size:20px;
        text-align:left;
        margin-left:20px;
    }
    .logg
    {
        position: absolute;
        bottom: 80px;
        left: 20px;
        font-size: 20px;
    }
</style>
<h1><div class="header">Iesire
        <hr style="width:18%;text-align:center;margin-left:40.8%">
    </div></h1>
<br>
<hr style="width:99px%;text-align:left;margin-left:0">
<?php
if (!empty($ut_prec))
{
    echo '<div class="p1">La revedere...</div><br />';
}
else
{
// dacă s-a ajuns din greşeală la această pagină (fără a fi intrat în sistem)
    echo '<div class="p2">Nu ati efectuat log in, nu aveti cum efectua log out.</div><br />';
}
?>
<div class="logg"> <a href="sesiune.php">Revenire la pagina principala</a></div>
</body>
</html>