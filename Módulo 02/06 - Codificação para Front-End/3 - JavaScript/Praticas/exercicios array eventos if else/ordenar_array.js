// 2. Classificação Dinâmica com Eventos: Crie um array de números e exiba-os em uma lista não ordenada. Adicione um botão que, ao ser clicado, ordena o array em ordem crescente e atualiza a lista para refletir a nova ordem.


// Array de números
const numeros = [5, 3, 8, 9, 2, 7, 9, 1];

// Função para exibir os números na lista
function exibeNumeros() {
    const lista = document.getElementById('lista');
    lista.innerHTML = ''; // Limpa a lista antes de adicionar novos itens

    numeros.forEach(numero => {
        const itemDaLista = document.createElement('li');
        itemDaLista.textContent = numero;
        lista.appendChild(itemDaLista);
    });
}

// Exibe os números inicialmente
exibeNumeros();


// Adiciona o evento de clique no botão para ordenar os números
document.getElementById('btn01').addEventListener('click', () => {
    numeros.sort(); // Ordena os números em ordem crescente
    exibeNumeros(); // Atualiza a lista exibida
});

let btn02 = document.getElementById('btn02') // ordena em ordem decrescente
btn02.addEventListener('click', function(){
    numeros.sort((a, b) => b - a)
    exibeNumeros()
})


