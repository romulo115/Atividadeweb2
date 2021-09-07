<?php
class usuario {
  private  $nome;
  private  $sobrenome;

function _construct($n, $s){
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
    return (">> Email enviado");
   }

  public function registrar(){
    return (">> Registrado");
    return $this->email ;
  }

  public function ola (){
  echo ("ola, $nome $sobrenome");
  return $this->registrar;
  }
}