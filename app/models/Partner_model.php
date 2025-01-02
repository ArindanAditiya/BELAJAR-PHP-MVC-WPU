<?php

class Partner_model {
    private $table = "partner";
    private $db;

    public function __construct() {
        $this->db = new Database;
    } 

    public function getAllPartner() {
        $this->db->query("SELECT * FROM `$this->table`");
        return $this->db->resultSet();
    }

    public function getPartnerById($id){
        $this->db->query("SELECT * FROM `$this->table` WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function insertNewPartner($data){
        // Jika data kosong, langsung keluar
        if( !isset($data) ){
            return false;
        }
    
        // Gabungkan nama depan dan belakang
        $name = $data["firstName"] . " " . $data["lastName"]; // Tambahkan spasi agar nama terlihat benar
        $email = $data["email"];
        $address = $data["address"];
        $developer = $data["devloper"]; // Pastikan nama kolom tabel benar
        $story = $data["story"];
    
        // Persiapkan query
        $query = "INSERT INTO `partner` (`id`, `name`, `email`, `address`, `devloper`, `story`) 
                  VALUES (NULL, :name, :email, :address, :devloper, :story)";
    
        // Bind dan eksekusi query
        $this->db->query($query);
        $this->db->bind("name", $name);
        $this->db->bind("email", $email);
        $this->db->bind("address", $address);
        $this->db->bind("devloper", $developer); // Pastikan bind ini sesuai
        $this->db->bind("story", $story);
        $this->db->execute();
    
        // Kembalikan jumlah baris yang terpengaruh
        return $this->db->rowCount();
    }

    public function deletePartner($id){
        // siapkan query
        $query = "DELETE FROM partner WHERE `partner`.`id` = :id";

        // binding and execude query
        $this->db->query($query);
        $this->db->bind("id", $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    
}

