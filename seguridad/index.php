<?php
// Si quieres incluir configuraciones de PHP o validaciones, lo puedes hacer aquí
// Ejemplo: include('config.php');
?>

<!-- index.php -->
<?php include('includes/header.php'); ?>

<!-- Aquí puedes incluir tu lógica PHP para manejar la autenticación -->
<?php include('includes/login.php'); ?>

<div class="container hidden" id="services">
    <nav>
        <a href="#services">Servicios</a>
        <a href="#contact">Contacto</a>
    </nav>

    <div class="crud">
        <h2>Administrar Servicios</h2>
        <form id="service-form" onsubmit="addService(event)">
            <input type="text" id="service-name" placeholder="Nombre del servicio" required>
            <input type="text" id="service-description" placeholder="Descripción del servicio" required>
            <button type="submit">Agregar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="service-list"></tbody>
        </table>
    </div>
</div>

<?php include('includes/footer.php'); ?>
