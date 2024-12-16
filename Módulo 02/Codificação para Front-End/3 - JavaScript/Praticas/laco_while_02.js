let contador = 0;
while (contador < 10) {
    contador ++;
    if (contador === 5) {
        continue; // pula o resto do código e continua com a próxima iteração
    }
    if (contador === 8) {
        break; // interrompe o laço
    }
    console.log('o contador é: ', contador);
}