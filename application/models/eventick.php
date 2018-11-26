<?php

/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 11:03 AM
 */
class eventick extends CI_Model
{
    function addadmin ($data){

        $this->load->database();
        $this->db->insert('admin', $data);

    }

    function loginadmin ($data){
        $this->load->database();
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->where("username", $data['username']);
        $this->db->where("password", $data['password']);
        $query = $this->db->get();

        if($query->num_rows() == 1){
            return $query->result();
        } else{
            return false;
        }

    }



    function getevents()
    {
        $this->load->database();
        $this->db->order_by('date', 'DESC');
        $query = $this->db->get('events');

        return $query;
    }

    function getspecificevent($id)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("events");
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function updateevent($data)
    {
        $this->load->database();
       $query = $this->db->replace('events', $data);
       return $query;
    }

    function addevent ($data){

        $this->load->database();
       $query = $this->db->insert('events', $data);
       return $query;

    }


    function addreservation ($data){

        $this->load->database();
        $query = $this->db->insert('registrants', $data);
        return $query;

    }

    function getregistrants($id)
    {
        $this->load->database();

       $query = $this->db->get_where('registrants', array('event_id' => $id));

        return $query->result();
    }
}