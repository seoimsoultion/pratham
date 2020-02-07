<?php
include 'includes/header3.php';

?>

<!--    Page Banner Start
    ==================================================-->
    <section class="banner background9 overlay_three full_row">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="banner_text text-center">
                        <h1 class="page_banner_title color_white text-uppercase">Blog</h1>
                        <div class="breadcrumbs m-auto d-inline-block">
                            <ul>
                                <li class="hover_gray"><a href="index-5.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="color-default">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--    Page Banner End
    ==================================================-->
     <!--    Blog Post Start
    ==================================================-->
    <section class="blog_area  bg_secondery full_row">
    	<div class="container">
    		<div class="row">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

<style> 



.timeline {
  width: 100%;
  background-color: #fff;
  box-shadow: 0 5px 25px 5px rgba(0, 0, 0, 0.2);
}
.timeline .swiper-container {
  height: 600px;
  width: 100%;
  position: relative;
}
.timeline .swiper-wrapper {
  -webkit-transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
  transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
}
.timeline .swiper-slide {
  position: relative;
  color: #fff;
  overflow: hidden;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.timeline .swiper-slide::after {
  content: "";
  position: absolute;
  z-index: 1;
  right: -115%;
  bottom: -10%;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  box-shadow: -230px 0 150px 60vw rgba(0, 0, 0, 0.7);
  border-radius: 100%;
}
.timeline .swiper-slide-content {
  position: absolute;
  text-align: center;
  width: 80%;
  max-width: 310px;
  right: 50%;
  top: 13%;
  -webkit-transform: translate(50%, 0);
          transform: translate(50%, 0);
  font-size: 12px;
  z-index: 2;
}
.timeline .swiper-slide .timeline-year {
  display: block;
  font-style: italic;
  font-size: 42px;
  margin-bottom: 50px;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  color: #d4a024;
  font-weight: 300;
  opacity: 0;
  -webkit-transition: .2s ease .4s;
  transition: .2s ease .4s;
}
.timeline .swiper-slide .timeline-title {
  font-weight: 800;
  font-size: 34px;
  margin: 0 0 30px;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  -webkit-transition: .2s ease .5s;
  transition: .2s ease .5s;
}
.timeline .swiper-slide .timeline-text {
  line-height: 1.5;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  -webkit-transition: .2s ease .6s;
  transition: .2s ease .6s;
}
.timeline .swiper-slide-active .timeline-year {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: .4s ease 1.6s;
  transition: .4s ease 1.6s;
}
.timeline .swiper-slide-active .timeline-title {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: .4s ease 1.7s;
  transition: .4s ease 1.7s;
}
.timeline .swiper-slide-active .timeline-text {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: .4s ease 1.8s;
  transition: .4s ease 1.8s;
}
.timeline .swiper-pagination {
  right: 15% !important;
  height: 100%;
  display: none;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: center;
          justify-content: center;
  font-style: italic;
  font-weight: 300;
  font-size: 18px;
  z-index: 1;
}
.timeline .swiper-pagination::before {
  content: "";
  position: absolute;
  left: -30px;
  top: 0;
  height: 100%;
  width: 1px;
  background-color: rgba(255, 255, 255, 0.2);
}
.timeline .swiper-pagination-bullet {
  width: auto;
  height: auto;
  text-align: center;
  opacity: 1;
  background: transparent;
  color: #d4a024;
  margin: 15px 0 !important;
  position: relative;
}
.timeline .swiper-pagination-bullet::before {
  content: "";
  position: absolute;
  top: 8px;
  left: -32.5px;
  width: 6px;
  height: 6px;
  border-radius: 100%;
  background-color: #d4a024;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: .2s;
  transition: .2s;
}
.timeline .swiper-pagination-bullet-active {
  color: #d4a024;
}
.timeline .swiper-pagination-bullet-active::before {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.timeline .swiper-button-next,
.timeline .swiper-button-prev {
  background-size: 20px 20px;
  top: 15%;
  width: 20px;
  height: 20px;
  margin-top: 0;
  z-index: 2;
  -webkit-transition: .2s;
  transition: .2s;
}
.timeline .swiper-button-prev {
  left: 8%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
}
.timeline .swiper-button-prev:hover {
  -webkit-transform: translateX(-3px);
          transform: translateX(-3px);
}
.timeline .swiper-button-next {
  right: 8%;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
}
.timeline .swiper-button-next:hover {
  -webkit-transform: translateX(3px);
          transform: translateX(3px);
}
@media screen and (min-width: 768px) {
  .timeline .swiper-slide::after {
    right: -30%;
    bottom: -8%;
    width: 240px;
    height: 50%;
    box-shadow: -230px 0 150px 50vw rgba(0, 0, 0, 0.7);
  }
  .timeline .swiper-slide-content {
    right: 30%;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 310px;
    font-size: 11px;
    text-align: right;
  }
  .timeline .swiper-slide .timeline-year {
    margin-bottom: 0;
    font-size: 32px;
  }
  .timeline .swiper-slide .timeline-title {
    font-size: 46px;
    margin: 0;
  }
  .timeline .swiper-pagination {
    display: -webkit-box;
    display: flex;
  }
  .timeline .swiper-button-prev {
    top: 15%;
    left: auto;
    right: 15%;
    -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
  }
  .timeline .swiper-button-prev:hover {
    -webkit-transform: rotate(90deg) translate(-3px, 10px);
            transform: rotate(90deg) translate(-3px, 10px);
  }
  .timeline .swiper-button-next {
    top: auto;
    bottom: 15%;
    right: 15%;
    -webkit-transform: rotate(90deg) translate(0, 10px);
            transform: rotate(90deg) translate(0, 10px);
  }
  .timeline .swiper-button-next:hover {
    -webkit-transform: rotate(90deg) translate(3px, 10px);
            transform: rotate(90deg) translate(3px, 10px);
  }
}
@media screen and (min-width: 1024px) {
  .timeline .swiper-slide::after {
    right: -20%;
    bottom: -12%;
    width: 240px;
    height: 50%;
    box-shadow: -230px 0 150px 39vw rgba(0, 0, 0, 0.7);
  }
  .timeline .swiper-slide-content {
    right: 25%;
  }
}
</style>

<section class="blog_area  bg_secondery full_row">
<div class="full_row " >
  
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11;" data-year="2011">
          <div class="swiper-slide-content"><span class="timeline-year">2011</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=12;" data-year="2012">
          <div class="swiper-slide-content"><span class="timeline-year">2012</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=13;" data-year="2013">
          <div class="swiper-slide-content"><span class="timeline-year">2013</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=14;" data-year="2014">
          <div class="swiper-slide-content"><span class="timeline-year">2014</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15;" data-year="2015">
          <div class="swiper-slide-content"><span class="timeline-year">2015</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16;" data-year="2016">
          <div class="swiper-slide-content"><span class="timeline-year">2016</span>
            <h4 class="timeline-title">Our nice super title</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<?php //content goes here ?>
    		</div>
    	</div>
    </section>


     <!--    Blog Post End
    ==================================================-->
<?php
include 'includes/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
      <Script>

var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 1600,
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});

</script>