<?php
class Madmin extends CI_Model
{
    function login($input)
    {
        $email = $input['email'];
        $password = $input['password'];
        $password = sha1($password);

        //cek database
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $cekadmin = $this->db->get('admin')->row_array();
        
        //jika tidak kosong maka ada
        if (!empty($cekadmin)) {
            $this->session->set_userdata("id_admin", $cekadmin["id_admin"]);
            $this->session->set_userdata("nama", $cekadmin["nama"]);
            $this->session->set_userdata("email", $cekadmin["email"]);
            return "ada";
        } else {
            return "gak ada";
        }
    }
}