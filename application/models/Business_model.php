<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed.');
}

class Business_model extends CI_Model
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
    public function initial_business_register($data)
    {
        $data = array(
            'TradeName' => $data['TradeName'],
            'RegisteredName' => $data['RegisteredName'],
            'RegistrationDate' => $data['RegistrationDate'],
            'RegistrationNumber' => $data['RegistrationNumber'],
            'Sector' => $data['Sector'],
            // 'IncomeTaxNumber' => $hashed_password,
            // 'VATNumber' => $data['Title'],
            'Province' => $data['Province'],
            'Town' => $data['Town'],
            // 'Municipality' => $data['Email'],
            // 'Objectives' => '3',
            // 'ProductService' => $hashed_password,
            // 'OperationArea' => '3',
            // 'BusinessDays' => $hashed_password,
        );
        $this->db->insert('business', $data);

        $insert_id = $this->db->insert_id();

        return  $insert_id;	//Return business id
    }
}
