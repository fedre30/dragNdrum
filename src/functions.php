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


function displayPrice()
{



    if(isset($_POST['louer']))
    {
        $louer = $_POST['louer'];
    }

    if(isset($louer))
    {

    }
}

