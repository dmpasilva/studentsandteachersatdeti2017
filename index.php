<?php 
    
    // get WordPress header

    get_header(); 
    
    // Since we're creating a really basic application with no blog, we don't need the WP Loop

    $the_page = get_post();

    // this post's title and content

    $title = $the_page->post_title;
    $content = $the_page->post_content;

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
                
                $is_students = is_page('studentsatdeti');
                $is_teachers = is_page('teachersatdeti');

                if($is_students) {
                    echo '<img class="logo" src="' . $base . '/img/students.png">';
                }
                
                else if($is_teachers) { 
                    echo '<img class="logo" src="' . $base . '/img/teachers.png">';
                }

                else { 
                    echo '<img class="logo" src="' . $base . '/img/logo.png">';
                }

            ?>
        </div>

        <div class="col-sm-6 col-sm-offset-2 col-md-7 col-md-offset-1 col-lg-8 col-lg-offset-0">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_excerpt(); ?></h2>
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
                    <?php echo $content; ?>
            </div>
        </div>
    </div>
    </div>
    

</body>

<?php get_footer(); ?>

</html>