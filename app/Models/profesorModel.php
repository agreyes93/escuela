<?php namespace App\Models;

use CodeIgniter\Model;

class profesorModel extends Model {

    protected $table            = 'profesor';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFileds    = ['nombre', 'apellido', 'profesion', 'telefono', 'dui'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    protected $validationRules  = [
        'nombre' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'apellido' => 'required|alpha_space|min_lenght[3]|max_lenght[75]',
        'profesion' => 'required|alpha_space|min_lenght[3]|max_lenght[3]',
        'telefono' => 'required|alpha_space|min_lenght[8]|max_length[9]',
        'dui' => 'required|alpha_space|min_lenght[9]|max_lenght[10]'
     ];

        protected $skipValidation   = false;
}