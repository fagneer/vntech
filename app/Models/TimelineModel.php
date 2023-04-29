<?php

namespace App\Models;
use CodeIgniter\Model;

class TimelineModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'timeline';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'titulo',
        'descricao',
        'link',
        'icone',
        'cor',
        'mes',
        'ano'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

