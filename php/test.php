<?php
function triangle_area($a, $h){
    return $a * $h / 2;
}


$sampe = triangle_area(2, 3);
print($sample);

print(triangle_area(2, 3));
# => 3と表示される
?>