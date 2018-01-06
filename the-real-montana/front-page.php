<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

$imgDir = get_stylesheet_directory_uri() . '/images/';

get_header(); ?>


	<div class="main-header-image">
    <div class="carousel" id="carousel-selector">
      <div class="carousel-header-image" style="background-image: url('<?php echo $imgDir."header_photo.png" ?>');"></div>
      <div class="carousel-header-image" style="background-image: url('<?php echo $imgDir."bark_carousel.png" ?>');"></div>
      <div class="carousel-header-image" style="background-image: url('<?php echo $imgDir."wood_carousel.png" ?>');"></div>

    </div>
		<div class="row first">
			<div class="columns small-12 medium-6 site-info">
        <div class="name">
  				<h1 class="border">
  					Tim
          </h1>
          <h1>
            Gravelle
  				</h1>
        </div>
				<h2>
					Glacier Real Estate
				</h2>
				<div class="contact-info">
					<h3>406-250-9803</h3>
					<h4>TIM.GRAVELLE@THE REAL MONANTA.COM</h4>
				</div>
				<h2 class="bold">
					THE REAL MONTANA

				</h2>
			</div>
			<div class="columns small-12 medium-5 push-1 search">
				<?php get_sidebar( 'front' ); ?>
			</div>
		</div>
</div>




	<div id="primary">
		<div id="content" role="main">

			<section class="section1">
			  <div class="row">
			    <div class="columns small-12 medium-4 push-1">
			      <h4 class="right">
			        REPRESENTING BUYERS AND SELLERS ACROSS THE FLATHEAD REGION
			      </h4>
			    </div>
          <div class="columns small-12 medium-7">
            <ul class="actions">
              <li>
                <div class="item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
                  <h3>SEARCH Listings</h3>
                </div>
              </li>
              <li>
                <div class="item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 5.999l-5.621 2.986c-.899-.104-1.806.191-2.474.859-.662.663-.95 1.561-.862 2.428l-3.043 5.728 5.724-3.042c.884.089 1.772-.205 2.432-.865.634-.634.969-1.524.859-2.473l2.985-5.621zm-5.97 7.22c-.689 0-1.25-.559-1.25-1.249-.001-.691.559-1.251 1.25-1.25.69 0 1.25.56 1.25 1.25-.001.689-.56 1.249-1.25 1.249z"/></svg>
                  <h3>AREA Information</h3>
                </div>
              </li>
              <li>
                <div class="item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.176 1.322l2.844-1.322 4.041 7.89-2.724 1.341c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-7.862 3.591-19.103-18.258-11.385-22.281zm1.929 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.971-.474-2.271-4.383-1.026.5c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.497-2.251-4.398z"/></svg>
                  <h3>CONTACT</h3>
                </div>
              </li>
            </ul>
          </div>
			  </div>
			</section>
      <section class="section2" id="section-2">
        <div class="row">
          <div class="columns small-12 medium-8">
            <div class="featured">
              <h2>
                Newly listed Properties
              </h2>
              <?php dynamic_sidebar( 'featured-home' ); ?>
              <!-- <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/temp_home_photo.png" alt=""> -->
            </div>
            <!-- <div class="property-details">
              <div class="address">
                <h3 class="address-number">218 Forest Glen Dr.</h3>
                <h5 class="address-zip">Whitefish, MT 59937</h5>

              </ul>
              <ul class="size">
                <li class="price"><strong>$430,000 </strong> $228/sqft</p>
                <li class="rooms">3 BDR</p>
                <li class="bath">3 BATH</p>
                <li class="sqft">2300 sqft</p>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h18v-10h3zm-5 8h-14v-10.26l7-6.912 7 6.99v10.182zm-5-1h-4v-6h4v6z"/></svg>
                </li>

              </ul>
              <p>This home is built on a 3 acre lot and has all the extras in it. The master bedroom features heated floors, large jacuzzi tub, and a walk in shower. The kitchen...</p>


            </div>

          </div> -->
        </div>
          <div class="small-12 medium-4 visit">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/calendar.png" alt="">
            <h4>Visit our website each day for</h4>
            <h4> <strong>new listings!</strong> </h4>
            <h4>From across the flathead valley</h4>
            <div class="updates">
            <h4>Updates </h4>
            <h4><strong>Daily</strong></h4>
            </div>
            <button class="btn-green">New Listings</button>
          </div>
        </div>
      </section>
      <section class="section3" id="section-3">
        <div class="row">
          <div class="columns small-12 large-8">
            <h1>About Me</h1>
            <h3>Hello, my name is Tim Gravelle...</h3>
            <p>As a native of the Northwest, and a local resident for 25 years, I understand why people want to live in this beautiful area.  The outdoor recreation is abundant and the quality of life is unmatched.</p>
            <p>As a Real Estate Broker with over 12 years of experience, my work ethics and integrity have helped consistently keep me a top producer. I strive to make the real estate transaction smooth and uncomplicated through all steps of the buying or selling process. </p>
            <p>Please call me at 406-250-9803 to discuss your real estate needs.</p>
          </div>
          <div class="columns small-12 large-3 ">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/tim_gravelle_photo.png" alt="">
          </div>
        </div>
        <div class="row">
          <ul class="results">
            <li class="border-right">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 14h-12c.331 1.465 2.827 4 6.001 4 3.134 0 5.666-2.521 5.999-4zm0-3.998l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002zm-7 0l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002z"/></svg>
              <div class="more-details">
                <h2>100's</h2>
                <h4>of happy customers</h4>
              </div>
            </li>
            <li class="border-right">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h18v-10h3zm-5 8h-14v-10.26l7-6.912 7 6.99v10.182zm-5-1h-4v-6h4v6z"/></svg>
              <div class="more-details">
                <h2>25</h2>
                <h4>years in the Flathead Valley</h4>
              </div>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.626 10l1.374-1.737-1.895-1.168.687-2.095-2.187-.46-.079-2.2-2.213.304-.84-2.04-1.977 1.031-1.496-1.635-1.497 1.634-1.977-1.03-.84 2.04-2.212-.305-.079 2.2-2.187.461.687 2.095-1.895 1.168 1.374 1.737-1.374 1.737 1.895 1.168-.687 2.095 2.187.46.079 2.2 2.213-.304.84 2.04 1.977-1.031 1.496 1.635 1.497-1.634 1.977 1.031.84-2.04 2.213.304.079-2.2 2.186-.461-.687-2.095 1.895-1.168-1.374-1.737zm-8.626 7c-3.866 0-7-3.134-7-7s3.134-7 7-7 7 3.134 7 7-3.134 7-7 7zm5.141 3.276l2.401 3.724 1.146-2h2.312l-2.655-4.103c-.917.969-1.999 1.775-3.204 2.379zm-13.486-2.379l-2.655 4.103h2.312l1.146 2 2.401-3.724c-1.205-.604-2.287-1.41-3.204-2.379zm8.345-12.897c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zm0-1c-3.314 0-6 2.687-6 6s2.686 6 6 6 6-2.687 6-6-2.686-6-6-6z"/></svg></svg>
              <div class="more-details">
                <h4>Consistent top producer</h4>
              </div>

            </li>
          </ul>
        </div>
      </section>
      <div class="section4" id="section-4">
        <div class="row">
          <div class="columns small-12 large-5">
            <?php add_filter( 'the_title', function ($title) { return "";}); ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', 'page' ); ?>
            <?php endwhile; // end of the loop. ?>
            <!-- <h1>Contact Me</h1>
            <div class="input-wrapper">
              <label for="name">Name</label>
              <input id="name" type="text">
            </div>
            <div class="input-wrapper">
              <label for="phone">Phone Number</label>
              <input id="phone" type="text">
            </div>
            <div class="input-wrapper">
              <label for="email">Email</label>
              <input id="email" type="text">
            </div>
            <div class="input-wrapper">
              <label for="comments">Comments</label>
              <textarea id="comments" name="name" rows="8" cols="80"></textarea>
            </div>
            <div class="preferred-contact">
              <h5>Preferred method of contact</h5>
              <div class="radio-wrapper">
                <input type="radio">
                <label for="">Phone</label>
                <input type="radio">
                <label for="">Email</label>
              </div>

            </div> -->
          </div>
          <div class="columns small-12 large-4 name-logo">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/glacier_logo.png" alt="">
              <h2>Tim Gravelle</h2>
              <h5 class="green">Glacier Real Estate</h5>
            <div class="license">
              <h5><strong>Brokers License</strong></h5>
              <h5>RRE-BRO-LIC-19032</h5>
            </div>
            <!-- <div class="address">
              <h5><strong>Glacier Real Estate</strong></h5>
              <p>428 East Idaho</p>
              <p>Kalispell, MT 59901</p>
            </div> -->
            <!-- <div class="contact-details">
              <p>Tim.Gravelle@TheRealMontana.com</p>
              <p>Cell: (406) 250-9803</p>
              <p>Phone: (406) 752-1555</p>
              <p>Fax: (406) 752-2661</p>
            </div> -->
            <ul class="social">
              <li>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/facebook.png" alt="">
              </li>
              <li>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2017/12/linked_in.png" alt="">
              </li>
            </ul>
          </div>

        </div>
      </div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/carousel.js "></script>
