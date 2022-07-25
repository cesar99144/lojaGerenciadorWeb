function cadastrarCliente(){

    var nome = document.getElementById("nomeCliente").value;
    var celular = document.getElementById("celularCliente").value;
    var email = document.getElementById("emailCliente").value;
    var endereco = document.getElementById("enderecoCliente").value;
    var bairro = document.getElementById("bairroCliente").value;
    var uf = document.getElementById("ufCliente").value;
    var cidade = document.getElementById("cidadeCliente").value;
    var ativo = document.getElementById("ativoCliente").value;

    $.ajax({
        url: "/clientes/create",
        type:"POST",
        data:{
            nomeCliente: nome,
            celularCliente: celular,
            emailCliente: email,
            enderecoCliente: endereco,
            bairroCliente: bairro,
            ufCliente: uf,
            cidadeCliente: cidade,
            ativoCliente: ativo,
            
        },
        success:function(response){

            switch(response){

                case "Sucesso":

                    Toastify({
                        text: "Cadastrado com sucesso",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, green, green)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                    limparCampos();

                break;

                case "Erro":

                    Toastify({
                        text: "Falha no cadastro, verifique os dados e tente novamente",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, green, green)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                break;

                default:

                    alert(response)

            }
        },
        error: function(response) {
            alert("erro")
        },
    });
}

function limparCampos(){

    document.getElementById("nomeCliente").value = "";
    document.getElementById("celularCliente").value = "";
    document.getElementById("emailCliente").value = "";
    document.getElementById("enderecoCliente").value = "";
    document.getElementById("bairroCliente").value = "";
    document.getElementById("ufCliente").value = "";
    document.getElementById("cidadeCliente").value = "";

}

function carregarListaClientes(){

    $.ajax({
        url: "/clientes/listarClientes",
        type:"GET",

        success:function(response){

            dados = JSON.parse(response);

            limparLista();

            for(var i = 0; i < dados.length; i++){

                var $wrapper = document.querySelector('#containerDadosTable');
                var trLista = '<tr class="itemLista"><td>'+dados[i].nome+'</td><td>'+dados[i].celular+'</td><td>'+dados[i].email+'</td><td>'+dados[i].endereco+'</td><td><button onclick="deleteCliente('+dados[i].idCliente+')" class="w3-button w3-theme w3-margin-top"><i class="fas fa-user-times"></i></button>&nbsp;&nbsp;<a href="/clientes/edit/'+dados[i].idCliente+'" class="w3-button w3-theme w3-margin-top"><i class="fas fa-edit"></i></a></td></tr>';
                
                // Insere o texto antes do conteúdo atual do elemento
                $wrapper.insertAdjacentHTML('afterbegin', trLista);
            }
            
        },
        error: function(response) {
            alert("erro")
        },
    });
}

function limparLista(){

    var lista = document.getElementsByClassName("itemLista");
    for(var i = lista.length - 1; i >= 0; i--)
    {
        lista[i].remove()
    }
}

function deleteCliente(id){

    $.ajax({
        url: "/clientes/delete/"+id,
        type:"GET",

        success:function(response){

            switch(response){

                case "Sucesso":

                    Toastify({
                        text: "Deletado com sucesso",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, green, green)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                    carregarListaClientes();

                break;

                case "Erro":

                    Toastify({
                        text: "Falha ao excluir, verifique e tente novamente",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, red, red)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                break;

                case "SemPermissao":

                    Toastify({
                        text: "Usuário sem permissão para deletar",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, red, red)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                break;

                default:

                    alert(response)
            }
            
        },
        error: function(response) {
            alert("erro")
        },
    });
}

function atualizarCliente(){

    var id = document.getElementById("codigoCliente").value;

    var nome = document.getElementById("nomeCliente").value;
    var celular = document.getElementById("celularCliente").value;
    var email = document.getElementById("emailCliente").value;
    var endereco = document.getElementById("enderecoCliente").value;
    var bairro = document.getElementById("bairroCliente").value;
    var uf = document.getElementById("ufCliente").value;
    var cidade = document.getElementById("cidadeCliente").value;

    $.ajax({
        url: "/clientes/update/"+id,
        type:"POST",
        data:{
            nomeCliente: nome,
            celularCliente: celular,
            emailCliente: email,
            enderecoCliente: endereco,
            bairroCliente: bairro,
            ufCliente: uf,
            cidadeCliente: cidade,
            
        },
        success:function(response){

            switch(response){

                case "Sucesso":

                    Toastify({
                        text: "Atualizado com sucesso",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, green, green)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();


                break;

                case "Erro":

                    Toastify({
                        text: "Falha no cadastro, verifique os dados e tente novamente",
                        destination: "",
                        newWindow: true,
                        gravity: "top", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        // className: "info",
                        style: {
                        background: "linear-gradient(to right, green, green)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();

                break;

                default:

                    alert(response)

            }
        },
        error: function(response) {
            alert("erro")
        },
    });
}

//Pesquisar dados table

var filtro = document.getElementById('filtraDados');
var tabela = document.getElementById('lista');
filtro.onkeyup = function() {
    var nomeFiltro = filtro.value;
    for (var i = 1; i < tabela.rows.length; i++) {
        var conteudoCelula = tabela.rows[i].cells[0].innerText;
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        tabela.rows[i].style.display = corresponde ? '' : 'none';
    }
};