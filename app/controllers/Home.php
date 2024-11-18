<?php

class Home extends Controller{
    public function index(){
        $data["title"] = "Home";
        $data["name"] = getDummyName();
        $data["email"] = getDummyEmail();
        $data["address"] = getDummyAddress();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer", $data);
    }
}