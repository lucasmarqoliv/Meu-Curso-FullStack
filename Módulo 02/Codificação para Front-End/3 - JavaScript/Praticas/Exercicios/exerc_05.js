function numero_posit_negat(numero) {
    if (typeof numero !== 'number' || isNaN(numero)) {
        console.log('ERRO: O parâmetro deve ser um número');
    } else if (numero >= 0) {
        console.log('POSITIVO');
    } else {
        console.log('NEGATIVO');
    }
    return numero;
}

numero_posit_negat('p'); 
