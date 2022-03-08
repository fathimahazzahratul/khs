<?php

class m_aksi_pagu_kontrak extends CI_Model
{


    public function edit($table)
    {
        return $this->db->get_where($table);
    }

    public function update_data($data, $table)
    {
        $this->db->update($table, $data);
    }

    /* dari insert_pembayaran m_anggaran */
    public function tambah_aksi_kontrak($data)
    {
        $this->db->insert('tb_pagu_kontrak', $data);
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
