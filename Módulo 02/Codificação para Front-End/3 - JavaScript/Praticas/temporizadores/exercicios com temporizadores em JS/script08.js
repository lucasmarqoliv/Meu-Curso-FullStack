
//mostra uma mensagem no console a cada 4 segundos, mas que para após 15 segundos. Usando o setInterval para a repetição e setTimeout para parar.


// Função para mostrar a mensagem no console
function showMessage() {
    console.log('Esta mensagem será exibida a cada 4 segundos.');
}

// Inicia o setInterval para mostrar a mensagem a cada 4 segundos
let intervalId = setInterval(()=>{
    showMessage()
}, 4000);

// Para a repetição após 15 segundos
setTimeout(function() {
    clearInterval(intervalId); // clearInterval é uma função em JavaScript usada para parar a execução repetitiva de uma função que foi iniciada com setInterval.
    console.log('Repetição interrompida após 15 segundos:');
}, 15000);