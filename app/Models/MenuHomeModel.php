<?php

namespace App\Models;
use CodeIgniter\Model;

class MenuHomeModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'menu_home';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'nome',
        'link',
        'ordem',
        'status'
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';
}

