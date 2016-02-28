<?php

class Database {
  var $connection = null;
  function Database() {
    $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_BASE) or die("No connection database...");
  }
}
