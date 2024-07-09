async function buscarDetalhes(){
    // Consumo do JSON
    let busca = await fetch("lista-produtos.json")
    let produtos = await busca.json()

    // Criou um objeto URLSearchParams e passou
    // a coleta dos parametros da URL nele.
    let parametros = new URLSearchParams(window.location.search)
    // Obteve do parametro "produto-id", o seu valor
    let parametroID = parametros.get("produto-id")
    
    // Criou uma variável vazia
    let indiceProd
    // Usou o for para percorrer toda a lista de produtos do JSON
    for(let x in produtos){
        // Verifica se o ID de cada produto é igual ao ID
        // coletado na URL da página no navegador
        if(produtos[x].id == parametroID){
            // Atribui à variável vazia, o valor de X, que contém
            // o indice do produto que corresponde ao ID da URL
            indiceProd = x
        }
    }

    // Adiciona na TAG BODY do HTML, um código HTML concatenado
    // com valores do objeto produto encontrado
    document.body.innerHTML = `
        <h3>${produtos[indiceProd].nome}</h3>
        <img src="${produtos[indiceProd].img}" width="250" height="250">

    `
}

buscarDetalhes()