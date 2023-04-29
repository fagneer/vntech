<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuHomeModel;
use App\Models\SubMenuHomeModel;
use App\Models\TimelineModel;
use App\Models\ConceitosModel;
use App\Models\CarouselHomeModel;
use App\Libraries\Crypt;

class Home extends BaseController
{
    private $menuHomeModel;
    private $subMenuHomeModel;
    private $timelineModel;
    private $conceitosModel;
    private $carouselHomeModel;

    public function __construct(){
        helper(['url', 'form']);
        $this->menuHomeModel = new MenuHomeModel();
        $this->subMenuHomeModel = new SubMenuHomeModel();
        $this->timelineModel = new TimelineModel();
        $this->conceitosModel = new ConceitosModel();
        $this->carouselHomeModel = new CarouselHomeModel();
    }

    public function index(){
        return view('home', [
            'menu' => $this->menuHomeModel->findAll(),
            'submenu' => $this->subMenuHomeModel->findAll(),
            'carousel' => $this->carouselHomeModel->findAll(),
            'page' => 'home'
        ]);
    }

    function solucoes(){
        return view('home_solucoes', [
            'menu' => $this->menuHomeModel->findAll(),
            'submenu' => $this->subMenuHomeModel->findAll(),
            'page' => 'solucoes'
        ]);
    }

    public function empresa(){
        return view('home_empresa', [
            'menu' => $this->menuHomeModel->findAll(),
            'submenu' => $this->subMenuHomeModel->findAll(),
            'timeline' => $this->timelineModel->findAll(),
            'conceitos' => $this->conceitosModel->findAll(),
            'page' => 'empresa'
        ]);
    }

    public function contatos(){
        return view('home_contatos', [
            'menu' => $this->menuHomeModel->findAll(),
            'submenu' => $this->subMenuHomeModel->findAll(),
            'page' => 'contatos'
        ]);
    }

    public function login(){
        // Validação das credenciais de acesso:
        $validation = $this->validate([
            'cpf' => [
                'rules' => 'required|is_not_unique[user.cpf]',
                'errors' => [
                    'required' => 'Informe seu CPF<br>',
                    'is_not_unique' => 'Cliente não cadastrado<br>'
                ]
            ],

            'senha' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Senha obrigatória',
                    'min_length' => 'Senha inválida'
                ]
            ]
        ]);

        if(!$validation){
            return view('login', [
                'validation' => $this->validator,
                'menu' => $this->menuHomeModel->findAll(),
                'submenu' => $this->subMenuHomeModel->findAll()                
        ]);
            
        }else{
            //Checar usuarios
            $cpf = $this->request->getPost('cpf');
            $senha = $this->request->getPost('senha');

            $userModel = new \App\Models\UserModel();
            $user_info = $userModel->where('cpf', $cpf)->first();
        
            $check_senha = Crypt::check($senha, $user_info['senha']);
            $status = $user_info['status'];

            if(!$check_senha){
                session()->setFlashdata('falha', 'Senha incorreta');
                return redirect()->to('/login')->withInput();
            }else{
                session()->setFlashdata('sucesso', 'Logado com sucesso');
                $sessao = \Config\Services::session();
                $sessao->set('isLoggedIn', true);
                $cpf = $user_info['cpf'];
                session()->set('userLogado', $cpf);
                session()->set('status', $status);
                return redirect()->to('/portal');
            }
        }
    }

    public function cadastro(){
        // Validação das credenciais de acesso:
        $validation = $this->validate([
            'nome' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Informe seu Nome<br>',
                    'min_length' => 'Nome Inválido<br>'
                ]
            ],

            'sobrenome' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Informe seu Sobrenome<br>',
                    'min_length' => 'Sobrnome Inválido<br>'
                ]
            ],

            'cpf' => [
                'rules' => 'required|is_unique[user.cpf]',
                'errors' => [
                    'required' => 'Informe seu CPF<br>',
                    'is_unique' => 'CPF já cadastrado<br>'
                ]
            ],

            'codigo' => [
                'rules' => 'required|is_not_unique[codigo_cadastro.codigo]',
                'errors' => [
                    'required' => 'Informe o seu Código de Cadastro<br>',
                    'is_not_unique' => 'Código de Cadastro inválido<br>'
                ]
            ],

            'senha' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Senha obrigatória<br>',
                    'min_length' => 'Senha deve conter pelo menos 6 dígitos<br>'
                ]
            ],

            'confirmasenha' => [
                'rules' => 'required|min_length[3]|matches[senha]',
                'errors' => [
                    'required' => 'Senha obrigatória<br>',
                    'min_length' => 'Confirmação de Senha deve conter pelo menos 6 dígitos<br>',
                    'matches' => 'Senha e Confirmação de Senha não coincidem<br>'
                ]
            ]
        ]);
        
        if(!$validation){
            return view('cadastro', [
                'validation' => $this->validator,
                'menu' => $this->menuHomeModel->findAll(),
                'submenu' => $this->subMenuHomeModel->findAll()                
        ]);
            
        }else{
            //Checar dados
            $nome = $this->request->getPost('nome');
            $sobrenome = $this->request->getPost('sobrenome');
            $cpf = $this->request->getPost('cpf');
            $codigo = $this->request->getPost('codigo');
            $senha = $this->request->getPost('senha');
            $confirmasenha = $this->request->getPost('confirmasenha');

            $codigo = [
                'cpf' => $cpf,
                'codigo' => $codigo
            ];

            

            $codigoCadastroModel = new \App\Models\CodigoCadastroModel();
            $check_codigo = $codigoCadastroModel->where($codigo)->first();

            $empresasModel = new \App\Models\EmpresasModel();
            $empresas = $empresasModel->where('cnpj', $check_codigo['cnpj_cliente'])->first();



            if(!$check_codigo){
                session()->setFlashdata('falha', 'Código de Cadastro não pertence ao CPF digitado ou já foi utilizado');
                return redirect()->to('/cadastro')->withInput();
            }else{
                

                $cadastro = [
                    'nome' => $nome,
                    'sobrenome' => $sobrenome,
                    'cpf' => $cpf,
                    'senha' => Crypt::make($senha),
                    'status' => $check_codigo['status'],
                    'cnpj_cliente' => $check_codigo['cnpj_cliente']
                    
                ];

                $userModel = new \App\Models\UserModel();
                $query = $userModel->insert($cadastro);

                if(!$query){
                    return redirect()-to('cadastro')->with('falha', 'Registro não enviado');
                }else{
                    $sessao = \Config\Services::session();
                    $sessao->set('isLoggedIn', true);
                    session()->set('userLogado', $cpf);
                    session()->set('status', $check_codigo['status']);
                    return redirect()->to('portal')->with('sucesso', 'Cadastro enviado com sucesso');
                }

                
            }
        }
    }

    
}
