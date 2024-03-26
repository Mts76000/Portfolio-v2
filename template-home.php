<?php

/**
 * Template Name: Homepage
 */
get_header();
?>



<section id="home">
    <div class="wrap">

        <div class="full-home-text">
            <div class="home-text">
                <p>Bonjour, je m'appelle</p>
                <p class="nom">MATHIS LAMOTTE</p>
                <p>je suis un <span id="changement" class="text-gray"> </span> 👋🏻</p>
            </div>
            <div class="home-bouton">
                <a data-aos="fade-up" data-aos-duration="500" href="#skills">Voir plus</a>
            </div>
        </div>
        <div class="image">
            <img data-aos="fade-left" data-aos-duration="1000" src="<?php echo asset("img/full-svg.svg"); ?> " alt="home-svg">
        </div>
        <div class="bottom">
            <div class="end" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500">
                <div class="icone">
                    <a href="<?php echo verifChamp(6, 'link-github') ?>" target="_blank" aria-label="github"> <i class="fa-brands fa-github-alt"></i></a>
                    <span class="name">Github</span>
                </div>
                <div class="scrool">
                    <a href="#skill">
                        <p>scrool</p>
                    </a>
                    <i class="fa-solid fa-angle-down"></i>

                </div>
            </div>
        </div>
    </div>
</section>




<section id="skills">
    <div class="wrap2" id="skill">


        <div class="skills-text">
            <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="750">Compétences</h2>
            <p data-aos="fade-down" data-aos-duration="500" data-aos-delay="50"><?php echo verifChamp(6, 'skills-text') ?></p>
            <p data-aos="fade-down" data-aos-duration="500" data-aos-delay="50">Visitez mon <a target="_blank" href="<?php echo verifChamp(6, 'link-github') ?>">github</a> pour plus de détails.</p>
        </div>

        <?php
        $args = array(
            'post_type' => 'skill',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'asc',
            'posts_per_page' => 10
        );

        $the_query = new WP_Query($args);

        ?>
        <div class="logo-skills">
            <?php
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <i data-aos="fade-down" data-aos-duration="500" data-aos-delay="50" class="<?php echo get_field('icone') ?>"></i>

            <?php }
            }
            wp_reset_postdata(); ?>
        </div>

    </div>
    <!--                    <img src="--><?php //echo asset("img/pc-svg.svg"); 
                                            ?><!-- " alt="pc-svg" >-->
</section>


<section id="work">
    <div class="full-content">
        <?php

        $args = array(
            'post_type' => 'work',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order' => 'asc',
            'posts_per_page' => 5
        );


        $the_query = new WP_Query($args);
        ?>

        <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                $metas = get_post_meta(get_the_ID());
                $url = web_r($metas, 'video');
        ?>
                <section class="panel">
                    <div class="work-content">
                        <div class="work-text">
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <h4>Langage :</h4>
                            <?php echo get_the_content(); ?>
                            <a target="_blank" href="<?php echo web_r($metas, 'link-projet') ?>">Voir le code <i class="fa-solid fa-angle-down"></i> </a>
                        </div>
                        <div class="work-img">

                            <video controls>
                                <source src="<?php echo wp_get_attachment_url($url); ?>" type="video/mp4">
                            </video>

                        </div>
                    </div>
                </section>
        <?php }
        }
        wp_reset_postdata(); ?>
    </div>

</section>



<section id="work-mobil">
    <div class="wrap">
        <div class="full-content-mobil">
            <?php

            $args = array(
                'post_type' => 'work',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'asc',
                'posts_per_page' => 5
            );


            $the_query = new WP_Query($args);
            ?>

            <?php
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $metas = get_post_meta(get_the_ID());
                    $url = web_r($metas, 'video');
            ?>
                    <section class="panel-mobil">
                        <div class="work-content-mobil">
                            <div class="work-text-mobil">
                                <h3><?php echo get_the_title(); ?></h3>
                                <p class="desc"><?php echo get_the_excerpt(); ?></p>
                                <h4>Language :</h4>
                                <?php echo get_the_content(); ?>
                                <a class="link" target="_blank" href="<?php echo web_r($metas, 'link-projet') ?>">View the code <i class="fa-solid fa-angle-right"></i> </a>
                            </div>
                            <div class="work-img-mobil">

                                <video controls autoplay>
                                    <source src="<?php echo wp_get_attachment_url($url); ?>" type="video/mp4">
                                </video>

                            </div>
                        </div>
                    </section>
            <?php }
            }
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>







<section id="contact">
    <div class="wrap">
        <div class="big-form">
            <div class="form">
                <div class="a">
                    <div class="wrap2 suc-contact">
                        <h2 class="titreform" data-aos="fade-up">Contactez-moi</h2>
                        <form id="theformulaire" method="post" novalidate data-aos="fade-up" data-aos-duration="500">
                            <div class="top">
                                <div class="div-prenom">
                                    <input type="text" placeholder="Prenom *" name="prenom">
                                    <span class="error" id="error_prenom"></span>
                                </div>
                                <div class="div-nom">
                                    <input type="text" placeholder="Nom *" name="nom">
                                    <span class="error" id="error_nom"></span>
                                </div>
                            </div>
                            <div class="midel">
                                <div class="div-email">
                                    <input type="email" placeholder="Email *" name="email">
                                    <span class="error" id="error_email"></span>
                                </div>
                                <div class="div-phone">
                                    <input type="number" placeholder="Téléphone" name="phone">
                                    <span class="error" id="error_phone"></span>
                                </div>
                            </div>


                            <div class="down">
                                <textarea name="message" cols="30" rows="10" placeholder="Message *"></textarea>
                                <span class="error" id="error_message"></span>
                                <button type="submit" class="submit" name="submit">Envoyer le message</button>
                            </div>
                        </form>

                        <div class="form-info" data-aos="fade-up" data-aos-duration="500">
                            <div class="phone">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+0637779361">06.37.77.93.61</a>
                            </div>
                            <div class="email">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:lamottemathis@gmail.com">lamottemathis@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b"></div>
                <div class="c">
                    <div class="bottom">
                        <div class="end">
                            <div class="icone">
                                <a href="<?php echo verifChamp(6, 'link-github') ?>" target="_blank" aria-label="github"> <i class="fa-brands fa-github-alt"></i></a>
                                <span class="name">Github</span>
                            </div>
                            <div class="scrool">
                                <i class="fa-solid fa-angle-up"></i>
                                <a href="#masthead">
                                    <p>top</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<?php
get_footer();
