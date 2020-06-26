<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1 class="text-center">Content</h1>

 <!-- Space for advertising banner -->
 <div>
        <figure>
            <img class="img-responsive img-fluid w-100"  alt="advertisment" src="/wp-content/themes/your-theme/assets/images/banner-blue"/>
        </figure>
      </div>
      <!-- Jacket advertising -->
      <div class="text-center bg-info">
        <h2 class="text-center">Look no further for latest Styes</h2>
        <figure>
            <img class="img-responsive img-fluid w-80 rounded mx-auto d-block"  alt="Photo of a Jacket" src="{{URL('/product-images/Norvan-SL-Insulated-Hoody-Black-Infrared.png')}}">
        </figure>
        <a  href="{{ route( 'products.index') }}">
            <button type="button" class="btn btn-secondary text-center mb-2">Shop Now</button>
            </a>
      </div>
       <!-- Trending brands -->
       <div>
        <figure>
            <img class="img-responsive img-fluid w-80 rounded mx-auto d-block"  alt="Banner of brands for sale" src="{{URL('/product-images/trending-brands.png')}}">
        </figure>
       </div>

</article><!-- #post-## -->
