async function buscar(){
    let busca1 = await fetch("tarefas.json")
    let tarefas = await busca1.json()

    let busca2 = await fetch("cores.json")
    let cores = await busca2.json()

    for(let x in cores){
        document.body.innerHTML += `
            <h1 style="color: ${cores[x]}"> ${tarefas[x]} </h1>
        `
    }
}

buscar()