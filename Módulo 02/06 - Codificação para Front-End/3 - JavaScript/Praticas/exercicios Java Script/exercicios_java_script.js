
function maiorIdade(idade) {
    if (idade >= 18) {
        return 'Você é maior de idade.'
    }
    else {
        return 'Você é menor de idade.'
    }
}
console.log(maiorIdade(17));
//-------------------------------------
function alunoAprovado(nota) {
    if (nota >= 6) {
        return 'Aprovado'
    }
    else if (nota < 4) {
        return 'Reprovado'
    }
    else if (nota >= 4 && nota <= 6) {
        return 'Recuperação'
    }
}
console.log(alunoAprovado(4))
//------------------------------------
function numeroPositNegat(numero) {
    if (numero > 0) {
        return 'Positivo'
    }
    else if (numero < 0) {
        return 'Negativo'
    }
    else if (numero == 0) {
        return 'Zero'
    }
}
console.log(numeroPositNegat(-5))
//----------------------------------
function diasDaSemana(dia) {
    if (dia == 1) {
        return 'Segunda-Feira'
    }
    else if (dia == 2) {
        return 'Terça-Feira'
    }
    else if (dia == 3) {
        return 'Quarta-Feira'
    }
    else if (dia == 4) {
        return 'Quinta-Feira'
    }
    else if (dia == 5) {
        return 'Sexta-Feira'
    }
    else if (dia == 6) {
        return 'Sábado'
    }
    else if (dia == 7) {
        return 'Domingo'
    }
    else {
        return 'Número Inválido'
    }
}
console.log(diasDaSemana(4))
//----------------------------------
function valorFrete(peso) {
    if (peso < 5) {
        return 'O valor é R$ 10,00'
    }
    else if (peso >= 5 && peso <= 10) {
        return 'O valor é R$ 20,00'
    }
    else if (peso > 10) {
        return 'O valor é R$ 30,00'
    }
}
console.log(valorFrete(4))
//--------------------------------
function imprimirNumero(num) {
    num.forEach(function(num){
        console.log(num)
    })
}
imprimirNumero([1,2,6,4,8,7])
//-----------------------------------
function duplicaNumero(n) {
    let arrNum = []
    n.forEach(function(n){
        arrNum.push(n * 2)
    })
    console.log(arrNum)
}
duplicaNumero([1,2,3,4,5,6])
//------------------------------------
function numParaString(numeros) {
    let numerosTransformados = []
    numeros.forEach((numero)=>{
        numerosTransformados.push(numero.toString()) // converte para string
    })
    console.log(numerosTransformados)
}
numParaString([1,5,6,7])
//----------------------------------
function procuraNumeroRepetido(ns) {
    let numeroProcurado = 4
    let quantidadeVezesNumeroProcurado = 0
    ns.forEach((Element)=>{
        if (numeroProcurado === Element) {
            quantidadeVezesNumeroProcurado ++
        }
    })
    console.log(procuraNumeroRepetido([1,5,4,5,6,4,7,4]))
}
//----------------------------------
/* function descontoDezPorCento(precos) {
    let precosComDescontos = []
    precos.forEach((preco)=>{
        precosComDescontos.push((preco-preco * 10 / 100))
    })
    console.log(precosComDescontos)
}
descontoDezPorCento([1000, 50, 40, 5000])
//-------------------------------------

let btn = document.getElementById('btn')
btn.addEventListener('click', function(){
    console.log('Botão clicado')
})
//------------------------------------
let paragrafo1 = document.getElementById('paragrafo1')
let primeiro_clique = true
paragrafo1.addEventListener('click', function(){
    if (primeiro_clique) {
        paragrafo1.textContent = 'clicou'
    }
    else {
        paragrafo1.textContent = 'clicou novamente'
    }
    primeiro_clique = !primeiro_clique
})
*/