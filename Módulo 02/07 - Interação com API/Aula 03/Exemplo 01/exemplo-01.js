async function obter(){
    let resposta = await fetch("pizza.txt")
    let convertido = await resposta.text()
    console.log(convertido)
}

obter()