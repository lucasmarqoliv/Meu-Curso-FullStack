
async function procurar(){
    let resposta = await fetch("mensagem.txt")
    // fetch() faz uma busca por um arquivo. Como leva tempo
    // para trazer o resultado dessa busca, precisa fazer uso
    // do comando await. E para fazer uso do comando await
    // é necessário que esse comando esteja dentro de uma
    // funçao assincrona.
    let convertido = await resposta.text()
    // Após receber o resultado da busca, faz-se necessário
    // converter o resultado de um dicionário para texto,
    // pois o conteudo do arquivo é um texto.
    
    console.log(resposta)
    alert(convertido)
    // Por fim, imprimir esse texto que é o conteúdo do arquivo
    // buscado, em um console ou um alert.
}

procurar()  // Chamar a função para executar