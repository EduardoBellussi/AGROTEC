console.log("conexão sucedida")
var celular = document.getElementById("telefone");

celular.addEventListener("input", () =>{
    var limparValor = celular.nodeValue.replace(/\D/g, "").substring(0,11);
    var numerosArray = limparValor.split("");
    var numeroFormatado = "";

    if(numerosArray.length >0){
        numeroFormatado += `(${numerosArray.slice(0,2).join("")})`;
    }
    if(numerosArray.length >2){
        numeroFormatado += `${numerosArray.slice(2,7).join("")}`;
    }
    if(numerosArray.length >7){
        numeroFormatado += `-${numerosArray.slice(7,11).join("")}`;
    }


    celular.value = numeroFormatado;
});