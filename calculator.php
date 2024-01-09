<?php
session_start();

if ($_POST['number_one']) 
    {
        if ($_POST['number_two']) 
        {
            if (isset($_POST['add'])) 
            {
                $_SESSION ['result'] = $_POST['number_one'] + $_POST['number_two'];
                header('location: index.php');
            }
            else if (isset($_POST['sub'])) 
            {
                $_SESSION ['result'] = $_POST['number_one'] - $_POST['number_two'];
                header('location: index.php');
            }
            else if (isset($_POST['mul'])) 
            {
                $_SESSION ['result'] = $_POST['number_one'] * $_POST['number_two'];
                header('location: index.php');
            }
            else if (isset($_POST['div'])) 
            {
                $_SESSION ['result'] = $_POST['number_one'] / $_POST['number_two'];
                header('location: index.php');
            }
        }
        else
        {
            $_SESSION ['result'] = "Number Two Missing!";
            header('location: index.php');
        }
    }
    else
    {
        $_SESSION ['result'] = "Number One Missing!";
        header('location: index.php');
    }
?>