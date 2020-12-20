<?php
function processMsg($code = 1)
{
    switch ($code) {
        case 1:
            $msg = "處理中";
            break;
        case 2:
            $msg = "接單中";
            break;
        case 3:
            $msg = "出貨中";
            break;
        case 4:
            $msg = "unknown";
            break;
    }
    return($msg);
}
