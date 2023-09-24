<?php

/**
 * 使用array()函数声明一维数组，值分别为'红’、‘绿、‘蓝 再使用foreach语句遍历数组显示数组的值。编写代码
 */

$colors = array("红", "绿", "蓝");

foreach($colors as $color){
    echo $color;
}