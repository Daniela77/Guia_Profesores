<?php

  class Model{
    protected $db;

    function __construct() {

      $this->db = (new DbConnector)->getDbConnection();
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}

?>
