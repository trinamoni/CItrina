<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author user
 */
class Register extends CI_Controller {
    public function index()
    {
        $this->load->view('register');
        
    }
    
    public function save(){
        
        $this->load->view('save');
    }
}

?>
