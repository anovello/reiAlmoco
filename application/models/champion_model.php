<?php

class Champion_model extends CI_Model {

    public function insert($data)
    {
        return $this->db->insert('champion', $data);
    }

    public function getAll($order = false)
    {
        if ($order != false)
        {
            $this->db->order_by('date', $order);
        }

        return $this->db->get('champion')->result();
        
    }

}