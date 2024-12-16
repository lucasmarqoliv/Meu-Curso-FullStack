function interruptor(){
    var imagem = document.getElementById("luz")

    if (imagem.src.includes("pic_bulbon.gif")){
        imagem.src = "pic_bulboff.gif"
    }else{
        imagem.src = "pic_bulbon.gif"
    }
}