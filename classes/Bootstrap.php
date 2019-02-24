<?php
	/**
	 * Routing class Bootstrap
	 */
	class Bootstrap
	{
	    /**
	     * Get request array
	     */
	    private $controller;
	    private $action;
	    private $request;
	    public function __construct($request)
	    {
	    	$this->request = $request;
	        if ($this->request['controller'] == '') {
	        	$this->controller = 'home';
	        }else{
	        	$this->controller = $this->request['controller'];
	        }
	        if ($this->request['action'] == '') {
	        	$this->action = 'index';
	        }else{
	        	$this->action = $this->request['action'];
	        }
	        // echo $this->controller;
	        // echo $this->action;
	    }

	    public function createController()
	    {
	    	// check if class exists
	    	if (class_exists($this->controller)) {
	    		$parents = class_parents($this->controller);
	    		// echo '<pre>';
	    		// print_r($parents);
	    		// check if class is extended
	    		if (in_array('Controller', $parents)) {
	    			if (method_exists($this->controller, $this->action)) {
	    				return new $this->controller($this->action, $this->request);
	    			}else{
	    				// Method does not exists
		    			echo '<h1>Method doesnot exists.</h1>';
		    			return;
	    			}
	    		}else{
	    			// Base controller not found
		    		echo '<h1>Base controller does not exists.</h1>';
		    		return;
	    		}
	    	}else{
	    		// Controller class does not exists.
	    		echo '<h1>Controller class does not exists.</h1>';
	    		return;
	    	}
	    }
	}