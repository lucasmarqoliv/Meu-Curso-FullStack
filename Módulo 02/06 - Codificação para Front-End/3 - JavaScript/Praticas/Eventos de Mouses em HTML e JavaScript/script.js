
document.getElementById('btn').addEventListener('click', function() { // esse metodo: "addEventListener " é usado em JavaScript para registrar um evento em um elemento HTML. Ele permite que você especifique uma função (chamada de callback) que será executada quando o evento especificado ocorrer no elemento.
// Parâmetros: eventType: Uma string que especifica o tipo de evento a ser ouvido (por exemplo, "click", "keydown", "mouseover").
// callbackFunction: A função que será executada quando o evento ocorrer.
    alert ('botão clicado!');
});


let eventoDiv = document.getElementById('div'); // mesmo que usar a propriedade this para se referir ao id. ficaria this.textContent = 'Div clicada!';
eventoDiv.addEventListener('click', function() {
    eventoDiv.textContent = 'Div clicada!'; // text.Content: uma propriedade do DOM (Document Object Model) usada para acessar ou definir o conteúdo textual de um elemento HTML.
});


document.getElementById('imagem').addEventListener('mouseover', function() {
    alert ('Mouse sobre a imagem!');
});


let paragrafo_sem_fundo = document.getElementById('paragrafo');
paragrafo_sem_fundo.addEventListener('click', function() {
    paragrafo_sem_fundo.style.backgroundColor = 'blue'; // altera a cor de fundo 
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
        primeiro_clique = !primeiro_clique; // altera o estado da variavel de true para false a cada interação para que o bloco de codigo seja executado novamente a cada interação
});



