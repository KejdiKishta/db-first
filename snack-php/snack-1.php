<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];

// foreach ($students as $student) {
//     echo $student["name"];
//     echo $student["lastname"];
//     $result = 0;
//     for ($i=0; $i < count($student["votes"]); $i++) { 
//         $result += $student["votes"][$i];
//     }
//     echo $result / count($student["votes"]) . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($students as $student) { 
            echo "<li>";
            echo $student['name'] . " " . $student['lastname'] . ": ";
            $result = 0;
            for ($i=0; $i < count($student["votes"]); $i++) { 
                $result += $student["votes"][$i];
            }
            echo $result / count($student["votes"]);
            echo "</li>";
        } ?>
    </ul>
</body>
</html>




