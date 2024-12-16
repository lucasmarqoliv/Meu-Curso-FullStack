async function busca(){
    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()
    
    let listaDiv = document.getElementById("lista-card")
    
    for(let produto of produtos){
        listaDiv.innerHTML += `
            <div class="card">
                <div class="grupo-img">
                    <img src="${produto.img}" width="auto" height="auto">
                </div>
                <div class="textos">
                    <h3> ${produto.nome} </h3>
                    <p> ${produto.descricao} </p>
                    <div>
                        <span class="comDesconto"> R$ ${(produto.valorComDesconto).toFixed(2).replace(".", ",")} </span>
                        <span class="semDesconto"> R$ ${(produto.valorSemDesconto).toFixed(2).replace(".", ",")} </span>
                    </div>
                </div>
            </div>
        `
    }

}

busca()