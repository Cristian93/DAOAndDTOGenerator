<?php

//error_reporting(E_ALL);

    include './generated/include_dao.php';
    
    
   //$list= DAOFactory:: getCountryDAO()->queryAll()  ;
   
   //echo $list[0]->getCountry();
   
  //for ($i=0;$i<count($list);$i++ ){
      
    //  echo $list[$i]->getCountry()."<br>";
      
  //}
  //foreach ( $list as $cou){
      
     // echo $cou->getCountryId()."<br>";
  //}
    
//$actor = new Actor();
    
//$actor->setFirstName("DAVID");
//$actor->setLastName("garcia");
//$actor->setLastUpdate(date("Y-m-d H:i:s"));

//DAOFactory::getActorDAO()->insert($actor);


  $list=  DAOFactory::getActorDAO()->queryAll();
  
  $content=<<<CP
 
 <form action="modificar.php" method="get">
  <select name="oldName">       
CP;

  
  echo $content;
  
  
  foreach ($list as $actors){
      echo "<option>". $actors->getFirstName()."</option>";
  }
 
 
  $content=<<<CP
          
 </select><br><br>
 <input type="text" name="newName"><br><br>
  <input type="submit" value="Submit"><br>
</form>     
CP;
  
  echo $content;
 
 
        
    
    
//    $center = DAOFactory::getCenterDAO()->load(10);
//    
//    echo $center->getName();
    
//    list
//    $center = DAOFactory::getCenterDAO()->setSQL( "Select * FROM center" );
//    
//    echo $center[0]->getName();
    
//    INSERT
//    $region = new Region();
//    
//    $region->setCode(12);
//    $region->setName("carlos");
//    
//    DAOFactory::getRegionDAO()->insert($region);
//    unset($region);
    
    
//    DAOFactory::getRegionDAO()->
    
//    UPDATE
//    $region = new Region();
//    
//    $list = DAOFactory::getRegionDAO()->queryByName("carlos");
    
//    var_dump($list);
    
//    $region->setCode($list[0]->getCode());
//    $region->setName("Listo papa");
//    $region->setId($list[0]->getId());
//    
//    DAOFactory::getRegionDAO()->update($region);
//    
//    unset($region);
    
//   DAOFactory::getRegionDAO()->deleteByName( "Listo papa" );
    
//    $list = DAOFactory::getRegionDAO()->setSQL("SELECT * FROM")
    
   /* echo "<select name='ant'>";
    
    $list= DAOFactory:: getActorDAO()->queryAll()  ;
    
    foreach ( $list as $cou){
      
    echo  '<option>'. $cou->getFirstName().'</option>';
  }   
  
   echo '</select>';
   
   $content = <<<CF
           
<input type="text" name="fname"><br>
<button type="button">Click Me!</button>

CF;
   
echo $content;*/
   
   