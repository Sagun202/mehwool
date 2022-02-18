

<script src="{{asset('public/frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/demos/demo-21.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@stack('js')
<script>

<!-- countdown js -->

<script type="text/javascript" src="{{ asset('public/frontend') }}/js/countdown.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@stack('js')
<script>
  var swiper = new Swiper(".swiper-container", {
    autoPlay: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script>
  var swiper = new Swiper(".topPro-swiper-container", {
    slidesPerView: 7,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
      0:{
        slidesPerView:2
      },
      400:{
        slidesPerView:2
      },
      600:{
        slidesPerView:3
      },
      1200:{
        slidesPerView:5
      },
      1400:{
        slidesPerView:7
      }
    },

  });
</script>
<script>
  var swiper = new Swiper(".featured-swiper-container", {
    slidesPerView: 7,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
      0:{
        slidesPerView:2
      },
      400:{
        slidesPerView:2
      },
      600:{
        slidesPerView:3
      },
      1200:{
        slidesPerView:5
      },
      1400:{ 
        slidesPerView:7
      }
    },

  });
</script>
<script>
  $(document).ready(function() {
    $(".register-form-open").click(function() {
      $(".register-modal-form").show();
      $(".login-modal-form").hide();
    });
  });
</script>

<script>
  $(document).ready(function() {
    $(".login-form-open").click(function() {
      $(".register-modal-form").toggle();
      $(".login-modal-form").toggle();
    });
  });
  $('.typeahead').typeahead({
        source: function(query, process) {
            return $.get("{{ route('search-suggestion') }}", {
                key: query
            }, function(data) {
                return process(data);
            });
        },
         afterSelect: function(item) {
            $('#search-form').submit();
        }
    });
</script>