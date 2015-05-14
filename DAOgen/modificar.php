<?php

  include './generated/include_dao.php';
  
  
  
  $list=DAOFactory::getActorDAO()->setSQL("SELECT * FROM actor WHERE first_name ='".$_GET["oldName"]."'");
  

  $obj = new Actor();

  $obj->setActorId($list[0]->getActorId());
  
  $obj->setFirstName($_GET["newName"]);
  
  DAOFactory:: getActorDAO()->update($obj);

 header('Location: consulta.php');
  