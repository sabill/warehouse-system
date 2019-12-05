<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangin_model extends CI_model 
{
    private $_table = "receiving";

    public $nomorPO;
    public $dataPemasok;
    public $dataMaterial;

    public function rules()
    {
        return [
            ['field' => 'item',
            'label' => 'Item',
            'rules' => 'required'],

            ['field' => 'kuantitas',
            'label' => 'Kuantitas ',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'Lokasi',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["operator_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        //$this->operator_id = uniqid();
        $this->item = $post["item"];
        $this->kuantitas = $post["kuantitas"];
        $this->lokasi = $post["lokasi"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->operator_id = $post["id"];
        $this->dataMaterial = $post["dataMaterial"];
        $this->tanggalRequest = $post["tanggalRequest"];
        $this->db->update($this->_table, $this, array('operator_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("operator_id" => $id));
    }

    public function add($dataPermintaan)
    {
        $this->db->insert('requestProduction', $dataPermintaan);
    }

}