<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Api extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
     
    public function index(){ 
        echo "<b>API Zetcil Coder</b>";
    } 
 
    public function rest(){ 
		echo "<h3>POST METHOD</h3>";
		echo "<form method='POST' action='http://localhost/coder/api/post' >";
		echo "<button name='postman' type='submit' value='1'>POST</button>";
		echo "</form>";

		echo "<h3>GET METHOD</h3>";
		echo "<form method='GET' action='http://localhost/coder/api/get' >";
		echo "<button name='postman' type='submit' value='2'>GET</button>";
		echo "</form>";

    } 

    public function get(){ 
        echo "GET DATA: ".$this->input->get('postman');
    } 

    public function post(){ 
        echo "POST DATA: ".$this->input->post('postman');
    } 

 	// LOGIN *****************************************************************************************************************************//

	public function register(){ 
 		$first_name = $this->input->post('first_name');
 		$last_name = $this->input->post('last_name');
 		$email = $this->input->post('email');
 		$password = $this->input->post('password');
 		$gender = $this->input->post('gender');
 		$school = $this->input->post('school');

		$userData = array( 
            'first_name' => strip_tags($first_name), 
            'last_name' => strip_tags($last_name), 
            'email' => strip_tags($email), 
            'password' => strip_tags($password), 
            'gender' => strip_tags($gender), 
            'school' => strip_tags($school) 
        ); 
 
		$this->db->where('email',$email);
		$this->db->from('users');
		$query= $this->db->get();
		
		if($query->num_rows() > 0)
		{
			echo "USERS_EXISTS";
		}
		else
		{
			$insert = $this->user->insert($userData); 
			if($insert){ 
				echo "CREATE_USER_SUCCESS";
			}else{ 
				echo "CREATE_USER_FAILED";
			} 
		}
    } 
	
    public function login(){ 
		$email = $this->input->post('email');
		$password = $this->input->post('password');
	
		$this->db->where('email',$email);
		$this->db->from('users');
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row)
			{
				if ($row->email == $email && $row->password == $password)
				{
					echo "LOGIN_SUCCESS";
				} 
				else 
				{
					echo "LOGIN_FAILED";
				}
			}
		} else 
		{
			echo "LOGIN_FAILED";
		}
    } 
	
 	// LEADERBOARD *****************************************************************************************************************************//

	public function save_leaderboard(){ 
	
		$name = $this->input->post('name');
		$score = $this->input->post('score');

		$this->db->where('name',$name);
		$this->db->from('leaderboard');
		$query= $this->db->get();
		
		if($query->num_rows() > 0)
		{
			$update = $this->db->query("UPDATE leaderboard SET score = $score WHERE name = \"$name\" ");
			echo "UPDATE_LEADERBOARD_SUCCESS";
		}
		else
		{
			$update = $this->db->query("INSERT INTO leaderboard (name, score) VALUES (\"$name\",$score) ");
			echo "SAVE_LEADERBOARD_SUCCESS";
		}
    } 	
	
	public function load_leaderboard(){ 
 
		//$this->db->from('leaderboard');
		//$query= $this->db->get();
		$query = $this->db->query("SELECT * FROM leaderboard ORDER BY score DESC");
		
		if($query->num_rows() > 0){
			echo json_encode( $query->result() );
		} 		
    } 		
	
 	// LEADERBOARD *****************************************************************************************************************************//

	public function save_progress(){ 
	
		$tablename = $this->input->post('tablename');
		$activity = $this->input->post('activity');
		$school = $this->input->post('school');
		$username = $this->input->post('username');
		$scene = $this->input->post('scene');
		$problem = $this->input->post('problem');
		$solution = $this->input->post('solution');
		$answer = $this->input->post('answer');
		$duration = $this->input->post('duration');
		$score = $this->input->post('score');
		$notes = $this->input->post('notes');

		$this->db->where('username','always_insert');
		$this->db->from('progress');
		$query= $this->db->get();
		
		$insert_sql = "INSERT INTO $tablename (activity, school, username, scene, problem, solution, answer, duration, score, notes) VALUES ".
		  		      "(\"$activity\",\"$school\",\"$username\",\"$scene\",\"$problem\",\"$solution\",\"$answer\",$duration,$score,\"$notes\" )";
		
		$update_sql = "UPDATE $tablename SET activity = \"$activity\" AND school = \"$school\" AND username = \"$username\" AND ".
									   "scene = \"$scene\" AND problem = \"$problem\" AND solution = \"$solution\" AND answer = \"$answer\" AND".
									   "duration = $duration AND score = $score AND notes = \"$notes\" ".
									   "WHERE username = \"$username\" ";
		
		//echo $insert_sql;
		//echo $update_sql;
		
		if($query->num_rows() > 0)
		{
			$update = $this->db->query($update_sql);
			echo "UPDATE_PROGRESS_SUCCESS";
		}
		else
		{
			$update = $this->db->query($insert_sql);
			echo "SAVE_PROGRESS_SUCCESS";
		}
    } 
	
	public function load_progress(){ 
 
		//$this->db->from('leaderboard');
		//$query= $this->db->get();
		$query = $this->db->query("SELECT * FROM progress");
		
		if($query->num_rows() > 0){
			echo json_encode( $query->result() );
		} 		
    } 		
 
	//*****************************************************************************************************************************//
	
	public function avatar(){ 
	
		$token = $this->input->post('token');
		$query = $this->db->query("SELECT glblink FROM avatars WHERE token = '".$token."' ");
		$result = $query->result();

		if ($result) {
			// Jika query mengembalikan hasil, tampilkan nilai kolom glblink
			echo $result[0]->glblink;
		} else {
			// Jika query tidak mengembalikan hasil, tampilkan pesan error
			echo "Error: Query returned no result.";
		}
    } 	     
}