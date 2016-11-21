<?php
  require_once('dataBase/DbConnector.php');
  require_once('view/DbView.php');

  class DbController {

    private $dbConnector;
    private $dbView;

    function __construct() {

      $this->dbConnector = new DbConnector();
      $this->dbView = new DbView();
    }

    function dbExists() {

      return $this->dbConnector->dbExists();
    }

    function createDatabase($host, $dbName, $user, $password) {

      $this->dbConnector->createDatabase($host, $dbName, $user, $password);
    }

    function newCredentials() {

      $this->dbView->newCredentials();
    }

  }
?>
