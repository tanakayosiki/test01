<?php

$people[
    ["name"=>"Taro",
    "age"=>25,
    "gender"=>"men"],
    ["name"=>"Jiro",
    "age"=>20,
    "gender"=>"men"],
    ["name"=>"Saburo",
    "age"=>16,
    "gender"=>women]
];
foreach($people as $name=>$age=>$gender){
    echo $name($age.歳.$gender);
}