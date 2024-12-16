async function loja(){
    // Cria uma variável que recebe a resposta da busca por "produtos.json"
    let busca = await fetch("produtos.json")
    // Converte o objeto resposta em um arquivo json legivel pelo JS
    let produtos = await busca.json()
    
    let grupoDiv = document.getElementById("lista-card")
    
    for(let produto of produtos){
        grupoDiv.innerHTML += `
            <div class="card">
                <h3 class="titulo">${produto.nome}</h3>
                <p>${produto.marca}</p>
                <p>${produto.valor}</p>
            </div>
        `
    }
}

loja()