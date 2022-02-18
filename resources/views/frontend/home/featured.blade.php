

<div class="row padd two-section" >
  <div class="col-6">
    {{ FrontEndHandler::hotProducts() }}
  </div>
  <div class="col-6">
    {{ FrontEndHandler::topProducts() }}
  </div>
</div>

<script>
var owl = $('.top');
owl.owlCarousel({

loop:true,
  dots: false,
margin:10,

autoplayHoverPause:true,
responsive: {
    0:{
      items: 3,
       loop:true
    },
    480:{
      items: 3,
       loop:true
    },
    769:{
      items: 3,
       loop:true
    }
}
});



</script>
<br>