<?php

/**
 * Home|Index controller
 */
class Home extends Controller
{
    /**
     * controls the homepage view
     */
    protected function Index()
    {
        $viewmodel = new HomeModel();
        $this->returnView($viewmodel->Index(), true);
    }
}