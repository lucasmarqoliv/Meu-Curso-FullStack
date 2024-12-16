// import './bootstrap';

let titulo = document.getElementById('titulo');
let conteudo = document.getElementById('conteudo');
let foto = document.getElementById('foto');
let btnEnviar = document.getElementById('enviar');

btnEnviar.addEventListener('click', function(){
    if (titulo || conteudo || foto == '') {
        alert ('erro teste');
    }
})
