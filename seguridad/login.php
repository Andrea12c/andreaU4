<!-- includes/login.php -->
<div class="login-form" id="login">
    <h2>Iniciar Sesión</h2>
    <form onsubmit="handleLogin(event)">
        <p id="error-message" class="error hidden"></p>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Ingresar</button>
    </form>
</div>
