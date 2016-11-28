<?php

class Certificados_model extends CI_Model {

    /**
     * author: Leandro Silveira 
     * email: leandro.jsilveira@fatec.sp.gov.br
     */
    function __construct() {
        parent::__construct();
    }

    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array') {

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage, $start);
        if ($where) {
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result = !$one ? $query->result() : $query->row();
        return $result;
    }

    function getById($id) {
        $this->db->select('certificados.*, aluno.*, curso.*');
        $this->db->from('certificados');
        $this->db->join('aluno', 'aluno.id_aluno = certificados.id_aluno');
        $this->db->join('usuarios', 'curso.id_curso = certificados.id_curso');
        $this->db->where('certificados.id_certificado', $id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    function pesquisar($termo) {
        $data = array();
        // buscando certificados por código
        $this->db->like('codigo', $termo);
        $this->db->limit(1);
        $data['certificados'] = $this->db->get('certificados')->result();
        return $data;
    }

    function add($table, $data) {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function edit($table, $data, $fieldID, $ID) {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        }

        return FALSE;
    }

    function delete($table, $fieldID, $ID) {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function count($table) {
        return $this->db->count_all($table);
    }

}
