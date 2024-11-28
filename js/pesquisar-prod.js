function filterProducts() {
    var input, filter, productList, product, i, txtValue, visibleCount;
    input = document.getElementById('search');
    filter = input.value.toLowerCase();
    productList = document.getElementsByClassName('produto');
    visibleCount = 0; // Contador de produtos visíveis
    
    for (i = 0; i < productList.length; i++) {
        product = productList[i].getElementsByTagName("h3")[0];
        txtValue = product.textContent || product.innerText;
        
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            productList[i].style.display = ""; // Mostra o produto
            visibleCount++; // Incrementa o contador de produtos visíveis
        } else {
            productList[i].style.display = "none"; // Oculta o produto
        }
    }

    // Exibe a mensagem de "Nenhum produto encontrado" se nenhum produto for visível
    var notFoundMessage = document.getElementById("not-found");
    if (visibleCount === 0) {
        notFoundMessage.style.display = "block"; // Mostra a mensagem
    } else {
        notFoundMessage.style.display = "none"; // Oculta a mensagem
    }
}
