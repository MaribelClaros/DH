<?php

abstract class Cuenta
{
  protected $cbu;
  protected $balance;
  protected $fechaUltimoMovimiento;

  public function __construct($cbu)
  {
    $this->cbu = $cbu;
  }

  public function setCbu($cbu){
    $this->cbu = $cbu;
  }
  public function getCbu(){
    return $this->cbu;
  }
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance(){
    return $this->balance;
  }
  public function setFechaUltimoMovimiento($fechaUltimoMovimiento){
    $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
  }
  public function getFechaUltimoMovimiento(){
    return $this->fechaUltimoMovimiento;
  }

  public abstract function debitar($monto, $medio);

  public function acreditar($monto)
  {
    $saldo += $monto;
    
  }
}
