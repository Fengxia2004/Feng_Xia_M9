<footer>
    <p>Segueix-nos a les nostres xarxes socials:</p>
    <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
    </ul>

    <?php
    if (isset($_SESSION['usuari'])) {
        echo '<p><a href="logout.php">Cerrar sesión</a></p>';
    }
    ?>
</footer>
