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
            <section class="stats">

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


    <!-- ================= MENÚ INFERIOR MÓVIL ================= -->
    <nav class="menu-bottom">
        <a class="active">📦</a>
        <a>📦</a>
        <a>🪑</a>
        <a>📂</a>
        <a>👤</a>
    </nav>


    <!-- ================= SCRIPTS ================= -->
    <script src="./Assets/Js/slidebar.js"></script>

</body>
</html>
