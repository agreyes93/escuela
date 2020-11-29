<?php namespace App\Models;

use CodeIgniter\Model;

class GradosModel extends Model {

    protected $table            = 'grado';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFileds    = ['grado', 'seccion', 'profesor_id'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    protected $validationRules  = [
        'grado' => 'required|alpha_space|max_lenght[60]',
        'seccion' => 'required|alpha_space|max_lenght[2]',
        'profesor_id' => 'required|integer|is_valid_profesor'
     ];

        protected $skipValidation   = false;
}