// 1. Filtro de Array com Evento: Crie um formulário com um campo de entrada e um botão. Quando o botão for clicado, filtre um array de objetos com base no valor do campo de entrada e exiba os resultados em uma lista. O array deve conter objetos com as propriedades nome e idade.


// Seleciona o botão pelo ID 'btn1'
let btn1 = document.getElementById('btn1');

// Seleciona o campo de entrada pelo ID 'filtro1'
let filtro1 = document.getElementById('filtro1');

// Adiciona um ouvinte de eventos ao botão para ouvir o clique
btn1.addEventListener('click', function() {
    // Obtém o valor atual do campo de entrada e converte para minúsculas para facilitar a busca
    let valorFiltro = filtro1.value.toLowerCase();

    // Filtra o array 'Pessoas' usando o valor do filtro
    let resultadosFiltrados = Pessoas.filter(function(pessoa) {
        // Verifica se o nome da pessoa inclui o valor do filtro
        return pessoa.nome.toLowerCase().includes(valorFiltro);
    });

    // Seleciona o elemento da lista onde os resultados serão exibidos
    let lista = document.getElementById('listaResultados');
    
    // Limpa a lista anterior
    lista.innerHTML = '';

    // Itera sobre os resultados filtrados e cria um item de lista para cada um
    resultadosFiltrados.forEach(function(pessoa) {
        let item = document.createElement('li');
        item.textContent = pessoa.nome + ' - ' + pessoa.idade + ' anos';
        lista.appendChild(item);
    });
});

// Array de objetos 'Pessoas', com propriedades 'nome' e 'idade'
let Pessoas = [
    { nome: "Lucas", idade: 28 },
    { nome: "Zé", idade: 30 },
    { nome: "Toim", idade: 35 }
];
