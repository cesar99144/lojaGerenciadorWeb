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
    document.getElementById("ativoUsuario").value = "";

    const clist = document.getElementsByTagName("input");

    for (const el of clist) {
        el.checked = false;
    }
}