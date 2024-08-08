
function adicionar() { // função para adicionar +1 
    let adicionar = document.getElementById('btnIncrementar'); // selecionando os elementos DOM de acordo com o ID do HTML
    let valor = document.getElementById('valor') // atribuindo a var valor o elemento 'valor'
    valor.textContent = parseInt(valor.textContent) + 1 // comando para incrementar + 1
}

function decrementar() { // função para diminuir -1
    let decrementar = document.getElementById('btnDecrementar');
    valor.textContent = parseInt(valor.textContent) - 1
}

function resetar() { // função para resetar para 0.
    let resetar = document.getElementById('btnResetar');
    valor.textContent = 0
}