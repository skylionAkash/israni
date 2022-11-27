// photography slider on home page


var swiper = new Swiper(".photo-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  autoplay: true,
  loop: true,
  loopFillGroupWithBlank: true,
  // pagination: {
  //   el: ".photo-pagi",
  //   clickable: true,
  // },
  navigation: {
    nextEl: ".photo-next",
    prevEl: ".photo-prev",
  },

  breakpoints: {
      
    414: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },

});

// Video Slider 
var swiper = new Swiper(".video-container", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    autoplay: true,
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //   el: ".video-pagi",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".video-next",
      prevEl: ".video-prev",
    },

    breakpoints: {
      
      414: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
    
    },
  });
  
// Pre_wedding slider
var swiper = new Swiper(".pre_wedd_container", {
  autoplay :true,
  loop: true,
  // navigation: {
  //   nextEl: ".pre_weddnext",
  //   prevEl: ".pre_weddprev",
  // },
  pagination: {
    el: ".prewedd-pagi",
    clickable: true,
  },
});

//IMAGE Gallery

  $('[data-fancybox="gallery"]').fancybox({
    buttons: [
      "slideShow",
      "thumbs",
      "zoom",
      "fullScreen",
      "share",
      "close"
    ],
    loop: false,
    protect: true
  });

