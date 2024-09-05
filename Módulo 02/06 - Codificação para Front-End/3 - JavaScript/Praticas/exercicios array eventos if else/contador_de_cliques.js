

// Array para armazenar o histórico de cliques
const historicoDeCliques = [];

// Referências aos elementos HTML
const clique = document.getElementById('btn');
const botaoexibeHistorico = document.getElementById('btn2');
const listaDeHistorico = document.getElementById('lista');

// Adiciona um evento de clique ao botão de cliques
clique.addEventListener('click', () => {
    // Adiciona o número de cliques ao histórico
    historicoDeCliques.push(new Date().toLocaleTimeString()); //new Date().toLocaleTimeString(): Cria um novo objeto Date para obter a data e hora atuais e formata essa hora como uma string.
    console.log(historicoDeCliques.length);
});

// Adiciona um evento de clique ao botão de exibir histórico
botaoexibeHistorico.addEventListener('click', () => {
    // Limpa a lista atual
    listaDeHistorico.innerHTML = '';

    // Cria um item de lista para cada clique registrado
    historicoDeCliques.forEach((time, index) => { // time: O primeiro parâmetro da função de callback, que representa o valor atual do item no array (ou seja, a hora do clique). // index: O segundo parâmetro da função de callback, que representa o índice do item no array, começando de 0. Usamos esse valor para numerar cada clique.
        const itemHistorico = document.createElement('li');
        itemHistorico.textContent = `Clique ${index + 1}: ${time}`;
        listaDeHistorico.appendChild(itemHistorico); //appendChild(itemHistorico): Este método adiciona o elemento <li> recém-criado como filho de listaDeHistorico. Isso significa que ele é adicionado ao final da lista de histórico.
    });
});


