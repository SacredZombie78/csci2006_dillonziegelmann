<?php
 abstract class Database{
   private $id;
   private $haschange;
   abstract public function get($id);
   abstract public function update($array);
   abstract public function saveData($save);
   abstract public function deleteData();
   final protected function hasChange(){
     $this->haschange = true;
   }

   final protected function delete(){
     if($this->id === null){

     } else {
       $this->deleteData();
     }
   }

   final protected function save(){
     if($this->id === null){
       $this->saveData();
     } else {
       $this->update();
     }
   }

   abstract public function getHtml();

   function __construct($id = null) {
     $this->id = $id;
     $this->haschange = false;
   }
 }
?>
