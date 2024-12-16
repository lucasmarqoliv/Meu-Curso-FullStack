async function olx(){
    let busca = await fetch("carros.json")
    let convertido = await busca.json()
    

    for (let x in convertido){
        console.log(convertido[x])
        document.body.innerHTML += convertido[x].marca + "<br>"
    }
}

olx()