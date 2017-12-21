<?php //
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    
   public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
           if($page == 'home'||$page == 'register' ) {
      $this->loggedIn();   
    } //else if($page == 'register') {
      //$this->loggedRegisterIn();   
    //}
    else {
      $this->notLoggedIn();

      $this->load->library('session');

      $this->load->model('model_users');
      
      $data['userData'] = $this->model_users->fetchUserData($this->session->userdata('user_id'));            
    }
   
        $this->load->view('pages/'.$page, $data);

       // $this->load->view('templates/header', $data);
        //$this->load->view('templates/footer', $data);
} 
    
  
    

}
