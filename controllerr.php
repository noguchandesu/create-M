<?php

require_once 'model.php';

$num = null;



//オペランドを入力
if(isset($_POST['operand'])){
  $operand = $_POST['operand'];
}
//入力欄1つ目に入れる
if(isset($_POST['num'])){
  if($inputFormula = null){
    //最初の数字
    $inputFormula = $_POST['num'];
  } else {
    //2つ目以降の数字
    $inputFormula = $inputFormula.$_POST['num'];
  }
}

check();
history();

if(!check()){
  echo "正しい値を入力してください。";
} else {
  $outputResult = keisan();
}

//答え出力 
if(!$outputResult = null){

  $history = $inputFormula1.$operand.$inputFormula2."=".$outputResult;

  echo '<input type="text" value="'.$outputResult.'">';

  //履歴の更新
  $history10 = $history9;
  $history9 = $history8;
  $history8 = $history7;
  $history7 = $history6;
  $history6 = $history5;
  $history5 = $history4;
  $history4 = $history3;
  $history3 = $history2;
  $history2 = $history1;
  $history1 = $outputResult;
  
  $outputResult = null;

  echo $history1;
  echo $history2;
  echo $history3;
  echo $history4;
  echo $history5;
  echo $history6;
  echo $history7;
  echo $history8;
  echo $history9;
  echo $history10;
}

?>