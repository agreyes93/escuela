<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model {

    protected $table            = 'estudiante';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFileds    = ['nombre', 'apellido', 'dui', 'genero', 'carnet', 'grado_id'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    protected $validationRules  = [
        'nombre' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'apellido' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'dui' => 'required|alpha_numeric|min_lenght[10]|max_lenght[10]',
        'genero' => 'required|alpha|max_lenght[1]',
        'carnet' => 'required|regex_match[/^([a-z0-9]+$/]|max_length[9]',
        'grado_id' => 'required|integer|is_valid_grado'
     ];

        protected $skipValidation   = false;
}