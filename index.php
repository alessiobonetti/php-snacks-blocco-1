<?php
$matches = [
    [
        "home_team" => "Cantù",
        "away_team" => "Olimpia Milano",
        "home_team_points" => 70,
        "away_team_points" => 45,
    ],

    [
        "home_team" => "Fortitudo Pompea Bologna",
        "away_team" => "Virtus",
        "home_team_points" => 89,
        "away_team_points" => 83,
    ],

    [
        "home_team" => "Pallacanestro Trieste",
        "away_team" => "Virtus Roma",
        "home_team_points" => 72,
        "away_team_points" => 33,
    ],
    [
        "home_team" => "Openjobmetis Varese",
        "away_team" => "Germani Basket Brescia",
        "home_team_points" => 101,
        "away_team_points" => 99,
    ],
];


for($i=0; $i<count($matches); $i++){

  $results = $results . $matches[i]["home_team"] . " - " . $matches[i]["away_team"] . " | " . $matches[i]["home_team_points"] . " - " . $matches[i]["away_team_points"];
};

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php snack 1</title>
   </head>
   <body>

     <p><?php echo($results) ?></p>

   </body>
 </html>
