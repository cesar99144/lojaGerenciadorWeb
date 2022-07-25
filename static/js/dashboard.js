
var url = window.location.href;
var pagina = url.split('/');

document.getElementById(pagina[3]).classList.add('itemAtivo');

// switch(pagina[3]){

//     case 'cupons-desconto':
//         document.getElementById("deliveryconfiguracoes").classList.add('MenuAtivo');
//         break;
    
//     case 'funcionamento':
//         document.getElementById("loja").classList.add('MenuAtivo');
//         break;

//     case 'formasPagamento':
//         document.getElementById("loja").classList.add('MenuAtivo');
//         break;
    
//     case 'entregadores': 
//         document.getElementById("deliveryconfiguracoes").classList.add('MenuAtivo');
//         break;

//     case 'veiculos': 
//         document.getElementById("deliveryconfiguracoes").classList.add('MenuAtivo');
//         break;

//     default:
//         document.getElementById(pagina[3]).classList.add('MenuAtivo');
//         break;
// }
