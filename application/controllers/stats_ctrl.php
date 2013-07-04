<?php
/**
 * User: Parker Lawson
 * Date: 7/4/13
 * Time: 1:57 AM
 */
class StatsCtrl extends CI_Controller {

    //construct
    function __construct() {

        //Immediately show the user the stats dashboard
        $this->load->view('blogview');

    }
}