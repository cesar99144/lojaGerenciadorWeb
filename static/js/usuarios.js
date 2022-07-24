function cadastrarUsuarios(){

    var nome = document.getElementById("nomeUsuario").value;
    var nomeLogin = document.getElementById("nomeLoginUser").value;
    var senhaUsuario = document.getElementById("senhaUsuario").value;
    var ativoUsuario = document.getElementById("ativoUsuario").value;

    // var tipoPessoa;
    var checkedCadastrarClientes = $('#checkClientes').is(':checked');
    var checkDeleteClientes = $('#checkDeleteClientes').is(':checked');
    var checkCadastrarFornecedores = $('#checkCadastrarFornecedores').is(':checked');
    var checkCadastrarProdutos = $('#checkCadastrarProdutos').is(':checked');
    var checkAlterarPrecoProdutos = $('#checkAlterarPrecoProdutos').is(':checked');

    $.ajax({
        url: "/usuarios/create",
        type:"POST",
        data:{
            nomeUser: nome,
            loginUser: nomeLogin,
            senhaUser: senhaUsuario,
            statusUser: ativoUsuario,
            checkCadastroCliente: checkedCadastrarClientes,
            checkDeleteClientes: checkDeleteClientes,
            checkCadastrarFornecedores: checkCadastrarFornecedores,
            checkCadastrarProdutos: checkCadastrarProdutos,
            checkAlterarPrecoProdutos: checkAlterarPrecoProdutos
            
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
            }
        },
        error: function(response) {
            alert("erro")
        },
    });
}