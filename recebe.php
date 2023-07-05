<?php

if(isset($_POST["op1"]))
{
    $op1 = "s";
}
else
{
    $op1 = "n";
}
if(isset($_POST["op2"]))
{
    $op2 = "s";
}
else
{
    $op2 = "n";
}
if(isset($_POST["op3"]))
{
    $op3 = "s";
}
else
{
    $op3 = "n";
}


//pegar oq checkboxes q o usuario clicou 
$op1 = $_POST["op1"]; //campo name
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];


//mostrar na tela variaveis 
echo ("$op1 <br>");
echo ("$op2 <br>");
echo ("$op3 <br>");
