
let contador = 1;

function executar_funcao() {
    console.log(`função executada ${contador}`)
}


const intervalo =  setInterval(() =>{
    executar_funcao()
    contador = contador + 1
    if (contador > 10) {
        clearInterval(intervalo)
    }
},2000)




