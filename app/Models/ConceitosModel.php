<?php

namespace App\Models;
use CodeIgniter\Model;

class ConceitosModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'conceitos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'missao',
        'visao',
        'valores'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

