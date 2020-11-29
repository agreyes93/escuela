<?php namespace App\Models;

use CodeIgniter\Model;

class estudianteModel extends Model {

    protected $table            = 'estudiante';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFileds    = ['nombre', 'apellido', 'dui', 'genero', 'carnet'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    protected $validationRules  = [
        'nombre' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'apellido' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'dui' => 'required|alpha_numeric_space|min_lenght[8]|max_lenght[10]',
        'genero' => 'required|alpha_space|max_lenght[1]',
        'carnet' => 'required|alpha_space|max_length[9]'
     ];

        protected $skipValidation   = false;
}