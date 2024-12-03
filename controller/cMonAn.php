<?php
include_once("model/mMonAn.php");
class cmonan{
    public function getallmonan(){
        $p = new mmonan();
        $table=$p->selectallmonan();
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
    public function get1monan($mamonan){
        $p = new mmonan();
        $table=$p->select1monan($mamonan);
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
   
}


?>
