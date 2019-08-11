<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // "global" items
    public $data;

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('business_model');
        $this->data = array();
    }

    /**
     * Index function, loads first.
     */
    public function index()
    {
        $this->isLoggedIn();
    }

    /**
     * Function to check if user is logged in.
     */
    public function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != true) {
            $this->load->view('index');
        } else {
            redirect('/dashboard');
        }
    }

    /**
     * Log in the user.
     */
    public function login()
    {
        //Get details from post
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //Call login function
        if (!empty($email)) {
            if (!empty($password)) {
                $result = $this->user_model->user_login($email, $password);
                if (!empty($result)) {
                    //Means, successful login
                    //$sessionData = $this->session->userdata;
                    //Handle the session data
                    // $this->session->set_userdata($sessionData);
                    redirect('dashboard');	//redirect to dashboard
                } else {
                    //Failed Login
                    //redirect("index");	//call index
                    $this->load->view('index');
                }
            }
            $this->load->view('index');
        }
        $this->load->view('index');
    }

    /**
     * Log out the user.
     */
    public function logout()
    {
        $this->session->unset_userdata('isLoggedIn');
        $this->session->sess_destroy();
        $this->load->view('index');	//Load index page
    }

    /**
     * Load the register page.
     */
    public function load_Register()
    {
        $this->load->view('register');	//Load Register page
    }

    public function register($data)
    {
        //Register User into database using model
        $result = $this->user_model->user_register($data);
        if ($result === true) {
            redirect('index');	//redirect to index for login
        } else {
            redirect('/', 'refresh');	//refresh page
        }
    }

    /**
     * Initial registration of business, with basic details and user details.
     */
    public function start_business_registration()
    {
        //Get User data from the tables
        $Email = $this->input->get_post('email');
        $Title = $this->input->get_post('title');
        $FirstName = $this->input->get_post('firstname');
        $Surname = $this->input->get_post('surname');

        //Create User Array Object data
        $user_data = array(
             'Title' => $Title,
             'FirstName' => $FirstName,
             'Surname' => $Surname,
             'Email' => $Email,
             //'Password' => $Password,
         );

        //Person details from post
        $Gender = $this->input->get_post('gender');
        $Dietary_Requirements = $this->input->get_post('diet');
        $Disability_Requirements = $this->input->get_post('disability');
        $Closest_Transport = $this->input->get_post('transport');
        $cellphone = $this->input->get_post('cellphone');
        $position = $this->input->get_post('position');
        //Data for contactperson
        $contact_data = array(
            'Cell' => $cellphone,
            // "CompetitionExposure" =>	i DONT KNOW WHERE YOU GET FROM
            'Position' => $position,
            'Gender' => $Gender,
            'Diet' => $Dietary_Requirements,
            'Disability' => $Disability_Requirements,
            'ClosestTransport' => $Closest_Transport,
        );

        //Info
        $password = $this->input->get_post('password');

        //Business Info
        $TradeName = $this->input->get_post('tradename');
        $RegisteredName = $this->input->get_post('registeredname');
        $RegistrationDate = $this->input->get_post('regdate');
        $RegistrationNumber = $this->input->get_post('regnum');
        $Sector = $this->input->get_post('sector');
        $Province = $this->input->get_post('province');
        $Town = $this->input->get_post('town');

        $business_data = array(
            'TradeName' => $TradeName,
            'RegisteredName' => $RegisteredName,
            'RegistrationDate' => $RegistrationDate,
            'RegistrationNumber' => $RegistrationNumber,
            'Sector' => $Sector,
            'Province' => $Province,
            'Town' => $Town,
        );

        //Insert Business
		$this->business_model->initial_business_register($business_data);
		
		//get business ID
		$table = "business";
		$column = "business";
		$b_id = $this->user_model->get_ID_last_reg($table, $column);

        //Data for users
        $data = $this->getPersonDetails();
        // $user_data = $data[0];
        // $contact_data = $data[1];
        $user_data['Password'] = $password;

        //Insert User
		$this->user_model->user_register($user_data);
		
		// Get User Id
		$table = "user";
		$column = "UserID";
		$u_id = $this->user_model->get_ID_last_reg($table, $column);

        $contact_data['UserID'] = $u_id;	//Add user ID
        $contact_data['BusinessID'] = $b_id;	//Add Business ID

        //Insert Contact Person with both business and User Ids
        $table = 'contactperson';
		$contact_id = $this->user_model->generic_register($contact_person_data, $table);
		
		echo json_encode("Success");
    }

    /**
     * Get data about the contact person.
     */
    public function getPersonDetails()
    {
        //Get User data from the tables
        $Email = $this->input->post('email');
        $Title = $this->input->post('title');
        $FirstName = $this->input->post('firstname');
        $Surname = $this->input->post('surname');

        //Create User Array Object data
        $user_data = array(
             'Title' => $Title,
             'FirstName' => $FirstName,
             'Surname' => $Surname,
             'Email' => $Email,
             //'Password' => $Password,
         );

        //Person details from post
        $Gender = $this->input->post('gender');
        $Dietary_Requirements = $this->input->post('diet');
        $Disability_Requirements = $this->input->post('disability');
        $Closest_Transport = $this->input->post('transport');
        $cellphone = $this->input->post('cellphone');
        $position = $this->input->post('position');
        //Data for contactperson
        $contact_data = array(
            'Cell' => $cellphone,
            // "CompetitionExposure" =>	i DONT KNOW WHERE YOU GET FROM
            'Position' => $position,
            'Gender' => $Gender,
            'Diet' => $Dietary_Requirements,
            'Disability' => $Disability_Requirements,
            'ClosestTransport' => $Closest_Transport,
        );

        $info = array();
        array_push($info, $user_data);
        array_push($info, $contact_data);
        //var_dump($info);

        //return $info;
        // $this->data['user_data'] = $user_data;
        // $this->data['contact_data'] = $contact_data;
        array_push($this->data, $user_data);
        array_push($this->data, $contact_data);
    }

    public function dashboard()
    {
        $this->load->view('dashboard');
    }
}
