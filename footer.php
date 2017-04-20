<footer>
    <div class="container">
        <p align="center">
            <?php
                $base = get_stylesheet_directory_uri();
                echo '<img class="deti-logo" src="' . $base . '/img/logo-deti-white.png">';
            ?>
        </p>
        <br />
        <p align="center" class="copyright"><b>Desenvolvido por <a href="https://davidsilva.pt/">David Silva</a></b> 
            (<a href="https://github.com/dmpasilva/studentsandteachersatdeti2017">código-fonte</a>)</p>
        <p align="center" class="copyright"><b>Edições anteriores:</b> <a href="/2015">2015</a> | <a href="/2016">2016</a></p>
    </div>
</footer>

<?php wp_footer(); ?>