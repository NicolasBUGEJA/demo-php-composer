<?php

namespace myapp;

use MysqliDb;

class myapp{

  protected $db;

  public function __construct() {

    $dbhost = getenv('MYSQL_ADDON_HOST');
    $dbname = getenv('bkkowb9ib');
    $dbuser = getenv('MYSQL_ADDON_USER');
    $dbpass = getenv('MYSQL_ADDON_PASSWORD');
    $dbport = getenv('MYSQL_ADDON_PORT');
    $dburi = getenv('MYSQL_ADDON_URI');

    $this->db = new MysqliDb($dbhost, $dbuser, $dbpass, $dbname, $dbport);
  }

  public function isOK(){
    return $this->db->ping();
  }

}