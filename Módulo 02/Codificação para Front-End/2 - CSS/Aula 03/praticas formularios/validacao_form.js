$(document).ready(function() {
    $('#form_inscricao').submit(function(event){
        let nome = $('#nome').val();
        if(nome == ''){
            alert('campo obrigatorio')
        }
    })
})