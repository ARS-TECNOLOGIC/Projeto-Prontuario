<?php

class functPhp{
  
    function calcIdade($dataNasc){
  $dataNascY = date('Y', strtotime($dataNasc));
  $dataNascM = date('m', strtotime($dataNasc));
  $dataNascD = date('d', strtotime($dataNasc));
  $dataAtualY = date('Y', time());
  $dataAtualM = date('m', time());
  $dataAtualD = date('d', time());
  $anosVida = $dataAtualY - $dataNascY;

  if ($dataAtualM < $dataNascM) {
    --$anosVida;
  } elseif ($dataAtualM == $dataNascM) {
    if ($dataAtualD < $dataNascD) {
      --$anosVida;
    }
  }
 return $anosVida;
}

}
