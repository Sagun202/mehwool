<div class="index-top-products">
    <div class="container-fluid">
      <div class="index-top-products-heading">
        <p>Our top deals</p>
        <a href="{{ route('list') }}">See all <i class="fas fa-arrow-circle-right"></i></a>
            <div class="countdown">
    <div class="countdown-item">
      <span id="day">-</span>
      <span>Day</span>
    </div>
  
    <div class="countdown-item">
      <span id="hour">-</span>
      <span>Hour</span>
    </div>
  
    <div class="countdown-item">
      <span id="minute">-</span>
      <span>Minute</span>
    </div>
  
    <div class="countdown-item">
      <span id="second">-</span>
      <span>Second</span>
    </div>
    
    <div class="pulse"></div>
  </div>
  
  <style>
      
  .countdown {
    display: flex;
    justify-content: center;
    align-items: center;
  margin-left:60%;
    font-family: "Righteous", cursive;
    position: relative;
    background-color: #fafafa;
  }
  .countdown-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    background-image: linear-gradient(0deg, #000 0%, #444 100%);
    color: #fff;
    font-size: 26px;
    border-radius: 10px;
    margin: 0 4px;
    min-width: 75px;
    min-height: 85px;
    z-index: 2;
  }
  .countdown-item span:nth-child(1) {
    height: 33px;
  }
  .countdown-item span:nth-child(2) {
    font-size: 16px;
  }
  .pulse {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 0;
    height: 0;
    opacity: 1;
    background-color: #888;
    border-radius: 50%;
    z-index: 1;
    animation: pluseAnimation 1s ease infinite;
  }
  @keyframes pluseAnimation {
    0% {
      width: 0;
      height: 0;
      opacity: 1;
    }
    50% {
      opacity: 0;
    }
    100% {
      width: 500px;
      height: 500px;
      opacity: 0;
    }
  }
  </style>
  <script>
      let countDownEnd = false;
  
  setInterval(() => {
    let targetTime = 1633445795402;
    let now = new Date().getTime();
    let timeleft = targetTime - now;
  
    if (timeleft < 0) {
      countDownEnd = true;
    }
  
    // Calculating the days, hours, minutes and seconds left
    let day = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    let hour = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minute = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    let second = Math.floor((timeleft % (1000 * 60)) / 1000);
  
    document.getElementById("day").innerText = day;
    document.getElementById("hour").innerText = hour;
    document.getElementById("minute").innerText = minute;
    document.getElementById("second").innerText = second;
  }, 1000);
  
  </script>
      </div>
      <div class="hotPro-swiper-container">
        <div class="swiper-wrapper">
          @foreach ($products as $product)
          <div class="swiper-slide">
            {{ FrontEndHandler::getProductCard($product) }}
          </div>
          @endforeach
  
          <div class="swiper-slide">
            <a href="javascript:void(0);">
              <div class="topPro-card topPro-sell-card">
                <div class="topPro-card-img">
                  <img src="{{ asset('frontend') }}/images/click-svg.svg" alt="" />
                </div>
                <div class="topPro-card-text">
                  <div class="topPro-card-name">
                    <p>Do u want to sell your items?</p>
                  </div>
                  <div class="topPro-sell-text">
                    <p>
                      If yes?<br />
                      Then <span>Click here</span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
 @push('js')

<script>
  var swiper = new Swiper('.hotPro-swiper-container', {
 slidesPerView: 7,
    spaceBetween: 40,
     loop: true,
     
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40
    }
  }
  
});
</script>

@endpush