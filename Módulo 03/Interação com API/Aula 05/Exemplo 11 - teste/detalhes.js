async function buscar(){
    let parametroURL = new URLSearchParams(window.location.search);
    let parametroID = parametroURL.get("id") - 1

    let procura = await fetch("lista-produtos.json")
    let produto = await procura.json()

    document.title = produto[parametroID].nome

    let div = document.getElementById("produto-detalhes")

    div.innerHTML += `
        <div class="box-img-frame">
            <img src="${produto[parametroID].img[0]}" width="350" height="auto" id="img-frame">
        </div>
        <div class="lista-imgs" id="lista-imgs"></div>
    `
    for(let img in produto[parametroID].img){
        document.getElementById("lista-imgs").innerHTML += `
            <img src="${produto[parametroID].img[img]}" width="80" height="80" class="box-img" style="border: 1px solid #111">
        `
    }

    div.innerHTML += `
        <h2>${produto[parametroID].nome}</h2>
        <p>${produto[parametroID].descricao}</p>
        <div>
            <span class="ComDesconto">R$ ${(produto[parametroID].valorComDesconto).toFixed(2).replace(".", ",")}</span>
            <span class="SemDesconto">R$ ${(produto[parametroID].valorSemDesconto).toFixed(2).replace(".", ",")}</span>
        </div>
    `

    let listaBoxImgs = document.getElementsByClassName("box-img")
    for(let x in listaBoxImgs){
        listaBoxImgs[x].addEventListener("mouseover", trocarImg)
    }
}

function trocarImg(){
    document.getElementById("img-frame").src = this.getAttribute("src")
}

buscar()