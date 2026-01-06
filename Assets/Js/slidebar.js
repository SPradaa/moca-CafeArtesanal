// Open / Close Slidebar
const sidebar = document.getElementById('sidebar');
const btnClose = document.getElementById('btnClose');
const btnOpen = document.getElementById('btnOpen');

// variables para cambio de funciones
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

