function acionar(){
    let valor1 = prompt("Digite o primeiro número:")
    let valor2 = prompt("Digite o segundo número:")

    document.getElementById("t1").textContent = valor1 - valor2
}