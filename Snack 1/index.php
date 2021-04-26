<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball match</title>
</head>
<body>

<?php

    $matches = [
        [
            "firstTeam" => "Alianz Pallacanestro Trieste",
            "secondTeam" => "Virtus Roma",
            "firstTeamPt" => 30,
            "secondTeamPt" => 50
        ],
        [
            "firstTeam" => "Olimpia Milano",
            "secondTeam" => "Auxilium Torino",
            "firstTeamPt" => 60,
            "secondTeamPt" => 75,
        ],
        [
            "firstTeam" => "UG Goriziana",
            "secondTeam" => "Olimpia Pistoia",
            "firstTeamPt" => 70,
            "secondTeamPt" => 75
        ],
        [
            "firstTeam" => "Libertas Livorno",
            "secondTeam" => "Basket Cremona",
            "firstTeamPt" => 65,
            "secondTeamPt" => 60
        ],
        [
            "firstTeam" => "Basket Napoli",
            "secondTeam" => "Pall. Firenze",
            "firstTeamPt" => 70,
            "secondTeamPt" => 30
        ]
    ];

    for ($i = 0; $i < count($matches); $i++) {
        echo ("<p>".$matches[$i]["firstTeam"]." - ");
        echo ($matches[$i]["secondTeam"]." | ");
        echo ($matches[$i]["firstTeamPt"]."-");
        echo ($matches[$i]["secondTeamPt"]."</p>");
    };
    
?>
</body>
</html>