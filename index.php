<?php
// echo "Hello World!";

function findString(){
    $findme = 'c';
    $mystring = 'ABCabucssfacsfC';
    $pos1 = stripos($mystring,$findme); // 查找第一次出现位置
    $pos2 = strpos($mystring, $findme); // 查找第一次出现位置(区分大小写)
    $pos3 = strripos($mystring, $findme); // 查找最后一次出现位置
    $pos4 = strrpos($mystring, $findme);  // 查找最后一次出现位置(区分大小写)
    var_dump($pos1);
    var_dump($pos2);
    var_dump($pos3);
    var_dump($pos4);
}

function replaceString(){
    $str = "hello, world, Hello, world!";
    $replace = 'hi';
    $search = 'hello';
    // 不区分大小写替换字符串
    echo str_ireplace($search, $replace, $str)."<br/>";
    // 区分大小写替换
    echo str_replace($search, $replace, $str)."<br/>";
    // 指出替换位置替换字符串
    echo substr_replace($str, $replace, 0, 5)."<br/>";
}

function subString(){
    $rest0 = substr("abcdef",1);
    $rest1 = substr("abcdef",-2);
    $rest2 = substr("abcdef",-3,1);
    $str = "abcdef";
    $start = -4;
    $length = 3;
    $rest3 = substr($str, $start, $length);
    echo $rest0."<br/>";
    echo $rest1."<br/>";
    echo $rest2."<br/>";
    echo $rest3."<br/>";
}

function AllString(){
    $str = "abcdef ";
    echo strlen($str)."<br/>"; // 获取字符串长度
    echo str_repeat($str, 5)."<br/>"; // 重复字符串N次
    echo str_shuffle($str);

}
AllString();

?>
