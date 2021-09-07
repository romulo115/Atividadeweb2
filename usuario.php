<?php
class usuario {
  private  $nome;
  private  $sobrenome;

function _construct($n, $s)
{
  $this->nome = $n;
  $this->sobrenome = $s;
}
  public function setnome ($name){
    $this->nome = $name;
  }
  public function setsobrenome ($last){
    $this->sobrenome = $last;
  }
  public function getnome(){
    echo $this->nome;
  }
  public function getsobrenome(){
    return $this->sobrenome;
  }

   public function email(){
    echo (">> Email enviado");
   }

  public function registrar(){
    echo (">> Registrado");
    return $this;
  }

  public function ola (){
  echo ('ola, $nome $sobrenome \n ');
  
  return $this;
  }
}