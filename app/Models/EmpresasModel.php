<?php

namespace App\Models;
use CodeIgniter\Model;

class EmpresasModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'empresas';
    protected $primaryKey       = 'cnpj';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'cnpj',
        'razao_social',
        'nome_fantasa',
        'bloqueado'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

