<?php

//model層はfunctionでまとめる
//true or false でcontrollerに返す


function check() {
  //記号のチェック
  if($operand === + || - || * || /){
    //数字のチェック
    if(is_numeric($inputFormula1) && is_numeric($inputFormula2)) {
      // $flag = true;
      // $outputResult = keisan();
      return true;
    }else{
      return false;
    }
  } else {
    echo "正しい記号を入力してください。";
  }
}

function history(){
  if(keisan()){
    $history = $inputFormula1.$operand.$inputFormula2."=".$outputResult;
  }
}

//計算関数
//if文で分ける
function keisan($inputFormula1, $inputFormula2){
  if($operand = +){
    echo $inputFormula1 + $inputFormula2;
  }
  if($operand = -){
    echo $inputFormula1 - $inputFormula2;
  }
  if($operand = "×"){
    echo $inputFormula1 * $inputFormula2;
  }
  if($operand = "÷"){
    echo $inputFormula1 / $inputFormula2;
  }
}

?>