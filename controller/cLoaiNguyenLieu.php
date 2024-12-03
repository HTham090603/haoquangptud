<?php
include_once("model/mloainguyenlieu.php");
class cloainguyenlieu{
    public function getallloainguyenlieu(){
        $p = new mloainguyenlieu();
        $table=$p->selectallloainguyenlieu();
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
    public function get1loainguyenlieu($math){
        $p = new mloainguyenlieu();
        $table=$p->select1loainguyenlieu($math);
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
    public function updateth($math,$tenth,$diachi,$web,$dienthoai){
        $p = new mloainguyenlieu();
        return $p->updateloainguyenlieu($math,$tenth,$diachi,$web,$dienthoai);
        
    }
    public function insertth($tenth,$diachi,$web,$dienthoai){
        $p =  new mloainguyenlieu();
        $result = $p->insertloainguyenlieu($tenth,$diachi,$web,$dienthoai);
        if($result == 1){
            return true;
        }else{
            return false;
        }
    }
    public function deleteloainguyenlieu($math){
        $p = new mloainguyenlieu();
        return $p->deleteth($math);
        
    }
}


?>
