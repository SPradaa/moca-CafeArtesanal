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
const totalPedidos   = document.getElementById('total-pedidos');
const pendientes     = document.getElementById('pendientes');
const preparacion    = document.getElementById('preparacion');
const entregados     = document.getElementById('entregados');
const ventas         = document.getElementById('ventas');

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



