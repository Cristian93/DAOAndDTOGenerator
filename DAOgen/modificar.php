<?php

  include './generated/include_dao.php';
  
  
  
  //$list=DAOFactory::getActorDAO()->setSQL("SELECT * FROM actor WHERE first_name ='".$_GET["oldName"]."'");
  

  /*$list= DAOFactory::getActorDAO()->queryByFirstName($_GET["oldName"]);

  $obj = new Actor();

  $obj->setActorId($list[0]->getActorId());
  
  $obj->setFirstName($_GET["newName"]);

  $obj->setLastName("Franco");

  $obj->setLastUpdate(date("Y-m-d H:i:s"));
  
  DAOFactory:: getActorDAO()->update($obj);

  header('Location: consulta.php');*/

                            

  DAOFactory::getActorDAO()->deleteByFirstName($_GET["oldName"]);
   header('Location: consulta.php');