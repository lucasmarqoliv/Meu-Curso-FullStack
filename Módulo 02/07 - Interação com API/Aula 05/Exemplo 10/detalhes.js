async function buscar(){
    let buscaParametro = new URLSearchParams(window.location.search)
    let parametroId = buscaParametro.get("id")
    
    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()

    let indice = null
    for(let x in produtos){
        if(produtos[x].id == parametroId){
            indice = x
        }
    }

    document.title = produtos[indice].nome
    
    document.getElementById("detalhes").innerHTML += `
        <h1>${produtos[indice].nome}</h1>
        <img src="${produtos[indice].img[0]}" id="img-frame" height="300" width="auto" style="border: 1px solid #000; border-radius: 10px">
        <div class="mini-img" id="mini-img">
            
        </div>
        <p>${produtos[indice].descricao}</p>
        <div class="grupoValores">
            <span class="comDesconto">R$ ${(produtos[indice].valorComDesconto).toFixed(2).replace(".", ",")}</span>
            <span class="semDesconto">R$ ${(produtos[indice].valorSemDesconto).toFixed(2).replace(".", ",")}</span>
        </div>
    `

    let divMini = document.getElementById("mini-img")
    for(let i of produtos[indice].img){
        divMini.innerHTML += `<img src="${i}" class="miniatura" height="80" width="80" style="border: 1px solid #000; border-radius: 5px;">`
    }

    let miniCards = document.querySelectorAll(".miniatura")
    for(let card of miniCards){
        card.addEventListener("mouseover", alteraImg)
    }
}

function alteraImg(){
    let frame = document.getElementById("img-frame")
    frame.src = this.getAttribute("src")
}

buscar()