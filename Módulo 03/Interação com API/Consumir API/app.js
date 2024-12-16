let endpoint = "https://raw.githubusercontent.com/MauricioSanto/Meu-Curso-fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"

let produtos = []
let inserirProduto = document.getElementById('produtos__lista')
buscarProdutos()

async function buscarProdutos() {           // Cria uma função assíncrona(pausa a execução até o comando concluir por completo e receber uma resposta)
    let resposta = await fetch(endpoint)    // await solicita a pausa da execução ate receber a resposta
    produtos = await resposta.json()
    exibirProdutos(produtos)    
}

function exibirProdutos(produtos) {
    console.log(produtos)
    for (let x in produtos){
        inserirProduto.innerHTML += `
        <li class="produtos__item">
            <div class="produtos__content">
                <img src="${produtos[x].img}" alt="Imagem de celular">
                <div class="produtos__informacoes">
                    <h3>${produtos[x].nome}</h3>
                    <p>${produtos[x].descricao}
                    </p>
                    <h4>R$ ${produtos[x].valorComDesconto}<s>R$ ${produtos[x].valorSemDesconto}</s></h4>
                    <p>${produtos[x].tipoEntrega}</p>
                </div>
            </div>
        </li>
        `;
    }
}