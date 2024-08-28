

function executarFuncao() {
    console.log('função executada!')
}
// // Executa a função imediatamente
setTimeout(() =>{
    executarFuncao()
    //Configura a execução repetida a cada 6 segundos
    setInterval(executarFuncao, 6000)
},0)

