<?php
$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46,
    "children"=>["太郎", "次郎", "三郎"]
];

#$data['children'] = ["     ", "次郎", "三郎"];

#var_dump($data);

#var_dump($data['children']);

var_dump($data["children"][0] );

?>