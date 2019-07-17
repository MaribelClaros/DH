<?php

class Classic extends Cuenta
{
  public function debitar($monto, $medio, $fechaUltimoMovimiento)
  {
    if($medio == "Banelco")
    {
      $total = $monto + ($monto * 5 / 100);
    }
  }
}
