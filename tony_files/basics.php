<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <pre>
    <?php
        //Assigntment Variables: below I've listed variables with the types: String, Integer, Float;
        $firstName = "Tony";
        $lastName = "M";
        $stringFloat = "1.1";
        $stringNumber = "5";
        $haystack = "I once was a cow that colored books.";
        $needle = "cow";
        $offset = 5;
        $needleLen = strlen($needle);
        $pos = strpos($haystack, $needle, $offset);
        $age = 25;
        $speed = 3.0; // 1 should be a basic speed, but Im a speedy boi
        $pie = 3.14; // idk, it just seemed like an obvious example for a float
        $numberOfToes = 10;
        $pairOfEyes = 1;
        $colorsNails = false;

        //Assignment concatination: below I am using concatination both ways single quoted and double quoted.
        echo "I'm " . $firstName . " " . $lastName . ". and I'm " . $age . " with a speed of " . $speed;
        echo "<br>";
        echo 'This person has ' . $numberOfToes . ' toes and ' . $pairOfEyes . ' pair of eyes';
        echo "<br>";
        if (!$colorsNails) {
            echo 'This person does not color his nails.';
        } else {
            echo 'This person colors his nails.';
        }

        //Assignment dynamic casting: below strings are being added to numbers and floats.
        echo "<br><br>Assignment dynamic casting<br><br>";
        echo $stringNumber + $age; // wow it adds strings and numbers properly
        echo "<br>";
        echo $stringFloat + $stringNumber;
        echo "<br>";
        echo '1,1' + 0.2 - '0.6' * 14; // gives warning since 1,1 is not a numerical value, if it is 1.1 it calculates it without the warning (1,1 is still being calculated)
        echo "<br>";
        echo $stringFloat - $stringNumber;
        echo "<br>";
        echo '1.1' + 1 - '-1';


        //Assignment needle in haystack: below the offset is 5 which means it starts searching from the 5th char an on for the needle in the haystack
        echo "<br><br>Assignment Needle in Haystack<br><br>";
        if ($pos) {
            echo "The $needle was found in the '$haystack'. The position of the $needle is from $pos to " . $pos + strlen($needle); // strlen can be replaced with the var $needleLen
        } else {
            echo "The $needle wasn't found in the '$hastack'.";
        }

        //Assignment arrays: below I've created arrays from numbers and strings and a mixed one;
        $stringsArray = [$firstName, $lastName];
        $numbersArray = [$age, $pie, $offset, $speed];
        $mixedArray = [$firstName, $lastName, $age, $speed, $colorsNails];

        //Assignment loops: below I've looped through all of the arrays using next(), prev(), end() and current()
        echo "<br><br>Assignment LOOPS<br><br>";
        echo next($stringsArray);
        echo "<br>";
        echo prev($stringsArray);
        echo "<br>";
        echo end($numbersArray);
        echo "<br>";
        next($mixedArray);
        next($mixedArray);
        echo current($mixedArray);
        reset($mixedArray);
        echo "<br>";
        echo current($mixedArray);

        //Assignment num array 50-101: Below i've created a loop that increments i from 50 to 101 and pushes i to an array
        echo "<br><br>Assignment for loop<br><br>";
        $forLoopArray = [];

        for ($i=50; $i < 106; $i++) { 
            array_push($forLoopArray, $i);
        }
        print_r($forLoopArray);
        // Even numbers array

        $evenNumsArray = [];

        for ($j=0; $j < 100; $j++) { 
            if ($j % 2 === 0) {
                array_push($evenNumsArray, $j);
            }
        }
        echo "<br>";
        print_r($evenNumsArray);

        //Assignment id stuff
        $star_trek_members = [     
            [
              'actor' => 'Walter Koenig',
              'name' => 'Pavel Chekov',
              'rank' => 'security officer.'
            ],[
              'actor' => 'Leonard Nimoy' ,
              'name' => 'Spock',
              'rank' => 'science officer.'
            ],[
              'actor' => 'William Shatner' ,
              'name' => 'James T. Kirk',
              'rank' => 'security officer.'
            ],[
              'actor' => 'James Doohan' ,
              'name' => 'Montgomery Scott',
              'rank' => 'chief engineer.'
            ],[
              'actor' => 'Nichelle Nichols' ,
              'name' => 'Nyota Uhura',
              'rank' => 'communications / science officer.'
            ]
        ];

        // $star_trek_members[1]['name'] = 'Sprock';
        // $star_trek_members[1]['name-12'] = 'Sprock';
        // $star_trek_members[1]['name----11'] = 'Sprock';
        // $star_trek_members[1]['nam1212e'] = 'Sprock';
        for ($k=0; $k < count($star_trek_members); $k++) {
          // $member = $star_trek_members[$k];
          // $member['id'] = $k + 1;
          // var_dump($member);
          // $star_trek_members[$k] = $member;
          $star_trek_members[$k]['id'] = $k + 1; // this creates a key called 'id' and assigns the value of the iterator + 1
        }
        echo "<br>";
        print_r($star_trek_members);

        //Fetching the name of the first officer
        echo "<br>";
        echo $star_trek_members[0]['name'];

        //Sorting array on the 'name' property
        echo "<br>Sorted<br>";
        // function cmp($a, $b) {
        //   return strcmp($a->name, $b->name);
        // }
      
        // usort($star_trek_members, "cmp"); // gives warnings and doesn't work for whatever reason
        usort($star_trek_members, function ($item1, $item2) {
          return $item1['name'] <=> $item2['name']; // this works for whatever reason
        });
        // usort($star_trek_members, function($a, $b) {return strcmp($a->name, $b->name);}); // gives warnings and doesn't work for whatever reason
        print_r($star_trek_members);


        //Assignment shirt color: below I've added a property shirt_color based on the criteria of the assignment
        echo "<br>Shirt color<br>";
        for ($p=0; $p < count($star_trek_members) ; $p++) { 
          
          //strpos for each of the securityIs scienceIs engineerIs
          $isSecurity = strpos($star_trek_members[$p]['rank'], 'security') !== false;
          $isScience = strpos($star_trek_members[$p]['rank'], 'science')  !== false;
          $isEngineer = strpos($star_trek_members[$p]['rank'], 'engineer')  !== false;
          var_dump($isScience);
          if ($isSecurity) {
            $star_trek_members[$p]['shirt_color'] = 'red';
          } else if ($isScience) {
            $star_trek_members[$p]['shirt_color'] = 'blue';
          } else if ($isEngineer) {
            $star_trek_members[$p]['shirt_color'] = 'yellow';
          } else {
            $star_trek_members[$p]['shirt_color'] = 'pink';
          }
          // switch ($star_trek_members[$p]['rank']) {
          //   case 'security officer.':
          //     $star_trek_members[$p]['shirt_color'] = 'red';
          //     break;
          //   case 'science officer.':
          //     $star_trek_members[$p]['shirt_color'] = 'blue';
          //     break;
          //   case 'chief engineer.':
          //     $star_trek_members[$p]['shirt_color'] = 'yellow';
          //     break;
          //   default:
          //     $star_trek_members[$p]['shirt_color'] = 'pink';
          //     break;
          // }
          // switch ($star_trek_members[$p]['rank']) {
          //   case strstr($star_trek_members[$p]['rank'], 'security'):
          //     $star_trek_members[$p]['shirt_color'] = 'red';
          //     break;
          //   case strstr($star_trek_members[$p]['rank'], 'science'):
          //     $star_trek_members[$p]['shirt_color'] = 'blue';
          //     break;
          //   case strstr($star_trek_members[$p]['rank'], 'engineer'):
          //     $star_trek_members[$p]['shirt_color'] = 'yellow';
          //     break;
          //   default:
          //     $star_trek_members[$p]['shirt_color'] = 'pink';
          //     break;
          // }
        }
        print_r($star_trek_members);

        //Assignment functions 

        echo "<br>Funcs<br>";
        function adder($a, $b) {
          return $a + $b;
        };
        echo "<br>";
        echo adder(1,5);
        echo "<br>";
        function stringConcater($a, $b, $c) {
          return $a . ' ' . $b . ' ' . $c;
        };
        echo stringConcater($firstName, 'P', $lastName);


        

    ?></pre>
</body>
</html>