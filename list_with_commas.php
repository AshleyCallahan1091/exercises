<?php 

$physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($physicistsArray, $sort = false) {

   if ($sort) {
   	sort($physicistsArray);
   }
    $last = array_pop($physicistsArray);
    array_push($physicistsArray, "and $last");
   return implode(', ', $physicistsArray);
}
// List of famous peeps
// TODO: Convert the string into an array
$physicistsArray = [];
    $physicistsArray = explode(', ', $physicistsString);
// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray, true);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

