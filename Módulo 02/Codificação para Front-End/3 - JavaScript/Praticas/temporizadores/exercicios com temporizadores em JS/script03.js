
//mostra uma mensagem no console a cada 3 segundos, mas que para após 10 segundos. Usando o setInterval para a repetição e setTimeout para parar.


// Função para mostrar a mensagem no console
function showMessage() {
    console.log("Esta mensagem será exibida a cada 3 segundos.");
}

// Inicia o setInterval para mostrar a mensagem a cada 3 segundos
let intervalId = setInterval(showMessage, 3000);

// Para a repetição após 10 segundos
setTimeout(function() {
    clearInterval(intervalId); // clearInterval é uma função em JavaScript usada para parar a execução repetitiva de uma função que foi iniciada com setInterval.
    console.log("Repetição interrompida após 10 segundos.");
}, 10000);
