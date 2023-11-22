<html>
<head>
    <title>Page Title</title>
    <div class="headerr">
        <h1 style="font-size:40px;">Pagină cu acces limitat </h1>
        <hr style="width:23%;text-align:center;margin-left:38.5%">
    </div>
    <br>
    <hr style="width:99.8%;text-align:left;margin-left:0;">

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

    <?php
    session_start();

    // se verifică variabila de sesiune
    if (isset($_SESSION['utilizatori']))
    {
        echo '<ul><li><div class="p1"> <body> <dl> <dt>Sunteti intrat cu utilizatorul :</dt> <dd >- '.$_SESSION['utilizatori'].'</dd>  </dl> </body> </div></li></ul>';
        echo '<ul><li><div class="p2">Pentru aceste date detineti drepturi</div></li></ul>';
    }
    else
    {
        echo '<div class="p1"><p>Nu ati efectuat log in.</p></div>';
        echo '<div class="p1"><p>Acces restrictionat.</p></div';
    }
    echo '<div class="logg"> <a href="sesiune.php">Revenire la pagina principala</a> </div>';
    ?>


