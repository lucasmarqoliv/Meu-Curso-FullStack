// Função assíncrona para fazer uso do Await
async function buscar(){
    // Await para(stop) a execução do programa aguardando 
    // o resultado do comando Fetch().
    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()
    
    let divLista = document.getElementById("lista-card")
    
    for(let produto of produtos){
        divLista.innerHTML += `
            <div class="card">
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
}

buscar()