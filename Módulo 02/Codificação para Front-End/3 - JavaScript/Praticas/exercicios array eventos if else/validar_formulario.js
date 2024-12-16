//3. Validação de Formulário: Crie um formulário com dois campos de entrada e um botão de envio. Quando o botão for clicado, verifique se ambos os campos contêm valores e se um campo contém um valor que é um número positivo. Exiba uma mensagem de erro se a validação falhar.


let input01 = document.getElementById('input01')
let input02 = document.getElementById('input02')
let btn01 = document.getElementById('btn01')
let formulario = document.getElementById('formulario')

formulario.addEventListener('submit', function(event){
    let valor1 = input01.value // .value Obtém o valor do primeiro campo.
    let valor2 = input02.value
    event.preventDefault() //Impede o envio padrão do formulário para você poder manipular os dados.
    if (valor1 == '' || valor2 == '') {
        alert('preencha todos os campos')
        return
    }

    let numero = parseFloat(valor1) //parseFloat(valorCampo1): Converte o valor do primeiro campo para um número.

if (isNaN(numero) || numero <= 0) { //Verifica se o número é inválido ou não é positivo.
    alert ('O primeiro campo deve conter um número positivo.')
    return
}
alert ('formulário enviado com sucesso!')
})



