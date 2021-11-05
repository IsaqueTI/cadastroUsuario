<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Quest - Cadastro Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .validacao {
        color: red
    }

    .sucesso {
        color: green;
    }
    </style>
</head>

<body>
    <div class="container container-fluid">
        <h2 class="text-center">Gest&atilde;o usuarios</h2>
        <form id="form_cadastro" name="form_cadastro" autocomplete="off">
            <input type="hidden" name="id" id="id">
            <div class="row mt-3">
                <div class="col-6">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control form-control-sm" name="usuario" id="usuario">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control form-control-sm" name="nome" id="nome">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control form-control-sm" name="cpf" id="cpf">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="nome">Nascimento</label>
                        <input type="date" class="form-control form-control-sm" name="dt_nascimento" id="dt_nascimento">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control form-control-sm" name="telefone" id="telefone">
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-2">
                    <div class="form-group">
                        <label for="uf">UF</label>
                        <select class="form-control form-control-sm" name="uf" id="uf" required>
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <select class="form-control form-control-sm" name="cidade" id="cidade" required>
                            <option>Selecione...</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control form-control-sm" name="endereco" id="endereco">
                    </div>
                </div>
            </div>
            <div>
                <ul class="validacao">
                </ul>
            </div>
            <div class="sucesso"></div>
            <button type="submit" class="btn btn-primary inserir_alterar">Cadastrar</button>
            <button type="reset" class="btn btn-danger cancelar">Cancelar</button>
        </form>
        <br>
        <hr>
        <table id="listagem" class="table table-bordered table-striped table-hover  table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Nascimento</th>
                    <th>Acao</th>
                </tr>
            </thead>
            <tbody></tbody>

        </table>
    </div>
    <script src=" js/cadastro.js">
    </script>
</body>

</html>