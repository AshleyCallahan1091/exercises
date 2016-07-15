<?php 

$student = [
    'awesomeGrade' => 80,
    'name' => null,
    'subjects' => []
]

function calculateAverage($subjects) {
    $average = 0;
    foreach($subjects as $subject) {
        $average += $subject['grade'];
    }
    return $average / count($subjects);
}

function addSubject(&$subjects, $name, $grade){
    $subject = [
        'name' => $name,
        'grade' => $grade
    ];
    $subjects [] = $subject;
}

function isAwesome($subjects, $awesomeGrade) {
    return calculateAverage($subjects) > $awesomeGrade;
}

function prompt($message) {
    fwrite(STDOUT, "Padowan, what is your name? \n");
    return $student = trim(fgets(STDIN));
}

function confirm($message){
    return strtolower(prompt($message)) === 'y';
}

function alert ($message){
return trim(fgets(STDIN));
}
 
$student['name'] = prompt ("What is your name?");
do {
    $name = prompt("What is this subject?");
    $grade = prompt("What is your grade?");
    addSubject($student['$subjects'], $name, $grade);
} while (confirm('Do you want to add another? y or n'))

$average = number_format(calculateAverage($student, $student['subjects']), 2)

if (isAwesome($student['subjects'], $student['awesomeGrade'])) {
    alert($student['name'] . ", you're awesome!")
} else {
    alert($student['name'] . ", you need to try harder...")
}