<?php

/**
 * Created by PhpStorm.
 * User: rOKz
 * Date: 11/22/2018
 * Time: 10:36 AM
 */
class Home extends CI_Controller
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

        $this->load->view('frontend_stylesheet');
        $this->load->view('frontendheader');
        $this->load->view('index', $events);
    }

    public function reservation(){
        $id = $this->uri->segment(3);
        if ($id == NULL) {
            redirect('home/error404');
        } else {
            $query = $this->eventick->getspecificevent($id);
            if ($query == NULL) {
                redirect('home/error404');
            } else {
                $data['event'] = $query;
                $this->load->view('frontend_stylesheet');
                $this->load->view('frontendheader');
                $this->load->view('reservation', $data);
            }
        }
    }

    public function reservationsuccess(){


            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $email = $this->input->post('email');
            $rtype = $this->input->post('rtype');
            $event_id = $this->input->post('event_id');

                  if(($fname == NULL) || ($lname == null) || ($email == null) || ($rtype== null) || ($event_id == null)){
                redirect("home");
            }
            else {
                $data = array(
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
                    'event_id' => $event_id,
                    'rtype' => $rtype

                );
                $query = $this->eventick->addreservation($data);

                if ($query == true) { ?>

                    <script type="text/javascript">
                        alert("Ticket Created");
                        window.location = "";
                    </script>
                <?php   } else { ?>

                    <script type="text/javascript">
                        alert("Unseccessful, Try Again");
                        window.location = "";
                    </script>
                <?php            }
            }



    }
    public function error404(){
        $this->load->view('stylesheet');
        $this->load->view('page_404');
    }



}
