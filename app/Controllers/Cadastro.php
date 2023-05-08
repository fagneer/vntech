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
    
        // Validação das credenciais de acesso:

        if($this->request->getMethod() === "post"){
            $userModel = new App\Models\UserModel;
            $user = $this->request->getPost();

            if($userModel->insert($user)){
                $data['msg'] = 'Cadastro realizado com sucesso.';
            }else{
                $data['msg'] = 'Falha no Cadastro.';
                $data['erros'] = $userModel->errors();
            }
        }

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
        
            $check_senha = Crypt::check($senha, $user_info->senha);
            $status = $user_info->status;

            if(!$check_senha){
                session()->setFlashdata('falha', 'Senha incorreta');
                return redirect()->to('/login')->withInput();
            }else{
                session()->setFlashdata('sucesso', 'Logado com sucesso');
                $sessao = \Config\Services::session();
                $sessao->set('isLoggedIn', true);
                $cpf = $user_info->cpf;
                session()->set('userLogado', $cpf);
                session()->set('status', $status);
                return redirect()->to('/portal');
            }
        }
    }


    
}
