<?php

class Lab_model extends CI_Model {


    function __construct()
    {
        parent::__construct();

    }

    public function registerUser()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );

        $this->db->insert('user', $data);
    }

    public function getAllUser()
    {
        $rs = $this->db->get('user');

        $data = array();
        if($rs->num_rows() > 0) {

            foreach($rs->result_array() as $row) {
                
                $data[] = $row;

            }

        }
        return $data;
    }

    public function authUser()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');


        // raw sql query style
        // $sql = "SELECT * 
        //         FROM user 
        //         WHERE 
        //         username = '$username'
        //         AND password = MD5('$password')";

        // $rs = $this->db->query($sql);


        // active record pattern sql
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $rs = $this->db->get('user');

        if($rs->num_rows() > 0) {

            return "sah";

        } else {

            return "xsah";
        }

    }
}