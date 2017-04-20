<?php 
    
    // get WordPress header

    get_header(); 
    
    // this post's title and content

    $title = "404: Conteúdo não encontrado";
    $content = "Não foi possível encontrar a página pedida";

    // Ready to go!

?>
    
    <!-- Page Content -->

    <a  name="content"></a>
    
    <div class="content-section-a">
        <div class="container">

        <div class="col-sm-4 row col-md-4">
            <?php
                // load specific page logo
                $base = get_stylesheet_directory_uri();
                echo '<img class="logo" src="' . $base . '/img/logo.png">';

            ?>
        </div>

        <div class="col-sm-6 col-sm-offset-2 col-md-7 col-md-offset-1 col-lg-8 col-lg-offset-0">
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $content; ?></h2>
        </div>
        
        </div>
    </div>

    <!-- blank line end -->

    <div class="content-section-b" >
    <div class="container">
        <div class="row">
            <!-- padding left -->
            <div class="col-lg-3"></div>
            <!-- end padding left -->

            <!-- the main content -->
            <div class="col-lg-9 main-content col-xs-10 col-xs-offset-1 col-lg-offset-0">
                <h2>Por que estou a ver isto?</h2>
                <hr class="section-heading-spacer" />
                <div class="clearfix"></div>
                <p>A página ou recurso a que está a tentar aceder não existe neste website.</p>
                <p>Por favor confirme se o endereço a que queria aceder se encontra correto.</p>
                <p><a href="/">Clique aqui para voltar à página inicial.</a></p>
            </div>
        </div>
    </div>
    </div>
    

</body>

<?php get_footer(); ?>

</html>