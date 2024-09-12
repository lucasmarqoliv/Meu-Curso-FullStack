// 7. Soma Condicional com Array: Crie um array de números e um botão. Quando o botão for clicado, calcule a soma de todos os números que são maiores que um determinado valor. O valor de referência deve ser inserido em um campo de entrada.


    let numeros = [10, 5, 7, 8, 9, 6, 4, 11];

    let div = document.getElementById('div') ;
    div.textContent = (`Array de numeros: ${numeros.join(", ")}`) 

    let calcular = document.getElementById('btn');

    function calcularNumerosMaiores(event) {
        event.preventDefault()
        let numero_digitado = parseFloat(document.getElementById('input').value);
        let resultado = document.getElementById('resultado')
        let numeros_maiores = numeros.filter(numero => 
            numero > numero_digitado)
        numeros_maiores = numeros_maiores.reduce((acumulador, numero) => acumulador + numero, 0)
        resultado.value = numeros_maiores;
    }

    calcular.addEventListener('click', calcularNumerosMaiores,{

    })


        

