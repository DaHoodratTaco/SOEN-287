<html>
<?php
echo "<h1>Rendered using PHP</h1>";
//Variables
$num1 = 4;
$num2 = 3;
echo $num1 + $num2;
//String concatenation
$firstName = "Max" ;
$lastName = "Scales";

echo "</br>";

echo $firstName . " " . $lastName;
echo "</br>";

//arrays
$f1Teams = array("Red Bull", "McLaren", "Alpha Tauri");
echo "I like " . $f1Teams[0] . ", ". $f1Teams[1]. " and ". $f1Teams[2]. "."; 
echo "</br>";


//Exercise 1
$colors = array("white", "green", "red", "blue");

echo $colors[0]. ", ".$colors[1]. ", ". $colors[2];

echo "<ul>
            <li>$colors[1]</li>
            <li>$colors[2]</li>
            <li>$colors[0]</li>
      </ul> </br>";

//For Each loops, only work on arrays
//Also passes by value, to pass by ref need to use &
foreach($colors as $color) {
    echo "<h3>$color</h3>";
}
echo "</br>";
//Explode and Implode
//Implode joins array into a string
echo implode(" ", $colors);
echo "</br>";
//Explode splits a string into an array
$string = "a,b,c";
$letters = explode(",", $string);
echo $letters[0];
echo $letters[1];
echo "</br>";
//Exercise 2
//passing by ref use & before var name
function upperCaseFirst(&$str) {
    $words = explode(" ", $str);

    foreach ($words as &$word) {
        $word[0] = strtoupper($word[0]);
    }
    //this returns new string that can be stored
    //return implode(" ", $words);
    //to modify original
    $str = implode (" ", $words);
    

}

$phrase = "who is the legend 27";
upperCaseFirst($phrase);
echo $phrase;
echo "</br>";
//Exercise 3
function averageMarksOfStudent($studentRecords, $str) {
    $avg = 0;
    $count = 0;
    foreach ($studentRecords as $student => $grades) {
        if (strcmp($student, $str) == 0) {
            foreach ($grades as $grade) {
                $count += 1;
                $avg += $grade;

            }
        }
    }
    return $avg = $avg/$count;
}

$studentRecords = array("Steve" => [10,20,23,234], "Max" => [1,2,3,4]);
$maxAvg = averageMarksOfStudent($studentRecords, "Max");
echo $maxAvg;
?>



<body>
    <h1>Rendered using HTML</h1>
</body>

</html>