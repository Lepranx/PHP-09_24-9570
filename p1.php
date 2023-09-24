<?php

/**
 * 1、已知字符串“line 1.line 2.line 3.line 4”,利用函数substr_count计算子字符串line的次数。
 */
const info = "line1 line2 line3 line4";

echo substr_count(info, "line");