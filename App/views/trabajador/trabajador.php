<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ================= META ================= -->
    <meta charset="UTF-8">
    <title>Admin Cafetería</title>

    <!-- ================= ESTILOS ================= -->
    <link rel="stylesheet" href="./Assets/Css/trabajador.css">
    <link rel="icon" type="image/webp" href="./Assets/Images/GranoCafe.png">

    <!-- ================= FUENTES ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ================= CONTENEDOR GENERAL ================= -->
    <div class="layout">

        <!-- ================= SIDEBAR ================= -->
        <aside class="sidebar" id="sidebar">

            <!-- Header del sidebar -->
            <div class="sidebar-header">
                <div class="logo">☕</div>
                <h2>Admin <span>Panel</span></h2>
                <span class="close" id="btnClose">✕</span>
            </div>

            <!-- Menú lateral -->
            <nav class="menu">
                <a id="menu-pedidos" class="active">📦 Pedidos</a>
                <a id="menu-productos">📦 Productos</a>
                <a id="menu-mesas">🪑 Mesas</a>
                <a id="menu-categorias">📂 Categorías</a>
                <a id="menu-usuarios">👤 Usuarios</a>
            </nav>

        </aside>
        <!-- ================= FIN SIDEBAR ================= -->


        <!-- ================= CONTENIDO PRINCIPAL ================= -->
        <main class="main">

            <!-- Header principal -->
            <header class="main-header">
                <span class="open" id="btnOpen">☰ Menu</span>
                <h1 class="title-main">Mocca - Cafetería</h1>
            </header>

            <!-- ================= MENSAJE DE ÉXITO ================= -->
            <?php if (isset($_GET['success']) && $_GET['success'] === 'producto_creado'): ?>
                <div class="mensaje-exito">
                    <strong>✔ Producto creado correctamente</strong>
                    <span class="cerrar" onclick="this.parentElement.style.display='none'">✕</span>
                </div>
            <?php endif; ?>

            <!-- ================= ESTADÍSTICAS PEDIDOS ================= -->
            <section class="stats" id="pedidos">

                <p class="title-stats">Pedidos</p>

                <div class="card" id="card-total-pedidos">
                    Total Pedidos<br>
                    <strong id="general-pedidos">0</strong>
                </div>

                <div class="card" id="card-pendientes">
                    Pendientes<br>
                    <strong id="pendientes">0</strong>
                </div>

                <div class="card" id="card-preparacion">
                    Preparación<br>
                    <strong id="preparacion">0</strong>
                </div>

                <div class="card" id="card-entregados">
                    Entregados<br>
                    <strong id="entregados">0</strong>
                </div>

                <div class="card" id="card-ventas">
                    Ventas<br>
                    <strong id="ventas">$0</strong>
                </div>

                

            </section>

            <!-- ================= ESTADÍSTICAS PRODUCTOS ================= -->
            <section class="stats productos" id="productos">

                <p class="title-stats">Productos</p>

                <div class="card">
                    Total Productos<br>
                    <strong id="general-productos"><?php echo $CountProductos; ?></strong>
                    <button class="btnAgregar" id="CreateProduct">Agregar Producto</button>
                </div>

                <div class="buscador-productos">
    <input type="text"id="buscarProducto"placeholder="Buscar producto por nombre..." autocomplete="off" >
</div>

                <!-- Producto de ejemplo -->
                <div class="card">
                   
                     <?php foreach ($productos as $producto): ?>
    <div class="unidProduc">
        <div class="viewProducts">

            <!-- Imagen del producto -->
            <img 
                src="<?= $producto['imagen_url'] ?>" 
                alt="<?= htmlspecialchars($producto['nombre']) ?>" 
                width="100" 
                height="100"
            >

            <!-- Nombre -->
            <h4 class="producName">
                <?= htmlspecialchars($producto['nombre']) ?>
            </h4>

            <!-- Precio -->
            <p class="producPrice">
                $<?= number_format($producto['precio'], 2) ?>
            </p>

            <!-- Precio con descuento -->
            <?php if (!empty($producto['precioDescuento'])): ?>
                <p class="prducPriceDesc">
                    $<?= number_format($producto['precioDescuento'], 2) ?>
                </p>
            <?php endif; ?>

            <!-- Estado -->
            <p class="disponible">
                <?= htmlspecialchars($producto['estado']) ?>
            </p>

        </div>
    </div>
<?php endforeach; ?>

                </div>

            </section>

            <!-- ================= ESTADÍSTICAS MESAS ================= -->
            <section class="stats mesas" id="mesas">
                <p class="title-stats">Mesas</p>
                <div class="card">
                    Total Mesas<br>
                    <strong id="general-mesas">0</strong>
                </div>
            </section>

            <!-- ================= ESTADÍSTICAS CATEGORÍAS ================= -->
            <section class="stats categorias" id="categorias">
                <p class="title-stats">Categorías</p>
                <div class="card">
                    Total Categorías<br>
                    <strong id="general-categorias">0</strong>
                </div>
            </section>

            <!-- ================= ESTADÍSTICAS USUARIOS ================= -->
            <section class="stats usuarios" id="usuarios">
                <p class="title-stats">Usuarios</p>
                <div class="card">
                    Total Usuarios<br>
                    <strong id="general-usuarios">0</strong>
                </div>
            </section>

            <!-- ================= CONTENIDO DINÁMICO ================= -->
            <section class="content" id="total-pedidos">
                <p>No hay pedidos el dia de hoy</p>
            </section>

            <section class="content" id="total-pendientes">
                <p>No hay pedidos Pendientes</p>
            </section>

            <section class="content" id="total-preparacion">
                <p>No hay pedidos en Preparación</p>
            </section>

            <section class="content" id="total-entregados">
                <p>No hay pedidos Entregados</p>
            </section>

            <section class="content" id="total-ventas">
                <p>No hay ingresos aun </p>
            </section>

        </main>
        <!-- ================= FIN MAIN ================= -->

    </div>
    <!-- ================= FIN LAYOUT ================= -->


    <!-- ================= MODAL CREAR PRODUCTO ================= -->
    <div class="CreateProduct" id="NewProduct">

        <form action="index.php?ruta=createProduct"
              class="nuevoProducto"
              enctype="multipart/form-data"
              method="POST">

            <!-- Header modal -->
            <div class="modal-header">
                <h2>Agregar Producto</h2>
                <span class="close" id="btnCloseModal">✕</span>
            </div>

            <!-- Cuerpo modal -->
            <div class="modal-body">
                <input type="text" placeholder="Nombre del Producto" name="nombreNuevoProducto" required>
                <input type="number" placeholder="Precio del Producto" name="precioNuevoProducto" required>
                <input type="number" placeholder="Precio Descuento del Producto" name="precioDescuentoNuevoProducto">
                <input type="text" placeholder="Descripción del Producto" name="descripcionNuevoProducto" maxlength="100" required>

                <!-- Select categorías -->
                <select name="categorias" id="categorias" class="selectRegistro" required>
                    <option value="">Seleccionar Categoría</option>
                    <?php foreach ($categorias as $categoria) { ?>
                        <option value="<?php echo $categoria['id']; ?>">
                            <?php echo $categoria['nombre']; ?>
                        </option>
                    <?php } ?>
                </select>

                <!-- Imagen del producto -->
                <input type="file" placeholder="Imagen del Producto" accept="image/*" name="imagenNuevoProducto" required>

                <!-- Estado del producto -->
                <select id="estados" class="selectRegistro" name="estadoNuevoProducto" required>
                    <option value="">Seleccionar Estado</option>
                    <?php foreach ($estadosProductos as $estado) { ?>
                        <option value="<?php echo $estado['id_estado']; ?>">
                            <?php echo $estado['estado']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Footer modal -->
            <div class="modal-footer">
                <button type="submit">Agregar</button>
            </div>

        </form>
    </div>

    <!-- ================= SCRIPTS ================= -->
    <script src="./Assets/Js/slidebar.js"></script>

</body>
</html>
