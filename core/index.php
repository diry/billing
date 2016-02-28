<?php

require "database.php";
$database = new Database;
require "billing.php";
$billing = new Billing;

class Core {
  function Core() {
    echo "ok\n";
  }
}
$core = new Core;
