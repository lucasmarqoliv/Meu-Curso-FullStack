let titulo = document.getElementById('titulo');
let itemList = document.getElementById('item-list');
let novoItemInput = document.getElementById('novo-item');
let adicionarBtn = document.getElementById('adicionar-btn');
let removerBtn = document.getElementById('remover-btn');

// funcão para adicionar um novo item á lista.

function adicionarItem() {
    let novoItemTexto = novoItemInput.value;
    if (novoItemTexto !== "") {
        let novoItem = document.createElement('li');
        novoItem.textContent = novoItemTexto;
        itemList.appendChild(novoItem);
        novoItemInput.value = ""; // Limpar o campo de imput
    }
}

// função para remover o ultimo item da lista.

function removerItem() {
    let ultimoItem = itemList.lastElementChild;
    if (ultimoItem) {
        itemList.removeChild(ultimoItem);
    }
}

// adicionar ouvintes de eventos aos botões.

adicionarBtn.addEventListener('click', adicionarItem);
removerBtn.addEventListener('click', removerItem);

// mudando o titulo da página

titulo.textContent= 'Minha Lista de Compras';