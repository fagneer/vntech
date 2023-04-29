<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'cpf';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'cpf',
        'nome',
        'sobrenome',
        'senha',
        'status',
        'cnpj_cliente'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

