<?php
// print_r($_POST ['number_one']);

// echo $_POST ['number_one'] + $_POST ['number_two'];

if($_POST ['number_one'])
{
    if($_POST ['number_two'])
    {
        echo $_POST ['number_one'] + $_POST ['number_two'];
    }
    else
    {
        echo "Number two is missing.";
    }
}
else
{
    echo "Number one is missing.";
}

?>