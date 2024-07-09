//Questão - 01
/*
let nome = prompt("Digite seu nome")

setTimeout (inserir, 3000)

function inserir(){
    console.log(nome)
}
*/

//questao 02
/*
function somar(a, b){
return  a * b 
}
alert(somar(3,8))
*/

// questão 03
/*
setInterval(somar,2000)

function somar(){
    document.getElementById("m1").textContent++
}
*/

//questão 4
/*
setInterval(mudarCor,4000)

function mudarCor(){
    let r = parseInt(Math.random() * 256)
    let g = parseInt(Math.random() * 256)
    let b = parseInt(Math.random() * 256)

    document.getElementById("t3").style.color = `rgb(${r},${g},${b})`
}
*/

//Questão 05

let nascimento = prompt("Digite o ano do seu nascimento:")
let atual = prompt("Digite o ano atual:")

conta(atual, nascimento)

function conta(x, y){
    alert("Sua idade é de " + (x - y) + " anos")
}