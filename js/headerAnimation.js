const headerAnimation = Vue.createApp({

  data() {
    return {
      prevScrollPos: window.scrollY,
      showMenu: false,
      animateSlideDown: false,
      animateSlideUp: false
    };
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeDestroy() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      const currentScrollPos = window.scrollY;
      if (currentScrollPos > 500) {
        if (this.prevScrollPos > currentScrollPos + 50) {
          this.showMenu = true;
          this.animateSlideDown = true;
          this.animateSlideUp = false;
        } else if (this.prevScrollPos < currentScrollPos - 50) {
          this.showMenu = false;
          this.animateSlideDown = false;
          this.animateSlideUp = true;
        }
      } else {
        this.showMenu = false;
        this.animateSlideDown = false;
        this.animateSlideUp = false;
      }
      this.prevScrollPos = currentScrollPos;
    }
  }
});

headerAnimation.mount('#headerAnimation');


$(document).ready(function () {
  function animation() {
    let windowHeight = $(window).height();
    let scroll = $(window).scrollTop();
    $('.animation').each(function () {
      let position = $(this).offset().top;
      let animationName = $(this).attr('data-animation');
      let delay = $(this).attr('data-delay');
      if (position < windowHeight + scroll - 150) {
        $(this).addClass(animationName);
        $(this).css('animation-delay', delay);
      }
    });
  }
  $(window).scroll(function () {
    animation();
  });
  animation();
});