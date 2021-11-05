<?php

/*namespace App\Models;
use CodeIgniter\Model;
#use App\Models\My_model;

class Quest_cadastro_usuario_Model extends Models
{
    protected $table = 'quest_cadastro_usuario';
    protected $allowedFields = ['dt_cadastro', 'dt_update', 'usuario', 'nome', 'cpf', 'dt_nascimento', 'email', 'telefone', 'uf', 'cidade', 'endereco'];
}*/


namespace App\Models;

use CodeIgniter\Model;

class Quest_cadastro_usuarioModel extends Model
{
    protected $table = 'quest_cadastro_usuario';
    protected $allowedFields = ['dt_cadastro', 'dt_update', 'usuario', 'nome', 'cpf', 'dt_nascimento', 'email', 'telefone', 'uf', 'cidade', 'endereco'];
}