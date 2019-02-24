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
}