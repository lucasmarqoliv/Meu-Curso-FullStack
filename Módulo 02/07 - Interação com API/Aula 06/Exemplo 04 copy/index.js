// Função assíncrona para fazer uso do Await
async function buscar(){
    // Await para(stop) a execução do programa aguardando 
    // o resultado do comando Fetch().
    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()
    
    let divLista = document.getElementById("lista-card")
    
    for(let produto of produtos){
        divLista.innerHTML += `
            <div class="card" data-id="${produto.id}">
                <h3>${produto.nome}</h3>
                <img src="${produto.img}" width="200" height="200"/>
                <p>${produto.descricao}</p>
                <div class="valores">
                    <span class="valorCom">R$ ${produto.valorComDesconto.toFixed(2).replace(".",",")}</span>
                    <span class="valorSem">R$ ${produto.valorSemDesconto.toFixed(2).replace(".",",")}</span>
                </div>
            </div>
        `
    }

    // Busca por todos elementos HTML que contém "card"
    // como valor do parâmetro "class".
    let divsCards = document.getElementsByClassName("card")
    
    for(let card of divsCards){
        // Add em cada Div Card um evento que escuta quando
        // o usuário clica nele, e chama uma função.
        card.addEventListener("click", clicou)
    }
}

// É chamada essa função quando o usuário clicou
// em um card que contém o evento de Escuta.
function clicou(){
    // Coleta o valor do atributo "data-id" do elemento
    // HTML que acionou o evento de Escuta.
    let elementoId = this.getAttribute("data-id")
    // 
    window.location.href = "detalhes.html?produto-id=" + elementoId
}

buscar()