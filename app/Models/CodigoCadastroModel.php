<?php

namespace App\Models;
use CodeIgniter\Model;

class CodigoCadastroModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'codigo_cadastro';
    protected $primaryKey       = 'codigo';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'codigo',
        'cpf'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

