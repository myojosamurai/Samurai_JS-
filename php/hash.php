<?php
$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];

$data['children'] = ["太郎", "次郎", "三郎"];

var_dump($data);
# => array(4) {
#      'name' =>
#      string(6) "大泉"
#      'gender' =>
#      string(6) "男性"
#      'age' =>
#      int(46)
#      'children' =>
#      array(3) {
#        [0] =>
#        string(6) "太郎"
#        [1] =>
#        string(6) "次郎"
#        [2] =>
#        string(6) "三郎"
#      }
#    }が表示される
var_dump($data['children']);
# => array(3) {
#      [0]=>
#      string(6) "太郎"
#      [1]=>
#      string(6) "次郎"
#      [2]=>
#      string(6) "三郎"
#    }が表示される

print( $data['children'][0]."\n" );

$arrChildren = $data['children'];
print($arrChildren[0]."\n" );

?>