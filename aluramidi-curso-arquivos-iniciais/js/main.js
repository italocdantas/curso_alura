function tocaSomPom (idElementoAudio){
    document.querySelector(idElementoAudio).play()
}



const listaDeTeclas = document.querySelectorAll('.tecla');



let contador = 0;

while (contador < listaDeTeclas.length){

    //recebe  a listagem
    const tecla = listaDeTeclas[contador];
    
    //acessa a classe
    const instrumento = tecla.classList[1];

    //concatena a classe do botão com a classe do som
    const idTecla = `#som_${instrumento}`;

    tecla.onclick = function (){
        tocaSomPom(idTecla);
    };
    contador++;
    
}

