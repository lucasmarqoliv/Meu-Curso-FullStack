async function listagem(){
    let busca = await fetch("lista-produtos.json")
    let produtos = await busca.json()

    let div = document.getElementById("listagem-produtos")

    for(let produto of produtos){
        div.innerHTML += `
            <div class="card" data-id="${produto.id}">
                <div class="grupo-img">
                    <img src="${produto.img[0]}" width="auto" height="auto">
                </div>
                <h3>${produto.nome}</h3>
                <span>${produto.descricao}</span>
                <div>
                    <span class="ComDesconto">R$ ${(produto.valorComDesconto).toFixed(2).replace(".", ",")}</span>
                    <span class="SemDesconto">R$ ${(produto.valorSemDesconto).toFixed(2).replace(".", ",")}</span>
                </div>
            </div>
        `
    }

    let listaCards = document.querySelectorAll(".card")
    for(let card of listaCards){
        card.addEventListener("click", clicou)
    }
}

function clicou(){
    let produtoId = this.getAttribute("data-id")
    window.location.href = "detalhes.html?id=" + produtoId
    //alert(produtoId)
}

function abrirMenuDark(){
    document.body.style.backgroundColor = "black"
    document.body.style.color = "white"
}

listagem()