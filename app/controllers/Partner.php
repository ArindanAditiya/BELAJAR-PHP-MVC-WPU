<?php
class Partner extends controller {
    // beberapa parameter dari bawah ini datanya itu diambil dari parameter url :)

    public function index(){
        $data["title"] = "MyPartner";
        $data["partner"] = $this->model("Partner_model")->getAllPartner();
        $this->view("templates/header", $data);
        $this->view("partner/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id){
        $data["title"] = "detail";
        $data["img"] = $this->image("indan.jpg");
        $data["partner"] = $this->model("Partner_model")->getPartnerById($id);
        $this->view("templates/header", $data);
        $this->view("partner/detail", $data);
        $this->view("templates/footer");
    }

    public function insert(){
        if( $this->model("Partner_model")->insertNewPartner($_POST) > 0){
            header("Location: BASEURL/partner");
        } else {
            header("Location: BASEURL/partner");
        }
    }
}