<?php
/* 
In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with blank spaces, which get filled in by the user. The result is usually funny (or strange).
*/
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd ${distance_unit} to go before I ${verb},\nAnd ${distance_unit} to go before I ${verb}.\n";
   return $story; 
}



echo generateStory("dog","eat","purple","12");
echo generateStory("car","cook","vermilion","100");
echo generateStory("void","speak","beige","50");

