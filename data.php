<?php

//index page

$logo=["logoimg"=>"./images/img6.png",
"logoalt"=>"logo"];

$spantitle="Moje Beleske";
$title="Andj Blog";

$lists=[
    ["type"=>"checkbox",
        "name"=>"HTML",
        "text"=>"HTML"
    ],
    ["type"=>"checkbox",
        "name"=>"CSS",
        "text"=>"CSS"

    ],
    ["type"=>"checkbox",
        "name"=>"JAVASCRIPT",
        "text"=>"JAVASCRIPT"

    ]
];

$posts= [
    [   
    "link-href"=>"post1",
        "img-src"=>"./images/img4.jpeg",
        "img-alt"=>"Prva",
    "link-title"=>"prva",
    "title"=>"Prva nedelja",
    "link-target"=>"_blank",
    "link-text"=>"Procitaj vise"
    ],
    [
    "link-href"=>"single.php",
        "img-src"=>"./images/img4.jpeg",
        "img-alt"=>"Druga",
    "link-title"=>"druga",
    "title"=>"Druga nedelja",
    "link-target"=>"_blank",
    "link-text"=>"Procitaj vise"
    ],
    [
    "link-href"=>"single.php",
        "img-src"=>"./images/img4.jpeg",
        "img-alt"=>"Prva",
    "link-title"=>"treca",
    "title"=>"Prva nedelja",
    "link-target"=>"_blank",
    "link-text"=>"Procitaj vise"
    ]

];

// single page

$prev=
[
    "previous"=>"./index.php",
     "text"=>"Nazad"
];
$next=
[   
    "next"=>"./single.php",
    "text"=>"Sledeca beleska"
];

$homepage= [
    "link"=>"./index.php",
    "text"=>"Pocetna"
];




?>
