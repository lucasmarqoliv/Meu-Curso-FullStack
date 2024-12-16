
async function mostrarTexto(){
    let x = await fetch("exemplo-01.txt")
    let y = await x.text()
    console.log(x)
    document.getElementById("demo").textContent = y
}

mostrarTexto("exemplo-01.txt")
