<?php

//Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean

echo $lastname = $_GET["lastname"] . " " . $firstname = $_GET["firstname"] . "<br><br>";

//Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean

if (isset($_GET['age'])) {

    echo $age = $_GET['age'];
}
else {
    echo "Pas d'age <br><br>";
};

//Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016

if (isset($_GET['startDate']) AND isset($_GET['endDate'])){

		echo $startD = $_GET['startDate'] . ' ' . $endD = $_GET['endDate'] . ' !<br />';

}
else
{
   echo 'Pas de date <br><br>';
};

//Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP

if (isset($_GET['language']) AND isset($_GET['server'])){

    echo $_GET['language'] . ' ' . $_GET['server'] . ' !<br />';

}
else
{
echo 'Pas de langage <br><br>';
};

//Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12

if (isset($_GET['week'])){

    echo $_GET['week'] . ' !<br />';

}
else
{
echo 'Pas de week end <br><br>';
};

//Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101

if (isset($_GET['building']) AND isset($_GET['room'])){

    echo $_GET['building'] . ' ' . $_GET['room'] . ' !<br />';

}
else
{
echo 'Pas de langage <br><br>';
};