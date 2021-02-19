import React from 'react';

const Cabecalho = () => {

    function loadHandlerIMG(event) {
        const imagem = event.target;
        const carregamento = imagem.nextSibling
        imagem.classList.remove("d-none")

        carregamento.classList.add("d-none")
    }

    React.useEffect(()=>{
        const spinnerDiv = document.getElementById("spinnerNasa");
        const imagem = spinnerDiv.previousSibling;

        spinnerDiv.style.width = window.getComputedStyle(imagem).getPropertyValue("width")
        spinnerDiv.style.height = window.getComputedStyle(imagem).getPropertyValue("height");
        console.log(window.getComputedStyle(imagem).getPropertyValue("height"))

    },
    [])

    return (
        <div>
            <img src="https://www.nasa.gov/sites/default/files/thumbnails/image/hs-2015-02-a-hires_jpg.jpg" style={{ width: "500px" }} alt="img" className="d-none" onLoad={loadHandlerIMG}/>
            <div id="spinnerNasa" className="bg-white">
            <div className="spinner-border text-dark" role="status">
                <span class="sr-only">Carregando Imagem...</span>
            </div>
            </div>
        </div>
    )

};

export default Cabecalho;