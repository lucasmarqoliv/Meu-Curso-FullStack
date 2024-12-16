// 

let opcao = 0;

while (opcao !==3) {
    console.log('Menu:');
    console.log('1. Dizer Olá');
    console.log('2. Dizer Tchau');
    console.log('3. Sair');


opcao = parseInt(prompt('Escolha uma opção: \n 1- Ola \n 2- Tchau \n '));

if (opcao === 1) {
    alert('Olá!');
} else if (opcao === 2) {
    alert('Tchau');
} else if (opcao === 3) {
    alert('Saindo...');
} else {
    alert('Opção inválida, tente novamente.');
    }
}