<?php

/**
 * Users|Index controller
 */
class Users extends Controller
{
    /**
     * controls the Userspage view
     */
    protected function register()
    {
    	$viewmodel = new UserModel();
    	$this->returnView($viewmodel->register(), true);
    }
    protected function login()
    {
    	$viewmodel = new UserModel();
    	$this->returnView($viewmodel->login(), true);
    }
    protected function logout()
    {
    	unset($_SESSION['is_user_loggedin']);
    	unset($_SESSION['user_data']);
    	session_destroy();
    	header('Location: '.ROOT_URL);
    }
}