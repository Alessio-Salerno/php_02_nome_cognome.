<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Alessio', 'surname' => 'Salerno', 'gender' => 'M'],
    ['name' => 'Alessia', 'surname' => 'Logitech', 'gender' => 'F'],
  ];

// FOREACH

foreach ($users as $user) {
    if($user ['gender'] == 'M'){
        echo 'Buongiorno Sig.' . $user['name'] . " ".  $user['surname'] . "\n"; 
    }

   elseif ($user ['gender'] == 'F') {
      echo 'Buongiorno Sig.ra' . $user['name'] .  " ".  $user['surname'] . "\n";
   }

   else {
    echo "Buongiorno" . $user['name'] . " ".  $user['surname'] . "\n";
   }
}


?>