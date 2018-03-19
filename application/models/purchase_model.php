<?php

class purchase_model extends CI_Model {
    private $table = 'purchase';
    
    function create($purchaseRecord){
        $this->db->insert($this->table, $purchaseRecord);
    }
    
    function read($condition=null){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(isset($condition))
            $this->db->where($condition);
        
        $query = $this->db->get();
        
        if($query->num_rows()>0)
            return $query->result_array();
        else
            return false;
        
    }
    
    function update($newRecord){
        $this->db->replace($this->table,$newRecord);
    }
    
    function del($where_array){
        $this->db->delete($this->table,$where_array);
    }

    function count(){
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->num_rows();
    }

    function getLastRecordID(){
       $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('orderID','asc');
        $query = $this->db->get();
        $row = $query->last_row();// To get last record form the table
        return $row->orderID;
    }
}
?>