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

    // Insert Partner
    public function insert(){
        if( $this->model("Partner_model")->insertNewPartner($_POST) > 0){
            Flasher::setFlash("berhasil", "ditambahkan", "success");
            header("Location:" . BASEURL ."/partner"); 
            exit;
        } else {
            Flasher::setFlash("gagal", "ditambahkan", "danger");
            header("Location:" . BASEURL ."/partner"); 
            exit;
        }
    }

    // Delete Paertner
    public function delete($id){
        if( $this->model("Partner_model")->deletePartner($id) > 0){
            Flasher::setFlash("berhasil", "dihapus", "success");
            header("Location:" . BASEURL ."/partner");  
            exit;
        } else {
            Flasher::setFlash("gagal", "dihapus", "danger");
            header("Location:" . BASEURL ."/partner"); 
            exit;
        }
    }
}