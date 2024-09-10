//6. Calculadora Simples: Crie uma calculadora que permite ao usuário inserir dois números e escolher uma operação (+, -, *, /) a partir de um menu suspenso. Use um botão para calcular o resultado e exibi-lo em um elemento de resultado.


let calcular = document.getElementById('btn_calcular');

calcular.addEventListener('click', function(event){
    event.preventDefault()
    let num1 = parseFloat(document.getElementById('numero_1').value);
    let num2 = parseFloat(document.getElementById('numero_2').value);
    let operacao = document.getElementById('operacao').value;
    let resultado;
    if (operacao === '+') {
        resultado = num1 + num2;
    }
    else if (operacao === '-') {
        resultado = num1 - num2;
    }
    else if (operacao === '*') {
        resultado = num1 * num2;
    }
    else if (operacao === '/') {
        resultado = num1 / num2;
    }
    document.getElementById('resultado').value = resultado;  // Exibe o resultado

})
