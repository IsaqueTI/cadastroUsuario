<?php

namespace App\Models\Cadastro;
use CodeIgniter\Model;
#use App\Models\My_model;

class Quest_cadastro_usuario_Model
{
    protected $table = 'quest_cadastro_usuario';
    protected $allowedFields = ['dt_cadastro', 'dt_update', 'usuario', 'nome', 'cpf', 'dt_nascimento', 'email', 'telefone', 'uf', 'cidade', 'endereco'];
}