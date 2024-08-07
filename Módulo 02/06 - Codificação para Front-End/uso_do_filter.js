// função que recebe como parametro um array de numeros, e retorna um novo array contendo os numeros pares.
function filterEvens(numeros) {
    return numeros.filter(numeros => numeros % 2 === 0) // uso do metodo filter para filtrar os numeros pares do array de numeros.
}
let numeros = [10, 5, 4, 3, 1];
let numeros_pares = filterEvens(numeros); // essa variavel recebe o retorno da função que está sendo aplicada o filter.
console.log(filterEvens(numeros)); // retorna [ 10, 4 ]
