document.addEventListener("DOMContentLoaded", function () {
  setupFilterButton();
  setupPreloader();
  setupInstagramFeed();
  setupSlider();
  setupTouchspin();
  setupVideoLightbox();
  setupCountdownTimer();
  setupHeroSlider();
});

function setupFilterButton() {
  const filterButton = document.getElementById("filterButton");
  if (filterButton) {
    filterButton.addEventListener("click", filterProducts);
  }
}

function filterProducts() {
  const categorySelect = document.querySelector('select[name="category"]');
  const brandSelect = document.querySelector('select[name="brand"]');
  const priceRangeSelect = document.querySelector('select[name="price-range"]');
  
  const selectedCategory = categorySelect ? categorySelect.value.toLowerCase() : '';
  const selectedBrand = brandSelect ? brandSelect.value.toLowerCase() : '';
  const selectedPriceRange = priceRangeSelect ? priceRangeSelect.value : '';

  let minPrice = 0, maxPrice = Infinity;
  if (selectedPriceRange) {
    const prices = selectedPriceRange.split("-");
    minPrice = parseInt(prices[0], 10);
    maxPrice = prices[1] ? parseInt(prices[1], 10) : Infinity;
  }

  document.querySelectorAll(".product-item").forEach(product => {
    const productCategory = product.getAttribute("data-category") ? product.getAttribute("data-category").toLowerCase() : '';
    const productBrand = product.getAttribute("data-brand") ? product.getAttribute("data-brand").toLowerCase() : '';
    const productPriceText = product.querySelector(".price") ? product.querySelector(".price").textContent : '';

    const productPrice = productPriceText ? parseInt(productPriceText.replace('$', ''), 10) : 0;
    const matchCategory = !selectedCategory || selectedCategory === productCategory;
    const matchBrand = !selectedBrand || selectedBrand === productBrand;
    const matchPrice = productPrice >= minPrice && productPrice <= maxPrice;

    product.style.display = (matchCategory && matchBrand && matchPrice) ? "block" : "none";
  });
}

function setupPreloader() {
  $(window).on('load', function () {
    $('#preloader').fadeOut('slow', function () {
      $(this).remove();
    });
  });
}

function setupInstagramFeed() {
  if ($('#instafeed').length) {
    var accessToken = $('#instafeed').attr('data-accessToken');
    var userFeed = new Instafeed({
      get: 'user',
      resolution: 'low_resolution',
      accessToken: accessToken,
      template: '<a href="{{link}}"><img src="{{image}}" alt="instagram-image"></a>'
    });
    userFeed.run();
  }
}

function setupSlider() {
  setTimeout(function () {
    $('.instagram-slider').slick({
      dots: false,
      speed: 300,
      arrows: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 4 } },
        { breakpoint: 600, settings: { slidesToShow: 3 } },
        { breakpoint: 480, settings: { slidesToShow: 2 } }
      ]
    });
  }, 1500);
}

function setupTouchspin() {
  $('input[name="product-quantity"]').TouchSpin();
}

function setupVideoLightbox() {
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
}

function setupCountdownTimer() {
  $('#simple-timer').syotimer({
    year: 2022,
    month: 5,
    day: 9,
    hour: 20,
    minute: 30
  });
}

function setupHeroSlider() {
  $('.hero-slider').slick({
    infinite: true,
    arrows: true,
    prevArrow: '<button type="button" class="heroSliderArrow prevArrow tf-ion-chevron-left"></button>',
    nextArrow: '<button type="button" class="heroSliderArrow nextArrow tf-ion-chevron-right"></button>',
    dots: true,
    autoplay: true, 
    autoplaySpeed: 7000,
    pauseOnFocus: false,
    pauseOnHover: false
  });
  $('.hero-slider').slickAnimation();
}
