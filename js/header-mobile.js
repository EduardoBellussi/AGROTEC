const removeProduto = document.getElementsByClassName("removebtn");
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.getElementById('close-menu');
const addToCartButton = document.getElementsByClassName("add-to-cart-btn");

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.add('active');
});
closeMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
});

document.getElementById('btnFinalizarCompra').addEventListener('click', function() {
  if (this.disabled) {
      alert("Você precisa estar logado para finalizar a compra.");
  } 
});

// Carrinho
document.querySelector('.cart-icon').addEventListener('click', function() {
  document.getElementById("cart-sidebar").classList.add('open');
});

function closeCart() {
  document.getElementById("cart-sidebar").classList.remove('open');
}

function updateRemoveProduct() {
  var removeProduto = document.querySelectorAll(".removebtn");
  for (var i = 0; i < removeProduto.length; i++) {
    removeProduto[i].addEventListener("click", removeProduct);
  }

  function removeProduct(event) {
    const productRow = event.target.parentElement.parentElement;
    const productTitle = productRow.querySelector(".cart-product").title;
    removeProductFromSession(productTitle);
    
    productRow.remove();
    checkEmptyCart();
    updateCartCount();
  }
}

function aumentarQuantidade(btn) {
  let quantidade = btn.parentElement.getElementsByClassName("quantidade")[0];
  quantidade.value = parseInt(quantidade.value) + 1;

  const productTitle = btn.parentElement.parentElement.querySelector(".cart-product").title;
  updateProductQuantity(productTitle, quantidade.value);
  updateCartCount();
}

function diminuirQuantidade(btn) {
  let quantidade = btn.parentElement.getElementsByClassName("quantidade")[0];
  if (quantidade.value > 1) {
      quantidade.value = parseInt(quantidade.value) - 1;
      const productTitle = btn.parentElement.parentElement.querySelector(".cart-product").title;
      updateProductQuantity(productTitle, quantidade.value);
      updateCartCount();
  }
}

for(var i = 0; i < addToCartButton.length; i++){
  addToCartButton[i].addEventListener("click", addProductToCart);
}

function addProductToCart(event) {
  const button = event.target;
  const productInfos = button.parentElement.parentElement.parentElement;
  const productImg = productInfos.getElementsByClassName("img-racao")[0].src;
  const productTitle = productInfos.getElementsByClassName("title-racao")[0].innerText;
  const finalTiltle = productTitle.substring(0, 23) + "...";
  
  const productCartName = document.getElementsByClassName("cart-product");
  for(var i = 0; i < productCartName.length; i++){
    if(productCartName[i].title == productTitle){
      productCartName[i].parentElement.parentElement.getElementsByClassName("quantidade")[0].value++;
      updateProductQuantity(productTitle, productCartName[i].parentElement.parentElement.getElementsByClassName("quantidade")[0].value);
      return;
    }
  }

  let newCartProduct = document.createElement("tr");
  newCartProduct.innerHTML = 
  `
  <td class="table-cart-quant">
    <button onclick="diminuirQuantidade(this)">-</button>
    <input type="text" class="quantidade" value="1" min="1" readonly>
    <button onclick="aumentarQuantidade(this)">+</button>
  </td>
  <td class="table-cart-itens">
    <img src="${productImg}">
    <p class="custom-tooltip cart-product" title="${productTitle}">${finalTiltle}</p>
    <span class="removebtn">&times;</span>
  </td>
  `;

  const tableBody = document.querySelector(".table-cart tbody");
  tableBody.append(newCartProduct);

  updateRemoveProduct();
  checkEmptyCart();
  

  saveProductToSession({
    title: productTitle,
    img: productImg,
    quantity: 1
  });
}


function checkEmptyCart() {
  const tableBody = document.querySelector(".table-cart tbody");
  const emptyMessage = document.querySelector(".cart-empty-message"); 

  if (tableBody.children.length === 0) {
    emptyMessage.style.display = "block";
  } else {
    emptyMessage.style.display = "none"; 
  }
}

function updateProductQuantity(productTitle, quantity) {
  let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  cart = cart.map(product => product.title === productTitle ? {...product, quantity: quantity} : product);
  sessionStorage.setItem('cart', JSON.stringify(cart));
}

function removeProductFromSession(productTitle) {
  let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  cart = cart.filter(product => product.title !== productTitle);
  sessionStorage.setItem('cart', JSON.stringify(cart));
}

function saveProductToSession(product) {
  let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  cart.push(product);
  sessionStorage.setItem('cart', JSON.stringify(cart));
}

function loadCartFromSession() {
  let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  cart.forEach(product => {
    let newCartProduct = document.createElement("tr");
    newCartProduct.innerHTML = 
    `
    <td class="table-cart-quant">
      <button onclick="diminuirQuantidade(this)">-</button>
      <input type="text" class="quantidade" value="${product.quantity}" min="1" readonly>
      <button onclick="aumentarQuantidade(this)">+</button>
    </td>
    <td class="table-cart-itens">
      <img src="${product.img}">
      <p class="custom-tooltip cart-product" title="${product.title}">${product.title.substring(0, 23) + "..."}</p>
      <span class="removebtn">&times;</span>
    </td>
    `;
  
    const tableBody = document.querySelector(".table-cart tbody");
    tableBody.append(newCartProduct);
  });

  updateRemoveProduct();
  checkEmptyCart();
}


window.onload = function() {
  loadCartFromSession();
};

updateRemoveProduct();

document.querySelector(".finalizarCompra").addEventListener("click", finalizarCompra);

function finalizarCompra() {
  const cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  const numeroWhatsApp = '15998605184'; 

  if (cart.length === 0) {
    alert("O carrinho está vazio!");
    return;
  }

  let mensagem = 'Olá, gostaria de finalizar a compra com os seguintes produtos:%0A';
  cart.forEach((produto, index) => {
    mensagem += `${index + 1}. ${produto.title} - Quantidade: ${produto.quantity}%0A`;
  });

  const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${mensagem}`;
  window.open(urlWhatsApp, '_blank');

}
let cartCount = 0;

document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function () {
        // Incrementar o contador
        cartCount++;

        // Selecionar o elemento do contador
        const cartCountElement = document.querySelector('.cart-count');

        // Exibir o contador apenas se for maior que 0
        if (cartCount > 0) {
            cartCountElement.style.display = 'inline-block'; // Exibe o contador
            cartCountElement.textContent = cartCount; // Atualiza o valor
        }
    });
});

function updateCartCount() {
  let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
  cartCount = cart.length;

  const cartCountElement = document.querySelector('.cart-count');
  if (cartCount > 0) {
    cartCountElement.style.display = 'inline-block'; 
    cartCountElement.textContent = cartCount; 
  } else {
    cartCountElement.style.display = 'none'; 
  }
}