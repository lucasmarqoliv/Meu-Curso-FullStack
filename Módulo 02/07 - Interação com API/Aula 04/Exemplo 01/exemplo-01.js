let urlProdutos = "https://raw.githubusercontent.com/MauricioSanto/Meu-Curso-fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"

async function buscar(){
    let resposta = await fetch(urlProdutos)
    let produtos = await resposta.json()

    for (let produto in produtos){
        document.body.innerHTML += produtos[produto].nome + "<br>"
        /*
        document.body.innerHTML += `
                <div>
                    O nome do produto é ${produtos[produto].nome}
                </div>
                <br>
                `
        */
    }
}

buscar()