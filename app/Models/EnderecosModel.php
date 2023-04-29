<?php

namespace App\Models;
use CodeIgniter\Model;

class EnderecosModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'enderecos';
    protected $primaryKey       = 'endereco_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'endereco_id',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'uf',
        'user_cpf'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

