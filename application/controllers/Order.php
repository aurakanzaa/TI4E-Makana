<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order extends MY_Controller {

    public function index() {
        $this->view('content.content_order');
	}
}
