function criarElemento(){
    let elemento = document.createElement('h2')
    elemento.textContent = "Olá Mundo"
    document.body.appendChild(elemento)
}

function criarElemento2(){
    let grupo = document.createElement('div')
    grupo.style.border = "2px solid #000"
    grupo.style.width = "fit-content"
    document.body.appendChild(grupo)

    let elemento = document.createElement('h2')
    elemento.textContent = "Olá mundo"
    grupo.appendChild(elemento)
}