async function listagem(){
    let busca = await fetch("pizzas.json")
    let pizzas = await busca.json()

    for(let pizza of pizzas){
        document.body.innerHTML += `
            <p>O sabor é ${pizza.sabor}</p>
            <p>A borda é ${pizza.borda}</p>
            <p>O tamanho é ${pizza.tamanho}</p>
            <p style="background-color: #000; height: 1px"></p>
        `
    }
}

listagem()