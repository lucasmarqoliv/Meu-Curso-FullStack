
// Array de exemplo com strings
const arrayDeStrings = ['Maçã', 'Banana', 'Laranja', 'Manga', 'Abacaxi'];

// Função para gerar a lista de strings no HTML
function exibirLista() {
    const ul = document.getElementById('array-list');
    ul.innerHTML = ''; // Limpa a lista antes de exibir novamente

    arrayDeStrings.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = item;
        li.id = 'item-' + index; // Atribui um id único para cada item
        ul.appendChild(li);
    });
}

// Função de busca
function buscar() {
    const termo = document.getElementById('search-input').value.toLowerCase();
    
    arrayDeStrings.forEach((item, index) => {
        const li = document.getElementById('item-' + index);
        if (item.toLowerCase() === termo) {
            li.classList.add('highlight'); // Adiciona destaque ao item encontrado
        } else if (termo !== arrayDeStrings){
            li.classList.remove('highlight'); // Remove destaque dos não encontrados
        }
    });
}

// Event listener para o botão
document.getElementById('search-button').addEventListener('click', buscar);

// Inicializa a lista
exibirLista();
