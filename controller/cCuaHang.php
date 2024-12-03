<?php
include_once("model/mCuaHang.php");
class cCuaHang{
    public function getallcuahang(){
        $p = new mcuahang();
        $table=$p->selectallcuahang();
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
    public function get1cuahang($mach){
        $p = new mcuahang();
        $table=$p->select1cuahang($mach);
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
   
}


?>
