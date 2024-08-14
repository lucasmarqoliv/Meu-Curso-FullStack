//class Teste { // para criar classe: PrimeiraLetraMaiuscula
    //constructor() { // esse metodo executando sempre que se cria uma nova instanciação.
    // não se usa o FUNCTION dentro de metodos em classes
        console.log('criando uma nova instância.')// esse é o comando, mas pode ser outro
   // }
//}

//let teste1 = new Teste // retorna criando uma nova instância.

let nome = new TestandoNome("Lucas", "Marques");

class TestandoNome {
    constructor (nome, sobrenome) {
        console.log("criando instância de usuario")
        console.log(nome)
console.log(sobrenome)
    }




}
