async function procurar(){
    let buscar = await fetch("lista-produtos.json")
    let produtos = await buscar.json()

    let parametrosURL = new URLSearchParams(window.location.search)
    let idProduto = parametrosURL.get("prod-id")

    let indiceProd
    for(let x in produtos){
        if(produtos[x].id == idProduto){
            indiceProd = x
        }
    }

    document.getElementById("detalhes").innerHTML = `
        <h1>${produtos[indiceProd].nome}</h1>
        <img src="${produtos[indiceProd].img[0]}" id="frameImg" height="300" width="auto" style="border: 1px solid #000; border-radius: 10px">
        <div class="mini-imgs" id="mini-imgs">

        </div>
        <p>${produtos[indiceProd].descricao}</p>
        <div class="grupoValores">
            <span class="comDesconto">R$ ${(produtos[indiceProd].valorComDesconto).toFixed(2).replace(".", ",")}</span>
            <span class="semDesconto">R$ ${(produtos[indiceProd].valorSemDesconto).toFixed(2).replace(".", ",")}</span>
        </div>
    `

    let divMiniaturas = document.getElementById("mini-imgs")
    for(let x of produtos[indiceProd].img){
        divMiniaturas.innerHTML += `
            <img src="${x}" class="miniatura" width="80" height="80" style="border: 1px solid #000; border-radius: 5px">
        `
    }

    let listaMiniaturas = document.getElementsByClassName("miniatura")
    for(let card of listaMiniaturas){
        card.addEventListener("mouseover", alteraImg)
    }

}

function alteraImg(){
    document.getElementById("frameImg").src = this.getAttribute("src")
}

procurar()