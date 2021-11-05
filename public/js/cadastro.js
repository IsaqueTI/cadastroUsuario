const form =  document.querySelector('#form_cadastro');
const inserir_alterar= document.querySelector('.inserir_alterar');
const cancelar = document.querySelector('.cancelar');
const sucesso = document.querySelector(".sucesso");
const ul = document.querySelector(".validacao");
const lista_cidades =  document.querySelector("#cidade");

document.querySelector('#uf').addEventListener('change', ()=>{
    let uf = document.querySelector('#uf').value;
    retornaCidades(uf, "Selecione...");
})

cancelar.addEventListener('click', ()=>{
    inserir_alterar.innerHTML = "Cadastrar";
    document.querySelector('#id').value = "";
})

 function excluir(id){
    sucesso.innerHTML = "";
    ul.innerHTML = "";
    form.reset();
    if (window.confirm("Você realmente quer excluir?")) {
    let data = new FormData();
    data.append("id", id);
	fetch("cadastro/excluir", {
		method: 'POST',
		body: data,
	})
    .then(response => {		
		return response.json()
	})
    .then(response => {
        if(response == 1){
            alert("Registro excluido com sucesso !!!");
            listagem();
        }
        else{
            alert("Houve problema ao excluir !!!");
            listagem();
        }	
		})
		.catch(err => {
			alert("Erro na requisção");
		})
		.finally(() => {			
			console.log("Termino requisicao");
		});
    }
 }

 function editar(id){
    sucesso.innerHTML = "";
    ul.innerHTML = "";
    let data = new FormData();
    data.append("id", id);
	fetch("cadastro/editar", {
		method: 'POST',
		body: data,
	})
    .then(response => {		
		return response.json()
	})
    .then(response => {
        document.querySelector('#id').value = response.id;
        document.querySelector('#usuario').value = response.usuario;
        document.querySelector('#nome').value = response.nome;
        document.querySelector('#cpf').value = response.cpf;
        document.querySelector('#dt_nascimento').value = response.dt_nascimento;
        document.querySelector('#email').value = response.email;
        document.querySelector('#telefone').value = response.telefone;
        document.querySelector('#uf').value = response.uf;
        document.querySelector('#cidade').value = response.cidade;
        document.querySelector('#endereco').value = response.endereco;
        inserir_alterar.innerHTML = "Alterar";
        retornaCidades(response.uf, response.cidade);
	})
	.catch(err => {
        alert("Erro na requisção");
	})
    .finally(() => {			
        console.log("Termino requisicao");
	});
 }

 var listagem = () => {	
	fetch("cadastro/listagem", {
		method: 'POST',
	})
	.then(response => {		
		return response.json()
	})
    .then(response => {
        var tr = "";
        [...response].forEach((v, i) => {
            tr += `<tr>
                        <td>`+v.nome+`</td>
                        <td>`+v.usuario+`</td>
                        <td>`+v.email+`</td>
                        <td>`+v.dt_nascimento+`</td>
                        <td>
                            <button type='button' class='btn btn-primary btn-xs editar' onclick='editar(`+v.id+`)'>editar</button>
                        <button type='button' class='btn btn-danger btn-xs excluir' onclick='excluir(`+v.id+`)'>Excluir</button>
                        </td>
                    </tr>`;
        })
        let table = document.querySelector("#listagem tbody");
        
        if(tr != ""){
            table.innerHTML = tr;
        }
        else{
            table.innerHTML = "<tr><td colspan='5'>Não há registro</td></tr>";
        }
		})
		.catch(err => {
			alert("Erro na requisção");
		})
		.finally(() => {			
			console.log("Termino requisicao");
		});
}
listagem();
    form.addEventListener("submit", (e)=>{
	e.preventDefault();
    let data = new FormData(form);
    fetch('cadastro/cadastroUsuario', {
        method: 'POST',
        credentials: 'same-origin',
        body: data
    })
        
    .then(function (response) {
        response.json().then(function (data) {        
            
            if(data.validacao == true){ 
                ul.innerHTML = "";
                sucesso.innerHTML = "Efetuado com sucesso";
                form.reset();
                listagem();
            }
            else{
                let li = "";
                sucesso.innerHTML = "";
                let campos = Object.keys(data.erros);
                campos.forEach(key => {
                    li += "<li>"+data.erros[key]+"</li>";
                })
                ul.innerHTML = li;
            }
        });
    });
});
function retornaCidades(uf, cidade){
	fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados/"+uf+"/distritos?orderBy=nome", {
		method: 'GET',
	})
    .then(response => {		
		return response.json()
	})
    .then(response => {
        let option = "<option>Selecione...</option>";
        [...response].forEach((v, i) => {
            option += "<option value = '"+v.nome+"'>"+v.nome+"</option>";

            if(response.length == i+1){
                lista_cidades.innerHTML = option;
                lista_cidades.value = cidade;
            }
        })
	})
    .catch(err => {
        alert("Erro na requisção");
    })
    .finally(() => {			
        console.log("Termino requisicao");
    });
}

