
// Programa #1:
//  Criar uma mensagem de alerta na página.

alert("Olá mundo")


//====================================================

/*
// Programa #2:
//  Criar uma caixa de entrada para inserir um valor e mostrar em um alerta.

let nome = prompt("Digite seu nome")
alert("Olá " + nome)
*/

//====================================================

/*
// Programa #3:
//  Criar uma caixa de entrada para inserir um valor e mostrar no 
//  console da página.

let nome = prompt("Digite seu nome")
console.log("Olá " + nome)
*/

//====================================================

/*
// Programa #4:
//  Cria uma variável e armazena nela uma TAG do HTML buscada usando o comando 
//  'querySelector', depois mostra no console o texto conteúdo dessa TAG.

let elemento = document.querySelector('h1')
console.log(elemento.textContent)
*/

//====================================================

/*
// Programa #4:
//  Identifica uma TAG do HTML e altera o texto conteúdo dela para "Hey".

document.querySelector('h1').textContent = "Hey"
*/

//====================================================

/*
// Programa #5:
//  Cria uma variável e atribui a ela a criação de uma TAG h2, depois da um valor
//  para ela, e por fim adiciona um 'filho' à TAG body da página que é o h2

let elemento = document.createElement('h2')
elemento.textContent = "Vamos comer pizza"
document.body.appendChild(elemento)

*/

//====================================================

/*
// Programa #6:
//  Cria uma variável 'botao' que recebe o elemento botão do HTML. Depois cria um
//  evento pra ficar ouvindo quando o botão for clicado, e chamar a função 'somarUm'
//  quando ele for clicado. Dentro da função 'somarUm' cria uma variável 'elemento'
//  que recebe a TAG h3 do HTML e por fim, atribui ao valor dessa TAG, o valor atual
//  dela somado a + 1. O uso do comando 'paseInt' foi para converter o valor desse
//  elemento de string para número.

let botao = document.querySelector('button')
botao.addEventListener('click', somarUm)

function somarUm() {
    //console.log("clicou")
    let elemento = document.querySelector('h3')
    elemento.textContent = parseInt(elemento.textContent) + 1
}

*/

//====================================================

/*
// Programa #7:
//  Mesma funcionalidade do programa anterior. Acrescentando a estrutura de 
//  verificação 'IF'. Dentro do IF verifica se o número é igual ao número 5.
//  

let botao = document.querySelector('button')
botao.addEventListener('click', somarUm)

function somarUm() {
    //console.log("clicou")
    let elemento = document.querySelector('h3')
    elemento.textContent = parseInt(elemento.textContent) + 1
    
    // Definir cor
    if (elemento.textContent == 3) {
        elemento.style.color = '#159BB9'
    }else{
        elemento.style.color = '#000000'
    }
    
    //Numero aleatorio
    let elemento2 = document.querySelector('h4')
    elemento2.textContent = parseInt(Math.random() * 11)

    //Definir uma cor com numero aleatorio
    let r = parseInt(Math.random() * 256)
    let g = parseInt(Math.random() * 256)
    let b = parseInt(Math.random() * 256)
    console.log(`rgb(${r}, ${g}, ${b})`)

    elemento2.style.color = `rgb(${r}, ${g}, ${b})` // Usar crase para concatenar texto com variável

    //

}

*/