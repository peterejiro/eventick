<?php

/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 11:12 AM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('eventick');
    }

    public function index()
    {
       $events['events'] = $this->eventick->getevents();

        $username = $this->session->userdata('username');
        if(isset($username)){

            $this->load->view('stylesheet');
            $this->load->view('adminheader');
            $this->load->view('admindashboard', $events);
            $this->load->view('adminfooter');
        }

        else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if (($username == "") || ($password == "")) {
                redirect('admin/login');
            } else {
                $data = array(
                    'username' => $username,
                    'password' => $password,
                );
                $query = $this->eventick->loginadmin($data);
                if ($query == true) {
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('username', $username);

                    $this->load->view('stylesheet');
                    $this->load->view('adminheader');
                    $this->load->view('admindashboard', $events);
                    $this->load->view('adminfooter');
                } else {
                    ?>
                    <script type="text/javascript">
                        alert("Invalid Username or password");
                        window.location = "admin/login";
                    </script>
                    <?php
                }
            }
        }
    }

    public function login()
    {

        $username = $this->session->userdata('username');

        if(isset($username)){
           redirect("admin");
        }
        else {
            $this->load->view('stylesheet');
            $this->load->view('adminlogin');
            $this->load->view('adminfooter');
        }
    }

    public function event()
    {
        $username = $this->session->userdata('username');
        if(isset($username)) {
            $id = $this->uri->segment(3);


            if ($id == NULL) {
                redirect('admin');
            } else {


                $query = $this->eventick->getspecificevent($id);
                $query_registrants = $this->eventick->getregistrants($id);

                if (($query == NULL)&&($query_registrants == NULL) ) {
                    redirect('admin');
                } else {
                    $data['event'] = $query;
                    $data['registrants'] = $query_registrants;
                    $this->load->view('stylesheet');
                    $this->load->view('adminheader');
                    $this->load->view('events-details', $data);
                    $this->load->view('adminfooter');
                }


            }
        }
        else {
            $this->load->view('stylesheet');
            $this->load->view('adminlogin');
        }
    }

    public function updateevent()
    {
        $id = $this->input->post('id');

        if ($id == NULL) {
            redirect('admin');
        } else {
            $name = $this->input->post('name');
            $venue = $this->input->post('venue');
            $time = $this->input->post('time');
            $date = $this->input->post('date');
            $status = $this->input->post('status');
            $organizer = $this->input->post('organizer');
            $payment = $this->input->post('payment');


            $data = array(
                'id' => $id,
                'name' => $name,
                'venue' => $venue,
                'time' => $time,
                'date' => $date,
                'status' => $status,
                'organizer' => $organizer,
                'payment_type' => $payment
            );
            $query = $this->eventick->updateevent($data);
            if ($query == true) { ?>

                <script type="text/javascript">
                    alert("Update Successful");
                    window.location = "";
                </script>
         <?php   } else { ?>

                <script type="text/javascript">
                    alert("Update Unseccessful, Try Again");
                    window.location = "";
                </script>
<?php            }
        }
    }

    public function addevent()
    {
        $username = $this->session->userdata('username');
       if(isset($username)){
            $this->load->view('stylesheet');
            $this->load->view('adminheader');
            $this->load->view('addevent');
            $this->load->view('adminfooter');
        }
        else{
            redirect("admin/login");
        }

    }

    public function addeventsucess(){
        $username = $this->session->userdata('username');
        if(isset($username)) {
            $name = $this->input->post('name');
            $venue = $this->input->post('venue');
            $time = $this->input->post('time');
            $date = $this->input->post('date');
            $status = $this->input->post('status');
            $organizer = $this->input->post('organizer');
            $payment = $this->input->post('payment');

            if(($name == NULL) || ($venue == null) || ($time == null) || ($date == null) || ($status == null) || ($organizer == null) || ($payment == null)){
                redirect("admin");
            }
            else {
                $data = array(
                    'name' => $name,
                    'venue' => $venue,
                    'time' => $time,
                    'date' => $date,
                    'status' => $status,
                    'organizer' => $organizer,
                    'payment_type' => $payment
                );
                $query = $this->eventick->addevent($data);

                if ($query == true) { ?>

                    <script type="text/javascript">
                        alert("New Event Created");
                        window.location = "";
                    </script>
                <?php   } else { ?>

                    <script type="text/javascript">
                        alert("Unseccessful, Try Again");
                        window.location = "";
                    </script>
                <?php            }
            }
        } else{
            redirect("admin");
        }
    }

    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('admin/login/');
    }


}