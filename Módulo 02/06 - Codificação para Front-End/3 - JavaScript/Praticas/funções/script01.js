
function soma_dois_numeros(a, b) {
    return `a soma de ${a} + ${b} é igual a: ${a + b}`
}

console.log(soma_dois_numeros(10, 20)) // retorna 30

//---------------------------------------------------
function par_ou_impar(num) {
    if (num % 2 == 0) {
        return `${num} é par!`
    } 
    else {
        return `${num} é impar!`
    }
}
console.log(par_ou_impar(2)); // retorna 5 é impar!

//--------------------------------------------------
function verifica_o_maior(num1, num2, num3) {
    if (num1 > num2 && num1 > num3) {
        return `${num1} é  maior!` 
    }
    else if (num2 > num1 && num2 > num3) {
        return `${num2} é maior!`
    }
    else if (num3 > num2 && num3 > num1) {
        return `${num3} é maior!`
    }
}
console.log(verifica_o_maior(16, 17, 15));

//---------------------------------------
function retorna_qnt_caracteres(palavra) {
    return `${palavra} tem ${palavra.length} caracteres!`
}
console.log(retorna_qnt_caracteres('programação'))

//---------------------------------------
function tabuada_multiplicacao(numero) {
    for (let i = 0; i <= 10; i ++) {
        console.log(`${numero} * ${i} = ${numero * i}`)
    }
}
(tabuada_multiplicacao(5));

//----------------------------------------
function calcula_media(numeros) {
    let soma = 0;
    numeros.forEach(function(numero){
        soma = soma + numero
    })
    let media = soma/numeros.length
    console.log(`A media de ${numeros} é: ${media.toFixed(2)}!`)
}
calcula_media([10, 5, 4])

//------------------------------------
function loop_impar_par(numeros2) {
    numeros2.forEach(function(numero2){
        if (numero2 % 2 == 0) {
            console.log(`${numero2} é par`)
        }
        else {
            console.log(`${numero2} é impar`)
        }
    })
}
loop_impar_par([10, 5, 6, 9]);

//------------------------------------
function loop_maior_numero(numeros3) {
    let maior = numeros3[0]
    numeros3.forEach(function(numero3){
        if (numero3 > maior) {
            maior = numero3
        }
    })
    return (`${maior} é o maior no array: ${numeros3}`)
}
console.log(loop_maior_numero([10 ,4 ,25 , 9, 8, 20]))

//------------------------------------
function contar_caract(palavras) {
    let qnt_caract = 4
    let maiores_palavras = 0
    palavras.forEach(function(palavra){
        if (palavra.length > qnt_caract) {
            maiores_palavras++
        }
    })
    console.log(`dentro desse array: ${palavras}. ${maiores_palavras} tem mais que 4 caracteres`)
}
contar_caract(['oi', 'testando', 'nome', 'kkkkk'])

//----------------------------------
function exibe_positivos(numeros4) {
    let positivos = []
    numeros4.forEach(function(numero4){
        if (numero4 > 0) {
            positivos.push(numero4)
        }
    })
    console.log(`de acordo com o array: ${numeros4} os positivos são esses: ${positivos}`)
}
exibe_positivos([10, -7, -9, 8, -10, 5, -8, 6])