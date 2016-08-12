<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mekanikpintar-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <!-- Start Homepage content -->
        
        <div id="main-banner">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/banner-home.jpg" alt="Welcome to Mekanik Pintar">
        </div>
        
        <div class="wrapper">
            <section id="fokus-utama">
               <h2>FOKUS UTAMA</h2>
               <ul>
               <img src="images/tumbnail_fokus-utama.jpg" alt="Foto Fokus Utama">
               </ul>
            </section>
        
            <section id="tech-news">
               <h2>TECH NEWS</h2>
                <ul>
                    <li>
                        <img src="images/thumbnail_tech-1.jpg">
                        <a href="">Teknologi Mesin Mobil Hemat BBM</a>
                    </li>
                    <li>
                        <img src="images/thumbnail_tech-2.jpg">
                        <a href="">Long Term Test Bridgestone Ecopia</a>
                    </li>
                    <li>
                        <img src="images/thumbnail_tech-3.jpg">
                        <a href="">Optimlisasi Wheel Alignment</a>
                    </li>
                </ul>
            </section>
       
            <section id="car-review">
               <h2>CAR REVIEW</h2>
                <ul>
                    <li>
                        <img src="images/thumbnail_car-1.jpg">
                        <a href="">Toyota Cayla/Daihatsu Sigra Vs Datsun Go+</a>
                    </li>
                    <li>
                        <img src="images/thumbnail_car-2.jpg">
                        <a href="">Honda Civic Turbo</a>
                    </li>
                    <li>
                        <img src="images/thumbnail_car-3.jpg">
                        <a href="">Most Wanted Toyota Sienta</a>
                    </li>
                </ul>
            </section>
       
            <section id="tips-trick">
               <h2>TIPS & TRICK</h2>
               <h1>Pilih salah satu kategori dibawah ini</h1>
               <ul>
                   <li>
                       <a href=""><img src="images/tips_perawatan.png" alt="perawatan-mesin"></a>
                   </li>
                   <li>
                       <a href=""><img src="images/tips_kecepatan.png" alt="tips-kecepatan"></a>
                   </li>
                   <li>
                       <a href=""><img src="images/tips_bermanuver.png" alt="tips-bermanuver"></a>
                   </li>
                   <li>
                       <a href=""><img src="images/tips_exterior.png" alt="tips-exterior"></a>
                   </li>
                   <li>
                       <a href=""><img src="images/tips_interior.png" alt="tips-interior"></a>
                   </li>
               </ul>
            </section>
      
            <section id="contact-us">
               <h2>CONTACT US</h2>
               <h1 class="logo-abu">logo-abu</h1>
                <ul>
                <li>Mekanika (Bahasa Latin mechanicus, dari Bahasa Yunani mechanikos, "seseorang yang ahli di bidang mesin") adalah jenis ilmu khusus yang mempelajari fungsi dan pelaksanaan mesin, alat atau benda yang seperti mesin.mekanika merupakan bagian yang sangat penting dalam ilmu fisika terutama untuk ahli saints dan ahli teknik Mekanika (Mechanics) juga berarti ilmu pengetahuan yang mempelajari gerakan suatu benda serta efek gaya dalam gerakan itu.</li>
               </ul>
            </section>
        </div>    
            
        <!-- End Homepage content -->
    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
