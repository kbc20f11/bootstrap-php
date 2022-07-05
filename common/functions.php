<?php
// 文字列をエスケープ
function h($string) {
    return htmlspecialchars($string, ENT_QUOTES);
}
 
// 文字列をフィルター
function f($type, $string) {
    return trim(filter_input($type, $string));
}
 
// 空文字判定1。null は true, "" も true, 0 と "0" は false, " " も false
function is_nullorempty($obj)
{
    if($obj === 0 || $obj === "0"){
        return false;
    }
    return empty($obj);
}
 
// 空文字判定2。 null は true, "" も true, 0 と "0" is false, " " は true
function is_nullorwhitespace($obj)
{
    if(is_nullorempty($obj) === true){
        return true;
    }
    if(is_string($obj) && mb_ereg_match("^(\s|　)+$", $obj)){
        return true;
    }
    return false;
}
 
?>