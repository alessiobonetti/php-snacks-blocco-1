<?php
  $matches = [
    //array giornate campionato
    "giornata campionato" => [
      // numero giornata
      "prima" => [
        // dove
        "luogo" => [

          "Bologna" => [
            [
              "home_squad" => [
                "name" => "Fortitudo",
                "points" => "88"
              ],

              "away_squad" => [
                "name" => "Virtus",
                "points" => "75"
              ],
            ];
          ],

          "Milano" => [
            [
              "home_squad" => [
                "name" => "Olimpia Milano",
                "points" => "55"
              ],

              "away_squad" => [
                "name" => "Cantù",
                "points" => "60"
              ],
            ];
          ],
        ],
      ],
    ],
  ];

  var_dump($matches ["giornata campionato"]["prima"]["luogo"]["Bologna"]);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php snack 1</title>
   </head>
   <body>

   </body>
 </html>
