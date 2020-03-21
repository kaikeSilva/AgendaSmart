//colocar marcação de erro
function atribuirErro(input,campoErro){

    input.classList.add('border-danger')
    document.getElementById(campoErro).classList.remove("desaparecer") 
    document.getElementById(campoErro).classList.add("mostrar") 
}
//retirar marcação de erro
function retirarErro(input,campoErro) {
    input.classList.remove('border-danger')
    document.getElementById(campoErro).classList.add("desaparecer") 
    document.getElementById(campoErro).classList.remove("mostrar") 
}


function verificarVazio(input,campoErro){
    if(input.value == ""){
        console.log(input,"vazio")
        atribuirErro(input,campoErro)
        return true
    } else {
        console.log(input,"não vazio")
        retirarErro(input,campoErro)
        return false
    }
}

function guardarContato(){
    let form = document.getElementById('storeContato')

    let nome = document.getElementById('nome')
    let telefone = document.getElementById('telefone')

    //coloquei em variaveis pois tudo junto no if quando o primeiro era false não verificava o outro
    //e disso não atualizava os erros
    let telefoneVazio = verificarVazio(telefone,"telefone-vazio")
    let nomeVazio = verificarVazio(nome,"nome-vazio")

    if( telefoneVazio || nomeVazio ){
        return false
    }
        
    form.submit()
    window.location.replace('/')
}

function atualizarContato(){
    let form = document.getElementById('fomulario-atualizar')

    let nome = document.getElementById('nome')
    let telefone = document.getElementById('telefone')


    //coloquei em variaveis pois tudo junto no if quando o primeiro era false não verificava o outro
    //e disso não atualizava os erros
    let telefoneVazio = verificarVazio(telefone,"telefone-vazio")
    let nomeVazio = verificarVazio(nome,"nome-vazio")

    if( telefoneVazio || nomeVazio ){
        return false
    }
            
    form.submit()
    window.location.replace('/')
}

//função para mostrar na tela a imagem que foi feito o upload
//antes de dar submit no formulário.
//Recebe o id da img, que pode ser da modal ou da pagina de update
function lerURL(input,id) {
    //foi preciso concatenar o id pois o comando $() espera um id com
    //precedido de #
    id = "#"+id
    //console.log(id)
    if (input.files && input.files[0]) {
        var leitor = new FileReader();

        //quando o leitor de arquivos for carregado muda o src da imagem
        leitor.onload = function (imagem) {
            $(id)
                .attr('src', imagem.target.result)
                .width(100)
                .height(100);
        };

        leitor.readAsDataURL(input.files[0]);
    }
}

//criar uma busca personalizada por nome ou telefone
function pesquisar() {
   
    // declarar variáveis
    var input, filtro, i;
    input = document.getElementById('pesquisar')
    filtro = input.value
    dados = document.getElementsByClassName('dados')
    nomes = document.getElementsByClassName('nome')

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < dados.length; i++) {
        textoParaTestar = nomes[i].innerText;
        if (textoParaTestar.indexOf(filtro) > -1) {
            dados[i].style.display = "";
        } else {
            dados[i].style.display = "none";
        }
    }
}

//dispensar alerta


