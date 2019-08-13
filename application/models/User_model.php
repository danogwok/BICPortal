<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed.');
}

class User_model extends CI_Model
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Register a user -> User type 3.
     */
    public function user_register($data)
    {
        $hashed_password = password_hash($data['password'], 1);
        $data = array(
            'Title' => $data['Title'],
            'FirstName' => $data['FirstName'],
            'Surname' => $data['Surname'],
            'Email' => $data['Email'],
            'Usertype' => '3',
            'Password' => $hashed_password,
        );
        $this->db->insert('user', $data);
        // if ($this->db->affected_rows() > 0) {
        //     // Code here after successful insert
        //     return true; // to the controller
		// }
		$insert_id = $this->db->insert_id();

        return  $insert_id;	//Return user id
    }

    /**
     * Log in a user.
     */
    public function user_login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('usertype', ' user.Usertype = usertype.type_id');
        $where = "user.Email = '$email'";
        $this->db->where($where);
        $this->db->where('user.isDeleted', 1);	//1 stands for No and 0 for Yes

        //Store all tha data query
        $query = $this->db->get();
        $user = $query->row();

        //Check if user exists
        if (empty($user)) {
            return array();	//Return empty array
        } else {
            if (password_verify($password, $user->Password)) {
                return $user;	//Correct password
            } else {
                return array();	// Return empty array xoz wrong password
            }
        }
	}

	/**
	 * Get ID of last registered User
	 */
	public function get_ID_last_reg($table, $column){
		$this->db->select($column);
		$this->db->from($table);
		$this->db->limit(1);
		$this->db->order_by($column,"DESC");
		$query = $this->db->get();
		$result = $query->result();

	}
	
	/**
	 * Generic function for inserting data
	 */
	public function generic_register($data, $table)
    {
        $this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
        return  $insert_id;	//Return row id
    }

    public function update_competion_exposure($exposure)
    {
        $data = [
            'CompetitionExposure' => $exposure
        ];
       // $this->db->set('CompetitionExposure',$exposure, FALSE);
        $this->db->where('UserID', $this->session->userId);
        $this->db->update('contactperson',$data); // gives UPDATE mytable SET field = field+1 WHERE id = 2*/
    }
}
