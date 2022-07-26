// var checados = [];

function gerarArrayChecks(){

    var checados = [];

    // $(document).ready(function() {
    //     $(".checkOpcao").click(function(e) {
    //         $.each($("input[name='checkOpcao[]']:checked"), function(){            
    //             checados.push($(this).val());
    //         });
    //     });
    // });

    $("input:checked").each(function(){
        // console.log($(this).attr("id"));
        checados.push($(this).attr("id"));
    });

    // console.log(checados);

    return checados;
}

function cadastrarUsuarios(){

    var nome = document.getElementById("nomeUsuario").value;
    var nomeLogin = document.getElementById("nomeLoginUser").value;
    var senhaUsuario = document.getElementById("senhaUsuario").value;
    var ativoUsuario = document.getElementById("ativoUsuario").value;

    var opcoesMarcadas = gerarArrayChecks();

    console.log(opcoesMarcadas);

    // console.log(checados);

    $.ajax({
        url: "/usuarios/create",
        type:"POST",
        data:{
            nomeUser: nome,
            loginUser: nomeLogin,
            senhaUser: senhaUsuario,
            statusUser: ativoUsuario,
            opcoesMarcadas
            
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

    document.getElementById("nomeUsuario").value = "";
    document.getElementById("nomeLoginUser").value = "";
    document.getElementById("senhaUsuario").value = "";

    const clist = document.getElementsByTagName("input");

    for (const el of clist) {
        el.checked = false;
    }
}

function carregarListaUsuarios(){

    $.ajax({
        url: "/usuarios/listaTodosUsuarios",
        type:"GET",

        success:function(response){

            limparLista();

            dados = JSON.parse(response);

            for(var i = 0; i < dados.length; i++){

                var ativo;

                if(dados[i].ATIVO == 'S'){

                    ativo = "Sim";

                }else{

                    ativo = "Não";
                }

                var $wrapper = document.querySelector('#containerDadosTable');
                var trLista = '<tr class="itemLista"><td>'+dados[i].NOME_COMPLETO+'</td><td>'+dados[i].LOGIN+'</td><td>'+ativo+'</td><td><button onclick="deleteUsuario('+dados[i].USUARIO_ID+')" class="w3-button w3-theme w3-margin-top"><i class="fas fa-user-times"></i></button>&nbsp;</td></tr>';
                
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

function deleteUsuario(id){

    $.ajax({
        url: "/usuarios/delete/"+id,
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

                    carregarListaUsuarios()

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