<?php

class m_crud_skkio extends CI_Model{
    public function tampil_data()
    {
        $this->db->select('a.SKKI_JENIS,
                        a.SKKI_NO,
                        a.AREA_KODE,
                        a.SKKI_NILAI,
                        a.SKKI_TERPAKAI,
                        a.SKKI_TANGGAL,
                        (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area, ');
        $this->db->from('tb_skko_i a');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function getdata(){
        $query=$this->db->query("SELECT * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
    }

    public function getjenis(){
        $query=$this->db->query("SELECT * FROM tb_skko_i ORDER BY SKKI_JENIS ASC");
        return $query->result();
    }

    public function input_data($data, $table)
    {
         $this->db->insert($table, $data);
    }
    
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
    public function detail_data($SKKI_NO = NULL){
        $query = $this->db->get_where('tb_skko_i', array('SKKI_NO' => $SKKI_NO))->row();
        return $query;
    }
}