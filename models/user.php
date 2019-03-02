<?php
/**
 * User Model to show data from db on userpage
 */
class UserModel extends Model
{
    /**
     * summary
     */
    public function register()
    {	
    	//die('submitted');
        // sanitize input
    	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    	if ($post['submit']) {
    		// a bit validation :)
    		if (($post['name'] || $post['email'] || $post['password']) == '') {
    			Messages::setMsg('Please Fill in the all fields', 'error');
    			return;
    		}
    		$password = md5($post['password']);
    		// Insert into MySQL DB
    		$this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
    		$this->bind(':name', $post['name']);
    		$this->bind(':email', $post['email']);
    		$this->bind(':password', $password);

    		$this->execute();

    		// check successfull insertion
    		if ($this->lastInsertId()) {
    			header('Location: '.ROOT_URL.'users/login');
    		}
    	}
    	return;    
    }
    public function login()
    {
    	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    	if ($post['submit']) {
    		$password = md5($post['password']);
    		// compare login
    		$this->query('SELECT * FROM users WHERE email= :email AND password= :password');
    		$this->bind(':email', $post['email']);
    		$this->bind(':password', $password);

    		$row = $this->singleResult();
    		// check successfull fetching
  			if($row){
    			$_SESSION['is_user_loggedin'] = true;
    			$_SESSION['user_data'] = array(
    				"id"	=> $row['id'],
    				"name"	=> $row['name'],
    				"email"	=> $row['email']
    			);
    			header('Location: '.ROOT_URL.'shares');
    		}else {
    			Messages::setMsg('Invalid email or password', 'error');
    		}
    	}
    	return;
    }
}
