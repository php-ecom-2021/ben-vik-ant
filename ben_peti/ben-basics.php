<?php

$integer = 90;
$float = 0.2;
$string_1 = "9012";
$string_2 = "ez egy másik string";

echo $integer . $float; ?> <br> <?php
echo $float . $float;  ?> <br> <?php
echo $integer . $float; ?> <br> <?php

echo $integer + $string_1; ?> <br> <?php

// echo $string_1 - $string_2;

echo '1.1' + 1 - '-1'; ?> <br> <?php

$val_1 = '1,1';
$val_2 =  0.2;
$val_3 = '0.6';
$var_4 =  14; 

if(is_Numeric($val_1)):
    // echo "ez fasza";
endif;

//$kibaszas = $val_1 + $val_2 - $val_3 * $var_4;

//echo $kibaszas;

$numbers_1 = [1,2,3,4,5];
$string_1 = ['asd1','2asd','asd3','asd4','asd5'];

$mixed = ['asd',0.5,1,false];
echo $mittomen = current( $numbers_1); ?> <br> <?php
echo $mittomen = next( $numbers_1); ?> <br> <?php
echo $mittomen = next( $numbers_1); ?> <br> <?php
echo $mittomen = reset( $numbers_1); ?> <br> <?php
echo $mittomen = prev( $numbers_1); ?> <br> <?php
echo $mittomen = end( $numbers_1); ?> <br> <?php

$array_of_50 = [];

for ($i=50; $i <= 105; $i++) { 
    array_push($array_of_50,$i);
}

print_r( $array_of_50);?> <br> <?php

print_r( $array_of_50[43] );?> <br> <?php

$asd = [
    123 => [
        1,2,3,4
    ]
    ];

    print_r($asd); ?> <br> <?php

  echo 12 == 12 ? true : false; ?> <br> <?php

  $first_name = "Béla";

$last_name = "Árpád";


   function kacsa($first_name,
   $last_name,
   $middle_name = "",
   ){
    
    echo $first_name . " " . $middle_name . " " . $last_name;?> <br> <?php
  }

  kacsa($first_name,$last_name);



  function kacsa_2(){

    $numargs = func_num_args();
    $arg_list = func_get_args();

    print_r($numargs); ?> <br> <?php
   
  echo $arg_list[0] . " " . $arg_list[1];?> <br> <br><br><br><br><br> <?php

 }

 kacsa_2($first_name,$last_name);


 require 'danger_zone.php';
 ?>

 <html>

<body>

    <form action="danger_zone.php"
          method="post">
        <fieldset>
            Name: <input type="text"
                   name="name">
            E-mail: <input type="text"
                   name="email">
        </fieldset>
        <fieldset>
            <label for="description">Description</label>
            <textarea name="description"
                      id=""
                      cols="30"
                      rows="10"></textarea>
        </fieldset>
        <input type="submit">
    </form>

</body>

</html>

 