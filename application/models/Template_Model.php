<?php
class Template_Model extends CI_Model {


    public function entrenadores()
    {
        $query = $this->db->get('entrenadores');
        return $query->result_array();
    }

    public function cursos()
    {
        $query = $this->db->get('cursos');
        return $query->result_array();
    }

     public function home()
    {
        $query = $this->db->get('home');
        return $query->result_array();
    }

    public function cuadros()
    {
        $query = $this->db->get('cuadros');
        return $query->result_array();
    }
     
     public function aprende()
    {
        $query = $this->db->get('aprende');
        return $query->result_array();
    }

      public function mapas()
    {
        $query = $this->db->get('mapas');
        return $query->result_array();
    }

      public function pie()
    {
        $query = $this->db->get('pie');
        return $query->result_array();
    }

     public function testimonial()
    {
        $query = $this->db->get('testimonial');
        return $query->result_array();
    }
} 