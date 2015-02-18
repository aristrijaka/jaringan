<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class page extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->bahasa = 'indonesia';
        $this->title = 'Home';
        $this->description = '';
        $this->keyword = '';

    }



    public function parse($model, $function) {
        $this->load->model($this->tpl.$model);
        return $this->$model->$function();
    }
    public function konten($uri, $id = '', $eko = 'false') {
        if ($uri == '') {
            $uri = 'home';
        }
        $array = out_row('web_menu', array('initial' => $uri));
        if (count($array) > 0) {
            if ($array->status == 'registered') {
                if (!$this->member->is_login()) {
                    redirect(base_url());
                }
            }
            //exit('asdf');
            $this->web = $array;
            $fn = $array->initial;
            $mdl = $array->model;
            $this->load->model($this->tpl.$mdl);
            $data = $this->$mdl->$fn($id);
            if (isset($this->$mdl->title)) {
                $this->title = $this->$mdl->title;
            }
            return $data;
        }
        return $this->home_konten();
    }
    private function home_konten() {
    }
    function eko($uri) {
        //return 'asdf';
        return $this->konten($uri, 'true');
    }
    function footer() {
        return $this->parser->parse($this->tpl . 'footer.php', array(), true);
    }
    function sidebar() {
        return $this->konten->sidebar();
    }
    function header() {
        return $this->konten->header();
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
