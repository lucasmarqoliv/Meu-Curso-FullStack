async function exemploAssincrono() {
    console.log('Início da função assíncrona');
    // Simula uma operação assíncrona que leva 2 segundos para ser concluída
    await new Promise(resolve => setTimeout(resolve, 2000));
    console.log('Operação assíncrona concluída');
    return 'Resultado da função assíncrona';
}

async function executar() {
    console.log('Antes de chamar a função assíncrona');
    let resultado = await exemploAssincrono();
    //let resultado = exemploAssincrono();
    console.log('Depois de chamar a função assíncrona');
    console.log('Resultado:', resultado);
}

executar();