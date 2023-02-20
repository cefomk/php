<?php
include './fonctions.php';
/*
$planetes = ['mars','uranus','jupiter','terre','saturne'];

//foreach('test' as $planete)
foreach($planetes as $key => &$planete)
//foreach($planetes as $planete)
{
   //$planete = 'delta';
   echo $key . ": " . $planete . '<br>';
}

//dbug($planetes);

unset($planete);
$planete = 'beta';
echo $planete; //attention derniere variable n'estpas detruite surtout avec une reference
dbug($planetes);
 */

$user = [
   'nom' => 'Doupet',
   'email' => 'ldoupe@yahoo.com',
   'comptence' => ['php','react','python']
];

foreach($user as $key => $val)
{
   //echo $key . ': ' . $val . '<br>';
   /*if (is_array($val))
   {
      $val = implode(',', $val);
   }
   echo $key . ': ' . json_encode($val) . '<br>';
    */

   echo $key . ': ';
   if (is_array($val))
   {
      foreach($val as $comptence)
      {
         echo $comptence . ' - ';
      }
   } else {
      echo $val;
   }

   echo '<br />';
}

// autre ecriture pou foreach de même pour if etc ...

foreach($user as $key => $val):
   echo $key . ': ' . $val . '<br>';
endforeach;


$x=40;
if($x === 40):
   echo $x;
endif;
