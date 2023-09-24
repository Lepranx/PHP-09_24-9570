<?php

/**
 * 编写函数fun，其功能是计算传入参数的阶乘。调用时实参为10。编写代码，写出其值。
 */

function fun($n){
    if($n === 1 || $n === 0){
        return 1;
    }
    if($n<0)
    {
        return '负数没有阶乘';
    }
    //递归节省代码
    return fun($n - 1)*$n;
}

echo fun(10);