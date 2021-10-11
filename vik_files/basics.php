<!-- VARIABLES -->

<?php
$integer = 2;
$float = 2.12;
$string = 'Hello';

// Concatenation

$string .= " World";
echo "$string <br/>";

echo "this costs $float dollars <br/>";
echo 'this costs $12 dollars <br/>';

/* Adding numbers to strings */
echo 1 + '5';
echo '<br/>';
echo '1.1' + 1 - '-1';
echo '<br/>';
// echo '1,1' + 0.2 - '0.6' * 14; // returns warning because 1,1 is not a numeric value. Should use 1.1 instead

?>


<!-- strpos usage -->
<?php

$string = 'some random text';
$pos = strpos($string, 'm', 0); // $pos = 7, not 0

echo "the position is: $pos"; // returns the index at which the parameter 'm' is found in variable $string
?>


<!-- ARRAYS -->
<?php
$numberArray = array(1, 2, 3, 4);
echo "<br/>";
$stringArray = array("foo", "bar", "hello", "world");
echo "<br/>";
$mixedArray = array("1.1", 1, "hello", 2.2, true);

echo current($stringArray);
echo "<br/>";
$item = next($stringArray); // returns the next value in the array
echo "$item <br/>";
$item = prev($stringArray); // returns previous value in the array
echo "$item";
echo "<br/>";
?>

<!-- LOOPS -->
<?php

$array = array();
for ($x = 50; $x <= 105; $x += 1) {
  array_push($array, $x);
}
print_r($array);
echo "<br/>";

$even = array();
foreach ($array as $val) {
  if ($val % 2 == 0) {
    $even[] = $val;
  } else {
    $odds[] = $val;
  }
}
print_r($even);
echo "<br/>";
?>


<!-- ARRAY PRACTICE -->
<pre><?php
      echo "<br/>";
      echo "<br/>";

      $star_trek_members = [
        [
          'actor' => 'Walter Koenig',
          'name' => 'Pavel Chekov',
          'rank' => 'security officer.',
        ], [
          'actor' => 'Leonard Nimoy',
          'name' => 'Spock',
          'rank' => 'science officer.',
        ], [
          'actor' => 'William Shatner',
          'name' => 'James T. Kirk',
          'rank' => 'security officer',
        ], [
          'actor' => 'James Doohan',
          'name' => 'Montgomery Scott',
          'rank' => 'chief engineer.',
        ], [
          'actor' => 'Nichelle Nichols',
          'name' => 'Nyota Uhura',
          'rank' => 'communications / science officer.'
        ]
      ];

      for ($i = 0; $i < count($star_trek_members); $i++) {
        $star_trek_members[$i]['id'] = $i + 1;
      };

      print_r($star_trek_members);

      echo "<br/>";
      echo "<br/>";

      /* SORTING array by name ascending */
      usort($star_trek_members, function ($a, $b) {
        return $a['name'] <=> $b['name'];
      });

      print_r($star_trek_members);

      echo "<br/>";

      /* Switch statements */
      for ($i = 0; $i < count($star_trek_members); $i++) {
        switch ($star_trek_members[$i]['rank']) {
          case 'security officer.':
            $star_trek_members[$i]['shirt_color'] = 'red';
            break;
          case 'chief engineer.':
            $star_trek_members[$i]['shirt_color'] = 'yellow';
            break;
          case 'communications / science officer.';
            $star_trek_members[$i]['shirt_color'] = 'blue';
            break;
          default;
            $star_trek_members[$i]['shirt_color'] = 'pink';
        }
      };

      print_r($star_trek_members);

      echo "<br/>";
      echo "<br/>";

      function sum($a, $b) {
        return $a + $b;
      };

      $test = sum(1, 2);
      echo "The sum is " . $test;
      ?>

?></pre>