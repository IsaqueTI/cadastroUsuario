<?php

namespace App\Controllers;

use App\Models\Quest_cadastro_usuarioModel;

#use App\Models\Quest_cadastro_usuario_Model;

class Cadastro extends BaseController
{
    public function __construct(){
        $this->Cadastro_Model = new Quest_cadastro_usuarioModel();
    }
    public function index()
    {
        $this->load->helper('url');
        return view('cadastro');
    }

    public function cadastroUsuario(){
        //$this->Cadastro_Model->findAll();
        $primaryKey = 'id';
        $arr_retorno ["validacao"] = true;
        $validacao = $this->validate([
            'email' => 'required|valid_email|required|is_unique[quest_cadastro_usuario.email,id,{id}]',
            'dt_nascimento' => 'valid_date',
            'usuario' => 'required|is_unique[quest_cadastro_usuario.usuario,id,{id}]',
            'cpf'  => 'required|is_unique[quest_cadastro_usuario.cpf,id,{id}]',
        ]);

        if(!$validacao){
            $error = $this->validator->getErrors();
            $arr_retorno ["validacao"] = false;
            $arr_retorno ['erros'] =  $error;
        }

        else{
            $id = $this->request->getPost('id');
            $usuario = $this->request->getPost('usuario');
            $nome = $this->request->getPost('nome');
            $cpf = $this->request->getPost('cpf');
            $dt_nascimento = $this->request->getPost('dt_nascimento');
            $email = $this->request->getPost('email');
            $telefone = $this->request->getPost('telefone');
            $uf = $this->request->getPost('uf');
            $cidade = $this->request->getPost('cidade');
            $endereco = $this->request->getPost('endereco');
            $data = [
                "id" => $id,
                "dt_cadastro" => date("Y-m-d"),
                "usuario" => $usuario,
                "nome" => $nome,
                "cpf" => $cpf,
                "dt_nascimento" => $dt_nascimento,
                "email" => $email,
                "telefone" => $telefone,
                "uf" => $uf,
                "cidade" => $cidade,
                "endereco" =>   $endereco
            ];
            $this->Cadastro_Model->save($data);
            $afetados = $this->Cadastro_Model->insert($data);
            if($afetados > 0){
                 $arr_retorno = ["validacao" => true];
            }
        }
        echo json_encode($arr_retorno); exit;    
    }
    public function listagem(){
        $rows = $this->Cadastro_Model->findAll();

        $rows[0]["dt_nascimento"] = date("d/m/Y", strtotime($rows[0]["dt_nascimento"]));

       // print_r($rows);
        echo json_encode ($rows);
        
    }
    public function excluir(){
        $id = $this->request->getPost('id');
        $this->Cadastro_Model->where('id', $id)->delete();
        $tot =  $this->Cadastro_Model->affectedRows();
        if($tot>0){
            echo json_encode(1);
        }
        else{
            echo json_encode(0);
        }
    }
    public function editar(){
        $id = $this->request->getPost('id');
        $registro = $this->Cadastro_Model->find ($id);
        echo json_encode($registro);
    }
    public  function retornaCidades(){
        $uf = $this->request->getPost('uf');
        $url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/distritos";
        $cidades = json_decode(file_get_contents($url));
        print_r($cidades["nome"]); exit;
    }
}