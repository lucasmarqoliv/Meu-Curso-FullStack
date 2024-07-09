function coletarDados(){
    let nome = prompt("Digite seu nome")
    let idade = prompt("Digite sua idade")
    let altura = prompt("Digite sua altura")

    document.getElementById("nomeID").textContent = nome
    document.getElementById("idadeID").textContent = idade
    document.getElementById("alturaID").textContent = altura
}
