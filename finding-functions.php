<?php
namespace Codecademy;

// Write your code below:
function convertToShout($str)
{
return strtoupper($str) . "!";
};

//Tests:
echo convertToShout("woah there, buddy");
// Prints: WOAH THERE, BUDDY!
echo "\n";
echo convertToShout("i just don't know");
// Prints: I JUST DON'T KNOW!
echo "\n";

function tipGenerously($cost) 
{
return ceil($cost * 1.2);
};

//Tests:
echo "\n";
echo tipGenerously(100.00); // Prints: 120
echo "\n";
echo tipGenerously(982.27); // Prints: 1179
echo "\n";

function calculateCircleArea($diameter) 
{
return pi()*($diameter/2)**2;
};

//Tests:

echo calculateCircleArea(25);
