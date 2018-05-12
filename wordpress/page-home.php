<?php 
    get_header(); 
    
    $months = array( 
        "01" => "STY", 
        "02" => "LUT", 
        "03" => "MAR", 
        "04" => "KWI", 
        "05" => "MAJ", 
        "06" => "CZE", 
        "07" => "LIP", 
        "08" => "SIE", 
        "09" => "WRZ", 
        "10" => "PAŹ", 
        "11" => "LIS", 
        "12" => "GRU" 
    );
?>

<!-- #region CONTENT -->

<!-- #region Sekcja powitalna -->

<section class="lt-front-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up">
                <span class="text-muted text-uppercase lt-text-small lt-page-intro-subheader">LookTrans</span>
                <h2 class="text-uppercase lt-page-intro-header">Witaj na <span class="lt-highlight-text">naszej stronie</span></h2>

                <div class="lt-hr lt-page-intro-rule"></div>

                <p class="mb-5"><b>LookTrans</b> to młoda, dynamicznie rozwijająca się firma, która oferuje wynajem aut osobowych i dostawczych. Nasza siedziba znajduje się w <b>Koszalinie</b>. Zasięg działania wypożyczalni obejmuje województwo zachodniopomorskie, jak również teren całej Polski. Proponujemy Państwu transport samochodowy – <b>wykonujemy kursy w różne zakątki Europy</b>. To, co nas wyróżnia, to zaangażowanie, profesjonalne podejście do zleconych zadań i pozytywne nastawienie.</p>

            </div>
            <div class="col-lg-6 pl-3 pl-md-5" data-aos="fade-left">
                <img src="images/front/welcome-image.png" alt="Welcome" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- #endregion -->

<!-- #region Usługi -->

<section class="lt-front-page-services">
    <div class="container">
        <div class="lt-section-header" data-aos="fade-up">
            <h2 class="text-uppercase">Nasze usługi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, amet.</p>
        </div>
        <div class="row">

            <!-- #region Wypożyczalnia -->

            <div class="col-md-6" data-aos="fade-right">
                <div class="lt-service-box">
                    <div class="d-flex lt-services-box-top">
                        <div class="lt-services-box-shadow"></div>
                        <div class="d-flex lt-services-box-img">
                            <img src="images/services/rent.png" alt="Wypożyczalnia samochodów">
                        </div>
                        <div class="text-uppercase lt-services-box-title">
                            <span class="d-block lt-services-box-header"><a href="#">Wynajem samochodów</a></span>
                            <span class="d-block text-muted lt-text-small">Lorem, ipsum dolor.</span>
                            <span class="d-block lt-services-box-header-more"><a href="#">Więcej informacji >></a></span>
                        </div>
                    </div>
                    <div class="d-block lt-services-box-text">
                        <p class="lt-text-small">Do zalet współpracy z naszą wypożyczalnią samochodów należy zaliczyć <b>dostępność siedem dni w tygodniu przez całą dobę</b>, minimalizację formalności oraz szybkość realizacji usługi. <b>Aby wynająć auto, wystarczy okazać dowód osobisty lub paszport oraz prawo jazdy</b>, a także wpłacić zabezpieczenie.</p>
                    </div>
                </div>
            </div>

            <!-- #endregion -->

            <!-- #region Pomoc drogowa -->
            
            <div class="col-md-6" data-aos="fade-left">
                <div class="lt-service-box">
                    <div class="d-flex lt-services-box-top">
                        <div class="lt-services-box-shadow"></div>
                        <div class="d-flex lt-services-box-img">
                            <img src="images/services/coverage.png" alt="Pomoc drogowa">
                        </div>
                        <div class="text-uppercase lt-services-box-title">
                            <span class="d-block lt-services-box-header"><a href="#">Pomoc drogowa</a></span>
                            <span class="d-block text-muted lt-text-small">Lorem, ipsum dolor.</span>
                            <span class="d-block lt-services-box-header-more"><a href="#">Więcej informacji >></a></span>
                        </div>
                    </div>
                    <div class="d-block lt-services-box-text">
                        <p class="lt-text-small">Dbając o <b>komfort i cenny</b> czas Klienta, podejmujemy się sprawnego <b>autoholowania</b> na terenie <b>Koszalina</b>, <b>Słupska</b>, <b>Kołobrzegu</b> i okolic. W przypadku uszkodzenia samochodu w wypadku, którego uczestnikiem był Klient oraz podczas stłuczki odholujemy pojazd do najbliższego warsztatu naprawczego lub w miejsce wskazane przez Zleceniodawcę.</p>
                    </div>
                </div>
            </div>
            
            <!-- #endregion -->

            <!-- #region Ubezpieczenia -->
            
            <div class="col-md-6">
                <div class="lt-service-box" data-aos="fade-right">
                    <div class="d-flex lt-services-box-top">
                        <div class="lt-services-box-shadow"></div>
                        <div class="d-flex lt-services-box-img">
                            <img src="images/services/insurance.png" alt="Ubezpieczenia">
                        </div>
                        <div class="text-uppercase lt-services-box-title">
                            <span class="d-block lt-services-box-header"><a href="#">Ubezpieczenia</a></span>
                            <span class="d-block text-muted lt-text-small">Lorem, ipsum dolor.</span>
                            <span class="d-block lt-services-box-header-more"><a href="#">Więcej informacji >></a></span>
                        </div>
                    </div>
                    <div class="d-block lt-services-box-text">
                        <p class="lt-text-small">Działalność naszej wypożyczalni samochodów <b>dostawczych</b> i <b>osobowych</b> w Koszalinie poszerzyliśmy o ubezpieczenia. Specjalizujemy się w sprzedaży ubezpieczeń komunikacyjnych, majątkowych, życiowych oraz grupowych ubezpieczeń w przedsiębiorstwach.</p>
                    </div>
                </div>
            </div>
            
            <!-- #endregion -->

            <!-- #region Transport -->
            
            <div class="col-md-6">
                <div class="lt-service-box" data-aos="fade-left">
                    <div class="d-flex lt-services-box-top">
                        <div class="lt-services-box-shadow"></div>
                        <div class="d-flex lt-services-box-img">
                            <img src="images/services/transport.png" alt="Transport">
                        </div>
                        <div class="text-uppercase lt-services-box-title">
                            <span class="d-block lt-services-box-header"><a href="#">Transport</a></span>
                            <span class="d-block text-muted lt-text-small">Lorem, ipsum dolor.</span>
                            <span class="d-block lt-services-box-header-more"><a href="#">Więcej informacji >></a></span>
                        </div>
                    </div>
                    <div class="d-block lt-services-box-text">
                        <p class="lt-text-small">Wśród usług naszej firmy znajdziecie wynajem aut, a także <b>transport samochodowy na terenie całej Europy</b> towarów ważących do 3,5T. Nasi kierowcy posiadają bogate doświadczenie i zapewnią nie tylko sprawny i terminowy przewóz, lecz także bezpieczeństwo
                        Państwa ładunku.</p>
                    </div>
                </div>
            </div>
            
            <!-- #endregion -->

        </div>
    </div>
</section>

<!-- #endregion -->

<!-- #region Aktualności -->

<section class="lt-front-page-blog lt-alternate-bg">
    <div class="container">
        <div class="lt-section-header" data-aos="fade-up">
            <h2 class="text-uppercase">Aktualności</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="row">

            <?php 
                if (have_posts()) :

                    $i = 0;

                    while (haveposts()) : the_post();

                    $date = get_the_date("Y-m-d");
                    $date_explode = explode("-", $date);

                    if ($i < 2) :
            ?>

                    <div class="col-lg-6" data-aos="flip-left">
                        <div class="lt-post-box">
                            <div class="text-center bg-primary d-flex align-items-center lt-post-box-date">
                                <div class="mx-auto lt-post-box-date-body">
                                    <img src="images/ui/date-icon.png" alt="Kalendarz" class="d-none d-md-block mx-auto">
                                    <span class="text-white d-block lt-post-box-date-value"><?php echo $date_explode[2].' '.$months[$date_explode[1]].' '.$date_explode[0] ?></span>
                                </div>
                            </div>
                            <div class="lt-post-box-body">
                                <div class="lt-post-box-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="text-white lt-post-box-content">
                                    <div class="lt-post-box-content-inner">
                                        <h3 class="text-uppercase lt-post-box-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="lt-post-box-text lt-text-small">
                                            <?php the_content(); ?>
                                        </p>
                                        <!-- <a href="#" class="text-white text-uppercase sk-post-box-link">Zobacz więcej</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php 
                    endif;
                    $i++;
                    endwhile;
                endif;                
            ?>

        </div>
    </div>
</section>

<!-- #endregion -->

<!-- #endregion -->

<?php get_footer(); ?>