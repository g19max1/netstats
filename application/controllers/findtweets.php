<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FindTweets
 *
 * @author Parker Lawson
 */
class FindTweets extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // set maximum execution time to infinity
        set_time_limit(0);
    }

    // stream tweets from twitter livestream
    public function stream() {
        $this->twitterlib->stream();
    }

    // search for tweets by hashtag
    public function search($cachetime = null) {
        $this->twitterlib->search($cachetime);
    }

    // search for tweets by hashtag using api v1.1
    public function searchone($cachetime = null) {
        $this->twitterlib->searchone($cachetime);
    }

}

?>
