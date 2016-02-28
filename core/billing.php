<?php

class Billing {
  function Billing($product_id = 0, $cost = 0) {
    if ( $product_id > 0 )
    {
      if ( $cost > 0 ) return $product_id . "=" . $cost;
    }
    return false;
  }
}
