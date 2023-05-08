<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'cpf';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
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

    //Validações
    protected $validationRules = [
        'nome' => [
            'rules' => 'required|min_length[3]|alfa',
            'errors' => [
                'required' => 'Informe seu Nome<br>',
                'min_length' => 'Nome deve conter pelo menos 3 caracteres<br>',
                'alfa' => 'São permitidos somente letras no nome'
            ]
        ],

        'sobrenome' => [
            'rules' => 'required|min_length[3]|alfa',
            'errors' => [
                'required' => 'Informe seu Sobrenome<br>',
                'min_length' => 'Sobrnome deve conter pelo menos 3 caracteres<br>',
                'alfa' => 'São permitidos somente letras no sobrenome'
            ]
        ],

        'cadastro_cpf' => [
            'rules' => 'required|is_unique[user.cpf]|numeric|min_length[11]|max_length[11]',
            'errors' => [
                'required' => 'Informe seu CPF<br>',
                'is_unique' => 'CPF já cadastrado<br>',
                'numeric' => 'CPF deve conter apenas números',
                'min_length[11]' => 'CPF inválido',
                'max_length[11]' => 'CPF inválido'
            ]
        ],

        'login_cpf' => [
            'rules' => 'required|is_not_unique[user.cpf]|numeric|min_length[11]|max_length[11]',
            'errors' => [
                'required' => 'Informe seu CPF<br>',
                'is_not_unique' => 'CPF não cadastrado<br>',
                'numeric' => 'CPF deve conter apenas números',
                'min_length[11]' => 'CPF inválido',
                'max_length[11]' => 'CPF inválido'
            ]
        ],

        'senha' => [
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Senha obrigatória<br>',
                'min_length' => 'Senha deve conter pelo menos 8 dígitos<br>'
            ]
        ],

        'confirmasenha' => [
            'rules' => 'required|matches[senha]',
            'errors' => [
                'required' => 'Campo obrigatório<br>',
                'matches' => 'Senha e Confirmação de Senha não coincidem<br>'
            ]
        ]
    ];

    //Dados
    protected $useTimestemps    = true;
    protected $dateFormate      = 'datetime';
    protected $createdFild      = 'created_at';
    protected $updatedFild      = 'updated_at';
    protected $deletedFild      = 'deleted_at';


}

