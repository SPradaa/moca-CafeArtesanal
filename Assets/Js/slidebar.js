// Open / Close Slidebar
const sidebar = document.getElementById('sidebar');
const btnClose = document.getElementById('btnClose');
const btnOpen = document.getElementById('btnOpen');

// variables para cambio de funciones sidebar
const menuPedidos = document.getElementById('menu-pedidos');
const menuProductos = document.getElementById('menu-productos');
const menuMesas = document.getElementById('menu-mesas');
const menuCategorias = document.getElementById('menu-categorias');
const menuUsuarios = document.getElementById('menu-usuarios');

// variables para cambio de estadisticas y pedidos
const totalPedidos   = document.getElementById('card-total-pedidos');
const pendientes     = document.getElementById('pendientes');
const preparacion    = document.getElementById('preparacion');
const entregados     = document.getElementById('entregados');
const ventas         = document.getElementById('ventas');

// Contenedores de informacion para cambio de estadisticas y pedidos
const pedidosGeneral   = document.getElementById('total-pedidos');
const totalPendientes     = document.getElementById('total-pendientes');
const totalPreparacion    = document.getElementById('total-preparacion');
const totalEntregados     = document.getElementById('total-entregados');
const totalVentas         = document.getElementById('total-ventas');

// variables para cambio de estadisticas y productos
const contenedorPedidos = document.getElementById('pedidos');
const contenedorProductos = document.getElementById('productos');
const contenedorMesas = document.getElementById('mesas');
const contenedorCategorias = document.getElementById('categorias');
const contenedorUsuarios = document.getElementById('usuarios');

//boton para abrir modal de nuevo producto
const NewProduct = document.getElementById('NewProduct');

//Modal para crear producto
const CreateProduct = document.getElementById('CreateProduct');

btnClose.addEventListener('click', () => {
    sidebar.classList.add('closed');
    sidebar.style.display = 'none';
    btnOpen.style.display = 'block';
});

btnOpen.addEventListener('click', () => {
    sidebar.classList.remove('closed');
    sidebar.style.display = 'block';
    btnOpen.style.display = 'none';
});

// pedidos en diferentes estados

totalPedidos.addEventListener('click', () => {
    pedidosGeneral.style.display = 'block';
    totalPendientes.style.display = 'none';
    totalPreparacion.style.display = 'none';
    totalEntregados.style.display = 'none';
    totalVentas.style.display = 'none';
});

pendientes.addEventListener('click', () => {
    pedidosGeneral.style.display = 'none';
    totalPendientes.style.display = 'block';
    totalPreparacion.style.display = 'none';
    totalEntregados.style.display = 'none';
    totalVentas.style.display = 'none';
});

preparacion.addEventListener('click', () => {
    pedidosGeneral.style.display = 'none';
    totalPendientes.style.display = 'none';
    totalPreparacion.style.display = 'block';
    totalEntregados.style.display = 'none';
    totalVentas.style.display = 'none';
});

entregados.addEventListener('click', () => {
    pedidosGeneral.style.display = 'none';
    totalPendientes.style.display = 'none';
    totalPreparacion.style.display = 'none';
    totalEntregados.style.display = 'block';
    totalVentas.style.display = 'none';
});

ventas.addEventListener('click', () => {
    pedidosGeneral.style.display = 'none';
    totalPendientes.style.display = 'none';
    totalPreparacion.style.display = 'none';
    totalEntregados.style.display = 'none';
    totalVentas.style.display = 'block';
});

//Menu de los diferentes contenedores del sidebar

menuPedidos.addEventListener('click', () => {
    contenedorPedidos.style.display = 'flex';
    contenedorProductos.style.display = 'none';
    contenedorMesas.style.display = 'none';
    contenedorCategorias.style.display = 'none';
    contenedorUsuarios.style.display = 'none';
    pedidosGeneral.style.display = 'block';
});

menuProductos.addEventListener('click', () => {
    contenedorPedidos.style.display = 'none';
    contenedorProductos.style.display = 'flex';
    pedidosGeneral.style.display = 'none';
    contenedorMesas.style.display = 'none';
    contenedorCategorias.style.display = 'none';
    contenedorUsuarios.style.display = 'none';
});
menuMesas.addEventListener('click', () => {
    contenedorPedidos.style.display = 'none';
    contenedorProductos.style.display = 'none';
    pedidosGeneral.style.display = 'none';
    contenedorMesas.style.display = 'flex';
    contenedorCategorias.style.display = 'none';
    contenedorUsuarios.style.display = 'none';
});
menuCategorias.addEventListener('click', () => {
    contenedorPedidos.style.display = 'none';
    contenedorProductos.style.display = 'none';
    pedidosGeneral.style.display = 'none';
    contenedorCategorias.style.display = 'flex';
    contenedorMesas.style.display = 'none';
    contenedorUsuarios.style.display = 'none';
});
menuUsuarios.addEventListener('click', () => {
    contenedorPedidos.style.display = 'none';
    contenedorProductos.style.display = 'none';
    pedidosGeneral.style.display = 'none';
    contenedorUsuarios.style.display = 'flex';
    contenedorMesas.style.display = 'none';
    contenedorCategorias.style.display = 'none';
});

// Modal de nuevo producto

CreateProduct.addEventListener('click', () => {
    NewProduct.style.display = 'flex';
});

NewProduct.addEventListener('click', (e) => {
    if(e.target===NewProduct){
    NewProduct.style.display = 'none';
    }
});


// Quitar mensaje de Exito cuando se crea un producto 
    setTimeout(() => {
        const msg = document.querySelector('.mensaje-exito');
        if (msg) msg.style.display = 'none';
    }, 3000);

// buscador 

const buscador = document.getElementById('buscarProducto');
const productos = document.querySelectorAll('.unidProduc');

buscador.addEventListener('keyup', function () {
    const texto = buscador.value.toLowerCase();

    productos.forEach(producto => {
        const nombre = producto
            .querySelector('.producName')
            .textContent
            .toLowerCase();

        producto.style.display = nombre.includes(texto)
            ? 'block'
            : 'none';
    });
});
