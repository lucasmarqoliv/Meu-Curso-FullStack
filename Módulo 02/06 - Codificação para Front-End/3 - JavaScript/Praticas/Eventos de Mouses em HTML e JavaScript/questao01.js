document.getElementById('btn').addEventListener('click', function() {
    alert ('botão clicado!');
});


let eventoDiv = document.getElementById('div');
eventoDiv.addEventListener('click', function() {
    eventoDiv.textContent = 'Div clicada!';
});


document.getElementById('imagem').addEventListener('mouseover', function() {
    alert ('Mouse sobre a imagem!');
});


let paragrafo_sem_fundo = document.getElementById('paragrafo');
paragrafo_sem_fundo.addEventListener('click', function() {
    paragrafo_sem_fundo.style.backgroundColor = 'blue';
});


document.getElementById('btn02').addEventListener('mousedown', function() {
    alert ('Mouse pressionado!');
});

let div_sem_cor = document.getElementById('div02');
div_sem_cor.addEventListener('drag', function() {
    div_sem_cor.style.backgroundColor = 'green';

});

let botao_duplo_clique = document.getElementById('btn03');
botao_duplo_clique.addEventListener('dblclick', function(){
    botao_duplo_clique.textContent = 'Botão duplo clicado'
});

document.getElementById('div03').addEventListener('mouseout', function(){
    alert ('Mouse saiu da div!')
});


let paragrafo = document.getElementById('paragrafo02');
let primeiro_clique = true;
paragrafo.addEventListener('click', function(){
        if (primeiro_clique) {
            paragrafo.textContent = "Você clicou"
        }
        else {
            paragrafo.textContent = "Clicado novamente"
        }
        primeiro_clique = !primeiro_clique;
});



