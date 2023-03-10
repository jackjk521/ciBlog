<?php

    class Users extends CI_Controller{
        public function register()
        {
            $data["title"] = "Sign Up";
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Userame', 'required|callback_check_username_exists'); // callback_(custom rule)
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirmed Password', 'matches[password]'); // to match with a certain field

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            }
            else{
                // Encypt password
                $enc_password = md5($this->input->post('password')); // post is the method

                $this->user_model->register($enc_password);

                // Set message 
                $this->session->set_flashdata('user_registered', 'You are now registered and can login');
                redirect('posts');
            }
        }

        // Check if username exists
        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 'That username is taken . Please choose a different one');

            if($this->user_model->check_username_exists($username)){
                return true;
            }
            else{
                return false;
            }
        }

        // Check if username exists
        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'That email is taken . Please choose a different one');

            if($this->user_model->check_email_exists($email)){
                return true;
            }
            else{
                return false;
            }
        }

        public function login()
        {
            $data["title"] = "Sign In";
            $this->form_validation->set_rules('username', 'Username', 'required'); // callback_(custom rule)
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            }
            else{
                // Get username
                $username = $this->input->post('username');
                // var_dump($username);
                // Get and ecrpyt password
                $password = md5($this->input->post('password'));
                // Login
                $user_id = $this->user_model->login($username, $password);

                if($user_id){
                    // Create Session
                    // die('success');
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    // Set message 
                    $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                    redirect('posts');
                }
                else{
                    // Set message 
                    $this->session->set_flashdata('login_failed', 'Login is Invalid');
                    redirect('users/login');
                }

                
            }
        }
    
        public function logout()
        {
            // unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

               // Set message 
               $this->session->set_flashdata('user_loggedout', 'You are now logged out');
               redirect('users/login');
        }
    }