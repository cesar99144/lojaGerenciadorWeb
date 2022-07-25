function cadastrarProduto(){

    var nome = document.getElementById("nomeProduto").value;
    var estoque = document.getElementById("estoqueProduto").value;
    var preco = document.getElementById("precoProduto").value;

    alert(estoque)
    $.ajax({
        url: "/produtos/create",
        type:"POST",
        data:{
            nomeProduto: nome,
            estoqueProduto: estoque,
            precoProduto: preco,
            
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

    document.getElementById("nomeProduto").value = "";
    document.getElementById("estoqueProduto").value = "";
    document.getElementById("precoProduto").value = "";

}

function carregarListaProdutos(){

    $.ajax({
        url: "/produtos/listarProdutos",
        type:"GET",

        success:function(response){

            dados = JSON.parse(response);

            limparLista();

            for(var i = 0; i < dados.length; i++){

                var preco = parseFloat(dados[i].preco);
                var estoque = parseFloat(dados[i].estoque);

                var $wrapper = document.querySelector('#containerDadosTable');
                var trLista = '<tr class="itemLista"><td>'+dados[i].nome+'</td><td>'+estoque.toFixed(2)+'</td><td>'+preco.toFixed(2)+'</td><td>&nbsp;&nbsp;<a href="/produtos/edit/'+dados[i].idProduto+'" class="w3-button w3-theme w3-margin-top"><i class="fas fa-edit"></i></a></td></tr>';
                
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

function atualizarProduto(){

    var id = document.getElementById("codigoProduto").value;

    var nome = document.getElementById("nomeProduto").value;
    var estoque = document.getElementById("estoqueProduto").value;
    var preco = document.getElementById("precoProduto").value;

    $.ajax({
        url: "/produtos/update/"+id,
        type:"POST",
        data:{
            nomeProduto: nome,
            estoqueProduto: estoque,
            precoProduto: preco,
            
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