<?php namespace App\Models;
    use CodeIgniter\Model;

    class Libros extends Model {
        protected $table = 'libros';
   
         protected $allowedFields = ['Autor','Titulo','Año publicación','Disponibilidad','No copias	'];
      
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('libros');
    }
      
    public function insert_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
    }
