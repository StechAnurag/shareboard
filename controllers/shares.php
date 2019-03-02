<?php

/**
 * Shares|Index controller
 */
class Shares extends Controller
{
    /**
     * controls the sharespage view
     */
    protected function Index()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }
    protected function addshare()
    {   
        if (!isset($_SESSION['is_user_loggedin'])) {
            header('Location: '.ROOT_URL.'shares');
        }
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->addshare(), true);
    }
}