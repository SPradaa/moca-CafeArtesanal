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

            <!-- ================= ESTADÍSTICAS ================= -->
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

            <section class="stats productos" id="productos">

                <p class="title-stats">Productos</p>
                <div class="card">
                    Total Productos<br>
                    <strong id="general-productos">0</strong>
                    <button class="btnAgregar" id="CreateProduct">Agregar Producto</button>
                </div>

                <div class="card">
                    <div class="unidProduc">
                        <div class="viewProducts">
                            <img src="./Assets/Images/GranoCafe.png" alt="taza de cafe" width="100px" height="100px">
                            <h4 class="producName">Taza de cafe</h4>
                            <p class="producPrice">$10</p>
                            <p class="prducPriceDesc">$9.99</p>
                            <p class="disponible">Disponible</p>

                        </div>


                    </div>

                </div>
            </section>

            <section class="stats mesas" id="mesas">
                <p class="title-stats">Mesas</p>
                <div class="card">
                    Total Mesas<br>
                    <strong id="general-mesas">0</strong>
                </div>
            </section>

            <section class="stats categorias" id="categorias">
                <p class="title-stats">Categorías</p>
                <div class="card">
                    Total Categorías<br>
                    <strong id="general-categorias">0</strong>
                </div>
            </section>

            <section class="stats usuarios" id="usuarios">
                <p class="title-stats">Usuarios</p>
                <div class="card">
                    Total Usuarios<br>
                    <strong id="general-usuarios">0</strong>
                </div>
            </section>



            <!-- ================= FIN ESTADÍSTICAS ================= -->


            <!-- ================= CONTENIDO DINÁMICO ================= -->
            <section class="content" id="total-pedidos">
                <p>No hay pedidos el dia de hoy</p>
            </section>
            <section class="content " id="total-pendientes">
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


    <!-- ================= MODALES ================= -->


    <div class="CreateProduct" id="NewProduct">

        <form action="" class="nuevoProducto">
            <div class="modal-header">
                <h2>Agregar Producto</h2>
                <span class="close" id="btnCloseModal">✕</span>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Nombre del Producto" name="nombreNuevoProducto" required>
                <input type="number" placeholder="Precio del Producto" name="precioNuevoProducto" required>
                <input type="number" placeholder="Precio Descuento del Producto" name="precioDescuentoNuevoProducto" >
                <input type="text" placeholder="Descripción del Producto" name="descripcionNuevoProducto" maxlength="100" required>
        
                <select name="categorias" id="categorias" class="selectRegistro" required>
                    <option value="">Seleccionar Categoría</option>
                    <?php foreach ($categorias as $categoria) { ?>
                        <option value="<?php echo $categoria['id']; ?>">
                            <?php echo $categoria['nombre']; ?>
                        </option>
                    <?php } ?>
                </select>

                <input type="file" placeholder="Imagen del Producto" accept="image/*" name="imagenNuevoProducto" required>
                
                <select name="estados" id="estados" class="selectRegistro" name="estadoNuevoProducto" required>
                    <option value="">Seleccionar Estado</option>
                    <?php foreach ($estadosProductos as $estado) { ?>
                        <option value="<?php echo $estado['id_estado']; ?>">
                            <?php echo $estado['estado']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit">Agregar</button>
            </div>
        </form>
    </div>




    <!-- ================= SCRIPTS ================= -->
    <script src="./Assets/Js/slidebar.js"></script>

</body>

</html>