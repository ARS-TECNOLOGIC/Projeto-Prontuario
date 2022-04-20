

// FUNÇÃO PARA EXPANDIR O MENU NO SIDEBAR
function alt(classMudar) {
    var valID = document.getElementById(classMudar + "Sub").className;
    if (valID == 'submenu-show') {
        document.getElementById(classMudar + "Sub").className = 'submenu-hidden';
        document.getElementById(classMudar + "Drop").style.transform = 'rotate(0deg)';
    } else {
        document.getElementById(classMudar + "Sub").className = 'submenu-show';
        document.getElementById(classMudar + "Drop").style.transform = 'rotate(180deg)';
    }
};
// -------------------------------


// AJAX PARA BUSCAR CIDADE DE ACORDO COM O ESTADO SELECIONADO NO SELECT
$("#estados").change(function () {
    var id = $(this).val();
    $.ajax({
        type: "POST",
        url: "http://localhost/projeto_prontuario/src/pages/exibe_cidade.php?id=" + id,
        dataType: "text",
        success: function (res) {
            $(".optcidade").remove();
            $("#cidade").append(res)
        }
    });
});
// -------------------------

// ------Validador de Formularios-------

function validaForm(event) {
    var validacao;
    
 // remove todas as div de erro
    var elemntoRemove = document.querySelectorAll('#divAviso');
    elemntoRemove.forEach(remov => {
        remov.remove();
    });

    // inicia a validação se vazio
    var dadosForm = document.querySelector("#formCad").querySelectorAll("input, select");
    dadosForm.forEach(res => {

        var valueCampo = res['value'];
        var id = String(res['id']);
        id = `#${id}`;

        if (valueCampo.length == 0) {
            var element = document.querySelector(id);
            // cria novo elemento "DIV"
            var novoElemento = document.createElement('div');
            novoElemento.textContent = 'Preencher';
            novoElemento.id = 'divAviso';

            // INCLUI O NOVO ELEMENTO APOS O ELEMENTO ATUAL.
            element.insertAdjacentElement("afterend", novoElemento);
            console.log(res['name']);
            validacao = false;
        }

        if(validacao == false){
            event.preventDefault();
        }else{
            return true;
        }
    });


}

function boxMensagem(){
    var boxMen = document.createElement('div');
    boxMen.textContent='Cadastro realizado com sucesso!';
    boxMen.className='mensagemCadastroOk';
    boxAtual = document.querySelector('div.box-btn');
    boxAtual.insertAdjacentElement("afterend",boxMen);

    function removerBox(){
        novaBox=document.querySelector('.mensagemCadastroOk');
        novaBox.remove();
    }

    setTimeout(removerBox, 5000);
}

