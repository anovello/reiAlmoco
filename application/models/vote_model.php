<?php

class Vote_model extends CI_Model {

    public function insert($data)
    {
        return $this->db->insert('vote', $data);
    }

    public function getAll()
    {
        return $this->db->get('vote')->result();
        
    }

    public function getWeek($week)
    {
        $this->db->where('week <', $week);
        $this->db->where('status', '0');
        return $this->db->get('vote')->result();
    }

    public function getChampionWeek($week)
    {
        $this->db->select('count(*) as total, vote.*');
        $this->db->where('week', $week);
        $this->db->group_by('user_id');
        $this->db->order_by('total', 'desc');
        $this->db->limit(1);
        return $this->db->get('vote')->result();
    }

    public function updateVoteWeek($week)
    {
        $this->db->where('week', $week);
        $this->db->set('status', '1');
        return $this->db->update('vote');
    }

    public function getChampionDay()
    {
        $date = date("Y-m-d");

        $this->db->select('count(*) as total, vote.*');
        $this->db->where('date >=', $date.' 00:00:00');
        $this->db->where('date <=', $date.' 23:59:59');
        $this->db->group_by('user_id');
        $this->db->order_by('total', 'desc');
        $this->db->limit(1);
        return $this->db->get('vote')->result();
    }

    public function lessLoved($week)
    {
        $this->db->select('count(*) as total, vote.*');
        $this->db->where('week', $week);
        $this->db->group_by('user_id');
        $this->db->order_by('total', 'asc');
        $this->db->limit(5);
        return $this->db->get('vote')->result();
    }

}