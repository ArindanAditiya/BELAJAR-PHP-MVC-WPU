<?php

class About extends controller{
    public function index($nama , $kerjaan){
        $data["nama"] = $nama;
        $data["kerjaan"] = $kerjaan;
        $data["title"] = "About";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);    
        $this->view("templates/footer");
    }
    public function page(){
        $this->view("about/page"); 
    }
}
