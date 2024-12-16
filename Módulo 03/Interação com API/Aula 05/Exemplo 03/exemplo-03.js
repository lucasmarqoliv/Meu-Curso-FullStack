async function imprimir(){
    let busca = await fetch("tarefas.json")
    let tarefas = await busca.json()

    let busca2 = await fetch("cores.json")
    let cores = await busca2.json()

    for(let x in tarefas){
        let indice = parseInt(Math.random() * 4)
        
        document.body.innerHTML += `
            <p style="color:${cores[indice]}">
                ${tarefas[x]}
            </p>
        `
    }
}

imprimir()