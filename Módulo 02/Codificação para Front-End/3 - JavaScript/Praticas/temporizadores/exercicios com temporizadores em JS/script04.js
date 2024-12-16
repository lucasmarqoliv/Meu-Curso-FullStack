
// código que exibe uma mensagem no console apenas uma vez após 1 segundo e depois execute outra função a cada 4 segundos.

setTimeout(() => {
    console.log('mensagem do timeout')
}, 1000)

setInterval(() => {
    console.log('mensagem do setinterval')
}, 4000)
