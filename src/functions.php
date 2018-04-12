<?php


/**
 * Here a simple function to get the price by clicking on checkbox */

function getPrice()
{

    $price = '99';

    if(isset($_GET['select']))
    {
        $select = $_GET['select'];
    }

    if (isset($_GET['submit']) && $select == '0')
    {
        echo $price;

    }

    else if (isset($_GET['submit']) && $select == '1')
    {
        echo ($price * 0.70) *2;
    }

    if (isset($_GET['submit']) && $select == '2')
    {
        echo ($price * 0.70) *3;
    }

    if (isset($_GET['submit']) && $select == '3')
    {
        echo ($price * 0.70) *4;

    }

    if (isset($_GET['submit']) && $select == '4')
    {
        echo ($price * 0.70) *5;
    }

}





function displayComponents()
{

        if(empty($_POST['hidden-configuration-list'])){
            header('Location:index.php?error=Pas d\'items dans la liste');
            exit;
        }

        echo $_POST['hidden-configuration-list'];

}

?>