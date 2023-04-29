<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'contatos';
    protected $primaryKey       = 'contato_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'contato_id',
        'tipo',
        'celular',
        'email',
        'user_cpf'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

