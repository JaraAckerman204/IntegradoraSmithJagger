// Variable global para almacenar los productos en el carrito
let allProducts = [];

// Función para mostrar los productos en el carrito y actualizar la página
const showHTML = () => {
  const cartProductsList = document.querySelector('#cart-products-list');
  const cartTotalAmount = document.querySelector('#cart-total-amount');
  const contadorProductos = document.querySelector('#contador-productos');
  const cartEmpty = document.querySelector('#cart-empty-message');
  const cartTotal = document.querySelector('.cart-total');
  
  if (!cartProductsList || !cartTotalAmount || !contadorProductos) {
    console.error('No se encontraron los elementos del carrito');
    return;
  }
  
  // Limpiar los productos existentes en el carrito
  cartProductsList.innerHTML = '';

  let total = 0;
  let totalOfProducts = 0;

  // Si el carrito está vacío
  if (!allProducts.length) {
    cartEmpty.classList.remove('hidden');
    cartTotal.style.display = 'none';
  } else {
    cartEmpty.classList.add('hidden');
    cartTotal.style.display = 'flex';
    
    // Iterar sobre todos los productos en el carrito
    allProducts.forEach(product => {
      const containerProduct = document.createElement('div');
      containerProduct.classList.add('cart-product');

      // Crear el HTML para mostrar el producto
      containerProduct.innerHTML = `
        <div class="info-cart-product">
            <p class="titulo-producto-carrito">${product.title}</p>
            <span class="cantidad-producto-carrito">Cantidad: ${product.quantity}</span>
            <span class="precio-producto-carrito">$${(product.price * product.quantity).toFixed(2)}</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      `;

      // Agregar el producto al carrito
      cartProductsList.appendChild(containerProduct);

      total += product.quantity * product.price;
      totalOfProducts += product.quantity;
    });
  }

  // Actualizar el valor total y el contador
  cartTotalAmount.innerText = total.toFixed(2);
  contadorProductos.innerText = totalOfProducts;
};

// Escuchar clics en TODO el documento para detectar botones "Comprar"
document.addEventListener('click', e => {
  // Si se hace clic en un botón de "Comprar"
  if (e.target.classList.contains('btn-add-cart')) {
    const product = e.target.closest('.juego');
    
    if (product) {
      const infoProduct = {
        quantity: 1,
        title: product.querySelector('.nom').textContent.trim(),
        price: parseFloat(product.querySelector('.price').textContent.slice(1)),
      };

      // Comprobar si el producto ya existe en el carrito
      const exists = allProducts.some(product => product.title === infoProduct.title);

      if (exists) {
        // Si existe, incrementar cantidad
        allProducts = allProducts.map(product => {
          if (product.title === infoProduct.title) {
            product.quantity++;
          }
          return product;
        });
      } else {
        // Si no existe, agregarlo
        allProducts.push(infoProduct);
      }

      // Actualizar el carrito
      showHTML();
      
      // Mostrar el carrito automáticamente al agregar producto
      const cartContainer = document.querySelector('.container-cart-products');
      if (cartContainer) {
        cartContainer.classList.remove('hidden-cart');
      }
      
      console.log('✅ Producto agregado:', infoProduct.title);
    }
  }

  // Si se hace clic en el botón de eliminar
  if (e.target.classList.contains('icon-close') || e.target.closest('.icon-close')) {
    const product = e.target.closest('.cart-product');
    if (product) {
      const title = product.querySelector('.titulo-producto-carrito').textContent.trim();

      // Filtrar el producto del carrito
      allProducts = allProducts.filter(product => product.title !== title);

      // Actualizar el carrito
      showHTML();
    }
  }
});

// Mostrar/ocultar el carrito al hacer clic en el ícono
document.addEventListener('DOMContentLoaded', () => {
  const iconCart = document.querySelector('.icon-cart');
  const cartContainer = document.querySelector('.container-cart-products');
  
  if (iconCart && cartContainer) {
    iconCart.addEventListener('click', (e) => {
      e.stopPropagation();
      cartContainer.classList.toggle('hidden-cart');
      console.log('🛒 Carrito toggle');
    });
    
    // Cerrar el carrito al hacer clic fuera
    document.addEventListener('click', (e) => {
      if (!iconCart.contains(e.target) && !cartContainer.contains(e.target)) {
        cartContainer.classList.add('hidden-cart');
      }
    });
    
    console.log('✅ Event listener del carrito agregado correctamente');
  } else {
    console.error('❌ No se encontró el ícono del carrito o el contenedor');
    console.log('iconCart:', iconCart);
    console.log('cartContainer:', cartContainer);
  }

  // BOTÓN DE WHATSAPP
  const checkoutButton = document.querySelector('#checkout-button');
  
  if (checkoutButton) {
    console.log('✅ Botón de WhatsApp encontrado');
    
    checkoutButton.addEventListener('click', () => {
      console.log('🔔 Click en botón de WhatsApp');
      console.log('📦 Productos en carrito:', allProducts);
      
      if (allProducts.length === 0) {
        alert('El carrito está vacío');
        return;
      }

      // Generar mensaje para WhatsApp
      const productos = allProducts.map(product => {
        return `${product.quantity}x ${product.title} - $${(product.price * product.quantity).toFixed(2)}`;
      }).join('%0A');

      const total = allProducts.reduce((acc, product) => acc + product.price * product.quantity, 0);
      const mensaje = `¡Hola! 🎮 Quiero hacer un pedido:%0A%0A${productos}%0A%0A💰 *Total: ${total.toFixed(2)}*%0A%0A¡Gracias!`;
      // NÚMERO DE WHATSAPP CORRECTO (del archivo raíz)
      const url = `https://wa.me/5218719032652?text=${mensaje}`;
      
      console.log('🔗 URL generada:', url);
      
      // Abrir WhatsApp en nueva pestaña
      window.open(url, '_blank');
    });
  } else {
    console.error('❌ No se encontró el botón #checkout-button');
  }
});

// ==========================================
// FUNCIONES PARA EL POPUP DE SUSCRIPCIÓN
// ==========================================

function showPopupOnLoad() {
  const overlay = document.getElementById("overlay");
  const popup = document.getElementById("popup");
  if (overlay && popup) {
    overlay.style.display = "block";
    popup.style.display = "block";
    console.log('✅ Popup mostrado');
  }
}

function closePopup() {
  const overlay = document.getElementById("overlay");
  const popup = document.getElementById("popup");
  if (overlay && popup) {
    overlay.style.display = "none";
    popup.style.display = "none";
    console.log('✅ Popup cerrado');
  }
}

function submitForm(event) {
  event.preventDefault();
  const email = document.getElementById("email").value;
  const mensaje = encodeURIComponent("¡Únete a la comunidad gamer! Correo: " + email);
  // NÚMERO DE WHATSAPP CORRECTO (del archivo raíz)
  const url = "https://wa.me/5218719032652?text=" + mensaje;
  window.open(url, '_blank');
  closePopup();
  console.log('✅ Formulario enviado con email:', email);
}

// Hacer las funciones globales para que funcionen con onclick en el HTML
window.showPopupOnLoad = showPopupOnLoad;
window.closePopup = closePopup;
window.submitForm = submitForm;

// Mensaje de confirmación de que el script se cargó
console.log('🎮 Script del carrito cargado correctamente');