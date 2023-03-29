<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Blogs extends CI_Controller
{


    /**

     * Get All Data from this method.

     *

     * @return Response

     */

    public function __construct()
    {

        parent::__construct();

        $this->load->database();
    }


    /**

     * Create from display on this method.

     *

     * @return Response

     */

    public function index()

    {

        $this->load->view('blogs');

    }


    /**

     * Create from display on this method.

     *

     * @return Response

     */

    public function get_blogs()

    {
        $draw = intval($this->input->get("draw"));

        $start = intval($this->input->get("start"));

        $length = intval($this->input->get("length"));
        $user_id =  $this->session->userdata['UserLoginSession']['user_id'];
        //echo "hii".$user_id;die();
        $this->db->where('user_id', $user_id);
        $query = $this->db->get("posts");

        $data = [];


        foreach ($query->result() as $r) {

            $data[] = array(

                $r->post_id,
                $r->post_title,
                $r->post

            );
        }


        $result = array(

            "draw" => $draw,

            "recordsTotal" => $query->num_rows(),

            "recordsFiltered" => $query->num_rows(),

            "data" => $data

        );

        echo json_encode($result);

        exit();
    }
}
