<?php

class Billing {
  function Billing( $product_id = 0, $amount = 0 ) {
    if ( $product_id > 0 )
    {
      if ( $amount > 0 ) return $product_id . "=" . $amount;
    }
    return false;
  }
  function order( $userid = 0, $joindate = 0, $amount = 0 )
  {
    if ( $amount <= 0 ) return false;
    if ( $joindate <= 0 ) $joindate = time();
    $values = [
      "userid" => $userid,
      "joindate" => $joindate,
      "amount" => $amount,
    ]
    $this->db->insert("payments", $values);
    return $values;
  }
}
