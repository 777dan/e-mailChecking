<?php
$str = "irina.ina8@gmail.com";
$pattern = "#^[a-z]\w*\.\w*@(gmail|mail|ukr)\.(com|ua|ru|net)$#";
if (preg_match($pattern, $str)) {
    echo "Everything is right";
} else {
    echo "Error!";
}

// irina.volkova8@gmail.com