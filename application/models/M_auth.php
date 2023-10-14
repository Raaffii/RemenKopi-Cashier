<?php
class M_auth extends CI_Model
{
    public function login($username)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->select('*');
        return $this->db->get_where()->row_array();
    }
}
