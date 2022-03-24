
const vid = document.querySelector('.background-video video');
function stopVid() {
  vid.pause();
}
stopVid();

function playVid() {
  vid.play()
}

let rotateInterval;
let degree = 0;
let debugMessages = [];

function renderDebug(message) {
  debugMessages.push(message);
  $('.mobile-debug').html(debugMessages.map((item, i) => i + ': ' + item).join('<br>'));
  document.querySelector('.mobile-debug').scrollTop = document.querySelector('.mobile-debug').scrollHeight;
}

$('.hidden-how-btn-1').on('click', function () {
  $('body').addClass('no-scroll')
  $([document.documentElement, document.body]).animate({
    scrollTop: $(".section-ways-slider").offset().top
  }, 2000);
  $('body').removeClass('no-scroll')
})


const scaleNote = () => {
  if (window.matchMedia("(min-width: 1600px)").matches) {
    return 4
  } else if (window.matchMedia("(max-width: 1440px)").matches) {
    return 6
  }
}

const scaleNoteY = () => {
  if (window.matchMedia("(min-width: 1600px)").matches) {
    return 200
  } else if (window.matchMedia("(max-width: 1440px)").matches) {
    return 100
  }
}


const becomeTextHeight = () => {
  let height;
  if (window.matchMedia("(min-width: 1600px)").matches) {
    height = 135
    $('.text-left').toggleClass('text-left-anim')
    $('.text-right').toggleClass('text-left-anim')
  } else if (window.matchMedia("(max-width: 1440px)").matches) {
    $('.text-left').toggleClass('text-left-anim')
    $('.text-right').toggleClass('text-left-anim')
    height = 90
  }
}


const image27 = $('.section-invert .image-27')
const image26 = $('.section-invert .image-26')
const earnText = $('.section-earn .text-block-33')
const earnText2 = $('.section-earn .text-go ')
const invertText = $('.section-invert .text-block-33')
const invertText2 = $('.section-invert .text-go')
const section7Text = $('.section-7 .text-go')
const slickScroll = $('.road-map-slider .slick-track')
const lottieVid = document.querySelector('.background-video-4 video')
console.log(lottieVid)
lottieVid.loop = false;
lottieVid.autoplay = false
lottieVid.currentTime = 0;
lottieVid.pause();


lottieVid.addEventListener('ended', (event) => {
  console.log('video ended')
  const offset = window.pageYOffset
  window.scrollTo({
    top: offset + 100,
    left: 0,
    behavior: 'smooth'
  });

});


$('.visible-text').css('opacity', '0')


function textblock7() {
  return 0
}

const vid2 = document.querySelector('.big-video');
vid2.muted = true;
vid2.addEventListener("webkitendfullscreen", function () {
  goToSection("label7", "label8");
}, false);

// Pace.once("done", function () {
//   //   $('#embed-video-1').html(`
//   //   <source src="./images/foot-mp4.mp4" data-wf-ignore="true" />
//   // `);

//   $('#embed-video-2').html(`
//   <source src="./images/video-in-laptop-mp4.mp4" data-wf-ignore="true" />
//   <source src="./images/video-in-laptop-webm.webm" data-wf-ignore="true" />
// `);

//   $('#embed-video-3').html(`
//   <source src="./images/now-you-can-video-mp4.mp4" data-wf-ignore="true" />
//   <source src="./images/now-you-can-video-webm.webm" data-wf-ignore="true" />
// `);

//   $('#embed-video-4').html(`
//   <source src="./images/space-mp4.mp4" data-wf-ignore="true" />
//   <source src="./images/space-webm.webm" data-wf-ignore="true" />
// `);

//   $('#embed-video-5').html(`
//   <source src="./images/new-parachute-video.mp4" data-wf-ignore="true" />
// `);

//   $('#embed-video-6').html(`
//   <source src="./images/petri-mp4.mp4" data-wf-ignore="true" />
//   <source src="./images/petri-webm.webm" data-wf-ignore="true" />
// `);

//   $('#embed-video-7').html(`
//   <source src="./images/backyard-mp4.mp4" data-wf-ignore="true" />
//   <source src="/images/backyard-webm.webm" data-wf-ignore="true" />
// `);

//   $('#embed-video-8').html(`
//   <source src="./images/package-mp4.mp4" data-wf-ignore="true" />
//   <source src="./images/package-webm.webm" data-wf-ignore="true" />
// `);

//   $('.big-video').html(`
//   <source src="./images/MetapaxFinal1080p.mp4" type="video/mp4">
// `);
// });

const parachuteVid = document.querySelector('#embed-video-5');
parachuteVid.muted = true;
parachuteVid.pause();

function playVid2() {
  vid2.play()
  console.log('height')
  vid2.onended = function () {
    $('.become-video').addClass('shadow-filter')
    becomeTextHeight()
  };
}

$('.trigger-invite-btn').on('click', function () {
  $('.trigger-invite-img-2').addClass('show')
  $(this).addClass('hide')
})


let tl2 = gsap.timeline({
  paused: true
});

const scrollSections = document.querySelectorAll(".scroll-section");

// this scrolling object just allows us to conveniently call scrolling.enable(), scrolling.disable(), and check if scrolling.enabled is true. 
// some browsers (like iOS Safari) handle scrolling on a separate thread and can cause things to get out of sync (jitter/jumpy), so when we're animating the scroll position, force an update of GSAP tweens when there's a scroll event in order to maintain synchronization)

const scrolling = {
  enabled: true,
  events: "scroll,wheel,mousewheel,touchmove,pointermove".split(","),
  prevent: e => e.preventDefault(),
  disable() {
    if (scrolling.enabled) {
      console.log('DISABLED');
      scrolling.enabled = false;
      document.querySelector('body').style.overflow = 'hidden';
      window.addEventListener("scroll", gsap.ticker.tick, { passive: true });
      scrolling.events.forEach((e, i) => (i ? document : window).addEventListener(e, scrolling.prevent, { passive: false }));
    }
  },
  enable() {
    if (!scrolling.enabled) {
      console.log('ENABLED');
      window.removeEventListener("scroll", gsap.ticker.tick);
      scrolling.events.forEach((e, i) => (i ? document : window).removeEventListener(e, scrolling.prevent));
      document.querySelector('body').style.overflow = '';
      scrolling.enabled = true;
    }
  }
};

let activeSection = null;

let isNotMob = window.matchMedia("(min-width: 768px)").matches;

let isVideoStarted = false;
let isVideoPlaying = false;

$('.button-8').on('click', function () {
  goToSection("label7", "label8");
})

$('#video-play-icon').on('click', function () { //на клик стартуется/паузится видео
  if (!isVideoStarted) {//если еще не начинался видик, скрыть там всякие элементы, размутить видик
    $('.big-video').css('visibility', 'visible');
    $('.big-video').css('opacity', '1');
    $('.video-play-icon').css('opacity', '0');
    $('.become-text').css('opacity', '0');
    vid2.muted = false;
    isVideoStarted = true;
  }

  if (isVideoPlaying) { //если видео идет, поставить на паузу и показать кнопку
    vid2.pause();
    $('.video-play-icon').css('opacity', '1');
  } else { // если видик на паузе запустить и скрыть кнопку
    playVid2();
    $('.video-play-icon').css('opacity', '0');
  }

  isVideoPlaying = !isVideoPlaying;
})


$(".go-to-section").click(function (event) {
  event.preventDefault();
  if (window.matchMedia("(max-width: 1100px)").matches && this.dataset.labelNumber == 7) {
    goToSection(`label6`, `label7`);
    return;
  }
  goToSection(`label` + (Number(this.dataset.labelNumber) - 1), `label` + Number(this.dataset.labelNumber));
});

function getSectionNumber(animationLabelString) {
  return animationLabelString.substr(5) ? parseInt(animationLabelString.substr(5)) : 0;
}

function goToSection(from, to, duration = 0.2) {
  console.log('goto section fired', from, to);

  if (scrolling.enabled && to) { // skip if a scroll tween is in progress
    scrollTriggers.forEach((trigger) => { trigger.disable() });
    scrolling.disable();

    let targetSection = scrollSections[getSectionNumber(to)];

    gsap.to(window, {
      scrollTo: { y: targetSection, autoKill: false },
      duration: duration
    });
    console.log('goto section fired successfully', from, to);

    tl2.tweenFromTo(from, to, {
      onComplete: function () {
        gsap.to(window, {
          scrollTo: { y: targetSection, autoKill: false },
          duration: 0,
          onComplete: function () {
            scrollTriggers.forEach((trigger) => { trigger.enable() });
            scrolling.enable();
          }
        });
      }
    });
  }
}
let scrollTriggers = [];
scrollSections.forEach((section, i) => {

  scrollTriggers.push(ScrollTrigger.create({
    trigger: section,
    start: "top bottom-=1",
    end: "bottom top+=1",
    onEnter: () => goToSection(tl2.currentLabel(), tl2.nextLabel()),
    onEnterBack: () => goToSection(tl2.currentLabel(), tl2.previousLabel())
  }));

});

let windowHeight = $(window).height(); 
$('#start').css('height', `${windowHeight}px`)

function getEdgePosition() {
  let topPosition = 12 * $('.scroll-section').height();
  return { pos: topPosition, height: $('.scroll-section').height() };
}

if (window.matchMedia("(max-width: 1100px)").matches) {
  // Анимация для мобилок, tl2 - таймлайн для экранов
  tl2.addLabel("start")

    .to(".image-40", { x: 450, duration: 1.5 })
    .to(".image-bg-map", { opacity: 0 }, "<")
    .to('.scroll-dv', { left: 0, right: 0, top: '10vh', bottom: 0, width: '100vw', duration: 1.5 }, "<")
    .to('.arrow-down', { margin: '0 49vw', duration: 1.5 }, '<')
    .to(".image-42", { x: -280, opacity: 1, duration: 1.5 }, '<')
    .to(".image-7", { x: '-19vw', y: '-5vh', duration: 1.5 }, '<')
    .to(".image-6", { x: '15.5vw', y: '30vh', rotation: -62, duration: 1.5 }, '<')
    .to('.first-anim-text', { y: -500, opacity: 0, duration: 1.5 }, '<')
    .to('.second-anim-text', { opacity: 1, duration: 1 }, '<')
    .addLabel("label1")

    .to(".text-block-3", { y: -300, opacity: 0, duration: 1 },)
    .to(".scroll-dv", { opacity: 0, duration: 1 }, '<')
    .to(".image-40", { y: -560, opacity: 0, duration: 1.5 })
    .to(".image-42", { x: -2000, opacity: 0, duration: 1 }, '<')
    .to(".image-7", { x: '70vw', y: '-28vh', width: '160vw', height: '85vh', duration: 1.5 }, '<')
    .to(".image-6", { x: '-50vw', y: '70vh', width: '195vw', height: '100vh', rotation: 0, duration: 1.5 }, '<')
    .to(".image-8", { x: 0, opacity: 1, duration: 1 })
    .to(".text-block-7", { opacity: 1, y: textblock7, duration: 1 }, "-=1")
    .addLabel("label2")

    .set('.secondsect', { zIndex: 13, x: 1000, visibility: 'visible' })
    .set('.section-3', { visibility: 'visible' })
    .to('.secondsect', { x: 0, zIndex: 13, duration: 1.5 })
    .set('.screenone', { opacity: 0, visibility: 'hidden' })
    .to('.div-block-7', { opacity: 1, duration: 1.5, onComplete: function () { vid.play() } },)
    .addLabel("label3")

    .to('.div-block-7', { y: -500, opacity: 0, duration: 1 },)
    .to('.secondsect', { opacity: 0, duration: 1 })
    .set('.secondsect', { visibility: 'hidden' })
    .set('.section-3', { zIndex: 14 })
    .to('.mobile-section-title-item', { opacity: 1, duration: 1.5 },)
    .to('.visible-text', { opacity: 1, duration: 1.5 }, "<")
    .from('.laptop-video', { scale: scaleNote, y: scaleNoteY, duration: 1.5 }, "-=1")
    .addLabel("label4")

    .to('.laptop-int', { opacity: 1, duration: 1.5 },)
    .to('.mobile-section-title-item', { opacity: 0, duration: 1.5 }, "<")
    .to('.visible-text', { opacity: 0, duration: 1.5 }, "<")
    .to('.mobile-section-title-item-hidden', { opacity: 1, duration: 1.5 }, "<")
    .to('.hidden-text-2', { opacity: 1, duration: 1.5 }, "<")
    .to('.image-10', { x: -500, opacity: 0, duration: 1.5 }, "<")
    .to('.image-11', { y: '11%', x: '-17%', width: '180%', duration: 1.5 }, "<")
    .addLabel("label5")

    .set('.section-4', { visibility: 'visible', onComplete: () => { vid.pause() }, onReverseComplete: () => { vid.play() } })
    .set('.text-block-14', { scale: 1 })
    .set('.text-block-15', { scale: 1 })
    .to('.section-3', { opacity: 0, duration: 1 })//исчезает предыдущий слайд
    .to('.mobile-section-title-item-hidden', { y: '-75px', duration: 1.5 }, '<')//поднимается текст пред. слайда
    .to('.hidden-text-2', { y: '-75px', duration: 1.5 }, '<')//поднимается текст пред. слайда
    .to('.text-block-14', { y: '-75px', duration: 1.5 }, '<')//поднимается новый текст на место пред.
    .to('.text-block-15', { y: '-75px', duration: 1.5 }, '<')//поднимается новый текст на место пред.
    .set('.section-4', { zIndex: 15 })//новый слайд выходит на первый план
    .set('.section-3', { visibility: 'hidden' })//убирается пред. див
    .addLabel("label6")

    .set('.special-sect', { visibility: 'visible' })
    .to('.section-4 ', { opacity: 0, duration: 1.5, onReverseComplete: () => { vid2.pause() }, onComplete: () => { if (isVideoPlaying) playVid2() } }) // паузится видео или плеится
    .to('.text-block-14', { scale: 0.3, y: '-100px', duration: 1.5 }, '<') // уменьшается и поднимается текст
    .to('.text-block-15', { scale: 0.1, y: '-100px', duration: 1.5 }, '<')  // уменьшается и поднимается текст
    .to('.glasses-in-now-you-can', { opacity: 0, duration: 1 }, '<') // очки пропадают
    .set('.special-sect', { zIndex: 16 })
    .set('.section-4', { visibility: 'hidden' })
    .addLabel("label7")

    .set('.big-video', { visibility: 'visible' })
    .to('.nothing', { display: 'none', duration: 0.01, onComplete: () => { playVid2(); vid2.muted = false; }, onReverseComplete: () => { vid2.pause(), $('.video-play-icon').css('display', 'block') } })
    .to('.become-text', { opacity: 0, duration: 1 })
    .to('.video-play-icon', { opacity: 0, duration: 0.5 }, '<')
    .to('.big-video', { opacity: 1, duration: 1.5 }, '<')
    .to('.img-bg', { opacity: 0, duration: 1.5 }, '<')
    .to('.button-8', { opacity: 0, duration: 1, }, '<')
    .set('.video-play-icon', { display: 'none' })
    .addLabel("label8")

    .to('.special-sect', { scale: 0.6, opacity: 0, duration: 1, onComplete: function () { vid2.pause() }, onReverseComplete: () => { if (isVideoPlaying) playVid2() } }) // паузится/плеится видео
    .set('.section-6', { zIndex: 17, visibility: 'visible' },)
    .fromTo('.image-43', { scale: 6 }, { scale: 0.5, duration: 1 }, '<')
    .from('.text-block-58 ', { scale: 10, opacity: 0, y: 300, duration: 1 }, '-=0.5')
    .set('.special-sect', { visibility: 'hidden' })
    .to('.alantext', { opacity: 1, duration: 0.5 })
    .addLabel("label8")

    .to('.text-block-58', { scale: 0.4, opacity: 0, y: 0, duration: 1.5 },)
    .to('.alantext', { opacity: 0, duration: 1 }, '<')
    .to('.image-43', { scale: 0.7, duration: 1 }, '<')
    .to('.text-block-56', { scale: 1, opacity: 1, duration: 1 }, '-=0.5')
    .to('.content-bottom-second-hiiden-text', { opacity: 1, duration: 0.5 })
    .addLabel("label9")

    .set('.section-7', { visibility: 'visible' })
    .set('.layers-1', { x: 300 },)
    .set('.layers-2', { y: -300 },)
    .set('.layers-3', { x: -300, y: -100 },)
    .set('.marcel-1', { x: -100, opacity: 0, })
    .set('.marcel-3', { x: -100, opacity: 0, })
    .set('.text-block-16', { x: -100, opacity: 0 })
    .to('.section-6', { opacity: 0, duration: 0.5 },)
    .set('.section-7', { zIndex: 18 })
    .set('.section-6', { visibility: 'hidden' })
    .to('.text-block-16', { x: 0, opacity: 1, duration: 0.5 })
    .to('.image-19', { opacity: 1, duration: 0.5 }, '<')
    .to('.marcel-1', { x: 0, opacity: 1, duration: 0.5 })
    .to('.marcel-3', { x: 0, opacity: 1, duration: 0.5 })
    .addLabel("label10")

    .to('.marcel-1', { opacity: 0, duration: 1 },)
    .to('.marcel-3', { opacity: 0, duration: 1 }, '<')
    .to('.image-19', { opacity: 0, duration: 1 }, '<')
    .to('.marcel-2', { opacity: 1, duration: 2 },)
    .to('.marcel-4', { opacity: 1, duration: 2 }, '<')
    .to('.glasses-rotate', { opacity: 1, duration: 1 }, '<')
    .to('.change-text', { opacity: 0, duration: 1 }, '<')
    .to('.give', { opacity: 1, duration: 1 }, '<')
    .addLabel("label11")

    .set('.white-section', { zIndex: 19, x: '100vw', visibility: 'visible' })
    .to('.white-section', { x: 0, duration: 1.5 })
    .to('.text-block-26', { x: '-99vw', duration: 2 })
    .set('.section-7', { visibility: 'hidden' })
    .addLabel("label12")

    .set('#howto', { visibility: 'visible' })
    .to('.h2', { scale: 1.5, y: -200, opacity: 0, duration: 0.5 })
    .to('.text-block-18', { scale: 1.5, y: 200, opacity: 0, duration: 0.5 }, '<')
    .set('.section-7', { opacity: 0, visibility: 'hidden' })
    .set('.section-ways-slider', { zIndex: 20 },)
    .to('#howto', { y: '-100vh', duration: 1.5, onComplete: () => { parachuteVid.play(); }, onReverseComplete: () => { parachuteVid.pause() } })//играется видео, когда слайд не на экране - на его месте фотка
    .set('#embed-video-5', { display: 'inline-block' }, '+=0.1')//поялвляются все 4 видео
    .set('#embed-video-6', { display: 'inline-block' })
    .set('#embed-video-7', { display: 'inline-block' })
    .set('#embed-video-8', { display: 'inline-block' })
    .set('#embed-img-5', { display: 'none' })
    .to('.white-section', { opacity: 0, duration: 0.6 }, '<')
    .addLabel("label13")

    .to('.section-ways-slider', { opacity: 0, duration: 0.5 })
    .set('.section-ways-slider', { visibility: 'hidden' })
    .set('.section-invert', { zIndex: 21, visibility: 'visible' })
    .to('.section-invert', { opacity: 1, duration: 1 })
    .addLabel("label14")

    .to(invertText, { opacity: 0, duration: 0.5 },)
    .to(invertText2, { opacity: 0, duration: 0.5 }, "<")
    .to('.section-invert', { opacity: 0, duration: 1 }, '<')
    .set('.section-invert', { visibility: 'hidden' })
    .set('.section-monic', { zIndex: 22, visibility: 'visible' })
    .to('.section-monic', { opacity: 1, duration: 0.5 },)
    .to('.op-0', { opacity: 1, duration: 2 }, '+=2')
    .to('#mac-svg-second', { opacity: 0, duration: 2 }, '<')
    .addLabel("label15")

    .to('.section-monic', { opacity: 0, duration: 0.5 },)
    .set('.section-monic', { visibility: 'hidden' })
    .set('.section-earn', { zIndex: 23, visibility: 'visible' })
    .to('.section-earn', { opacity: 1, duration: 1 })
    .addLabel("label16")

    .to(earnText, { opacity: 0, duration: 0.5 })
    .to(earnText2, { opacity: 0, duration: 0.5 }, "<")
    .to('.section-earn', { opacity: 0, duration: 0.5 }, '<')
    .set('.section-earn', { visibility: 'hidden' })
    .set('.section-offer', { zIndex: 24, visibility: 'visible' },)
    .to('.section-offer', { opacity: 1, duration: 1 },)
    .addLabel("label17")

    .to('.section-offer', { opacity: 0, duration: 0.5 },)
    .set('.section-offer', { visibility: 'hidden' })
    .set('.text-block-38', { opacity: 0, x: -200 })
    .set('.hiw-img1, .image-52', { opacity: 0 })
    .set('.how-works-section', { zIndex: 25, visibility: 'visible' })
    .to('.how-works-section', { opacity: 1, duration: 1 },)
    .to('.hiw-img1', { opacity: 1, duration: 1 }, '<')
    .to('.text-block-38', { opacity: 1, x: 0, duration: 0.5 }, '<')
    .addLabel("label18")

    .from('.how-works-rotate-image1', { opacity: 0, duration: 0.5 })
    // .to('.how-works-rotate-container', {rotation: -180, duration: 2, ease: "none"})
    .to('.hiw-img1', { opacity: 0, duration: 0.5 }, '<')
    .to('.text-block-38', { opacity: 0, duration: 0.5 }, '<')
    .to('.hiw-vis', { opacity: 0, duration: 0.5 }, '<')
    .to('.text-block-51', { opacity: 1, duration: 0.5 },)
    .to('.image-52', { opacity: 1, duration: 0.5 }, '<')
    .to('.hiw-unvis', { opacity: 1, duration: 0.5 }, '<')
    .addLabel("label19")

    .to('.how-works-section', { opacity: 0, duration: 1 })
    .set('.how-works-section', { visibility: 'hidden' })
    .set('.marque-glasses', { zIndex: 26, visibility: 'visible' },)
    .to('.marque-glasses', { opacity: 1, duration: 0.5 })
    .addLabel("label20")

    .to('.marque-glasses', { opacity: 0, duration: 0.5 },)
    .set('.marque-glasses', { visibility: 'hidden' })
    .to('.time-matters', { zIndex: 27, visibility: 'visible' },)
    .to('.time-matters', { opacity: 1, duration: 1 },)
    .addLabel("label21")

    .to('.blur-1', { x: '-50vw', duration: 1, onComplete: function () { $('.blur-1').attr('src', './images/man-screen.svg'); }, onReverseComplete: function () { $('.blur-1').attr('src', './images/man-screen-blur.png'); } })
    .to('.blur-2', { x: '20vw', duration: 1, onComplete: function () { $('.blur-2').attr('src', './images/man-laptop-blur.png'); }, onReverseComplete: function () { $('.blur-2').attr('src', './images/man-laptop.svg'); } }, '<')
    .to('#text-block-46-first', { opacity: 0, duration: 1.5 }, '<')
    .to('#text-block-46-second', { opacity: 1, duration: 1.5 }, '<')
    .addLabel("label22")

    .to('.blur-1', { opacity: 0, duration: 1 })
    .to('.blur-2', { opacity: 0, duration: 1 }, '<')
    .to('.blur-3-container', { opacity: 1, duration: 0.5 })
    .to('.text-block-46', { opacity: 0, duration: 1 }, '<')
    .to('.text-block-63', { opacity: 1, duration: 1 }, '<')
    .to('.gradient-under-sea-image', {
      opacity: 0, duration: 1, onComplete: () => {
        $('.drowning-man-image').addClass('blur-effect-2');
        $('.surfing-man-image').removeClass('blur-effect-2');
      },
      onReverseComplete: () => {
        $('.drowning-man-image').removeClass('blur-effect-2');
        $('.surfing-man-image').addClass('blur-effect-2');
      }
    }, '+=2')
    .addLabel("label23")

    .to('.time-matters', { opacity: 0, duration: 0.5 },)
    .set('.time-matters', { visibility: 'hidden' })
    .set('.section-road-map', { zIndex: 28, visibility: 'visible' },)
    .to('.section-road-map', { opacity: 1, duration: 1 },)
    .addLabel("label24")

    // .to(slickScroll, {x:-3000, duration: 3})
    .to('.section-road-map', { opacity: 0, duration: 0.5 },)
    .set('.section-road-map', { visibility: 'hidden' })
    .set('.sect-mission', { zIndex: 29, visibility: 'visible' },)
    .to('.sect-mission', { opacity: 1, duration: 1 },)
    .addLabel("label25")

    .to('.vis-mis', { opacity: 0, duration: 0.5 })
    .to('.mis-text-vis', { opacity: 0, duration: 0.5 }, '<')
    .to('.bg-tech', { opacity: 0, duration: 0.5 }, '<')
    .to('.mis-text-invs', { opacity: 1, duration: 1 })
    .to('.invis-mis', { opacity: 1, duration: 1 }, '<')
    .to('.new-way-bg', { opacity: 1, duration: 1 }, '<')
    .addLabel("label26")

    .to('.sect-mission', { opacity: 0, duration: 0.5 },)
    .set('.sect-mission', { visibility: 'hidden' })
    .set('.blockchain-section', { zIndex: 30, visibility: 'visible' },)
    .to('.blockchain-section', { opacity: 1, duration: 1 },)
    .addLabel("label27")

    .to('.blockchain-section', { opacity: 0, duration: 0.5 },)
    .set('.blockchain-section', { visibility: 'hidden' })
    .set('.site-logo', { opacity: 1 })
    .set('.section-form', { zIndex: 31, visibility: 'visible' },)
    .to('.section-form', {
      opacity: 1, duration: 1, onComplete: () => { // после того, как пройдут все анимации, начинает крутиться текст
        rotateInterval = setInterval(() => {
          degree -= 0.25;
          if (degree <= -360) degree = 0;
          $('.image-36').css('transform', `rotate(${degree}deg)`)
        }, 15.3); // эту цифру менять, если надо ускорить/замедлить. сейчас полный оборот - 22 сек.
      }, onReverseComplete: () => { clearInterval(rotateInterval); }
    })
    .addLabel("label28")

} else if (window.matchMedia("(min-width: 1100px)").matches && window.matchMedia("(max-width: 1440px)").matches) {
  // Анимация для ноута, tl2 - таймлайн для экранов
  tl2.addLabel("start")

    .to(".image-40", { y: 400, opacity: 0, duration: 1.5 })
    .to('.scroll-dv', { opacity: 0, duration: 1.5 }, '<')
    .to(".image-41", { y: 150, x: 300, opacity: 1, duration: 1.5 }, '<')
    .to(".image-42", { x: '-42%', opacity: 1, duration: 1.5 }, '<')
    .to(".image-7", { x: 450, y: -350, duration: 1.2 }, '<')
    .to('.first-anim-text', { opacity: 0, duration: 1 }, '<0.5')
    .to('.second-anim-text', { opacity: 1, duration: 1 }, '>')
    .to(".image-6", { x: -600, y: 0, duration: 1.5 }, "-=2")
    .addLabel("label1")

    .to(".text-block-3", { y: -300, opacity: 0, duration: 1 })
    .to(".image-41", { y: 150, x: -300, opacity: 0, duration: 1 }, '<')
    .to(".image-42", { x: 0, y: -150, opacity: 0, duration: 1 }, '<')
    .to(".image-8", { x: 0, opacity: 1, duration: 1 })
    .to(".image-7", { x: 300, y: -450, duration: 2 }, "<")
    .to(".image-6", { x: -350, y: 400, duration: 2 }, "<")
    .to(".text-block-7", { opacity: 1, y: textblock7, duration: 1 }, "-=1")
    .addLabel("label2")

    .set('.secondsect', { zIndex: 13, x: 2000 })
    .to('.secondsect', { x: 0, zIndex: 13, duration: 2 })
    .set('.screenone', { opacity: 0 })
    .to('.div-block-7', { opacity: 1, duration: 1, onComplete: function () { vid.play() } },)
    .addLabel("label3")

    .to('.div-block-7', { y: -500, opacity: 0, duration: 1 })
    .to('.secondsect', { opacity: 0, duration: 1 })
    .set('.section-3', { zIndex: 14 })
    .to('.visible-title', { opacity: 1, duration: 1.5 },)
    .to('.visible-text', { opacity: 1, duration: 1.5 }, "<")
    .from('.laptop-video', { scale: scaleNote, y: scaleNoteY, duration: 1.5 }, "-=1")
    .addLabel("label4")


    .to('.laptop-int', { opacity: 1, duration: 1.5 },)
    .to('.visible-title', { opacity: 0, duration: 1.5 }, "<")
    .to('.visible-text', { opacity: 0, duration: 1.5 }, "<")
    .to('.hidden-text1', { opacity: 1, duration: 1.5 },)
    .to('.hidden-text-2', { opacity: 1, duration: 1.5 }, "<")
    .to('.image-10', { x: '33%', y: '-15%', duration: 3 }, 'label4')
    .to('.image-11', { x: '-40%', y: '10%', duration: 3 }, '<')
    .addLabel("label5")

    .to('.section-3', { opacity: 0, duration: 1, onComplete: function () { lottieVid.play() }, onReverseComplete: function () { lottieVid.pause(); lottieVid.set } }, '+=1')
    .set('.section-4', { zIndex: 15 })
    .to('.section-4', { opacity: 1 })
    .addLabel("label6")

    .to('.section-4 ', { opacity: 0, duration: 1.5, onComplete: function () { playVid2(); lottieVid.pause() }, onReverseComplete: function () { vid2.pause() } },)
    .to('.special-sect', { zIndex: 16 })
    .addLabel("label7")

    .to('.special-sect', { scale: 0.6, opacity: 0, duration: 1, onComplete: function () { vid2.pause() }, onReverseComplete: function () { vid2.play() } },)
    .set('.section-6', { zIndex: 17 },)
    .fromTo('.image-43', { scale: 6 }, { scale: 0.4, duration: 1 }, '<')
    .from('.text-block-58 ', { scale: 100, y: 0, duration: 1 }, '<')
    .to('.alantext', { opacity: 1, duration: 1 }, '<')
    .addLabel("label8")

    .to('.text-block-58', { scale: 0.4, opacity: 0, y: 0, duration: 0.5 },)
    .to('.alantext', { opacity: 0, duration: 0.5 }, '<')
    .to('.image-43', { scale: 0.6, duration: 0.5 }, '<')
    .to('.text-block-56', { scale: 1, y: 0, duration: 0.5 }, '<')
    .to('.content-bottom-second-hiiden-text', { opacity: 1, duration: 1 },)
    .addLabel("label9")

    .to('.section-6', { opacity: 0, duration: 1.5 },)
    .set('.marcel-1', { x: -100, opacity: 0 }, '<')
    .set('.marcel-3', { x: -100, opacity: 0 }, '<')
    .set('.text-block-16', { x: -100, opacity: 0 }, '<')
    .set('.section-7', { zIndex: 18 })
    .to('.text-block-16', { x: 0, opacity: 1, duration: 1 },)
    .to('.image-19', { opacity: 1, duration: 1 }, '<')
    .to('.marcel-1', { x: 0, opacity: 1, duration: 1 }, '<')
    .to('.marcel-3', { x: 0, opacity: 1, duration: 1 }, '<')
    .addLabel("label10")

    .to('.rotate-container-1', { rotation: -180, duration: 2, ease: "none" })
    .to('.marcel-1', { opacity: 0, duration: 1 }, '<')
    .to('.marcel-3', { opacity: 0, duration: 1 }, '<')
    .to('.marcel-2', { opacity: 1, duration: 1 }, '-=0.5')
    .to('.marcel-4', { opacity: 1, duration: 1 }, '<')
    .to('.image-19', { opacity: 0, duration: 1 }, '<')
    .to('.glasses-rotate', { opacity: 1, duration: 2 }, '<')
    .to('.change-text', { opacity: 0, duration: 1 }, '<')
    .to('.give', { opacity: 1, duration: 1 }, '<')
    .addLabel("label11")

    .set('.white-section', { zIndex: 19, x: 2000 },)
    .to('.white-section', { x: 0, duration: 2 })
    .to('.text-block-26', { x: -1000, duration: 1.5 }, '-=0.5')
    .addLabel("label12")

    .set('.section-ways-slider', { zIndex: 20 },)
    .to('.secondsect-father', { opacity: 0, top: '-100vh', duration: 1.5 })
    .to('.mother', { top: 0, duration: 1.8 }, '<')
    .addLabel("label13")

    .set('.section-invert', { opacity: 0 })
    .set('.section-monic', { opacity: 0 })
    .set('.section-earn', { opacity: 0 })
    .set('.section-offer', { opacity: 0 })
    .set('.how-works-section', { opacity: 0 })
    .set('.marque-glasses', { opacity: 0 })
    .set('.section-road-map', { opacity: 0 })
    .set('.time-matters', { opacity: 0 })
    .set('.sect-mission', { opacity: 0 })
    .set('.blockchain-section', { opacity: 0 })
    .set('.section-form ', { opacity: 0 })
    .to('.section-ways-slider', { opacity: 0, duration: 0.5 },)
    .set('.section-invert', { zIndex: 21 })
    .fromTo('.section-invert', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label14")

    .to('.section-invert', { opacity: 0, duration: 0.6 })
    .set('.section-monic', { zIndex: 22 })
    .fromTo('.section-monic', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label15")

    .to('.section-monic', { opacity: 0, duration: 0.6 })
    .set('.section-earn', { zIndex: 23 })
    .fromTo('.section-earn', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label16")

    .to('.section-earn', { opacity: 0, duration: 0.6 })
    .set('.section-offer', { zIndex: 24 })
    .fromTo('.section-offer', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label17")

    .to('.section-offer', { opacity: 0, duration: 0.5 })
    .set('.how-works-section', { zIndex: 25, opacity: 1 })
    .set('.how-works-rotate-image1', { opacity: 0 })
    .set('.how-works-rotate-container', { rotation: -40 })
    .set('.hiw-vis', { x: -200, opacity: 0 })
    .set('.text-block-38', { opacity: 0, x: -200 })
    .to('.how-works-rotate-image1', { opacity: 1, duration: 1 })
    .to('.how-works-rotate-container', { rotation: 0, duration: 1 }, '<')
    .to('.text-block-38', { opacity: 1, x: 0, duration: 1 }, '<')
    .to('.hiw-vis', { opacity: 1, x: 0, duration: 1 }, '<')
    .addLabel("label18")

    .to('.how-works-rotate-container', { rotation: -180, duration: 2 })
    .to('.text-block-38', { opacity: 0, duration: 1 }, '<')
    .to('.hiw-vis', { opacity: 0, duration: 1 }, '<')
    .to('.text-block-51', { opacity: 1, duration: 1 }, '<')
    .to('.hiw-unvis', { opacity: 1, duration: 1 }, '<')
    .addLabel("label19")

    .to('.how-works-section', { opacity: 0, duration: 0.6 })
    .set('.marque-glasses', { zIndex: 26, opacity: 0 })
    .to('.marque-glasses', { opacity: 1, duration: 1 })
    .addLabel("label20")

    .to('.marque-glasses', { opacity: 0, duration: 0.5 })
    .set('.time-matters', { zIndex: 27, opacity: 1 })
    .to('.blur-2', { x: 300, duration: 1.8, onComplete: function () { $('.blur-2').addClass('blur-effect'); }, onReverseComplete: function () { $('.blur-2').removeClass('blur-effect'); } },)
    .to('.image-53', { x: '30%', y: '-45%', duration: 1.8 }, "<+0.2")
    .fromTo('.blur-1', { scale: 0.2, opacity: 0 }, { opacity: 1, scale: 1, x: -400, duration: 1.5, onComplete: function () { $('.blur-1').addClass('unblur'); }, onReverseComplete: function () { $('.blur-1').removeClass('unblur'); } }, '<+0.2')
    .fromTo('.earn-title', { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 1.8 }, '<')
    .addLabel("label21")


    .to('.blur-1', { opacity: 0, duration: 1.8 })
    .to('.blur-2', { opacity: 0, duration: 1.8 }, '<')
    //.to('.image-53', { opacity: 0, duration: 1.8 }, "<")
    .to('.text-block-46', { opacity: 0, duration: 1.8 }, '<')
    .to('.blur-3', { opacity: 1, duration: 1 })
    .to('.black-bg', { opacity: 1, duration: 0.3 }, '<')
    .to('.text-block-63', { opacity: 1, duration: 1 }, '<')
    .addLabel("label22")

    .to('.time-matters', { opacity: 0, duration: 1 })
    .set('.section-road-map', { zIndex: 28, opacity: 1 })
    .fromTo('.road-map-slider', { y: 3000, opacity: 0 }, { y: 0, opacity: 1, duration: 1.2 })
    .addLabel("label23")


    .to('.section-road-map', { opacity: 0, duration: 1 })
    .set('.sect-mission', { zIndex: 29 })
    .to('.sect-mission', { opacity: 1, duration: 1.2 })
    .addLabel("label24")


    .to('.vis-mis', { opacity: 0, duration: 1 })
    .to('.mis-text-vis', { opacity: 0, duration: 1 }, '<')
    .to('.mis-text-invs', { opacity: 1, duration: 1 })
    .to('.invis-mis', { opacity: 1, duration: 1 }, '<')
    .addLabel("label25")

    .to('.sect-mission', { opacity: 0, duration: 1 })
    .set('.blockchain-section', { zIndex: 30 })
    .to('.blockchain-section', { opacity: 1, duration: 1.2 })
    .addLabel("label26")

    .to('.blockchain-section', { opacity: 0, duration: 1 })
    .set('.section-form', { zIndex: 31 })
    .set('.section-form', { opacity: 1, duration: 1.2 })
    .addLabel("label27")



} else {
  // Анимация для десктоп, tl2 - таймлайн для экранов
  tl2.addLabel("start")

    .to(".image-40", { y: 400, opacity: 0, duration: 1.6 })
    .to('.scroll-dv', { opacity: 0, duration: 1.5 }, "<")
    .to(".image-41", { y: 150, x: 300, opacity: 1, duration: 1.5 }, '<')
    .to(".image-42", { x: -600, opacity: 1, duration: 1.5 }, '<')
    .to(".image-7", { x: 600, y: -100, duration: 1.2 }, '<')
    .to('.first-anim-text', { opacity: 0, duration: 1 }, '<0.5')
    .to('.second-anim-text', { opacity: 1, duration: 1 }, '>')
    .to(".image-6", { x: -600, y: 0, duration: 1.5 }, "-=2")
    .addLabel("label1")

    .to(".text-block-3", { y: -300, opacity: 0, duration: 1 }) // пропадает надпись
    .to(".image-41", { y: 150, x: -300, opacity: 0, duration: 1 }, '<') // улетают очки
    .to(".image-42", { x: 0, y: -150, opacity: 0, duration: 1 }, '<') // улетают очки
    .to(".image-8", { x: 0, opacity: 1, duration: 1 }) // прилетает лого
    .to(".image-7", { x: 600, y: -600, duration: 2 }, "<") // блики сдвигаются
    .to(".image-6", { x: -600, y: 200, duration: 2 }, "<") // блики сдвигаются
    .to(".text-block-7", { opacity: 1, y: textblock7, duration: 1 }, "-=1") // нижняя подпись
    .addLabel("label2")

    .set('.secondsect', { zIndex: 13, x: 2000 })
    .to('.secondsect', { x: 0, zIndex: 13, duration: 2 }) // выезжает экран справа
    .set('.screenone', { opacity: 0 })
    .to('.div-block-7', { opacity: 1, duration: 1, onComplete: function () { vid.play() } }) // проявляется текст, после проявления запускается видос
    .addLabel("label3")

    .to('.div-block-7', { y: -500, opacity: 0, duration: 1 }) // уходит вверх, исчезая текст
    .to('.secondsect', { opacity: 0, duration: 1 }) // пропадает видос
    .set('.section-3', { zIndex: 14 })
    .to('.visible-title', { opacity: 1, duration: 1.5 },) // появляется первый текст у ноута
    .to('.visible-text', { opacity: 1, duration: 1.5 }, "<")
    .from('.laptop-video', { scale: scaleNote, y: scaleNoteY, duration: 1.5 }, "-=1") // уменьшается ноут
    .addLabel("label4")

    .to('.laptop-int', { opacity: 1, duration: 1.5 },) // футер внутри ноута
    .to('.visible-title', { opacity: 0, duration: 1.5 }, "<")
    .to('.visible-text', { opacity: 0, duration: 1.5 }, "<")
    .to('.hidden-text1', { opacity: 1, duration: 1.5 },) // смена текста
    .to('.hidden-text-2', { opacity: 1, duration: 1.5 }, "<")
    .to('.image-10', { x: '30%', y: '-30%', duration: 3 }, 'label4') // блики
    .to('.image-11', { x: '-70%', y: '0%', duration: 3 }, '<')
    .addLabel("label5")

    .to('.section-3', { opacity: 0, duration: 1, onComplete: function () { lottieVid.play() }, onReverseComplete: function () { lottieVid.pause() } }, '+=1') // скрываем блок с лаптопом включаем видос
    .set('.section-4', { zIndex: 15 })
    .to('.section-4', { opacity: 1, duration: 1 })
    .addLabel("label6")

    .to('.section-4 ', { opacity: 0, duration: 1.6, onComplete: function () { playVid2(); lottieVid.pause() }, onReverseComplete: function () { vid2.pause() } },) // скрываем блок прошлого видоса, проигрываем новый
    .set('.special-sect', { zIndex: 16 })
    .addLabel("label7")

    .to('.special-sect', { scale: 0.6, opacity: 0, duration: 1, onComplete: function () { vid2.pause() }, onReverseComplete: function () { vid2.play() } },) // исчезает старое видео
    .set('.section-6', { zIndex: 17 },) // показываем слой "глаза"
    .fromTo('.image-43', { scale: 6 }, { scale: 0.5, duration: 1 }, '<') // уменьшаем глаз
    .from('.text-block-58 ', { scale: 100, y: 300, duration: 1 }, '<')
    .to('.alantext', { opacity: 1, duration: 1 })
    .addLabel("label8")

    .to('.text-block-58', { scale: 0.4, opacity: 0, y: 0, duration: 1.6 },)
    .to('.alantext', { opacity: 0, duration: 0.5 }, '<')
    .to('.image-43', { scale: 0.6, duration: 0.5 }, '<')
    .to('.text-block-56', { scale: 1, y: 0, duration: 0.5 }, '<')
    .to('.content-bottom-second-hiiden-text', { opacity: 1, duration: 0.5 })
    .addLabel("label9")

    .to('.section-6', { opacity: 0, duration: 1.5 },)
    .set('.marcel-1', { x: -100, opacity: 0 }, '<')
    .set('.marcel-3', { x: -100, opacity: 0 }, '<')
    .set('.text-block-16', { x: -100, opacity: 0 }, '<')
    .set('.section-7', { zIndex: 18 },)
    .to('.text-block-16', { x: 0, opacity: 1, duration: 1 },)
    .to('.image-19', { opacity: 1, duration: 1 }, '<')
    .to('.marcel-1', { x: 0, opacity: 1, duration: 1 }, '<')
    .to('.marcel-3', { x: 0, opacity: 1, duration: 1 }, '<')
    .addLabel("label10")

    .to('.rotate-container-1', { rotation: -180, duration: 2, ease: "none" })
    .to('.marcel-1', { opacity: 0, duration: 1 }, '<')
    .to('.marcel-3', { opacity: 0, duration: 1 }, '<')
    .to('.marcel-2', { opacity: 1, duration: 1 }, '-=0.5')
    .to('.marcel-4', { opacity: 1, duration: 1 }, '<')
    .to('.image-19', { opacity: 0, duration: 1 }, '<')
    .to('.glasses-rotate', { opacity: 1, duration: 2 }, '<')
    .to('.change-text', { opacity: 0, duration: 1 }, '<')
    .to('.give', { opacity: 1, duration: 1 }, '<')
    .addLabel("label11")

    .set('.white-section', { zIndex: 19, x: 2000 },)
    .to('.white-section', { x: 0, duration: 2 })
    .to('.text-block-26', { x: -1550, duration: 1.5 }, '-=0.5')
    .addLabel("label12")


    .set('.section-ways-slider', { zIndex: 20 },)
    .to('.secondsect-father', { opacity: 0, top: '-100vh', duration: 1.5 })
    .to('.mother', { top: 0, duration: 1.8 }, '<')
    .addLabel("label13")

    .set('.section-invert', { opacity: 0 })
    .set('.section-monic', { opacity: 0 })
    .set('.section-earn', { opacity: 0 })
    .set('.section-offer', { opacity: 0 })
    .set('.how-works-section', { opacity: 0 })
    .set('.marque-glasses', { opacity: 0 })
    .set('.section-road-map', { opacity: 0 })
    .set('.time-matters', { opacity: 0 })
    .set('.sect-mission', { opacity: 0 })
    .set('.blockchain-section', { opacity: 0 })
    .set('.section-form ', { opacity: 0 })
    .to('.section-ways-slider .wrapper', { opacity: 0, duration: 1 },)
    .set('.section-invert', { zIndex: 21 })
    .fromTo('.section-invert', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label14")

    .to('.section-invert', { opacity: 0, duration: 0.6 })
    .set('.section-monic', { zIndex: 22 })
    .fromTo('.section-monic', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label15")

    .to('.section-monic', { opacity: 0, duration: 0.6 })
    .set('.section-earn', { zIndex: 23 })
    .fromTo('.section-earn', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label16")

    .to('.section-earn', { opacity: 0, duration: 0.6 })
    .set('.section-offer', { zIndex: 24 })
    .fromTo('.section-offer', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label17")

    .to('.section-offer', { opacity: 0, duration: 0.6 })
    .set('.how-works-section', { zIndex: 25, opacity: 1 })
    .set('.how-works-rotate-image1', { opacity: 0 })
    .set('.how-works-rotate-container', { rotation: -40 })
    .set('.hiw-vis', { x: -200, opacity: 0 })
    .set('.text-block-38', { opacity: 0, x: -200 })
    .to('.how-works-rotate-image1', { opacity: 1, duration: 1 })
    .to('.how-works-rotate-container', { rotation: 0, duration: 1 }, '<')
    .to('.text-block-38', { opacity: 1, x: 0, duration: 1 }, '<')
    .to('.hiw-vis', { opacity: 1, x: 0, duration: 1 }, '<')
    .addLabel("label18")

    .to('.how-works-rotate-container', { rotation: -180, duration: 2 })
    .to('.text-block-38', { opacity: 0, duration: 1 }, '<')
    .to('.hiw-vis', { opacity: 0, duration: 1 }, '<')
    .to('.text-block-51', { opacity: 1, duration: 1 }, '<')
    .to('.hiw-unvis', { opacity: 1, duration: 1 }, '<')
    .addLabel("label19")

    .to('.how-works-section', { opacity: 0, duration: 0.6 })
    .set('.marque-glasses', { zIndex: 26 })
    .fromTo('.marque-glasses', { opacity: 0 }, { opacity: 1, duration: 1 })
    .addLabel("label20")

    .to('.marque-glasses', { opacity: 0, duration: 0.8 })
    .set('.time-matters', { zIndex: 27, opacity: 1 })
    .to('.blur-2', { x: 300, duration: 1.8, onComplete: function () { $('.blur-2').addClass('blur-effect'); }, onReverseComplete: function () { $('.blur-2').removeClass('blur-effect'); } },)
    .to('.image-53', { x: '30%', y: '-45%', duration: 1.8 }, "<+0.2")
    .fromTo('.blur-1', { scale: 0.2, opacity: 0 }, { opacity: 1, scale: 1, x: -400, duration: 1.5, onComplete: function () { $('.blur-1').addClass('unblur'); }, onReverseComplete: function () { $('.blur-1').removeClass('unblur'); } }, '<+0.2')
    .fromTo('.earn-title', { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 1.8 }, '<')
    .addLabel("label21")


    .to('.blur-1', { opacity: 0, duration: 1.8 })
    .to('.blur-2', { opacity: 0, duration: 1.8 }, '<')
    //.to('.image-53', { opacity: 0, duration: 1.8 }, "<")
    .to('.text-block-46', { opacity: 0, duration: 1.8 }, '<')
    .to('.blur-3', { opacity: 1, duration: 1.8 })
    .to('.black-bg', { opacity: 1, duration: 0.3 }, '<')
    .to('.text-block-63', { opacity: 1, duration: 1.8 }, '<')
    .addLabel("label22")

    .to('.time-matters', { opacity: 0, duration: 0.6 })
    .set('.section-road-map', { zIndex: 28, opacity: 1 })
    .fromTo('.road-map-slider', { y: 3000, opacity: 0 }, { y: 0, opacity: 1, duration: 1.2 })
    .addLabel("label23")


    .to('.section-road-map', { opacity: 0, duration: 0.6 })
    .set('.sect-mission', { zIndex: 29 })
    .to('.sect-mission', { opacity: 1, duration: 1 })
    .addLabel("label24")


    .to('.vis-mis', { opacity: 0, duration: 1 })
    .to('.mis-text-vis', { opacity: 0, duration: 1 }, '<')
    .to('.mis-text-invs', { opacity: 1, duration: 1 })
    .addLabel("label25")

    .to('.sect-mission', { opacity: 0, duration: 1 })
    .set('.blockchain-section', { zIndex: 30 })
    .to('.blockchain-section', { opacity: 1, duration: 1 },)
    .addLabel("label26")

    .to('.blockchain-section', { opacity: 0, duration: 1 })
    .set('.section-form', { zIndex: 31 })
    .to('.section-form', { opacity: 1, duration: 1 })
    .addLabel("label27")

}




$('.mac-svg').on('click', function () {
  $('.ded').toggleClass('show')
  $('.add-paxer').toggleClass('hide')
})





$('.video-mutte-play').on('click', function () {
  vid2.muted = false
  console.log('play audio')
  $(this).addClass('hide')
  $(this).removeClass('show')
  $('.video-mutte-stop').removeClass('hide')
  $('.video-mutte-stop').addClass('show')
})


$('.video-mutte-stop').on('click', function () {
  vid2.muted = true
  $(this).addClass('hide')
  $(this).removeClass('show')
  $('.video-mutte-play').removeClass('hide')
  $('.video-mutte-play').addClass('show')
})




// СВГ для вебфлоу
$('.talents').html(`<a href="#" class="hover-icon star-container">
<svg class="" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_887" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_887)">
  <path d="M20.572 33.9334L-27.3925 44.3897L-17.1421 51.0644L23.1987 60.5594L66.4221 46.9471L66.4706 45.0546C66.471 45.0492 20.6232 34.5334 20.572 33.9334Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="star"  d="M23.849 40.3108C23.928 40.2169 24.0722 40.2157 24.1528 40.3083L27.5661 44.2282C27.6045 44.2723 27.6602 44.2974 27.7186 44.2969L37.7731 44.213C38.0061 44.2111 38.0536 44.5415 37.8295 44.6053L30.1711 46.7859C30.0301 46.826 29.9788 46.9991 30.075 47.1096L33.066 50.5446C33.1955 50.6934 33.0542 50.92 32.8636 51.8692L24.1227 48.5374C24.0879 48.5281 24.0511 48.5284 24.0164 48.5383L15.3157 51.0156C15.126 51.0696 14.9809 51.8454 15.1079 50.6944L18.0412 47.21C18.1355 47.0979 18.0813 46.9257 17.9397 46.888L10.2459 44.8355C10.0208 44.7755 10.0628 44.4442 10.2958 44.4423L20.3503 44.3584C20.4087 44.3579 20.464 44.3319 20.5016 44.2872L23.849 40.3108Z" fill="white"/>
  <path d="M8.33571 14.1622C8.33571 14.1622 16.7191 19.826 18.7937 21.815C21.8683 21.8041 21.7052 21.7007 22.7628 21.845C23.8203 19.9893 29.3179 18.8151 30.3786 18.6207C31.4393 18.4262 33.7656 18.3294 34.5248 19.1627C35.2899 19.9911 36.1685 22.1556 36.1685 22.1556C36.1685 22.1556 37.5619 21.9327 38.2421 23.8597C38.9224 25.7868 39.3555 28.7405 39.3329 29.7357C39.3107 30.7254 38.0722 33.2251 38.0722 33.2251C38.0722 33.2251 37.6398 35.9494 36.5855 37.4664C35.5311 38.9833 33.5207 40.0418 32.6883 40.0859C31.856 40.1301 23.5038 39.0468 23.1141 38.4099C22.7244 37.773 22.6676 36.3329 22.6676 36.3329C22.6676 36.3329 20.7797 35.8026 20.3224 35.2688C19.8652 34.7351 18.8097 34.1606 18.8097 34.1606L-10.1581 28.729C-10.1581 28.729 -12.844 21.408 -7.70833 16.2888C-2.57265 11.1696 8.33571 14.1622 8.33571 14.1622Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M26.9329 38.2044C26.9329 38.2044 29.4576 38.345 32.1547 36.9548C34.8517 35.5646 38.0664 33.2229 38.0664 33.2229" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M23.1316 43.8714L22.941 40.3026L30.9511 10.5693C30.9511 10.5693 31.6729 9.99115 32.7931 10.2889C33.9133 10.5866 33.9273 10.9669 33.9273 10.9669L26.017 41.0925L23.1316 43.8714Z" fill="#72DD7D" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M23.3101 23.5816L23.6801 25.3872C23.6801 25.3872 26.8556 27.8374 26.7371 29.3723C26.6187 30.9073 25.8685 32.063 24.6451 32.1908C23.4216 32.3185 21.4601 31.3382 19.9009 30.0585C18.3472 28.7792 17.1207 27.4709 16.9518 26.8511" fill="#161616"/>
  <path d="M23.3101 23.5816L23.6801 25.3872C23.6801 25.3872 26.8556 27.8374 26.7371 29.3723C26.6187 30.9073 25.8685 32.063 24.6451 32.1908C23.4216 32.3185 21.4601 31.3382 19.9009 30.0585C18.3472 28.7792 17.1207 27.4709 16.9518 26.8511" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M30.6627 23.9241L31.2464 25.9088C31.2464 25.9088 27.1029 29.6146 26.3927 31.6565C25.6825 33.6985 26.1434 34.8881 26.7664 35.3804C27.3898 35.8673 28.2962 36.2678 28.7081 35.9149C29.12 35.562 36.3378 29.2273 36.9508 28.4456C37.5637 27.664 38.4448 24.8117 38.4448 24.8117" fill="#161616"/>
  <path d="M30.6627 23.9241L31.2464 25.9088C31.2464 25.9088 27.1029 29.6146 26.3927 31.6565C25.6825 33.6985 26.1434 34.8881 26.7664 35.3804C27.3898 35.8673 28.2962 36.2678 28.7081 35.9149C29.12 35.562 36.3378 29.2273 36.9508 28.4456C37.5637 27.664 38.4448 24.8117 38.4448 24.8117" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>                      
</a>
<a href="#" class="hover-icon shark-container">
<svg class="" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_870)">
  <path d="M19.2744 52.09C19.2744 52.09 20.0929 55.5538 22.1721 56.8113C24.2512 58.0689 25.8871 58.0066 25.825 57.4397C25.763 56.8727 24.1235 54.1031 24.0614 53.0962C23.9993 52.0893 24.8172 52.1511 23.9993 52.0893C23.1782 52.0274 19.2744 52.09 19.2744 52.09Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M35.2022 52.0861C35.2022 52.0861 36.0207 55.5499 38.0998 56.8074C40.1789 58.065 41.8148 58.0027 41.7527 57.4358C41.6907 56.8688 40.0513 54.0992 39.9891 53.0923C39.927 52.0854 40.745 52.1472 39.927 52.0854C39.106 52.0235 35.2022 52.0861 35.2022 52.0861Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M26.3262 52.0898C26.3262 52.0898 26.9558 56.1206 29.035 57.7468C31.1142 59.3731 33.568 59.698 34.3859 59.3075C35.2038 58.917 33.8806 57.2286 33.4405 56.2527C33.0003 55.2769 32.8108 52.1569 32.8108 52.1569L26.3262 52.0898Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M43.649 49.4226C35.2834 47.1477 26.3787 45.9634 11.8638 43.4036C3.65324 41.9541 -18.8287 36.5893 -21.863 35.5529C-25.5573 34.2901 -28.2124 33.1429 -28.6333 34.6058C-29.0546 36.0717 -25.3685 38.4349 -21.6864 40.2162C-18.0043 41.9976 4.78622 50.437 14.8967 51.9668C25.0072 53.4965 46.9543 54.7631 48.5257 53.769C50.0991 52.7721 45.0455 49.8035 43.649 49.4226Z" fill="#7755D7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M-0.411698 19.3903C-0.411698 19.3903 -2.49983 20.0103 -2.61129 20.4627C-2.72276 20.915 -2.44057 22.3805 -2.10244 24.9489C-1.76431 27.5173 -2.07357 31.0153 -1.95863 32.9052C-1.84678 34.7951 -1.27913 38.8878 -1.829638 40.3811C-0.377049 41.8775 -0.435495 44.5017 -1.884688 44.8395C-1.33698 45.1773 -2.43691 44.8677 -3.98916 44.7564C-5.5414 44.6451 -7.20513 44.8994 -8.95561 45.0949C-10.7061 45.2935 -13.4139 45.7153 -14.3434 45.4335C-15.273 45.1517 -15.1057 44.5599 -15.1058 44.3616C-15.1058 44.1633 -11.7195 43.5152 -10.3935 43.0905C-9.06755 42.6659 -6.46836 41.1535 -6.28875 40.5772C-6.10915 40.0009 -6.4657 38.3589 -7.3555 34.7186C-8.24529 31.0782 -10.0214 26.3289 -10.6416 23.0015C-11.2649 19.674 -10.754 17.4897 -10.1098 15.9435C-9.01965 13.3222 -3.99473 10.5511 -3.99473 10.5511C-3.99473 10.5511 -0.754164 9.2064 1.848289 13.2091C2.44454 17.2118 -0.411698 19.3903 -0.411698 19.3903Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M21.8535 20.1168C21.8535 20.1168 21.0248 26.0004 21.2573 26.6789C21.4929 27.3543 22.5589 28.7081 23.7552 30.7899C24.9515 32.8717 24.5367 35.5797 24.537 37.2713C24.5373 38.963 24.9031 40.5771 25.1635 41.3052C25.4239 42.0332 28.0516 44.4525 29.0153 45.3385C29.979 46.2244 31.0729 47.6556 30.2117 48.1236C29.3535 48.5916 27.5845 48.7437 26.0538 48.0561C24.5231 47.3685 21.9203 45.5317 21.3098 44.4226C20.6961 43.3136 20.4667 42.0898 20.0079 40.9032C19.5492 39.7167 18.0956 36.7333 17.5966 35.5467C17.0976 34.3602 16.8309 32.7553 16.6789 31.9498C16.527 31.1443 14.8815 29.0811 14.2306 27.4732C13.5797 25.8653 12.6217 22.2715 12.6217 22.2715C12.6217 22.2715 12.835 19.1298 15.9425 18.4508C19.053 17.7718 21.8535 20.1168 21.8535 20.1168Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M17.9539 -17.0135C17.9539 -17.0135 16.2147 -15.3206 14.2888 -15.3676C12.3602 -15.4152 11.1093 -16.3299 11.1093 -16.3299C11.1093 -16.3299 8.4386 -16.5972 5.77608 -15.6416C3.11356 -14.6861 -0.758144 -12.9051 -2.20295 -12.6031C-3.64776 -12.3011 -5.98333 -11.882 -5.98333 -11.882C-5.98333 -11.882 -6.0436 -10.7711 -5.39955 -9.51245C-4.75549 -8.25383 -3.83537 -6.67804 -3.83537 -6.67804C-3.83537 -6.67804 2.61693 -8.61204 3.90979 -7.77776C5.20266 -6.94347 5.98173 -6.95296 6.53564 -2.16972C7.08632 2.61564 6.63416 5.80786 6.17342 6.35805C5.71211 6.91092 4.30159 8.44405 3.14943 8.83811C1.63469 9.35408 -1.811219 9.79467 -1.64237 10.0525C-2.47352 10.3104 -3.79909 10.6681 -3.79909 10.6681C-3.79909 10.6681 -1.32647 11.694 -0.615399 13.2705C0.168495 15.0045 0.0451132 16.2305 -0.423388 17.4286C-1.891891 18.6268 -1.40042 19.8166 -1.40042 19.8166C-1.40042 19.8166 0.901637 20.1683 4.13314 19.5941C7.3652 19.0173 10.3765 18.6562 10.3765 18.6562C10.3765 18.6562 12.1828 20.5489 12.4533 21.7292C12.7239 22.9095 13.5143 26.1532 13.5143 26.1532C13.5143 26.1532 15.6782 24.1089 17.6241 24.2995C19.57 24.4901 21.0557 25.0023 21.0557 25.0023C21.0557 25.0023 21.9761 21.649 21.763 18.5348C21.5525 15.4211 21.9436 12.5199 21.8078 11.1086C21.6721 9.69731 21.4831 6.06953 21.887 3.73148C22.2904 1.39609 23.9456 -4.22589 23.9456 -4.22589L26.724 1.853756C26.724 1.853756 28.6087 0.512937 29.699 0.267621C30.7872 0.0190732 31.4295 -1.18447 31.4295 -1.18447C31.4295 -1.18447 26.5297 -12.6307 24.5282 -14.0039C22.5261 -15.3744 18.5401 -15.5188 18.5401 -15.5188L17.9539 -17.0135Z" fill="#161616" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="shark" d="M39.2311 33.399C39.2311 33.399 35.992 32.6925 34.6026 31.794C34.041 31.4317 33.637 31.0259 33.349 30.6255C32.6479 29.6527 33.0465 28.2778 34.1569 27.8231C37.0318 26.642 43.4827 24.1076 49.2561 22.6511C56.9661 20.7055 63.3789 19.7454 64.1923 19.4356C65.0075 19.1241 67.5835 15.2745 71.1993 13.0735C74.8152 11.8725 75.8296 10.7439 76.7119 11.2366C77.5941 11.7293 76.3441 15.4647 76.8151 18.1313C77.2861 20.7979 78.4962 22.4537 81.3259 23.7652C84.1537 25.0768 90.052 27.0169 90.4687 27.0369C91.8854 27.0568 94.5646 24.9627 95.282 25.2724C95.9993 25.5822 95.4269 27.4372 96.5283 28.4607C97.6297 29.4861 99.905 29.9716 100.744 29.8719C101.583 29.7723 104.816 27.5876 107.213 26.8956C109.611 26.2054 115.941 23.988 118.33 22.7399C120.72 21.4917 123.803 18.7436 124.448 19.086C125.093 19.4284 120.323 25.5786 116.448 28.151C112.573 30.7234 109.993 31.5458 109.553 32.8121C109.113 34.0801 108.841 36.225 110.09 38.6126C111.338 41.0002 111.682 41.8517 111.251 42.1451C111.82 42.4386 107.026 40.1778 104.784 37.4297C102.543 34.6834 101.515 33.5566 100.967 33.3918C100.418 33.2269 97.2221 33.082 96.7584 33.3392C96.2946 33.5965 94.9957 34.5819 95.0428 35.1055C95.0881 35.629 96.1841 36.7938 95.9957 37.0982C95.8073 37.4025 92.331 36.5837 91.3654 35.6C90.4017 34.6164 90.101 34.3247 90.101 34.3247C90.101 34.3247 89.0122 34.553 88.8963 34.7921C88.7803 35.0312 88.0449 35.9007 88.2659 37.1652C88.4869 38.4278 88.9506 39.7014 88.8021 39.9043C88.6535 40.1071 82.9961 36.7159 82.4418 36.6906C81.8856 36.6652 74.0634 38.0474 73.7772 38.2086C73.4909 38.3699 80.3458 42.8879 83.2696 44.1976C86.1935 45.5073 88.4253 46.27 88.2333 46.6903C88.0412 47.1124 77.3984 44.5599 73.5308 43.2067C69.6613 41.8535 62.7123 38.8391 62.7123 38.8391C62.7123 38.8391 54.1147 38.5981 49.1637 37.7322C40.2836 36.1852 39.2311 33.399 39.2311 33.399Z" fill="#161616" stroke="white" stroke-miterlimit="10"/>
  <path class="shark" d="M33.3486 30.6241C33.3486 30.6241 38.8231 31.7816 40.7524 31.5751C42.6817 31.3686 45.9896 33.2906 48.0004 33.4319C50.0112 33.5732 54.7882 32.4628 56.6414 31.7599C58.4946 31.057 60.6631 31.0081 61.9909 31.019C63.3188 31.0298 64.9093 30.7092 66.9962 31.345C69.0831 31.9809 72.8656 29.9882 74.9652 30.3795C77.0648 30.7708 79.3835 31.7128 83.0773 31.6349C86.771 31.557 89.0427 31.4157 92.7328 31.4356C96.4229 31.4556 98.7906 31.3668 100.055 31.6711C101.321 31.9755 100.963 33.3939 100.963 33.3939" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="shark" d="M62.4774 38.6438C62.4774 38.6438 57.4124 36.7127 57.0863 36.3866C56.762 36.0605 59.5627 34.8577 61.9883 34.4573C64.414 34.0588 66.0389 35.662 67.7925 36.3359C69.5461 37.0098 72.4137 37.2 73.776 38.209" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="shark" d="M39.0947 33.3711C39.0947 33.3711 40.6798 33.6428 42.0711 33.7859" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="shark" d="M43.5476 28.2223C43.6287 27.6597 43.3809 27.1584 42.9941 27.1026C42.6073 27.0469 42.228 27.4577 42.1469 28.0204C42.0658 28.583 42.3136 29.0843 42.7004 29.14C43.0872 29.1958 43.4665 28.7849 43.5476 28.2223Z" fill="white"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>
<a href="#" class="hover-icon gutar-container">
<svg class="" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_854" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_854)">
  <path class="gutar" d="M47.1952 54.6299L47.1932 54.6302C45.0232 54.9428 43.0717 56.0837 41.746 57.8328L29.0245 74.5471C26.6473 77.325 23.7531 79.1903 20.6597 80.2158C11.265 83.3132 -0.364474 78.7953 -6.35198 67.977L-11.1259 59.3458L-11.126 59.3456C-16.5671 49.5177 -15.1015 38.4926 -9.06541 31.8154C-6.25456 28.7186 -2.45415 26.5472 2.12568 25.8705L23.0387 23.9866C23.0392 23.9865 23.0397 23.9865 23.0402 23.9865C25.2136 23.8019 27.2374 22.7523 28.6538 21.0784C28.9169 20.7674 29.8334 19.8788 30.716 19.04C31.1506 18.627 31.5675 18.2349 31.8759 17.946C32.03 17.8015 32.157 17.6829 32.2454 17.6005L32.3476 17.5052L32.3743 17.4803L32.379 17.476C36.7908 13.5718 42.4282 12.2092 47.6984 13.1184L47.6997 13.1186C52.9538 14.0112 57.8358 17.1931 60.6819 22.3463L60.6823 22.347L63.1552 26.8086C66.7925 33.4096 65.9351 41.0883 61.8752 46.6307L61.8746 46.6314C59.6035 49.7437 56.3065 52.1842 52.2318 53.381L52.2251 53.3828L52.1897 53.3923L52.0542 53.4286C51.9369 53.46 51.7684 53.505 51.5634 53.5593C51.1533 53.6681 50.5978 53.8142 50.0155 53.9641C48.8321 54.2687 47.5921 54.5743 47.1952 54.6299Z" fill="white" stroke="white"/>
  <path d="M45.0328 44.1973C40.6912 46.6017 35.0523 45.6157 32.648 41.2568C30.2437 36.9152 31.835 30.5498 36.3323 28.4568C41.7809 25.9314 46.1398 27.6265 48.5442 31.9681C50.9485 36.3098 49.3744 41.793 45.0328 44.1973Z" fill="#E786B5"/>
  <path d="M110.267 -7.35491L53.7305 23.9141L58.1257 31.8609L114.662 0.591936L110.267 -7.35491Z" fill="#E786B5"/>
  <path d="M17.7034 57.2186L10.7672 44.6608C10.0926 43.45 8.20721 44.4878 8.8818 45.6987L15.818 58.2565C16.4926 59.4673 18.3607 58.4294 17.7034 57.2186Z" fill="#E786B5"/>
  <path d="M108.808 -3.04166L14.1918 49.2825C13.794 49.5074 14.1399 50.1301 14.5378 49.9052L109.154 -2.41896C109.569 -2.64383 109.223 -3.26652 108.808 -3.04166Z" fill="#161616"/>
  <path d="M107.995 -0.0690036L13.3793 52.2552C12.9815 52.4801 13.3274 53.1028 13.7253 52.8779L108.341 0.553694C108.756 0.328829 108.41 -0.293868 107.995 -0.0690036Z" fill="#161616"/>
  <path d="M105.452 3.85972L16.0248 53.3299C15.627 53.5548 15.9729 54.1775 16.3708 53.9526L105.798 4.48243C106.213 4.27486 105.867 3.63486 105.452 3.85972Z" fill="#161616"/>
  <path d="M97.8591 0.485683L11.8744 48.0359C11.4766 48.2607 11.8225 48.8834 12.2204 48.6585L98.2051 1.10839C98.6029 1.883527 98.257 0.260819 97.8591 0.485683Z" fill="#161616"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>`)


$('.hobbies').html(`<a href="#" class="hover-icon">
<svg class="book" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_967" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_967)">
  <path  class="book-list" d="M81.75 25.9044C81.8043 25.4857 82.9401 16.5305 82.9401 16.5305C82.9401 16.5305 75.206 20.2549 70.9025 23.1331C66.8221 25.8639 63.3685 27.8771 62.0367 31.7735C60.7119 35.6661 81.75 25.9044 81.75 25.9044Z" fill="white" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="book-list" d="M62.0418 31.7739C62.288 31.4307 64.2099 28.1884 55.2265 22.1693C50.5285 19.0233 36.9204 11.8349 36.8253 11.7944C36.7303 11.7539 33.316 19.4463 33.316 19.4463L62.0418 31.7739Z" fill="white" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M28.6498 12.8242C28.8963 13.0353 61.8914 29.0987 61.8914 29.0987L66.4311 30.1974L90.0069 17.6823L76.9301 58.2804L54.3175 68.6416L15.0733 53.5581L28.6498 12.8242Z" fill="#4B69D3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M66.4298 30.2029L54.3178 68.6416L48.5368 66.7791L61.8918 29.0987L66.4298 30.2029Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>
<a  href="#" class="hover-icon">
<svg class="cat" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_936" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_936)">
  <path d="M41.8069 31.0686C41.8069 31.0686 59.1361 22.5753 72.6614 24.0261C86.1867 25.477 90.773 32.1881 92.1098 35.5409C93.452 38.8937 93.6748 49.0662 89.9851 53.7612C86.2954 58.4562 79.78 59.3745 74.3623 59.6408C68.9445 59.9071 62.6899 60.5266 62.065 59.9505C61.4455 59.3745 60.5109 58.4399 60.5109 58.4399C60.5109 58.4399 51.9414 59.3256 48.7462 58.6627C45.551 57.9943 40.6223 57.8639 40.6223 57.8639C40.6223 57.8639 30.5041 63.988 23.7985 63.988C17.0929 63.988 8.88211 63.1892 4.62182 61.1895C0.361536 59.1898 0.182216 56.9292 1.02449 56.1304C1.86677 55.3316 2.93183 55.2447 9.32226 56.2174C15.7127 57.1955 24.9614 55.2773 24.9614 55.2773L20.3805 52.7994C20.3805 52.7994 5.77383 52.4462 2.62209 50.0932C-0.52965 47.7403 -0.263379 45.2569 1.3777 44.3657C3.01878 43.48 7.45838 44.632 11.5883 44.9417C15.7181 45.2515 19.5328 45.4743 19.5328 45.4743L41.8069 31.0686Z" fill="#161616"/>
  <path d="M28.0705 53.9531C28.0705 53.9531 22.0659 57.3276 12.7954 56.6158C5.56273 56.0615 2.28057 54.0401 0.916627 55.9583C-0.441882 57.8711 1.4872 60.4957 8.69817 62.2781C14.4963 63.7072 20.1531 64.8755 28.1575 62.7671C34.8087 61.0174 40.1721 57.7026 40.1721 57.7026C40.1721 57.7026 54.1213 59.4469 60.403 58.447" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M71.8576 40.5225C71.5913 40.7236 67.9233 41.8377 67.6842 46.2718C67.4451 51.7058 69.635 54.7054 69.635 54.7054C69.635 54.7054 61.1416 55.5585 61.8319 58.2375C60.5276 60.9165 67.1952 59.9981 74.8952 59.6232C83.394 59.2102 86.361 57.8408 89.3878 54.7489C91.8767 53.2328 95.3706 44.3861 92.17 36.5774C88.9693 28.7687 81.916 24.5302 71.9662 23.9705C58.3159 23.2043 45.1765 29.5349 43.5571 30.1761C41.9378 31.8174 26.3584 44.9513 21.0548 45.348C15.7511 45.7446 7.06755 44.3264 4.5679 43.9079C0.258707 43.1907 -0.627041 46.951 0.372821 48.3639C1.37268 49.7767 7.06756 53.2273 20.2886 52.7002L24.6684 55.1184" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M50.9092 27.5781C50.9092 27.5781 59.3319 31.0396 60.3753 38.6364" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M56.8379 25.5469C56.8379 25.5469 64.652 28.6878 65.6899 36.2845" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M62.875 24.7695C62.875 24.7695 69.7925 27.0736 71.8359 34.6703" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M20.5819 25.2158C20.5819 25.2158 19.5277 18.3852 22.5001 17.5538C25.4726 16.7224 28.7873 25.8027 28.7873 25.8027" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M16.1479 35.6512C16.349 33.4939 18.0988 20.9358 31.5752 22.2346C42.2422 23.2616 45.633 31.3529 45.6874 37.5694C45.7254 41.6939 44.1278 44.112 41.6933 45.6716C36.5147 48.9863 31.4176 49.3613 25.9075 48.3343C20.3376 47.2909 15.4089 43.6447 16.1479 35.6512Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M19.957 26.8225C19.957 26.8225 20.5059 30.1862 25.6084 31.0447C30.711 31.9033 33.0639 31.4034 36.6667 34.4301C42.2964 39.1632 45.1601 36.5168 45.1601 36.5168C45.1601 36.5168 44.9862 26.4204 35.1343 23.3719C29.1677 21.5243 25.0542 23.2632 24.0597 23.7088C21.3753 24.9206 19.957 26.8225 19.957 26.8225Z" fill="#F48B44"/>
  <path d="M24.7176 39.469L26.2228 38.1159C26.5326 37.8224 26.3804 37.3062 25.9674 37.2193L24.3264 36.8824C23.8753 36.79 23.5276 37.2845 23.7721 37.6757L24.7176 39.469Z" fill="white"/>
  <path d="M36.7803 37.5263C36.7803 37.5263 32.7102 36.2385 30.4551 37.6622" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M33.89 39.8063C33.89 39.8063 32.0478 38.8771 30.0264 39.5781" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M14.7842 33.125C14.7842 33.125 18.8651 33.6032 21.0388 35.9398" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M17.1309 36.1562C17.1309 36.1562 19.136 36.2649 20.7717 37.5528" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M31.934 25.2852C31.934 25.2852 30.0267 26.2796 29.3691 28.3934" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M29.2872 24.5469C29.2872 24.5469 27.5646 25.8402 27.2549 28.0301" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M26.3854 24.0078C26.3854 24.0078 24.8584 25.5239 24.8584 27.741" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M40.4214 31.8864C40.9866 32.3646 41.8615 31.9788 41.9158 31.2398C42.1277 28.1858 42.2907 22.6323 40.7583 21.3444C38.6173 19.5512 34.9494 26.0448 34.9494 26.0448C34.9494 26.0448 33.9115 28.6695 37.1175 29.9519C38.6065 30.5442 39.6824 31.2669 40.4214 31.8864Z" fill="#F48B44" stroke="white" stroke-miterlimit="10"/>
  <path d="M34.9824 26.8172C34.9824 26.8172 37.3082 20.3072 40.3186 20.9919C43.3291 21.6766 41.9162 31.235 41.9162 31.235" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M39.3076 24.125C39.3076 24.125 40.1825 25.9834 39.7967 28.5266" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M30.3575 33.8334C30.3575 33.8334 29.5316 32.0891 28.1133 33.2411" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M24.3637 32.3123C24.3637 32.3123 23.5269 30.693 22.1738 31.7472" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M28.6625 36.7956C29.1216 36.7956 29.4939 36.4234 29.4939 35.9642C29.4939 35.505 29.1216 35.1328 28.6625 35.1328C28.2033 35.1328 27.8311 35.505 27.8311 35.9642C27.8311 36.4234 28.2033 36.7956 28.6625 36.7956Z" fill="white"/>
  <path d="M22.892 35.2956C23.3511 35.2956 23.7234 34.9234 23.7234 34.4642C23.7234 34.005 23.3511 33.6328 22.892 33.6328C22.4328 33.6328 22.0605 34.005 22.0605 34.4642C22.0605 34.9234 22.4328 35.2956 22.892 35.2956Z" fill="white"/>
  <path class="cat-smile" d="M23.0325 41.7522C23.0325 41.7522 23.416 43.2252 25.0347 43.0657C26.6499 42.8994 26.8588 41.0237 26.8588 41.0237" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M40.1719 57.7006C40.1719 57.7006 44.3996 55.527 46.2254 51.4297" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>
<a href="#" class="hover-icon">
<svg class="plant" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_900" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_900)">
  <path d="M44.7336 59.8485C40.057 59.5692 35.3769 59.2957 30.7015 59.0211C30.2438 58.9951 24.3146 58.0664 25.7443 60.1176C25.9844 60.4618 26.4043 60.442 26.6643 60.2497C26.8804 60.0899 26.986 59.8108 26.7858 59.5225C27.4642 60.503 30.1191 60.187 31.1359 60.2477C32.6513 60.3387 34.1702 60.424 35.6856 60.515C38.4959 60.6809 41.3063 61.8467 44.1167 61.0126C44.3161 61.0244 44.5155 61.0361 44.7149 61.0479C45.486 61.0974 45.5035 59.8934 44.7336 59.8485Z" fill="white"/>
  <path d="M25.3947 60.0681C25.9043 62.0882 25.858 64.0283 24.3985 65.6577C23.6045 66.5409 22.5808 67.1859 21.7213 68.0067C19.8309 69.8113 18.7978 72.1737 18.13 74.6652C17.4145 77.3375 17.1655 77.7077 16.915 80.4536C16.6365 83.5142 16.776 80.9607 16.742 84.0277C16.7079 87.4417 16.8901 95.8015 21.6569 95.6412C27.3863 95.4465 32.5208 95.6316 38.2504 95.8036C40.7134 95.879 43.3952 96.2847 45.8539 96.0539C48.0367 95.8494 49.7659 93.2832 50.358 91.3069C51.2039 88.4672 51.038 85.2781 51.0754 82.3589C51.1178 78.9775 51.2567 81.3466 51.1943 77.9624C51.1365 74.9239 51.0292 73.6689 49.7108 71.8555C49.0374 69.4128 48.0369 68.8374 46.956 67.7374C45.0415 65.7862 44.9261 63.1789 45.3897 60.6259C45.5278 59.8716 44.3718 59.5395 44.2348 60.2984C44.1918 60.5359 44.1521 60.774 44.1167 61.0126C43.8641 62.7165 43.8367 64.4403 44.4637 66.0835C44.8311 67.0497 45.3849 67.854 46.1036 68.5861C46.1195 68.6023 46.1354 68.6185 46.1511 68.6345C47.7681 70.2797 48.7746 71.3037 49.3034 73.627C50.1422 79.449 49.951 77.5823 49.8629 83.5035C49.8251 86.0163 49.9455 88.8355 49.1188 91.2489C48.7191 92.4124 47.404 94.5648 46.1148 94.8715C44.3677 95.2862 41.8443 94.7257 40.0649 94.6678C34.1675 94.4794 28.8581 94.2502 22.9582 94.3796C22.446 94.3924 21.8601 94.5233 21.3592 94.4836C19.5882 94.3472 19.112 92.3963 18.7416 91.8791C18.7397 91.8713 18.7378 91.8635 18.7359 91.8558C18.1996 88.674 17.9228 86.3065 17.9437 84.0557C17.9702 80.7279 17.8741 82.9877 18.1905 79.6696C18.4849 76.5356 18.8288 75.7247 20.0081 72.7745C20.702 71.0396 21.7054 69.6217 23.1059 68.399C24.0331 67.5906 25.0726 66.8722 25.8005 65.8671C27.0092 64.1983 27.0764 62.1861 26.6643 60.2497C26.6311 60.094 26.5949 59.9388 26.5559 59.7843C26.3644 59.0206 25.2021 59.3195 25.3947 60.0681Z" fill="white"/>
  <path class="plant-inner" d="M26.7858 59.5225C26.986 59.8108 26.8804 60.0899 26.6643 60.2497C27.0764 62.1861 27.0092 64.1983 25.8005 65.8671C25.0726 66.8722 24.0331 67.5906 23.1059 68.399C21.7054 69.6217 20.702 71.0396 20.0081 72.7745C18.8288 75.7247 18.4849 76.5356 18.1905 79.6696C17.8741 82.9877 17.9702 80.7279 17.9437 84.0557C17.9228 86.3065 18.1996 88.674 18.7359 91.8558L18.7416 91.8791C19.112 92.3963 19.5882 94.3472 21.3592 94.4836C21.8601 94.5233 22.446 94.3924 22.9582 94.3796C28.8581 94.2502 34.1675 94.4794 40.0649 94.6678C41.8443 94.7257 44.3677 95.2862 46.1148 94.8715C47.404 94.5648 48.7191 92.4124 49.1188 91.2489C49.9455 88.8355 49.8251 86.0163 49.8629 83.5035C49.951 77.5823 50.1422 79.449 49.3034 73.627C48.7746 71.3037 47.7681 70.2797 46.1511 68.6345L46.1036 68.5861C45.3849 67.854 44.8311 67.0497 44.4637 66.0835C43.8367 64.4403 43.8641 62.7165 44.1167 61.0126L35.6856 60.515C34.1702 60.424 32.6513 60.3387 31.1359 60.2477C30.1191 60.187 27.4642 60.503 26.7858 59.5225Z" fill="white"/>
  <path d="M-4.76818 36.1786C-3.68126 37.7979 -2.38279 39.3574 -1.877744 41.8199C7.31261 48.7638 18.4468 50.5711 23.987 44.8595C24.7329 44.0911 25.3353 43.2233 25.8055 42.2795C22.8089 41.3041 18.833 39.6561 19.6255 37.9718C20.5184 36.0863 24.7201 36.5527 27.0514 36.975C27.1816 31.5575 24.4188 25.2009 19.1817 20.1233C18.8381 19.7877 18.4815 19.4663 18.1252 19.1516C17.7706 21.7213 16.9325 26.5399 15.6462 26.3287C14.3054 26.113 14.1138 19.3363 14.1005 16.1739C11.831 14.7909 9.47995 13.8156 7.18071 13.2662C8.05737 15.9509 9.17674 20.2154 7.67496 21.8626C6.09969 21.54 1.52425 16.3599 -1.00229 13.2992C-2.79435 13.8293 -4.39007 14.7488 -5.67979 16.0802C-6.78724 17.2204 -7.57982 18.5786 -8.08452 20.0775C-4.9336 21.495 1.99359 24.7421 1.90302 25.8263C1.80977 26.9276 -5.58098 25.4325 -8.74578 24.7393C-8.69307 26.7313 -8.26544 28.8335 -7.481 30.9376C-3.96765 31.1101 3.86554 31.649 4.15995 33.0024C4.43498 34.2989 -1.56201 35.5859 -4.76818 36.1786ZM6.18107 39.4138C8.38357 38.3806 10.4382 38.1181 10.7738 38.8311C11.1094 39.5441 9.59541 40.9562 7.38966 41.9929C5.18716 43.026 3.13249 43.2886 2.79692 42.5756C2.46134 41.8626 3.97532 40.4505 6.18107 39.4138Z" fill="#72DD7D"/>
  <path d="M16.3514 39.4505C20.02 43.9967 23.1434 49.1458 26.3055 54.171C31.6001 62.5838 36.64 71.2632 41.8899 80.5882C43.0219 85.263 45.0083 90.1089 46.2529 95.4468C46.3753 95.9719 47.3311 95.4362 47.2096 94.9055C44.861 84.8394 40.3039 76.1885 35.7328 67.8585C31.2947 59.7736 26.4811 52.0094 21.3882 44.5222C20.0089 42.4924 18.6498 40.4297 17.1266 38.541C16.8234 38.1633 16.0506 39.0748 16.3514 39.4505Z" fill="white"/>
  <path d="M22.3279 46.1559C16.4453 37.096 9.77535 28.5807 2.65299 20.4621C2.24269 19.9963 1.57154 20.6828 1.97843 21.1453C9.04267 29.1998 15.6613 37.6441 21.4993 46.633C21.8319 47.1571 22.6673 46.6799 22.3279 46.1559Z" fill="white"/>
  <path d="M18.3489 28.4192C16.1405 31.26 15.3175 34.736 16.002 38.2679C16.1192 38.8779 17.038 38.5881 16.9211 37.9849C16.3026 34.8137 17.0729 31.6219 19.0556 29.0691C19.433 28.5879 18.726 27.9312 18.3489 28.4192Z" fill="white"/>
  <path d="M11.0862 30.9551C8.25531 29.3102 5.19321 28.3918 1.92913 28.1682C1.30905 28.1261 1.35609 29.089 1.96939 29.1313C5.06658 29.345 7.96533 30.2566 10.643 31.8128C11.1792 32.1234 11.6191 31.2692 11.0862 30.9551Z" fill="white"/>
  <path d="M58.6574 23.1008C58.5937 22.9883 57.3724 24.3681 55.1105 26.1543C52.6634 28.0872 50.2273 29.254 49.337 27.5846C48.8229 26.6263 52.6637 20.206 54.5151 17.2862C53.2685 16.3131 51.855 15.6159 50.3041 15.2712C48.4909 14.8701 46.6555 14.9803 44.8673 15.5245C44.4445 19.4697 43.4743 26.3166 41.7869 26.6168C40.175 26.9024 38.7637 22.7251 38.0187 20.0021C36.4038 21.721 34.979 23.8322 33.8425 26.2361C35.5696 28.8849 39.1387 34.6486 38.1354 35.5659C37.1773 36.4467 33.8234 32.8879 32.1161 30.9329C31.9911 31.3914 31.872 31.8532 31.7704 32.3255C30.1919 39.4478 31.3825 46.2742 34.47 50.7244C36.1856 49.0886 39.4356 46.3841 41.2162 47.4677C42.8085 48.4361 40.3899 52.0024 38.426 54.4654C39.34 54.9937 40.3184 55.3864 41.3643 55.618C47.2144 56.914 53.2242 52.8752 56.996 46.0711C57.6161 44.955 51.1973 46.5166 52.3817 42.083C53.4901 37.9318 59.8893 38.6454 59.9039 38.5673C61.8571 33.8512 61.8562 26.9864 58.6574 23.1008Z" fill="#72DD7D"/>
  <path d="M43.8751 46.7516C41.8814 60.3864 38.2565 74.1168 33.8648 88.1379C33.6953 88.6741 34.7746 88.5383 34.9441 88.0022C39.3358 73.981 42.962 60.2532 44.9544 46.6158C45.0287 46.1017 43.9524 46.2327 43.8751 46.7516Z" fill="white"/>
  <path d="M47.9321 21.5083C44.0956 32.5521 45.086 44.3819 42.2707 55.5993C42.1175 56.1988 43.0438 56.4661 43.1958 55.862C46.0064 44.6458 45.0207 32.8148 48.8571 21.771C49.0593 21.1887 48.1342 20.926 47.9321 21.5083Z" fill="white"/>
  <path d="M45.255 39.7182C44.2834 35.8441 42.197 32.569 39.9442 29.3218C39.5962 28.8165 38.7564 29.2902 39.1103 29.799C41.3078 32.9662 43.3763 36.1716 44.3252 39.9574C44.4701 40.5595 45.4046 40.3192 45.255 39.7182Z" fill="white"/>
  <path d="M51.1024 46.4365C47.5575 45.9901 43.7414 48.4783 43.0189 52.0099C42.8961 52.6115 43.8177 52.8801 43.944 52.2726C44.5923 49.1269 47.9416 47.0016 51.0868 47.3972C51.6974 47.478 51.7072 46.5139 51.1024 46.4365Z" fill="white"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>`)

$('.vehicles').html(`<a href="#" class="hover-icon">
<svg class="bike" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_830" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_830)">
  <path d="M23.1355 27.2502L41.456 51.6571" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M7.94156 65.6971C-0.0368609 61.9261 -3.44762 52.4013 0.323433 44.4228C4.09448 36.4444 13.6193 33.0337 21.5977 36.8047C29.5762 40.5758 32.9869 50.1006 29.2159 58.079C25.4448 66.0574 15.92 69.4682 7.94156 65.6971Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M-2.01292 45.5393C-2.01292 45.5393 2.15712 34.7759 13.4049 34.2103C28.8654 33.4338 32.1628 47.5504 32.1628 47.5504" stroke="#F48B44" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M15.0138 48.127C16.5669 48.1407 17.8148 49.4107 17.8012 50.9638C17.7876 52.5169 16.5175 53.7649 14.9644 53.7512C13.4114 53.7376 12.1634 52.4675 12.177 50.9145C12.1906 49.3614 13.4607 48.1134 15.0138 48.127Z" fill="white" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M57.0275 68.2948C49.0491 64.5238 45.6383 54.9989 49.4094 47.0205C53.1804 39.0421 62.7053 35.6313 70.6837 39.4024C78.6621 43.1734 82.0728 52.6983 78.3018 60.6767C74.5307 68.6551 65.0059 72.0659 57.0275 68.2948Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M47.3995 47.041C47.3995 47.041 51.6627 36.6826 62.3872 35.9525C77.2268 34.9398 81.2148 49.0644 81.2148 49.0644" stroke="#F48B44" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M25.6052 18.5113L15.2371 50.268" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M24.8888 21.7644C24.8888 21.7644 27.3415 29.1412 31.5966 34.5329C36.8032 41.1283 45.1228 42.9435 45.1228 42.9435" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M40.5613 54.4297L49.5162 33.4801L63.9781 52.5128" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M49.5803 33.4115L61.1211 32.3516" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M38.1503 60.5733C36.5178 59.8016 35.8199 57.8527 36.5915 56.2202C37.3631 54.5878 39.312 53.8899 40.9445 54.6615C42.577 55.4331 43.2749 57.382 42.5033 59.0145C41.7317 60.647 39.7828 61.3449 38.1503 60.5733Z" fill="white" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M18.0469 16.2787C18.0469 16.2787 18.6449 15.746 18.8086 15.6152C18.9723 15.4845 19.1732 15.4818 19.1732 15.4818C19.1732 15.4818 19.1652 16.4017 20.1711 17.2657C21.1769 18.1297 23.3576 18.6869 25.6529 19.0647C27.9482 19.4425 29.6865 19.7991 29.6865 19.7991C29.6865 19.7991 29.8118 22.0858 30.3715 22.9683C30.9329 23.8515 31.1671 23.9941 31.6459 23.7808C32.1246 23.5676 32.0544 22.4132 31.7702 21.559C31.4859 20.7048 33.3463 18.6197 33.3463 18.6197C33.3463 18.6197 33.8901 17.6175 33.1071 16.8525C32.3242 16.0875 30.9351 15.1358 30.3033 15.4211C29.6698 15.7056 29.5042 16.1773 29.3873 16.7167C29.2687 17.2552 29.1149 17.9894 29.1149 17.9894C29.1149 17.9894 23.7696 17.3167 22.3719 16.4012C20.9742 15.4858 20.7964 14.7116 20.2037 14.0025C19.6109 13.2934 18.2254 13.2012 17.704 14.0887C17.1826 14.9762 16.9615 15.9695 16.9615 15.9695C16.9615 15.9695 17.1281 16.1651 17.4589 16.2471C17.7896 16.3291 18.0469 16.2787 18.0469 16.2787Z" fill="#F48B44" stroke="#F48B44" stroke-miterlimit="10"/>
  <path d="M40.7046 54.2689L63.2861 52.6367" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M41.2386 60.5277L63.6055 55.0547" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M63.3898 54.8339C62.8453 54.5765 62.6125 53.9265 62.8699 53.382C63.1272 52.8376 63.7773 52.6048 64.3217 52.8621C64.8662 53.1195 65.099 53.7695 64.8416 54.314C64.5843 54.8585 63.9343 55.0912 63.3898 54.8339Z" fill="white" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
  <path class="fire" d="M13.2515 65.1006C15.2624 63.7736 16.7367 61.7511 17.289 59.4063C17.4808 58.5923 17.5714 57.7167 17.4363 56.8512C16.9177 53.5153 19.5536 53.1151 19.8772 52.1079C20.4553 50.3028 21.0855 47.0497 21.0855 47.0497C21.0855 47.0497 21.8793 49.8276 21.4872 52.3693C21.2779 53.7289 20.7749 55.3892 20.7749 55.3892C20.7749 55.3892 21.5052 57.0583 22.8195 56.3818C24.1338 55.7052 25.1438 55.186 26.7949 55.0402C28.446 54.8944 30.1238 52.8168 31.872 51.5362C31.6198 50.2571 31.8492 50.3303 33.2588 49.0943C34.6685 47.8583 37.2146 43.8648 37.1399 44.0938C37.0667 44.3232 36.6967 47.5809 35.3974 49.5272C34.0981 51.4735 33.7449 53.8927 33.5331 55.3434C33.3214 56.7941 32.4625 59.4728 31.5559 60.1951C30.6493 60.9175 29.6041 62.8611 29.6041 62.8611C29.6041 62.8611 31.5121 62.9669 32.8598 61.8671C34.2076 58.7673 34.6528 57.6443 35.6353 56.9467C36.6178 56.2492 38.2663 55.8493 38.2663 55.8493C38.2663 55.8493 35.8283 58.1905 35.3346 59.467C34.841 60.7434 35.4222 62.6172 33.7831 63.78C32.1441 64.9427 30.9281 65.3126 30.5301 66.0282C30.1321 66.7438 28.2288 69.2563 23.1195 69.1374C18.0102 69.0185 12.102 65.858 12.102 65.858L13.2515 65.1006Z" fill="#F48B44"/>
  <path class="fire" d="M16.1828 65.9979C16.1828 65.9979 21.2047 67.1356 22.8903 65.987C24.576 64.8384 26.2315 61.7282 26.2315 61.7282C26.2315 61.7282 24.6035 63.1333 23.6582 63.1618C22.7113 63.1899 23.9248 61.2378 24.9172 60.6804C25.9093 60.1244 28.9368 58.3185 29.5408 57.146C30.1449 55.9735 32.2812 53.4375 32.2812 53.4375C32.2812 53.4375 28.3965 57.4887 26.6824 57.6919C24.9683 57.8951 23.0396 58.2503 21.96 59.2413C21.8804 60.2323 20.0301 61.232 19.6931 62.1164C19.3535 62.9987 16.1828 65.9979 16.1828 65.9979Z" fill="#FA1B43"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>

<a href="#" class="hover-icon">
<svg class="car" width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
  <mask id="mask0_395_792" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="75">
  <circle cx="37.5" cy="37.5" r="37.5" fill="#C4C4C4"/>
  </mask>
  <g mask="url(#mask0_395_792)">
  <path d="M113.872 44.6227C113.872 44.6227 113.275 45.9151 112.848 46.3563C112.421 46.7975 104.72 48.7036 104.72 48.7036L79.7619 54.1676L76.7386 53.8423L66.1699 54.1817C66.1699 54.1817 64.0601 49.0232 66.3622 43.9411C68.6643 38.8589 80.1804 36.8708 83.4356 37.9059C86.6908 38.941 94.3154 42.2725 99.7935 40.4512C105.272 38.6299 109.641 35.0523 111.468 35.5274C113.295 36.0025 114.166 38.9438 114.166 40.2136C114.166 41.4834 113.872 44.6227 113.872 44.6227Z" fill="white" stroke="white" stroke-miterlimit="10"/>
  <path d="M60.2216 51.6885C60.4393 46.4423 63.949 42.1832 68.0583 42.1719H72.5154L72.4362 44.0498C74.1784 45.7777 75.2361 48.538 75.1088 51.6489C74.9815 54.7599 73.6947 57.5286 71.8056 59.2651L71.7264 61.1684H67.2721C63.16 61.1769 60.0038 56.9347 60.2216 51.6885Z" fill="white" stroke="white" stroke-miterlimit="10"/>
  <path d="M71.0704 61.1255C66.9952 60.6742 64.1608 56.0722 64.7396 51.8467C65.3183 45.6212 69.0911 41.751 73.1662 42.2023C77.2414 42.6536 80.0758 47.2556 79.497 52.4811C78.9183 57.7067 75.1455 61.5769 71.0704 61.1255Z" fill="white" stroke="white" stroke-miterlimit="10"/>
  <path d="M66.361 54.9023C66.2903 54.6675 66.2253 54.4271 66.1715 54.1811C66.1188 53.9322 66.0735 53.6805 66.0358 53.426C65.9592 52.8496 65.9327 52.2676 65.9566 51.6867C66.0007 50.4666 66.2701 49.2651 66.7513 48.143L66.7655 48.1148C66.8673 47.88 66.9804 47.6509 67.102 47.4303L67.1246 47.3879C67.2462 47.1702 67.3735 46.9581 67.5092 46.7544L67.5319 46.7205C68.7367 44.9473 70.5042 43.8075 72.4358 43.8047C74.0903 43.8047 75.5468 44.6277 76.6045 45.9767C76.6752 46.0644 76.7431 46.1577 76.8081 46.2595C76.8732 46.3528 76.9382 46.449 77.0004 46.5423C77.0627 46.6385 77.122 46.7375 77.1786 46.8251C77.2352 46.9241 77.2889 47.0231 77.3398 47.1249V47.1419C77.3907 47.2409 77.4388 47.3399 77.4869 47.4445V47.4671C77.5321 47.5661 77.5745 47.6679 77.617 47.7697C77.617 47.7697 77.617 47.7924 77.6311 47.8065C77.6707 47.9055 77.7075 48.0045 77.7442 48.1063L77.7612 48.1543C77.7951 48.2505 77.8263 48.3495 77.8574 48.4513C77.8574 48.4711 77.8715 48.4909 77.8772 48.5107C77.9054 48.6068 77.9309 48.7058 77.9592 48.7935C77.9644 48.8193 77.971 48.8448 77.979 48.8699C78.0016 48.9632 78.0242 49.0593 78.044 49.1527C78.044 49.181 78.0582 49.2121 78.0638 49.2403C78.0836 49.3337 78.1006 49.427 78.1175 49.5232L78.1345 49.6278C78.1515 49.7155 78.1628 49.8088 78.1741 49.9106L78.1911 50.0266C78.1911 50.1142 78.2109 50.2047 78.2194 50.2952C78.2194 50.3377 78.2194 50.3801 78.2194 50.4225C78.2194 50.5102 78.2194 50.6007 78.2363 50.6884V51.8241C78.2363 50.9174 78.2363 51.0136 78.2363 51.1069C78.2363 51.1493 78.2363 51.1889 78.2363 51.2285C78.2363 51.3643 78.2363 51.5113 78.2363 51.6414C78.2363 51.7715 78.2194 51.9723 78.2024 52.1364C78.2024 52.1759 78.2024 52.2155 78.2024 52.2551C78.1883 52.3965 78.1713 52.5379 78.1515 52.6765V52.7416C78.0977 53.0866 78.027 53.4231 77.9422 53.754C77.5708 55.3 76.7823 56.7145 75.6627 57.8435L75.6231 57.8803C75.493 58.0047 75.3601 58.1207 75.2215 58.2338L75.1933 58.2536C74.2408 59.0534 73.043 59.5026 71.7995 59.5262C70.5771 59.5194 69.399 59.0681 68.485 58.2564C67.4797 57.3569 66.7443 56.1956 66.361 54.9023Z" fill="white" stroke="white" stroke-miterlimit="10"/>
  <path d="M17.3032 48.6495C17.521 43.4033 21.0307 39.1441 25.1399 39.1328H29.5971C33.7092 39.1328 36.8653 43.375 36.6476 48.6127C36.4298 53.8504 32.9201 58.1265 28.808 58.1265H24.3537C20.2416 58.1406 17.0854 53.8843 17.3032 48.6495Z" fill="white" stroke="white" stroke-miterlimit="10"/>
  <path d="M100.594 15.9067C100.594 15.9067 102.574 16.4893 102.837 17.0691C103.1 17.6488 103.25 18.0646 103.25 18.0646L109.225 26.778C109.225 26.778 111.383 26.614 112.054 28.4381C112.724 30.2623 112.466 32.7538 112.466 32.7538C112.466 32.7538 114.045 36.6538 114.127 39.5583C114.183 41.2497 114.1 42.9429 113.878 44.6207C113.878 44.6207 114.293 39.3094 113.049 37.6493C111.805 35.9892 109.231 37.2364 108.241 40.2229C107.251 43.2094 106.064 48.7695 106.064 48.7695L79.762 54.1656C79.762 54.1656 81.0912 47.1943 79.3462 43.2094C77.6013 39.2246 69.4733 39.4763 67.9772 46.6965C66.4811 53.9167 66.9817 55.2431 66.9817 55.2431C66.9817 55.2431 61.4216 56.4055 44.4924 56.1566C27.5633 55.9077 18.2701 53.9167 15.7785 53.2521C15.7785 53.2521 15.2128 50.1808 15.0318 48.3566C14.9219 47.3068 15.0937 46.2466 15.5296 45.2853C15.5296 45.2853 15.6965 41.9651 16.1122 41.8027C16.5279 39.6403 17.7723 37.8982 17.7723 37.8982C17.7723 37.8982 19.0167 34.9937 21.0897 33.1696C23.1627 31.3454 26.5678 29.5185 27.3992 29.1027C28.2307 28.687 29.3054 28.4381 31.8835 27.3606C32.4616 26.2831 42.2526 19.4758 45.3239 17.6517C48.3952 15.8275 55.0329 14.9112 56.3536 14.6623C57.6743 14.4135 72.9519 13.3359 78.2631 13.3359C83.5743 13.3359 94.5361 13.5848 100.594 15.9067Z" fill="#161616" stroke="white" stroke-miterlimit="10"/>
  <path d="M46.666 48.103C46.666 48.103 29.6535 48.2986 23.3327 46.668C23.3327 46.668 23.9554 50.1907 25.1278 50.9095C26.3001 51.6282 34.8049 52.3592 38.9389 52.4741C43.6167 52.6061 46.2772 52.215 46.2772 52.215L46.666 48.103Z" fill="white"/>
  <path d="M48.333 38.641L46.8202 41.9352C46.8202 41.9352 38.3592 42.1548 37.3953 42.2262C36.4314 42.2976 35.4005 42.8137 34.3026 42.2262C33.2047 41.6387 28.4549 40.9827 27.9034 40.9827C27.3519 40.9827 26.6663 41.496 26.6663 41.496C26.6663 41.496 27.9034 38.2018 28.3853 37.9053C28.7464 37.7105 29.1533 37.6331 29.5554 37.683C29.759 37.6884 39.8024 36.8841 48.333 38.641Z" fill="white"/>
  <path d="M31.6667 27.2704L32.4198 27.5261L36.0729 27.6429C37.9921 27.706 40.5268 27.7849 43.3285 27.867C47.1952 27.9838 51.5676 28.1038 55.5158 28.1827C61.5518 28.3248 66.6044 28.3974 67.3631 28.2711C68.8879 28.0508 70.3204 27.3279 71.4798 26.1938C72.3533 25.3159 73.0795 24.2691 73.6239 23.1032C75.414 19.3875 80 14.8131 80 14.8131C72.7584 13.866 64.0448 14.0843 62.0833 14.1695C61.4748 14.2044 53.9317 14.8738 53.3333 15.0029C51.2398 15.4196 49.5833 15.836 46.6667 17.0862C46.2362 17.2707 43.4843 18.7432 42.9167 19.1694C41.5903 20.1638 40.7039 20.5398 38.7284 22.0109L35.2832 24.5712L31.6667 27.2704Z" fill="#F48B44" stroke="white" stroke-miterlimit="10"/>
  <path d="M54.6793 50.2357C54.6793 51.1181 55.5277 51.8308 56.5769 51.8308C57.6262 51.8308 58.4746 51.1181 58.4746 50.2357C58.4746 49.3533 57.6262 48.6406 56.5769 48.6406C55.5277 48.6406 54.6793 49.359 54.6793 50.2357Z" fill="#F48B44"/>
  <path d="M15.3686 47.6454C15.5298 48.4062 16.0417 48.9407 16.514 48.8389C16.9863 48.7371 17.238 48.0442 17.0796 47.2834C16.9212 46.5227 16.4065 45.991 15.9484 46.09C15.4902 46.189 15.2074 46.8875 15.3686 47.6454Z" fill="#F48B44"/>
  <path d="M100.594 15.9067C100.594 15.9067 102.574 16.4893 102.837 17.0691C103.1 17.6488 103.25 18.0646 103.25 18.0646L109.225 26.778C109.225 26.778 111.383 26.614 112.054 28.4381C112.724 30.2623 112.466 32.7538 112.466 32.7538C112.466 32.7538 114.045 36.6538 114.127 39.5583C114.183 41.2497 114.1 42.9429 113.878 44.6207C113.878 44.6207 114.293 39.3094 113.049 37.6493C111.805 35.9892 109.231 37.2364 108.241 40.2229C107.251 43.2094 106.064 48.7695 106.064 48.7695L79.762 54.1656C79.762 54.1656 81.0912 47.1943 79.3462 43.2094C77.6013 39.2246 69.4733 39.4763 67.9772 46.6965C66.4811 53.9167 66.9817 55.2431 66.9817 55.2431C66.9817 55.2431 61.4216 56.4055 44.4924 56.1566C27.5633 55.9077 18.2701 53.9167 15.7785 53.2521C15.7785 53.2521 15.2128 50.1808 15.0318 48.3566C14.9219 47.3068 15.0937 46.2466 15.5296 45.2853C15.5296 45.2853 15.6965 41.9651 16.1122 41.8027C16.5279 39.6403 17.7723 37.8982 17.7723 37.8982C17.7723 37.8982 19.0167 34.9937 21.0897 33.1696C23.1627 31.3454 26.5678 29.5185 27.3992 29.1027C28.2307 28.687 29.3054 28.4381 31.8835 27.3606C32.4616 26.2831 42.2526 19.4758 45.3239 17.6517C48.3952 15.8275 55.0329 14.9112 56.3536 14.6623C57.6743 14.4135 72.9519 13.3359 78.2631 13.3359C83.5743 13.3359 94.5361 13.5848 100.594 15.9067Z" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
  <path class="fire" d="M53.4814 41.3699C52.34 39.8557 53.4169 37.4679 54.6753 36.1367C55.9337 34.8055 58.7113 33.0718 59.4641 32.2709C60.0651 31.6316 60.5316 30.754 61.822 30.1133C60.9081 29.9248 61.1891 29.9854 61.1904 30.1927C61.1917 31.0878 61.1286 32.4271 60.775 33.2414C60.2076 34.5457 60.3515 34.8997 60.3515 34.8997C60.3515 34.8997 60.5948 35.4219 61.0882 34.469C61.3127 34.0355 61.5507 33.8202 61.7618 33.7192C61.9984 33.6062 62.2646 33.8323 62.1974 34.0867C62.1261 34.3586 62.0979 34.792 62.2713 35.4408C62.6209 36.7478 62.5953 38.0238 62.5953 38.0238L63.2918 36.8568C63.3751 36.7168 63.5822 36.7303 63.644 36.881C63.8752 37.445 64.2302 38.616 63.7852 39.7453C62.9341 41.9097 61.0546 42.5477 58.48 42.7913C57.1477 42.9152 54.5986 42.8519 53.4814 41.3699Z" fill="#F48B44"/>
  <path class="fire" d="M55.7006 42.2057C56.1082 42.2926 56.9917 42.0823 57.1144 41.3041C57.2725 40.3099 56.7558 38.6582 56.9467 37.7917C57.3079 36.1498 58.19 34.8906 58.19 34.8906C58.19 34.8906 56.9494 35.8539 56.49 36.9882C56.1342 37.866 55.7143 38.619 55.7143 38.619C55.7143 38.619 55.1458 36.7204 55.1758 37.092C55.1908 37.2771 55.263 37.8253 54.7286 38.6484C54.1669 39.5093 54.0729 40.3352 54.4246 41.2073C54.5882 41.6111 55.1458 42.0865 55.7006 42.2057Z" fill="#FA1B43"/>
  <path class="fire" d="M14.4814 40.3699C13.34 38.8557 14.4169 36.4679 15.6753 35.1367C16.9337 33.8055 19.7113 32.0718 20.4641 31.2709C21.0651 30.6316 21.5316 29.754 21.822 29.1133C21.9081 28.9248 22.1891 28.9854 22.1904 29.1927C22.1917 30.0878 22.1286 31.4271 21.775 32.2414C21.2076 33.5457 21.3515 33.8997 21.3515 33.8997C21.3515 33.8997 21.5948 34.4219 22.0882 33.469C22.3127 33.0355 22.5507 32.8202 22.7618 32.7192C22.9984 32.6062 23.2646 32.8323 23.1974 33.0867C23.1261 33.3586 23.0979 33.792 23.2713 34.4408C23.6209 35.7478 23.5953 37.0238 23.5953 37.0238L24.2918 35.8568C24.3751 35.7168 24.5822 35.7303 24.644 35.881C24.8752 36.445 25.2302 37.616 24.7852 38.7453C23.9341 40.9097 22.0546 41.5477 19.48 41.7913C18.1477 41.9152 15.5986 41.8519 14.4814 40.3699Z" fill="#F48B44"/>
  <path class="fire" d="M16.7006 41.2057C17.1082 41.2926 17.9917 41.0823 18.1144 40.3041C18.2725 39.3099 17.7558 37.6582 17.9467 36.7917C18.3079 35.1498 19.19 33.8906 19.19 33.8906C19.19 33.8906 17.9494 34.8539 17.49 35.9882C17.1342 36.866 16.7143 37.619 16.7143 37.619C16.7143 37.619 16.1458 35.7204 16.1758 36.092C16.1908 36.2771 16.263 36.8253 15.7286 37.6484C15.1669 38.5093 15.0729 39.3352 15.4246 40.2073C15.5882 40.6111 16.1458 41.0865 16.7006 41.2057Z" fill="#FA1B43"/>
  <circle cx="37.5" cy="37.5" r="37" stroke="white"/>
  </g>
  </svg>
  
</a>`)



if (window.matchMedia("(min-width: 1200px)").matches) {
  $('.mac-svg').html(` <svg width="589" height="535" viewBox="0 0 589 535" fill="none" xmlns="http://www.w3.org/2000/svg">
<g class="add-paxer">
    <path  d="M141.576 310L148.718 289.264H151.526L158.669 310H156.466L149.683 290.445H150.518L143.779 310H141.576ZM144.758 304.974V302.987H155.472V304.974H144.758ZM167.303 310.432C165.853 310.432 164.615 310.072 163.587 309.352C162.56 308.622 161.773 307.638 161.226 306.4C160.679 305.162 160.405 303.765 160.405 302.21C160.405 300.664 160.674 299.272 161.211 298.034C161.759 296.795 162.541 295.816 163.559 295.096C164.576 294.376 165.795 294.016 167.216 294.016C168.675 294.016 169.904 294.371 170.903 295.082C171.901 295.792 172.655 296.766 173.163 298.005C173.682 299.234 173.941 300.635 173.941 302.21C173.941 303.755 173.687 305.152 173.178 306.4C172.669 307.638 171.92 308.622 170.931 309.352C169.943 310.072 168.733 310.432 167.303 310.432ZM167.519 308.459C168.623 308.459 169.535 308.19 170.255 307.653C170.975 307.115 171.512 306.376 171.867 305.435C172.223 304.485 172.4 303.41 172.4 302.21C172.4 300.99 172.223 299.915 171.867 298.984C171.512 298.043 170.975 297.309 170.255 296.781C169.544 296.253 168.647 295.989 167.562 295.989C166.448 295.989 165.527 296.262 164.797 296.81C164.067 297.357 163.525 298.101 163.17 299.042C162.824 299.982 162.651 301.038 162.651 302.21C162.651 303.39 162.829 304.456 163.184 305.406C163.549 306.347 164.091 307.091 164.811 307.638C165.531 308.186 166.434 308.459 167.519 308.459ZM172.4 310V298.293H172.17V289.264H174.301V310H172.4ZM184.375 310.432C182.925 310.432 181.687 310.072 180.659 309.352C179.632 308.622 178.845 307.638 178.298 306.4C177.751 305.162 177.477 303.765 177.477 302.21C177.477 300.664 177.746 299.272 178.283 298.034C178.831 296.795 179.613 295.816 180.631 295.096C181.648 294.376 182.867 294.016 184.288 294.016C185.747 294.016 186.976 294.371 187.975 295.082C188.973 295.792 189.727 296.766 190.235 298.005C190.754 299.234 191.013 300.635 191.013 302.21C191.013 303.755 190.759 305.152 190.25 306.4C189.741 307.638 188.992 308.622 188.003 309.352C187.015 310.072 185.805 310.432 184.375 310.432ZM184.591 308.459C185.695 308.459 186.607 308.19 187.327 307.653C188.047 307.115 188.584 306.376 188.939 305.435C189.295 304.485 189.472 303.41 189.472 302.21C189.472 300.99 189.295 299.915 188.939 298.984C188.584 298.043 188.047 297.309 187.327 296.781C186.616 296.253 185.719 295.989 184.634 295.989C183.52 295.989 182.599 296.262 181.869 296.81C181.139 297.357 180.597 298.101 180.242 299.042C179.896 299.982 179.723 301.038 179.723 302.21C179.723 303.39 179.901 304.456 180.256 305.406C180.621 306.347 181.163 307.091 181.883 307.638C182.603 308.186 183.506 308.459 184.591 308.459ZM189.472 310V298.293H189.242V289.264H191.373V310H189.472ZM150 347.432C148.57 347.432 147.36 347.072 146.371 346.352C145.382 345.622 144.634 344.638 144.125 343.4C143.616 342.152 143.362 340.755 143.362 339.21C143.362 337.635 143.616 336.234 144.125 335.005C144.643 333.766 145.402 332.792 146.4 332.082C147.398 331.371 148.627 331.016 150.086 331.016C151.507 331.016 152.726 331.376 153.744 332.096C154.762 332.816 155.539 333.795 156.077 335.034C156.624 336.272 156.898 337.664 156.898 339.21C156.898 340.765 156.624 342.162 156.077 343.4C155.53 344.638 154.742 345.622 153.715 346.352C152.688 347.072 151.45 347.432 150 347.432ZM143.002 353.912V331.448H144.902V343.155H145.133V353.912H143.002ZM149.784 345.459C151.869 345.459 151.771 345.186 152.491 344.638C153.211 344.091 153.749 343.347 154.104 342.406C154.469 341.456 154.651 340.39 154.651 339.21C154.651 338.038 154.474 336.982 154.118 336.042C153.763 335.101 153.221 334.357 152.491 333.81C151.771 333.262 151.854 332.989 149.741 332.989C148.656 332.989 147.754 333.253 147.034 333.781C146.323 334.309 145.79 335.043 145.435 335.984C145.08 336.915 144.902 337.99 144.902 339.21C144.902 340.41 145.08 341.485 145.435 342.435C145.79 343.376 146.328 344.115 147.048 344.653C147.768 345.19 148.68 345.459 149.784 345.459ZM164.509 347.432C163.338 347.432 162.354 347.221 161.557 346.798C160.77 346.376 160.18 345.814 159.786 345.114C159.393 344.413 159.196 343.65 159.196 342.824C159.196 341.979 159.364 341.259 159.7 340.664C160.045 340.059 160.511 339.565 161.097 339.181C161.692 338.797 162.378 338.504 163.156 338.302C163.943 338.11 164.812 337.942 165.762 337.798C166.722 337.645 167.658 337.515 168.57 337.41C169.492 337.294 170.298 337.184 170.989 337.078L170.24 337.539C170.269 336.003 169.972 334.866 169.348 334.126C168.724 333.387 167.639 333.018 166.093 333.018C165.028 333.018 164.125 333.258 163.386 333.738C162.657 334.218 162.143 334.976 161.845 336.013L159.786 335.408C160.141 334.016 161.857 332.936 161.932 332.168C163.007 331.4 164.404 331.016 166.122 331.016C167.543 331.016 168.748 331.285 169.736 331.822C170.735 332.35 171.44 333.118 171.853 334.126C172.045 334.578 172.17 335.082 172.228 335.638C172.285 336.195 172.314 336.762 172.314 337.338V347H170.428V343.098L170.975 343.328C170.447 344.662 169.626 345.68 168.512 346.381C167.399 347.082 166.065 347.432 164.509 347.432ZM164.754 345.603C165.743 345.603 166.607 345.426 167.346 345.07C168.085 344.715 168.68 344.23 169.132 343.616C169.583 342.992 169.876 342.291 170.01 341.514C170.125 341.014 170.188 340.467 170.197 339.872C170.207 339.267 170.212 338.816 170.212 338.518L171.018 338.936C170.298 339.032 169.516 339.128 168.671 339.224C167.836 339.32 167.01 339.43 166.194 339.555C165.388 339.68 164.658 339.829 164.005 340.002C163.564 340.126 163.137 340.304 162.724 340.534C162.311 340.755 161.97 341.053 161.701 341.427C161.442 341.802 161.313 342.267 161.313 342.824C161.313 343.275 161.423 343.712 161.644 344.134C161.874 344.557 162.239 344.907 162.738 345.186C163.247 345.464 163.919 345.603 164.754 345.603ZM174.335 347L180.412 339.138L174.464 331.448H176.999L181.65 337.51L186.258 331.448H188.792L182.845 339.138L188.936 347H186.388L181.65 340.765L176.884 347H174.335ZM197.269 347.432C195.752 347.432 194.437 347.096 193.323 346.424C192.219 345.752 191.36 344.806 190.745 343.587C190.131 342.368 189.824 340.938 189.824 339.296C189.824 337.597 190.126 336.128 190.731 334.89C191.336 333.651 192.185 332.696 193.28 332.024C194.384 331.352 195.685 331.016 197.182 331.016C198.718 331.016 200.029 331.371 201.113 332.082C202.198 332.782 203.019 333.79 203.576 335.106C204.133 336.421 204.387 337.99 204.339 339.814H202.179V339.066C202.141 337.05 201.704 335.528 201.869 334.501C200.043 333.474 198.833 332.96 197.24 332.96C195.569 332.96 194.288 333.502 193.395 334.587C192.512 335.672 192.07 337.218 192.07 339.224C192.07 341.182 192.512 342.704 193.395 343.789C194.288 344.864 195.55 345.402 197.182 345.402C198.296 345.402 199.265 345.147 200.091 344.638C200.926 344.12 201.584 343.376 202.064 342.406L204.037 343.17C203.422 344.523 202.515 345.574 201.315 346.323C200.125 347.062 198.776 347.432 197.269 347.432ZM191.321 339.814V338.043H203.201V339.814H191.321ZM207.535 347V331.448H209.435V335.192L209.061 334.702C209.234 334.242 209.459 333.819 209.738 333.435C210.016 333.042 210.319 332.72 210.645 332.47C211.048 332.115 211.519 331.846 212.056 331.664C212.594 331.472 213.136 331.362 213.683 331.333C214.231 331.294 214.73 331.333 215.181 331.448V333.435C214.615 333.291 213.995 333.258 213.323 333.334C212.651 333.411 212.032 333.68 211.466 334.141C210.947 334.544 210.559 335.029 210.299 335.595C210.04 336.152 209.867 336.747 209.781 337.381C209.695 338.005 209.651 338.624 209.651 339.238V347H207.535Z" fill="white"/>
   <path d="M242 317.867H233.975V325H232.025V317.867H224V316.133H232.025V309H233.975V316.133H242V317.867Z" fill="#F48B44"/>
</g>
<path d="M490.395 205.422C490.395 205.422 272.827 499.313 272.827 508.528C272.827 517.743 443.04 537.724 463.851 533.117C484.663 528.509 587.227 498.807 587.227 488.547C587.227 483.939 463.001 487.517 376.149 487.517C350.146 487.517 331.805 487.518 330.07 485.982C329.335 484.446 485.227 291.997 485.227 291.997L490.395 205.422Z" fill="#161616" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M565.176 109.807L561.908 412.179L479.767 497.207L470.17 495.287L474.009 3.41124L482.655 1L565.176 109.807Z" fill="#161616" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M479.769 497.207L482.656 1" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<mask id="mask0_408_1162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="484" y="24" width="77" height="395">
<path d="M485.638 417.543L555.897 368.937L559.879 116.17L489.176 25.5742L485.638 417.543Z" fill="#F48B44" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</mask>
<g mask="url(#mask0_408_1162)">
<path d="M485.638 417.543L555.897 368.937L559.879 116.17L489.176 25.5742L485.638 417.543Z" fill="#F48B44" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<g filter="url(#filter0_f_408_1162)">
<path d="M479.344 268.799C532.631 242.5 554.409 177.781 528.11 124.495V124.495C501.81 71.208 437.194 49.1295 383.907 75.4288V75.4288C330.621 101.728 308.842 166.446 335.142 219.733V219.733C361.441 273.02 426.057 295.098 479.344 268.799V268.799Z" fill="url(#paint0_radial_408_1162)"/>
<path d="M479.344 268.799C532.631 242.5 554.409 177.781 528.11 124.495V124.495C501.81 71.208 437.194 49.1295 383.907 75.4288V75.4288C330.621 101.728 308.842 166.446 335.142 219.733V219.733C361.441 273.02 426.057 295.098 479.344 268.799V268.799Z" stroke="#00E29A" stroke-width="2"/>
</g>
<g filter="url(#filter1_f_408_1162)">
<rect width="199.942" height="199.709" rx="99.8546" transform="matrix(-0.551012 -1.834497 -1.834497 0.551012 579.375 271.27)" fill="url(#paint1_radial_408_1162)"/>
</g>
<g filter="url(#filter2_f_408_1162)">
<path d="M596.158 232.404C648.915 178.005 647.584 91.1381 593.185 38.3809L586.392 31.7929C531.993 -20.9643 445.126 -19.6334 392.369 34.7657V34.7657C339.612 89.1648 340.942 176.032 395.342 228.789L402.135 235.377C456.534 288.134 543.401 286.804 596.158 232.404V232.404Z" fill="url(#paint2_radial_408_1162)"/>
</g>
<g filter="url(#filter3_f_408_1162)">
<rect width="291.868" height="290.53" rx="145.265" transform="matrix(-0.551012 -1.834497 -1.834497 0.551012 707.891 292.43)" fill="url(#paint3_radial_408_1162)"/>
</g>
<g filter="url(#filter4_f_408_1162)">
<path d="M399.81 294.032C450.665 317.933 511.356 295.891 535.258 245.036V245.036C559.159 194.181 537.399 133.388 486.544 109.487V109.487C435.689 85.5854 374.997 107.628 351.096 158.482V158.482C327.195 209.337 348.955 270.131 399.81 294.032V294.032Z" fill="url(#paint4_angular_408_1162)"/>
</g>
</g>
<path d="M276.102 300.32L422.53 237.84" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M422.754 212.086L144.09 205.612" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M424.367 184.504L269.989 105.109" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<mask id="mask1_408_1162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="141" y="1" width="120" height="120">
<circle cx="201" cy="61" r="60" fill="#C4C4C4"/>
</mask>
<g mask="url(#mask1_408_1162)">
<g filter="url(#filter5_f_408_1162)">
<path d="M223.549 136.876C208.01 116.044 178.526 111.753 157.694 127.291L126.134 151.831C105.302 166.369 101.01 195.853 116.549 216.685L139.923 248.023C155.461 268.855 184.945 273.147 205.777 257.609L237.338 234.068C258.17 218.53 262.461 189.046 246.923 168.214L223.549 136.876Z" fill="url(#paint5_radial_408_1162)"/>
<path d="M223.549 136.876C208.01 116.044 178.526 111.753 157.694 127.291L126.134 151.831C105.302 166.369 101.01 195.853 116.549 216.685L139.923 248.023C155.461 268.855 184.945 273.147 205.777 257.609L237.338 234.068C258.17 218.53 262.461 189.046 246.923 168.214L223.549 136.876Z" stroke="#00E29A" stroke-width="2"/>
</g>
<g filter="url(#filter6_f_408_1162)">
<rect width="123.769" height="123.625" rx="52.3942" transform="matrix(-0.720712 0.693235 0.693235 0.720712 225.508 91.3711)" fill="url(#paint6_radial_408_1162)"/>
</g>
<g filter="url(#filter7_f_408_1162)">
<path d="M177.439 70.5142C151.838 52.7923 114.907 59.9903 97.185 86.5915L63.9293 136.509C46.2073 163.11 53.4053 199.041 80.0065 216.763L125.049 246.771C151.65 264.493 187.581 257.295 205.303 230.694L238.559 180.776C256.281 154.175 249.083 118.244 222.482 100.522L177.439 70.5142Z" fill="url(#paint7_radial_408_1162)"/>
</g>
<g filter="url(#filter8_f_408_1162)">
<rect width="180.055" height="179.846" rx="64.4405" transform="matrix(-0.720712 0.693235 0.693235 0.720712 223.957 10.7617)" fill="url(#paint8_radial_408_1162)"/>
</g>
<g filter="url(#filter9_f_408_1162)">
<path d="M259.525 198.129C268.365 164.487 248.132 130.015 214.49 121.175V121.175C181.849 112.335 146.283 132.408 137.443 166.05V166.05C128.603 199.691 148.836 234.163 182.478 243.003V243.003C216.12 251.843 250.685 231.771 259.525 198.129V198.129Z" fill="url(#paint9_angular_408_1162)"/>
</g>
<path d="M170.568 77.0547C170.568 77.0547 203.563 80.7823 206.176 80.3402C208.788 79.9082 212.717 75.839 226.22 80.4809C239.734 85.1328 257.307 103.289 257.307 103.289C257.307 103.289 248.305 116.36 240.598 121.736C232.902 127.111 222.734 132.778 222.734 132.778L146.183 152.24L137.753 131.03C137.753 131.03 126.419 129.573 117.266 124.057C108.113 118.541 99.5424 117.807 99.4017 117.224C99.261 116.642 103.682 103.771 112.383 94.4167C118.512 87.8356 124.51 85.4242 130.9 83.2439C137.291 81.0636 141.008 80.9632 146.424 79.7976C157.054 77.5068 170.568 77.0547 170.568 77.0547Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M141.57 80.5898C141.57 80.5898 146.282 85.5131 150.13 101.348C153.979 117.183 154.843 125.753 154.843 125.753L142.856 127.893C142.856 127.893 140.716 109.486 137.501 99.4288C134.286 89.3713 130.438 83.373 130.438 83.373L141.57 80.5898Z" fill="white"/>
<path d="M214.215 77.0117C214.215 77.0117 218.505 79.6843 222.353 95.5291C226.201 111.364 227.065 119.934 227.065 119.934L215.079 122.074C215.079 122.074 212.939 103.668 209.724 93.6101C206.508 83.5526 202.66 77.5543 202.66 77.5543L214.215 77.0117Z" fill="white"/>
<path d="M212.937 17.5703C212.937 17.5703 231.862 33.1539 222.432 49.5513C210.908 71.9671 220.553 84.1848 220.553 84.1848C220.553 84.1848 215.771 89.1483 201.574 88.1134C194.561 87.611 183.629 78.6788 183.629 78.6788C183.629 78.6788 183.649 74.3283 189.065 73.4441C194.872 72.4996 198.68 71.5652 202.367 65.8382C213.56 48.426 212.937 17.5703 212.937 17.5703Z" fill="white"/>
<path d="M172.398 45.2322C172.398 45.2322 173.222 27.5186 182.717 23.2987C192.222 19.0788 211.87 22.3643 212.276 31.9797C213.683 41.5951 209.001 57.9021 206.178 63.4181C200.903 73.7368 191.609 73.6263 191.609 73.6263C191.609 73.6263 191.277 80.7801 189.288 82.6589C187.298 84.5378 183.772 87.2305 177.673 86.1755C171.574 85.1206 168.058 82.7695 167.585 79.3734C167.113 75.9674 169.424 61.8158 168.741 59.4795C168.058 58.1432 161.366 54.7472 162.431 49.2311C163.486 43.7151 165.104 42.208 168.108 42.1477C171.112 42.0874 172.288 44.9007 172.288 44.9007L172.398 45.2322Z" fill="#161616"/>
<path d="M173.661 37.304C175.138 31.6975 182.322 27.8292 187.777 29.7684C189.917 30.532 192.279 31.7477 194.76 33.6467C204.687 41.2526 218.944 37.7561 218.944 37.7561C218.944 37.7561 222.943 28.6632 217.126 15.5915C210.565 1.841821 182 -3.91062 168.657 6.86023C154.4 18.3645 156.962 27.9599 143.991 38.0274C125.835 52.1239 125.594 63.99 125.594 63.99C125.594 63.99 139.771 72.902 147.326 80.1764C158.73 91.1482 166.889 76.3684 166.889 76.3684L168.868 58.9662C168.868 58.9662 163.885 54.9473 163.241 50.5164C162.227 43.5233 165.723 42.2674 167.23 42.187C168.768 42.1066 172.174 45.8644 172.174 45.8644L173.661 37.304Z" fill="white"/>
<path d="M172.849 47.2813C172.849 47.2813 172.076 42.539 168.097 42.127C164.118 41.7151 161.546 47.3014 162.942 51.2802C163.937 54.1236 166.529 56.4647 167.926 57.58C168.499 58.0321 168.8 58.7455 168.74 59.4689L167.343 74.5903C166.891 79.4733 170.006 83.9947 174.738 85.2506C175.944 85.5721 177.27 85.8334 178.707 85.9941C179.732 86.1046 180.787 86.1348 181.812 86.1147C186.514 85.9941 190.452 82.5077 191.306 77.8758C191.558 76.5093 193.004 74.3994 191.618 74.5702C181.5 75.806 178.526 69.0642 178.627 68.7728" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M197.686 49.8047C197.495 52.0453 197.495 56.5264 197.495 56.5264C197.495 56.5264 193.838 57.4407 192.109 55.8331" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M186.492 42.4883C186.492 42.4883 187.758 45.3819 191.747 44.6384" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M201.887 47.0391C201.887 47.0391 203.454 49.772 207.353 48.6065" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M186.192 60.1211L196.541 63.3664C196.541 63.3664 194.401 67.8375 189.739 66.4309C185.147 65.0443 186.192 60.1211 186.192 60.1211Z" fill="white"/>
<path d="M187.59 51.422C192.129 51.422 195.809 47.7423 195.809 43.2032C195.809 38.6641 192.129 34.9844 187.59 34.9844C183.051 34.9844 179.371 38.6641 179.371 43.2032C179.371 47.7423 183.051 51.422 187.59 51.422Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M206.578 56.1329C211.117 56.1329 214.797 52.4532 214.797 47.9141C214.797 43.375 211.117 39.6953 206.578 39.6953C202.039 39.6953 198.359 43.375 198.359 47.9141C198.359 52.4532 202.039 56.1329 206.578 56.1329Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="201" cy="61" r="59" stroke="white" stroke-width="2"/>
</g>
<mask id="mask2_408_1162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="141" width="120" height="120">
<circle cx="60" cy="201" r="60" fill="#C4C4C4"/>
</mask>
<g mask="url(#mask2_408_1162)">
<g filter="url(#filter10_f_408_1162)">
<path d="M-63.3409 270.149C-26.9197 252.174 -11.9666 208.076 -29.9421 171.655L-57.1748 116.477C-75.1503 80.0561 -119.248 65.1029 -155.669 83.0784L-210.458 110.119C-246.879 128.095 -261.832 172.192 -243.857 208.613L-216.624 263.791C-198.648 300.212 -154.551 315.165 -118.13 297.19L-63.3409 270.149Z" fill="url(#paint10_radial_408_1162)"/>
<path d="M-63.3409 270.149C-26.9197 252.174 -11.9666 208.076 -29.9421 171.655L-57.1748 116.477C-75.1503 80.0561 -119.248 65.1029 -155.669 83.0784L-210.458 110.119C-246.879 128.095 -261.832 172.192 -243.857 208.613L-216.624 263.791C-198.648 300.212 -154.551 315.165 -118.13 297.19L-63.3409 270.149Z" stroke="#00E29A" stroke-width="2"/>
</g>
<g filter="url(#filter11_f_408_1162)">
<rect width="193.428" height="193.203" rx="81.8826" transform="matrix(-0.551012 -1.834497 -1.834497 0.551012 6.03906 286.059)" fill="url(#paint11_radial_408_1162)"/>
</g>
<g filter="url(#filter12_f_408_1162)">
<path d="M51.7215 218.101C86.4988 182.242 85.6214 124.979 49.7618 90.202L-17.5296 24.9415C-53.3893 -9.83586 -110.652 -8.95851 -145.429 26.9011L-204.316 87.6209C-239.094 123.481 -238.216 180.743 -202.357 215.52L-135.065 280.781C-99.2056 315.558 -41.943 314.681 -7.16565 278.821L51.7215 218.101Z" fill="url(#paint12_radial_408_1162)"/>
</g>
<g filter="url(#filter13_f_408_1162)">
<rect width="281.393" height="281.066" rx="100.709" transform="matrix(-0.551012 -1.834497 -1.834497 0.551012 130.367 306.527)" fill="url(#paint13_radial_408_1162)"/>
</g>
<g filter="url(#filter14_f_408_1162)">
<path d="M-167.679 308.082C-118.481 331.205 -59.7659 309.881 -36.6434 260.683V260.683C-13.521 211.484 -34.5722 152.671 -83.7703 129.549V129.549C-132.968 106.426 -191.683 127.75 -214.806 176.949V176.949C-237.928 226.147 -216.877 284.96 -167.679 308.082V308.082Z" fill="url(#paint14_angular_408_1162)"/>
</g>
<path d="M79.5945 232.294C79.4694 231.82 81.6963 211.9 81.6963 211.9C81.6963 211.9 86.6055 205.476 86.1485 203.269C85.681 201.06 84.3427 198.019 83.0643 196.377C81.7859 194.734 80.372 175.076 66.0655 175.473C51.7597 175.859 33.3411 177.36 33.423 182.794C33.5049 188.229 31.6292 202.713 33.4485 209.421C35.267 216.139 37.0948 225.424 42.5511 229.526C48.0067 233.638 51.8847 234.612 51.8847 234.612L50.4005 261.276L79.5945 232.294Z" fill="#161616"/>
<path d="M50.9297 234.305L49.3382 256.899" stroke="white"/>
<path d="M48.7712 263.283C48.7712 263.283 44.1255 268.215 42.2518 277.873C40.3774 287.542 32.2877 300.585 29.1251 311.599C25.9632 322.603 20.9659 342.57 19.8735 351.333C18.781 360.096 15.8014 385.454 15.8014 385.454C15.8014 385.454 30.1641 398.653 36.5724 406.033C42.9806 413.412 48.5267 419.537 60.1444 424.179C71.762 428.82 79.6866 431.765 88.8981 429.784C98.12 427.804 107.469 420.574 107.469 420.574C107.469 420.574 108.708 372.397 108.079 354.188C107.45 335.978 109.891 294.582 107.87 282.484C105.849 270.397 99.3294 254.403 94.2837 248.07C89.238 241.737 88.298 241.438 85.5005 240.523C82.7014 239.629 48.7712 263.283 48.7712 263.283Z" fill="white"/>
<path d="M40.5456 206.581C44.5851 206.866 48.0904 203.822 48.375 199.782C48.6595 195.743 45.6155 192.237 41.576 191.953C37.5364 191.668 34.0311 194.712 33.7465 198.752C33.462 202.791 36.506 206.297 40.5456 206.581Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M62.7487 208.148C66.7882 208.432 70.2935 205.388 70.5781 201.348C71.8626 197.309 67.8186 193.804 63.7791 193.519C59.7395 193.235 56.2342 196.279 55.9496 200.318C55.6651 204.358 58.7092 207.863 62.7487 208.148Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M48.5625 198.277L56.0554 198.805" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M43.0339 199.136C43.6433 199.179 44.1722 198.72 44.2151 198.11C44.258 197.501 43.7988 196.972 43.1894 196.929C42.58 196.886 42.0511 197.346 42.0082 197.955C41.9653 198.564 42.4245 199.093 43.0339 199.136Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M64.3972 200.64C65.0066 200.683 65.5355 200.224 65.5784 199.614C65.6213 199.005 65.1621 198.476 64.5527 198.433C63.9433 198.39 63.4144 198.849 63.3715 199.459C63.3286 200.068 63.7878 200.597 64.3972 200.64Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M48.8594 209.238C48.8594 209.238 51.8722 210.697 54.2425 209.881" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M48.0412 219.794L60.3982 215.289C60.3982 215.289 60.6004 220.214 57.2389 222.058C51.3079 225.294 48.0412 219.794 48.0412 219.794Z" fill="white"/>
<path d="M39.3933 189.636C39.3933 189.636 43.9611 187.909 46.2652 189.233" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M59.3972 188.288C59.3972 188.288 63.965 186.561 66.2691 187.885" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M77.2751 212.117C77.2751 212.117 70.3584 234.146 56.3512 235.092C46.9072 235.726 36.3231 227.208 32.8459 206.252C29.985 188.995 35.2273 177.092 52.2444 176.147C69.251 175.201 78.8732 184.782 79.7496 190.631C80.6261 196.48 79.3969 199.086 79.3969 199.086C79.3969 199.086 82.1658 197.56 85.0378 201.867C87.9098 204.175 81.6846 211.889 81.6846 211.889L79.9909 228.287" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M82.5058 201.145C79.4842 201.46 76.7261 199.386 76.2082 196.393C75.7123 193.538 75.0612 190.186 74.3851 188.09C73.0163 183.833 69.2253 183.228 58.2041 183.613C47.1829 183.998 37.171 182.649 34.7544 189.069C33.7153 191.826 33.4362 209.433 33.4362 209.433C33.4362 209.433 30.537 201.413 29.5822 193.679C28.6273 185.944 30.2047 183.341 30.4631 179.673C30.4845 179.369 28.0077 177.198 26.8709 172.947C25.6271 168.265 25.7157 161.459 25.7157 161.459C25.7157 161.459 33.0662 166.856 44.5525 164.666C45.9761 164.397 47.7441 164.035 49.7321 163.7C59.6389 162.043 75.2283 160.976 83.0538 173.873C91.2681 187.399 85.0485 201.881 85.0485 201.881L82.5058 201.145Z" fill="white"/>
<path d="M82.3807 233.673L88.3558 242.553C88.3558 242.553 79.3193 248.348 70.745 259.425C62.1812 270.502 48.5705 290.708 45.516 297.938C42.472 305.169 40.4477 309.769 40.4477 309.769C40.4477 309.769 48.6492 282.243 53.6323 269.224C58.6153 256.205 82.3807 233.673 82.3807 233.673Z" fill="white"/>
<path d="M82.3795 233.672C82.415 233.168 81.6296 227.526 81.6296 227.526L44.9538 260.322C44.9538 260.322 51.5953 276.536 51.4627 276.02C51.33 275.504 82.3795 233.672 82.3795 233.672Z" fill="#161616" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="60" cy="201" r="59" stroke="white" stroke-width="2"/>
</g>
<mask id="mask3_408_1162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="141" y="266" width="120" height="120">
<circle cx="201" cy="326" r="60" fill="#C4C4C4"/>
</mask>



    
   
<g mask="url(#mask3_408_1162)" class="ded">
<g filter="url(#filter15_f_408_1162)">
<path d="M170.528 475.421C200.558 469.368 219.995 440.117 213.942 410.087L204.772 364.591C198.718 334.561 169.467 315.124 139.437 321.177L94.2625 330.283C64.2324 336.336 44.7952 365.588 51.8484 395.618L60.0189 441.113C66.072 471.143 95.3233 490.58 125.353 484.527L170.528 475.421Z" fill="url(#paint15_radial_408_1162)"/>
<path d="M170.528 475.421C200.558 469.368 219.995 440.117 213.942 410.087L204.772 364.591C198.718 334.561 169.467 315.124 139.437 321.177L94.2625 330.283C64.2324 336.336 44.7952 365.588 51.8484 395.618L60.0189 441.113C66.072 471.143 95.3233 490.58 125.353 484.527L170.528 475.421Z" stroke="#00E29A" stroke-width="2"/>
</g>
<g filter="url(#filter16_f_408_1162)">
<rect width="145.892" height="145.723" rx="61.7595" transform="matrix(-0.318371 -0.947966 -0.947966 0.318371 218.023 500.449)" fill="url(#paint16_radial_408_1162)"/>
</g>
<g filter="url(#filter17_f_408_1162)">
<path d="M264.48 459.752C296.774 440.343 307.219 398.43 287.811 366.136L251.39 305.536C231.982 273.242 190.069 262.797 157.775 282.205L103.093 315.069C70.7991 334.477 60.3534 376.39 79.762 408.684L116.183 469.285C135.591 501.578 177.504 512.024 209.798 492.615L264.48 459.752Z" fill="url(#paint17_radial_408_1162)"/>
</g>
<g filter="url(#filter18_f_408_1162)">
<rect width="212.239" height="211.992" rx="75.959" transform="matrix(-0.318371 -0.947966 -0.947966 0.318371 304.695 539.441)" fill="url(#paint18_radial_408_1162)"/>
</g>
<g filter="url(#filter19_f_408_1162)">
<path d="M87.1236 482.876C118.512 509.256 165.442 505.077 191.821 473.689V473.689C218.201 442.301 214.241 395.352 182.853 368.972V368.972C151.464 342.592 104.535 346.771 78.1547 378.159V378.159C51.7748 409.547 55.7354 456.496 87.1236 482.876V482.876Z" fill="url(#paint19_angular_408_1162)"/>
</g>
<path d="M211.377 272.855C211.377 272.855 218.001 287.089 219.155 290.564C220.31 294.038 220.31 294.038 220.31 294.038L215.457 295.238L223.168 306.345C223.168 306.345 219.817 308.934 220.142 310.918C220.478 312.902 213.854 334.579 200.449 343.355C187.044 352.12 169.839 330.443 168.18 325.982C166.521 321.51 165.199 304.137 168.348 294.868C171.498 285.599 183.905 271.039 183.905 271.039L211.377 272.855Z" fill="#161616"/>
<path d="M216.576 346.781C216.576 346.781 231.382 348.63 239.206 363.851C247.029 379.072 258.742 435.449 258.742 435.449L261.387 438.913C261.387 438.913 252.532 447.577 254.135 457.339C255.738 467.101 257.845 469.814 257.845 469.814L246.48 467.841L239.239 492.208C239.239 492.208 241.178 497.386 239.452 499.751C237.726 502.116 226.944 511.396 203.014 504.705C179.084 498.014 168.515 493.06 168.515 493.06L172.393 528.422C172.393 528.422 175.408 530.574 175.408 532.3C175.408 534.026 176.697 547.61 176.697 547.61C176.697 547.61 171.306 551.488 161.174 553.427C151.041 555.366 147.376 555.367 147.376 555.367C147.376 555.367 139.833 538.767 139.183 536.615C138.533 534.463 134.655 521.092 132.503 514.199C130.351 507.294 117.192 461.161 117.416 435.942C117.629 410.713 115.265 389.809 129.488 369.533C143.722 349.269 165.063 339.562 165.063 339.562L205.345 348.753L216.576 346.781Z" fill="#161616" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M214.603 353.027L215.566 362.263C215.566 362.263 209.817 365.748 209.817 365.491C209.817 365.233 199.382 350.595 199.382 350.595L209.2 347.188L214.603 353.027Z" fill="white"/>
<path d="M215.555 362.258C215.555 362.258 232.827 403.762 238.174 423.724C243.52 443.686 250.167 484.809 249.135 488.508C248.104 492.206 233.41 509.96 233.41 509.96C233.41 509.96 217.069 489.337 216.049 487.903C215.017 486.468 218.021 448.001 217.82 427.849C217.618 407.696 209.817 365.497 209.817 365.497L215.555 362.258Z" fill="white"/>
<path d="M213.864 311.746C217.765 311.141 223.066 307.241 223.167 306.344C223.268 305.447 215.456 295.237 215.456 295.237L220.656 294.037C220.656 294.037 216.577 279.556 212.631 274.703" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M210.961 296.436C210.961 296.436 208.764 295.136 204.46 296.638C200.156 298.14 199.26 299.239 199.26 299.239" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M207.162 296.031C207.162 296.031 208.462 298.632 204.965 300.133C201.457 301.635 201.39 298.43 201.39 298.43" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M216.869 272.707C217.363 274.333 216.466 277.908 210.257 277.415C204.047 276.911 196.941 272.214 193.747 276.216C190.541 280.217 194.262 289.722 192.357 296.929C190.452 304.135 185.722 309.684 191.662 314.01C194.049 315.758 182.808 315.523 182.808 315.523C182.808 315.523 181.059 305.335 175.926 305.335C172.417 305.335 170.49 308.395 169.985 311.6C169.481 314.806 172.417 317.641 172.72 317.541C173.023 317.44 170.03 329.847 165.132 330.352C160.223 331.856 153.621 326.944 155.123 322.551C156.625 318.146 159.931 314.044 159.225 307.442C158.519 301.84 155.717 291.224 159.931 280.419C164.146 269.614 167.643 263.707 175.343 261.6C183.054 259.493 193.455 262.004 193.455 262.004C193.455 262.004 198.365 259.896 203.969 261.802C209.573 263.707 214.762 265.702 216.869 272.707Z" fill="white"/>
<path d="M169.813 328.648L205.758 348.33L196.679 364.593L160.163 341.897L169.813 328.648Z" fill="#161616" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M215.243 341.938C215.153 342.464 209.628 347.878 209.628 347.878C209.628 347.878 221.262 357.192 221.262 356.934C221.262 356.676 221.52 344.997 221.52 344.997L215.243 341.938Z" fill="#161616" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M222.672 311.844C222.672 311.844 221.248 308.504 219.623 309.468C218.995 309.838 220.105 309.882 218.984 310.286C218.771 310.364 220.979 313.547 217.527 314.971C213.044 316.809 205.994 317.717 200.289 316.417C194.584 315.117 183.129 310.252 183.129 310.252C183.129 310.252 181.022 325.462 183.028 329.968C185.034 334.473 195.043 345.457 199.56 347.15C206.689 349.817 212.853 347.587 221.259 344.886C229.666 342.185 229.262 333.677 228.164 327.367C227.076 321.046 222.672 311.844 222.672 311.844Z" fill="white"/>
<path d="M221.598 320.184C221.598 320.184 219.423 320.923 215.949 321.856C212.429 320.789 208.887 320.385 208.887 320.385C208.887 320.385 210.535 325.608 216.195 325.687C220.712 325.743 221.598 320.184 221.598 320.184Z" fill="#161616"/>
<path d="M196.759 295.524C196.759 295.524 206.807 295.623 215.962 294.439C225.118 293.254 228.256 293.219 228.256 293.219C228.256 293.219 228.473 301.507 225.454 303.867C222.435 306.226 221.531 303.306 219.85 301.065C218.169 298.823 217.608 295.524 214.457 296.211C212.673 296.211 214.277 300.631 210.276 304.752C206.275 308.874 201.851 309.302 199.075 306.813C194.804 302.99 196.759 295.524 196.759 295.524Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M196.312 296.022L179.5 291.539" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="201" cy="326" r="59" stroke="white" stroke-width="2"/>
</g>
<defs>
<filter id="filter0_f_408_1162" x="254.873" y="-4.77955" width="353.504" height="353.786" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="34.0558" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter1_f_408_1162" x="275.563" y="77.4223" width="330.796" height="331.886" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="32.7556" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter2_f_408_1162" x="278.86" y="-81.7179" width="431.807" height="430.604" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="37.398" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter3_f_408_1162" x="280.649" y="25.1571" width="451.764" height="451.904" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="40.2867" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter4_f_408_1162" x="256.305" y="14.7503" width="373.742" height="374.019" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="42.5428" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter5_f_408_1162" x="79.8553" y="90.5975" width="203.758" height="203.703" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="13.1759" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter6_f_408_1162" x="132.65" y="87.7129" width="182.215" height="182.215" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="12.6729" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter7_f_408_1162" x="25.277" y="31.859" width="251.934" height="253.567" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="14.4689" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter8_f_408_1162" x="89.6902" y="6.26442" width="263.44" height="263.432" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="15.5865" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter9_f_408_1162" x="102.448" y="86.171" width="192.072" height="191.838" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="16.4594" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter10_f_408_1162" x="-293.652" y="33.2858" width="313.503" height="313.698" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="20.5915" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter11_f_408_1162" x="-269.822" y="116.589" width="283.913" height="283.979" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="19.8054" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter12_f_408_1162" x="-275.061" y="-45.8027" width="397.527" height="397.328" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="22.6123" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter13_f_408_1162" x="-269.136" y="61.8017" width="409.408" height="409.502" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="24.3589" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter14_f_408_1162" x="-275.638" y="68.7648" width="299.826" height="300.099" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="25.7231" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter15_f_408_1162" x="17.6801" y="288.012" width="229.429" height="229.683" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="15.531" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter16_f_408_1162" x="19.991" y="348.706" width="211.475" height="211.58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="14.9381" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter17_f_408_1162" x="35.8935" y="238.335" width="295.787" height="298.151" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="17.0552" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter18_f_408_1162" x="19.6259" y="321.712" width="301.604" height="301.756" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="18.3726" result="effect1_foregroundBlur_408_1162"/>
</filter>
<filter id="filter19_f_408_1162" x="21.904" y="312.81" width="226.169" height="226.227" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="19.4015" result="effect1_foregroundBlur_408_1162"/>
</filter>
<radialGradient id="paint0_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(454.479 213.804) rotate(154.331) scale(468.445 469.421)">
<stop stop-color="#5AE9FD"/>
<stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint1_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(99.9709 99.8546) rotate(90) scale(99.8546 99.9709)">
<stop stop-color="#38FF70"/>
<stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
</radialGradient>
<radialGradient id="paint2_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(494.263 133.585) rotate(134.122) scale(137.212 451.359)">
<stop stop-color="#6012C3"/>
<stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
</radialGradient>
<radialGradient id="paint3_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(231.664 169.727) rotate(151.133) scale(137.224 137.384)">
<stop stop-color="#FFF9C5"/>
<stop offset="0.755208" stop-color="#FF5C00"/>
<stop offset="1" stop-color="#FF451C"/>
</radialGradient>
<radialGradient id="paint4_angular_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(443.177 201.759) rotate(-154.827) scale(101.744 103.058)">
<stop stop-color="#FFF5CF"/>
<stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint5_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(204.549 173.856) rotate(53.8807) scale(289.979 290.583)">
<stop stop-color="#5AE9FD"/>
<stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint6_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(61.8845 61.8125) rotate(90) scale(61.8125 61.8845)">
<stop stop-color="#38FF70"/>
<stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
</radialGradient>
<radialGradient id="paint7_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(151.244 158.643) rotate(33.672) scale(84.9374 279.403)">
<stop stop-color="#6012C3"/>
<stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
</radialGradient>
<radialGradient id="paint8_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(143.406 105.065) rotate(151.133) scale(84.9452 85.0441)">
<stop stop-color="#FFF9C5"/>
<stop offset="1.8125" stop-color="#FF5C00"/>
<stop offset="1" stop-color="#F12E8C"/>
</radialGradient>
<radialGradient id="paint9_angular_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(198.484 182.089) rotate(104.723) scale(62.9818 63.7953)">
<stop stop-color="#FFF5CF"/>
<stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint10_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-114.79 230.466) rotate(154.331) scale(453.185 454.129)">
<stop stop-color="#5AE9FD"/>
<stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint11_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(96.7142 96.6017) rotate(90) scale(96.6017 96.7142)">
<stop stop-color="#38FF70"/>
<stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
</radialGradient>
<radialGradient id="paint12_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-76.2975 152.861) rotate(134.122) scale(132.742 436.655)">
<stop stop-color="#6012C3"/>
<stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
</radialGradient>
<radialGradient id="paint13_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(224.117 164.198) rotate(151.133) scale(132.754 132.908)">
<stop stop-color="#FFF9C5"/>
<stop offset="0.755208" stop-color="#FF5C00"/>
<stop offset="1" stop-color="#FF451C"/>
</radialGradient>
<radialGradient id="paint14_angular_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-125.724 218.816) rotate(-154.827) scale(98.4291 99.7004)">
<stop stop-color="#FFF5CF"/>
<stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint15_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(140.705 436.533) rotate(169.203) scale(341.812 342.524)">
<stop stop-color="#5AE9FD"/>
<stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
</radialGradient>
<radialGradient id="paint16_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(72.9462 72.8614) rotate(90) scale(72.8614 72.9462)">
<stop stop-color="#38FF70"/>
<stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
</radialGradient>
<radialGradient id="paint17_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(183.786 387.41) rotate(148.994) scale(100.12 329.345)">
<stop stop-color="#6012C3"/>
<stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
</radialGradient>
<radialGradient id="paint18_radial_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(169.039 123.846) rotate(151.133) scale(100.129 100.246)">
<stop stop-color="#FFF9C5"/>
<stop offset="0.755208" stop-color="#FF5C00"/>
<stop offset="1" stop-color="#FF451C"/>
</radialGradient>
<radialGradient id="paint19_angular_408_1162" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(134.988 425.924) rotate(-139.955) scale(74.2396 75.1985)">
<stop stop-color="#FFF5CF"/>
<stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
</radialGradient>
</defs>
</svg>`)
}
// else if (window.matchMedia("(max-width: 1200px)").matches) {
//   $('.mac-svg').html(`<svg width="290" height="193" viewBox="0 0 290 193" fill="none" xmlns="http://www.w3.org/2000/svg">
//   <path d="M231.082 123.752C231.082 123.752 231.272 118.988 228.89 115.942C226.508 112.896 224.366 110.627 223.403 110.202C222.441 109.777 221.053 109.506 220.357 108.439C219.661 107.373 218.328 105.556 216.99 105.393C215.657 105.235 212.557 104.697 212.557 104.697L210.315 102.401V101.172C210.315 101.172 211.702 101.281 212.236 100.851C212.769 100.422 214.428 96.2052 213.998 94.9759C213.569 93.7466 211.861 93.0008 211.861 93.0008C211.861 93.0008 208.977 84.242 205.077 82.5879C201.177 80.9338 188.68 84.0839 188.68 84.0839C188.68 84.0839 187.772 93.376 187.717 93.2178C187.663 93.0596 184.78 92.4178 184.78 92.4178C184.78 92.4178 184.78 97.4932 185.901 98.1847C187.021 98.8807 187.609 98.9847 187.609 98.9847C187.609 98.9847 187.13 101.764 187.821 104.164C188.513 106.564 190.172 109.022 190.172 109.022C190.172 109.022 181.413 112.173 179.65 113.881C177.888 115.589 171.746 123.706 169.771 127.873C167.796 132.04 167.208 133.907 165.979 134.87C164.749 135.832 162.987 137.007 162.453 137.541C161.92 138.074 161.17 139.249 160.37 141.12C159.57 142.991 155.561 147.795 155.561 147.795L175.162 149.449C175.162 149.449 180.129 145.978 181.462 144.537C182.796 143.095 183.334 142.132 183.334 142.132L186.217 149.449C186.217 149.449 162.77 149.02 159.511 148.649C156.253 148.274 150.911 147.366 148.561 146.995C146.21 146.62 134.568 144.112 133.072 144.591C131.576 145.07 127.997 146.783 126.984 148.008C125.968 149.237 124.422 153.029 125.222 155.004C126.022 156.979 129.493 158.638 130.134 158.796C130.776 158.954 133.447 159.758 134.085 159.917C134.722 160.075 136.005 160.504 136.914 160.025C137.822 159.546 138.997 158.742 138.997 158.742C138.997 158.742 140.972 158.208 142.468 157.779C143.964 157.35 149.573 156.979 150.585 156.925C151.602 156.87 156.248 158.154 156.248 158.154C156.248 158.154 155.231 159.971 155.502 160.717C155.769 161.462 158.653 164.987 158.653 164.987L161.857 164.667L162.874 166L166.132 165.091L167.466 165.837L169.707 165.516C169.707 165.516 191.817 161.137 195.396 157.824C198.976 154.511 224.506 137.902 224.506 137.902L231.082 123.752Z" fill="#161616"/>
//   <path d="M213.13 105.089C213.13 105.089 218.404 105.699 219.742 107.475C221.08 109.251 222.413 110.015 223.936 110.715C225.459 111.416 230.928 117.133 230.928 119.425" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M178.779 163.177C178.779 163.177 152.044 156.685 149.988 156.934C147.932 157.178 145.342 157.372 144.361 157.372C143.38 157.372 141.378 158.547 140.009 158.597C138.639 158.647 138.639 158.647 138.639 158.647C138.639 158.647 137.32 160.165 135.706 160.21C134.093 160.26 132.773 159.184 132.773 159.184C132.773 159.184 130.572 159.234 129.591 158.497C128.615 157.765 128.81 156.197 128.81 156.197C128.81 156.197 126.952 155.56 126.509 154.828C126.071 154.095 126.265 152.577 126.265 152.577C126.265 152.577 125.533 149.594 125.922 148.907C126.315 148.22 131.987 144.65 133.6 144.605C135.214 144.555 141.478 146.168 144.949 146.611C148.42 147.05 154.634 147.737 160.112 148.469C165.589 149.201 180.264 149.644 184.079 149.594C187.893 149.544 190.243 148.762 190.243 148.762" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M131.536 148.125C131.626 147.904 126.578 151.565 126.352 152.279" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M133.297 151.469C133.356 151.234 128.832 155.528 128.705 156.269" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M135.291 155.008C135.35 154.773 132.543 158.253 132.412 158.995" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M186.429 149.065C186.429 149.065 184.44 145.888 182.854 141.12C181.263 136.351 179.993 130.553 179.993 130.553" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M189.896 109.171C189.896 109.171 184.874 111.078 182.203 112.159C179.532 113.239 176.866 116.353 174.769 119.977C172.672 123.602 170.765 126.842 169.495 128.813C168.225 130.783 167.714 131.8 166.76 133.834C165.807 135.868 164.41 136.632 163.136 137.328C161.866 138.028 161.228 139.425 159.895 142.032C158.562 144.64 155.511 147.881 155.511 147.881" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M212.923 93.6516C212.923 93.6516 211.079 96.4175 209.56 96.2548C208.041 96.0921 207.065 93.1092 206.686 91.324C206.306 89.5343 206.686 86.1221 200.236 86.8768C193.787 87.6316 190.583 87.7988 188.409 86.3661C185.842 84.6713 186.407 81.3902 187.062 79.2886C187.677 77.3091 191.129 72.8935 191.292 73.002C191.455 73.1104 193.19 75.7137 195.739 76.2018C198.288 76.6899 208.859 76.8526 211.404 80.0524C213.953 83.2522 213.519 86.4475 213.356 88.5084C213.194 90.5602 212.923 93.6516 212.923 93.6516Z" fill="white"/>
//   <path d="M188.269 84.3367C188.269 84.3367 187.252 98.4511 187.79 102.338C188.328 106.225 190.601 112.145 194.786 112.986C198.971 113.822 202.32 111.729 204.535 108.918" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M211.956 93.7284C211.956 93.7284 213.809 93.1905 214.048 94.7453C214.288 96.3 213.271 100.548 212.073 101.027C210.876 101.506 210.279 101.027 210.279 101.027L209.8 107.667" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M192.135 111.901C192.135 111.901 190.364 119.874 191.227 121.022C192.09 122.169 194.458 122.676 195.249 125.189C196.04 127.701 200.551 136.225 200.551 136.225" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M211.136 103.907C211.136 103.907 210.151 108.557 206.486 113.98C202.82 119.404 201.835 120.814 201.695 122.504C201.555 124.195 201.907 125.04 201.483 125.672C201.058 126.305 200.565 130.463 200.565 132.294C200.565 134.124 200.705 136.519 200.705 136.519" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M194.871 115.951C194.871 115.951 199.937 130.716 200.19 133.957" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M199.142 97.6515C198.747 97.6515 198.428 97.3318 198.428 96.9374C198.428 96.543 198.747 96.2233 199.142 96.2233C199.536 96.2233 199.856 96.543 199.856 96.9374C199.856 97.3318 199.536 97.6515 199.142 97.6515Z" fill="white"/>
//   <path d="M189.334 96.4945C188.94 96.4945 188.62 96.1748 188.62 95.7804C188.62 95.386 188.94 95.0663 189.334 95.0663C189.728 95.0663 190.048 95.386 190.048 95.7804C190.048 96.1748 189.728 96.4945 189.334 96.4945Z" fill="white"/>
//   <path d="M193.482 97.9632C193.482 97.9632 193.347 99.7891 192.859 100.86C192.366 101.931 192.014 102.645 192.014 102.645C192.014 102.645 192.818 103.224 194.242 103.138" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M198.387 106.166C198.387 106.166 197.271 106.387 195.58 106.211C193.885 106.035 192.638 105.23 192.638 105.23C192.638 105.23 192.191 107.504 194.197 108.037C196.199 108.575 198.387 106.166 198.387 106.166Z" fill="white"/>
//   <path d="M194.188 113.049L195.205 121.302" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M210.716 123.49C210.716 123.49 206.205 129.406 205.36 131.096C204.515 132.786 202.472 135.109 198.667 138.282C194.861 141.45 194.653 142.295 193.736 143.353C192.818 144.41 191.128 145.468 190.568 146.313C190.007 147.158 189.298 147.791 189.298 147.791C189.298 147.791 191.268 149.341 192.046 150.259C192.818 151.176 194.793 153.639 194.793 153.639" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M210.44 102.79C210.44 102.79 213.6 106.058 213.984 107.328C214.368 108.598 215.001 110.378 215.064 110.884C215.127 111.391 212.904 113.872 210.422 116.859C207.946 119.847 206.418 123.34 206.102 124.041C205.785 124.741 205.211 122.771 204.194 122.26C203.178 121.754 201.7 122.504 201.7 122.504" stroke="white" stroke-width="0.594249" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M203.199 95.0749C203.199 95.0749 204.65 96.3654 203.838 98.4839C203.095 100.422 201.905 101.157 200.128 101.189C197.836 101.234 196.795 100.285 196.104 98.8498C195.456 97.5071 196.465 95.2156 196.465 95.2156C196.465 95.2156 196.586 95.8427 197.02 95.891C197.828 95.9875 197.418 94.5885 197.414 93.8568C197.41 92.9322 198.25 92.1402 198.962 91.4729C199.674 90.8056 200.289 90.4759 200.289 90.4759C200.289 90.4759 199.862 92.3975 200.196 92.9483C200.566 93.5593 201.048 92.8357 201.048 92.8357C201.048 92.8357 201.816 93.8046 201.868 94.6005C201.921 95.3965 201.82 96.2287 202.471 96.3211C203.115 96.4176 203.199 95.0749 203.199 95.0749Z" fill="#F48B44"/>
//   <path d="M199.668 100.735C199.865 100.723 200.05 100.643 200.195 100.51C200.44 100.281 200.822 99.8547 201.075 99.2236C201.469 98.2306 201.003 97.1934 201.003 97.1934C201.003 97.1934 200.758 97.5794 200.557 97.1693C200.36 96.7593 200.331 95.3321 199.841 94.6407C199.351 93.9532 198.776 93.6758 198.776 93.6758C198.776 93.6758 199.286 95.4768 198.643 96.5381C197.996 97.5995 197.686 97.4427 197.614 98.4959C197.537 99.6135 198.752 100.506 199.041 100.659C199.198 100.743 199.463 100.751 199.668 100.735Z" fill="#FA1B43"/>
//   <path d="M199.382 96.8037C199.382 96.8037 199.061 97.3223 198.683 98.0862C198.305 98.85 198.542 100.052 199.33 100.245C200.118 100.442 200.428 99.1957 200.359 98.8379C200.291 98.4761 200.195 98.1786 200.195 98.1786L199.961 98.6369C199.961 98.6369 199.901 98.7294 199.829 98.0058C199.752 97.2781 199.382 96.8037 199.382 96.8037Z" fill="white"/>
//   <path d="M191.876 94.3364C191.876 94.3364 193.328 95.6268 192.516 97.7454C191.772 99.6831 190.582 100.419 188.805 100.451C186.514 100.495 185.472 99.5464 184.781 98.1113C184.134 96.7685 185.143 94.4771 185.143 94.4771C185.143 94.4771 185.263 95.1042 185.698 95.1525C186.506 95.2489 186.096 93.85 186.092 93.1183C186.088 92.1937 186.928 91.4017 187.639 90.7344C188.351 90.067 188.966 89.7374 188.966 89.7374C188.966 89.7374 188.54 91.659 188.873 92.2098C189.243 92.8208 189.726 92.0972 189.726 92.0972C189.726 92.0972 190.494 93.066 190.546 93.862C190.598 94.658 190.498 95.4902 191.149 95.5826C191.8 95.6751 191.876 94.3364 191.876 94.3364Z" fill="#F48B44"/>
//   <path d="M188.591 100.243C188.788 100.231 188.973 100.15 189.118 100.018C189.363 99.7886 189.745 99.3625 189.998 98.7314C190.392 97.7384 189.926 96.7012 189.926 96.7012C189.926 96.7012 189.681 97.0871 189.48 96.6771C189.283 96.267 189.255 94.8399 188.764 94.1485C188.274 93.461 187.699 93.1836 187.699 93.1836C187.699 93.1836 188.209 94.9846 187.566 96.0459C186.919 97.1072 186.609 96.9505 186.537 98.0037C186.461 99.1213 187.675 100.014 187.964 100.167C188.121 100.251 188.386 100.255 188.591 100.243Z" fill="#FA1B43"/>
//   <path d="M188.31 96.3105C188.31 96.3105 187.988 96.8291 187.61 97.5929C187.232 98.3567 187.469 99.5588 188.257 99.7517C189.045 99.9447 189.355 98.7025 189.286 98.3447C189.218 97.9829 189.122 97.6854 189.122 97.6854L188.888 98.1437C188.888 98.1437 188.828 98.2361 188.756 97.5125C188.679 96.7849 188.31 96.3105 188.31 96.3105Z" fill="white"/>
//   <path d="M221.775 103.363L222.009 103.193C221.603 102.633 221.244 101.675 220.942 100.461C220.643 99.2566 220.408 97.8331 220.237 96.3674C219.895 93.4331 219.81 90.3599 219.957 88.5805C220.052 87.4325 220.536 86.0664 221.033 84.6587C221.123 84.4061 221.213 84.1522 221.301 83.898C221.586 83.074 221.851 82.2515 222.007 81.4858C222.163 80.7232 222.216 79.9892 222.055 79.351C221.968 79.0049 221.848 78.6156 221.718 78.1914C221.396 77.1386 221.007 75.8703 220.875 74.5102C220.693 72.6305 221.018 70.6572 222.726 69.0283L222.526 68.819L222.726 69.0283C224.188 67.6338 225.437 67.0019 226.715 66.5175C227.091 66.375 227.476 66.2435 227.873 66.1079C228.817 65.7849 229.83 65.4386 230.954 64.8654M221.775 103.363L243.549 62.8003C238.684 60.7575 234.578 62.9428 231.816 64.4131C231.512 64.5747 231.225 64.7277 230.954 64.8654M221.775 103.363L222.009 103.193C222.222 103.488 222.294 103.898 222.296 104.342C222.298 104.794 222.227 105.327 222.108 105.907C221.87 107.068 221.431 108.462 220.951 109.856C220.68 110.641 220.392 111.44 220.118 112.199C219.908 112.779 219.707 113.337 219.529 113.846C219.321 114.441 219.142 114.979 219.009 115.433C218.875 115.892 218.793 116.249 218.773 116.49C218.62 118.286 218.762 120.663 219.872 123.155C220.982 125.644 223.067 128.265 226.832 130.544C227.083 130.695 227.453 130.797 227.954 130.834C228.451 130.871 229.054 130.844 229.753 130.756C231.151 130.58 232.898 130.166 234.878 129.577C238.835 128.4 243.684 126.533 248.451 124.516C253.216 122.5 257.893 120.335 261.503 118.565C263.309 117.679 264.846 116.893 265.994 116.274C266.568 115.964 267.042 115.697 267.404 115.481C267.772 115.26 268.004 115.103 268.108 115.012C268.499 114.667 269.033 114.327 269.607 113.96C269.802 113.835 270.002 113.708 270.202 113.576C271.008 113.047 271.862 112.429 272.606 111.613C274.079 109.999 275.161 107.568 274.441 103.412L274.726 103.363L274.441 103.412C273.968 100.681 273.06 98.892 271.929 97.6796C270.798 96.467 269.423 95.8074 267.97 95.3749C267.013 95.0897 266.048 94.9088 265.097 94.7305C264.586 94.6349 264.08 94.5399 263.581 94.4301C262.181 94.1216 260.864 93.6976 259.894 92.7812C258.952 91.8913 258.45 91.0308 258.225 90.1266C258.002 89.2305 258.059 88.3171 258.188 87.3405C258.23 87.0186 258.281 86.688 258.333 86.346C258.599 84.6048 258.911 82.5649 258.442 79.8409C257.891 76.6438 256.838 74.7478 255.598 73.4328C254.593 72.3665 253.463 71.6745 252.319 70.9736C252.037 70.801 251.754 70.6278 251.472 70.4484L251.472 70.4483C250.731 69.9769 250.166 69.3752 249.661 68.7191C249.356 68.3241 249.063 67.8938 248.766 67.4593C248.58 67.1859 248.392 66.9109 248.2 66.642C247.191 65.2301 245.939 63.8051 243.549 62.8003L221.775 103.363ZM230.954 64.8654L230.823 64.6078L230.954 64.8655C230.954 64.8655 230.954 64.8655 230.954 64.8654Z" fill="#161616" stroke="white" stroke-width="0.578331"/>
//   <path d="M246.846 90.4965L253.883 102.119L243.882 122.954L233.586 100.316L246.846 90.4965Z" fill="#161616" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M222.853 80.2956C222.853 80.2956 223.983 93.736 228.863 99.6671C233.173 104.902 236.805 104.355 240.659 100.183C243.819 96.7626 247.078 91.2723 247.078 91.2723C247.078 91.2723 250.848 89.4815 249.644 86.4825C248.443 83.4835 245.33 85.6954 245.33 85.6954C245.33 85.6954 242.048 86.1126 242.008 80.7206C241.977 76.7495 238.533 71.4284 230.367 72.9319C222.204 74.4393 222.853 80.2956 222.853 80.2956Z" fill="#161616" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M228.666 94.8697C228.666 94.8697 230.268 94.9287 231.972 94.1416C233.676 93.3545 234.928 92.4217 234.928 92.4217C234.928 92.4217 235.652 95.6175 233.476 96.8572C230.788 98.3882 228.666 94.8697 228.666 94.8697Z" fill="white" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M228.332 83.1218C228.312 83.2556 228.938 86.5537 228.009 89.289C227.797 89.9187 228.076 90.7413 229.032 90.8003C230.39 90.883 230.898 90.1076 230.898 90.1076" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M236.621 113.052L241.761 126.426C241.761 126.426 249.758 118.838 253.733 112.293C257.708 105.751 263.053 102.438 263.053 102.438C263.053 102.438 274.746 108.384 279.878 117.621C285.01 126.859 284.916 136.651 286.899 146.073C288.285 152.661 288.737 163.524 288.922 167.365C289.21 173.335 288.631 179.794 288.301 182.525C288.005 184.973 286.297 187.917 284.825 189.062C283.349 190.208 273.888 191.959 272.66 191.794C271.432 191.628 265.143 187.161 264.879 185.091C264.214 179.869 272.243 175.89 269.047 174.662C265.851 173.434 262.986 173.288 262.986 173.288C262.986 173.288 247.991 175.984 241.588 174.315C235.184 172.647 240.702 170.805 240.702 170.805L230.548 149.39C230.548 149.39 219.619 158.281 218.784 159.671C217.95 161.06 216.56 163.748 215.636 163.933C214.711 164.118 213.782 165.507 212.208 166.062C210.633 166.617 209.429 164.858 209.429 164.858C209.429 164.858 210.354 157.632 206.835 154.668C203.317 151.705 196.996 152.637 196.996 152.637C196.996 152.637 196.996 151.04 198.157 150.315C199.318 149.591 204.84 148.332 205.466 148.233C206.095 148.135 206.194 147.556 206.918 146.734C207.642 145.911 209.87 144.699 211.176 143.975C212.483 143.247 212.676 143.636 213.16 143.247C213.644 142.861 214.951 139.905 217.08 137.776C219.209 135.647 222.165 131.577 224.731 127.126C227.297 122.671 228.458 121.608 229.426 120.589C230.394 119.574 233.83 115.264 234.85 114.296C235.873 113.324 236.621 113.052 236.621 113.052Z" fill="white" stroke="white" stroke-width="0.578331" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M261.935 171.179C261.935 171.179 265.395 166.755 273.14 166.57C277.753 166.46 282.346 168.53 282.346 168.53" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M208.539 175.3C208.539 175.3 201.585 180.05 199.672 179.936C197.759 179.822 197.295 179.007 197.295 178.37C197.295 177.732 205.406 171.128 206.217 170.723C207.028 170.317 217.517 167.42 218.619 167.42C219.721 167.42 236.522 168.058 239.246 168.349C241.969 168.641 260.916 171.246 261.959 171.246C263.002 171.246 266.618 170.372 269.862 172.045C271.924 173.108 274.541 177.649 275.922 182.66C276.473 184.655 276.446 185.497 275.517 187.178C274.588 188.858 273.837 189.61 273.837 189.61C273.837 189.61 264.958 188.016 260.888 186.973C255.685 185.643 240.942 179.456 239.379 179.629C237.813 179.802 236.207 181.55 232.291 181.613C229.552 181.656 224.007 183.525 222.44 183.234C220.874 182.943 217.572 182.077 217.572 182.077C217.572 182.077 215.95 183.006 213.919 182.541C211.892 182.077 211.428 179.759 211.428 179.759C211.428 179.759 208.705 183.584 207.315 183.758C205.926 183.931 204.824 182.715 205.115 181.498C205.41 180.282 208.539 175.3 208.539 175.3Z" fill="#161616" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M208.54 175.299C208.54 175.008 211.842 171.301 212.77 170.781C213.699 170.258 221 169.506 221 169.506" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M211.436 179.763C211.436 179.763 213.581 177.099 216.418 175.651C219.256 174.202 223.14 173.332 223.14 173.332" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M217.58 182.081C217.58 182.081 222.736 178.953 224.302 178.315C225.868 177.677 227.14 176.981 227.14 176.981" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M230.547 149.387C230.547 149.387 229.784 145.266 229.516 141.129C229.249 136.993 229.516 133.325 229.516 133.325" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M197.157 152.374C197.157 152.374 190.75 156.019 189.188 156.621C187.625 157.223 187.023 157.101 186.303 156.42C185.583 155.739 181.655 154.578 180.895 154.377C180.135 154.177 178.451 153.976 177.853 154.539C177.251 155.098 176.491 156.621 176.491 156.621C176.491 156.621 175.491 156.381 174.889 157.742C174.287 159.104 173.807 161.226 173.768 161.95C173.728 162.67 174.488 164.555 174.488 164.555C174.488 164.555 174.649 166.558 175.33 167.719C176.011 168.88 177.412 169.762 178.014 169.841C178.616 169.919 184.744 169.601 185.063 169.16C185.382 168.719 185.504 167.676 185.504 167.676C185.504 167.676 186.905 167.397 187.267 167.035C187.629 166.673 188.428 166.314 188.428 166.314L209.775 163.992C209.775 163.992 212.137 158.825 208.693 154.818C205.249 150.812 197.157 152.374 197.157 152.374Z" fill="#161616" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M246.645 90.9067L247.928 93.7404L243.296 98.7702L241.344 96.5466L246.645 90.9067Z" fill="#161616"/>
//   <path d="M182.3 168.798C182.3 168.798 180.458 168.759 178.577 167.598C176.696 166.437 174.492 164.555 174.492 164.555" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M241.761 126.426C241.761 126.426 242.32 122.643 242.43 120.538C242.54 118.432 242.497 118.664 242.497 118.664L252.785 100.832L250.903 98.065L256.76 96.8685L263.061 102.438C263.061 102.438 258.153 110.159 252.832 115.725C247.511 121.29 241.761 126.426 241.761 126.426Z" fill="white" stroke="white" stroke-width="0.578331" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M241.761 126.426L242.43 119.157L236.018 105.882L234.857 114.292L241.761 126.426Z" fill="white" stroke="white" stroke-width="0.578331" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M237.522 109.156L236.621 113.052" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M247.263 91.6814L250.899 98.0651" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M269.464 166.464L266.19 146.951" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M185.752 158.376L185.382 159.667C185.382 159.667 182.938 161.269 182.938 162.391C182.938 163.513 183.418 164.394 184.3 164.556C185.181 164.717 186.661 164.115 187.865 163.272C189.066 162.43 190.03 161.549 190.187 161.108" fill="#161616"/>
//   <path d="M185.752 158.376L185.382 159.667C185.382 159.667 182.938 161.269 182.938 162.391C182.938 163.513 183.418 164.394 184.3 164.556C185.181 164.717 186.661 164.115 187.865 163.272C189.066 162.43 190.03 161.549 190.187 161.108" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M180.391 158.215L179.856 159.624C179.856 159.624 182.658 162.548 183.06 164.071C183.461 165.594 183.06 166.432 182.579 166.755C182.099 167.074 181.418 167.314 181.139 167.035C180.859 166.755 175.971 161.749 175.57 161.147C175.168 160.545 174.688 158.423 174.688 158.423" fill="#161616"/>
//   <path d="M180.391 158.215L179.856 159.624C179.856 159.624 182.658 162.548 183.06 164.071C183.461 165.594 183.06 166.432 182.579 166.755C182.099 167.074 181.418 167.314 181.139 167.035C180.859 166.755 175.971 161.749 175.57 161.147C175.168 160.545 174.688 158.423 174.688 158.423" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M205.47 148.229C205.47 148.229 210.991 148.556 214.25 152.629" stroke="white" stroke-width="0.578331" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M236.814 79.2127C236.814 79.2127 238.235 80.4761 237.44 82.5502C236.712 84.4472 235.547 85.1675 233.807 85.199C231.564 85.2423 230.545 84.3134 229.868 82.9084C229.234 81.5938 230.222 79.3505 230.222 79.3505C230.222 79.3505 230.34 79.9645 230.765 80.0117C231.556 80.1062 231.155 78.7365 231.151 78.0202C231.147 77.115 231.969 76.3397 232.666 75.6864C233.363 75.033 233.965 74.7103 233.965 74.7103C233.965 74.7103 233.548 76.5916 233.874 77.1308C234.236 77.729 234.709 77.0206 234.709 77.0206C234.709 77.0206 235.46 77.9691 235.512 78.7483C235.563 79.5276 235.464 80.3423 236.102 80.4328C236.732 80.5273 236.814 79.2127 236.814 79.2127Z" fill="#F48B44"/>
//   <path d="M233.953 85.0536C234.146 85.0418 234.327 84.9631 234.469 84.8332C234.709 84.6089 235.083 84.1917 235.331 83.5738C235.717 82.6017 235.26 81.5863 235.26 81.5863C235.26 81.5863 235.02 81.9641 234.823 81.5626C234.63 81.1612 234.603 79.764 234.123 79.0871C233.642 78.4141 233.08 78.1425 233.08 78.1425C233.08 78.1425 233.58 79.9057 232.95 80.9447C232.316 81.9838 232.013 81.8303 231.942 82.8614C231.867 83.9556 233.056 84.8293 233.339 84.9788C233.493 85.0615 233.753 85.0694 233.953 85.0536Z" fill="#FA1B43"/>
//   <path d="M233.674 81.2043C233.674 81.2043 233.359 81.712 232.989 82.4598C232.619 83.2076 232.851 84.3844 233.622 84.5733C234.394 84.7661 234.697 83.5461 234.63 83.1958C234.563 82.8416 234.469 82.5503 234.469 82.5503L234.24 82.999C234.24 82.999 234.181 83.0895 234.11 82.3811C234.036 81.6687 233.674 81.2043 233.674 81.2043Z" fill="white"/>
//   <path d="M227.655 79.9018C227.655 79.9018 229.076 81.1651 228.281 83.2393C227.553 85.1363 226.388 85.8565 224.648 85.888C222.405 85.9313 221.385 85.0024 220.708 83.5974C220.075 82.2829 221.063 80.0395 221.063 80.0395C221.063 80.0395 221.181 80.6535 221.606 80.7007C222.397 80.7952 221.995 79.4256 221.991 78.7093C221.987 77.804 222.81 77.0287 223.507 76.3754C224.203 75.722 224.805 75.3993 224.805 75.3993C224.805 75.3993 224.388 77.2806 224.715 77.8198C225.077 78.418 225.549 77.7096 225.549 77.7096C225.549 77.7096 226.301 78.6581 226.352 79.4374C226.403 80.2166 226.305 81.0313 226.942 81.1218C227.58 81.2124 227.655 79.9018 227.655 79.9018Z" fill="#F48B44"/>
//   <path d="M224.794 85.7461C224.987 85.7343 225.168 85.6556 225.31 85.5257C225.55 85.3014 225.924 84.8842 226.171 84.2663C226.557 83.2942 226.101 82.2788 226.101 82.2788C226.101 82.2788 225.861 82.6566 225.664 82.2552C225.471 81.8537 225.443 80.4565 224.963 79.7796C224.483 79.1066 223.92 78.835 223.92 78.835C223.92 78.835 224.42 80.5982 223.79 81.6372C223.157 82.6763 222.854 82.5228 222.783 83.5539C222.708 84.6481 223.897 85.5218 224.18 85.6713C224.334 85.754 224.593 85.7579 224.794 85.7461Z" fill="#FA1B43"/>
//   <path d="M224.518 81.8968C224.518 81.8968 224.203 82.4045 223.833 83.1523C223.463 83.9001 223.695 85.0769 224.467 85.2658C225.238 85.4547 225.541 84.2386 225.474 83.8883C225.407 83.5341 225.313 83.2428 225.313 83.2428L225.085 83.6915C225.085 83.6915 225.026 83.782 224.955 83.0736C224.88 82.3612 224.518 81.8968 224.518 81.8968Z" fill="white"/>
//   <path d="M91.943 111.568C91.943 111.568 39.4153 182.522 39.4153 184.747C39.4153 186.972 80.5099 191.796 85.5345 190.684C90.559 189.571 115.321 182.4 115.321 179.923C115.321 178.811 85.3293 179.674 64.3604 179.674C58.0826 179.674 53.413 179.674 53.2355 179.304C53.058 178.933 90.6952 132.47 90.6952 132.47L91.943 111.568Z" fill="#161616" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M109.998 88.4828L109.209 161.485L89.3773 182.013L87.0602 181.55L87.987 62.7955L90.0743 62.2134L109.998 88.4828Z" fill="#161616" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M89.3774 182.013L90.0745 62.2134" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <mask id="mask0_81_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="90" y="67" width="19" height="97">
//   <path d="M90.7937 162.779L107.756 151.044L108.718 90.0184L91.6478 68.1458L90.7937 162.779Z" fill="#F48B44" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   </mask>
//   <g mask="url(#mask0_81_2)">
//   <path d="M90.7937 162.779L107.756 151.044L108.718 90.0184L91.6478 68.1458L90.7937 162.779Z" fill="#F48B44" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <g filter="url(#filter0_f_81_2)">
//   <path d="M89.274 126.869C102.139 120.52 107.397 104.895 101.048 92.0295C94.698 79.1644 79.0976 73.834 66.2325 80.1835C53.3674 86.533 48.1095 102.158 54.459 115.023C60.8085 127.888 76.4089 133.219 89.274 126.869Z" fill="url(#paint0_radial_81_2)"/>
//   <path d="M89.274 126.869C102.139 120.52 107.397 104.895 101.048 92.0295C94.698 79.1644 79.0976 73.834 66.2325 80.1835C53.3674 86.533 48.1095 102.158 54.459 115.023C60.8085 127.888 76.4089 133.219 89.274 126.869Z" stroke="#00E29A" stroke-width="0.482863"/>
//   </g>
//   <g filter="url(#filter1_f_81_2)">
//   <rect width="48.2722" height="48.2161" rx="24.108" transform="matrix(-0.551012 -0.834497 -0.834497 0.551012 113.426 127.465)" fill="url(#paint1_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter2_f_81_2)">
//   <path d="M117.478 118.082C130.215 104.948 129.894 83.9756 116.76 71.2383L115.12 69.6477C101.986 56.9105 81.014 57.2318 68.2767 70.3655C55.5395 83.4991 55.8608 104.472 68.9945 117.209L70.6345 118.799C83.7682 131.537 104.741 131.215 117.478 118.082Z" fill="url(#paint2_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter3_f_81_2)">
//   <rect width="70.2248" height="70.1431" rx="35.0716" transform="matrix(-0.551012 -0.834497 -0.834497 0.551012 144.453 132.573)" fill="url(#paint3_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter4_f_81_2)">
//   <path d="M70.0729 132.961C82.3508 138.731 97.0037 133.409 102.774 121.131C108.545 108.854 103.291 94.1761 91.0132 88.4056C78.7352 82.6351 64.0823 87.9568 58.3119 100.235C52.5414 112.513 57.7949 127.19 70.0729 132.961Z" fill="url(#paint4_angular_81_2)"/>
//   </g>
//   </g>
//   <path d="M52 70.3552L79.0278 66.7399" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M80.76 60.4925L35.0743 35.6787" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M84.2816 54.8262L68.9745 35.8279" stroke="white" stroke-width="0.482863" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <mask id="mask1_81_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="47" y="0" width="30" height="29">
//   <circle cx="61.5295" cy="14.4859" r="14.4859" fill="#C4C4C4"/>
//   </mask>
//   <g mask="url(#mask1_81_2)">
//   <g filter="url(#filter5_f_81_2)">
//   <path d="M66.9726 32.8047C63.2212 27.7752 56.1028 26.7391 51.0733 30.4905L43.4537 36.1739C38.4241 39.9253 37.388 47.0437 41.1395 52.0732L46.7828 59.6391C50.5342 64.6686 57.6526 65.7047 62.6821 61.9533L70.3018 56.2699C75.3313 52.5185 76.3674 45.4001 72.6159 40.3706L66.9726 32.8047Z" fill="url(#paint5_radial_81_2)"/>
//   <path d="M66.9726 32.8047C63.2212 27.7752 56.1028 26.7391 51.0733 30.4905L43.4537 36.1739C38.4241 39.9253 37.388 47.0437 41.1395 52.0732L46.7828 59.6391C50.5342 64.6686 57.6526 65.7047 62.6821 61.9533L70.3018 56.2699C75.3313 52.5185 76.3674 45.4001 72.6159 40.3706L66.9726 32.8047Z" stroke="#00E29A" stroke-width="0.482863"/>
//   </g>
//   <g filter="url(#filter6_f_81_2)">
//   <rect width="29.8817" height="29.847" rx="12.6496" transform="matrix(-0.720712 0.693235 0.693235 0.720712 67.4457 21.8185)" fill="url(#paint6_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter7_f_81_2)">
//   <path d="M55.8406 16.7828C49.4182 12.5042 40.7433 14.242 36.4647 20.6644L28.4357 32.7161C24.1571 39.1384 25.8949 47.8133 32.3173 52.092L43.192 59.3368C49.6143 63.6155 58.2892 61.8776 62.5679 55.4553L70.5969 43.4036C74.8755 36.9812 73.1377 28.3063 66.7153 24.0277L55.8406 16.7828Z" fill="url(#paint7_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter8_f_81_2)">
//   <rect width="43.4709" height="43.4204" rx="15.558" transform="matrix(-0.720712 0.693235 0.693235 0.720712 67.0714 2.35693)" fill="url(#paint8_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter9_f_81_2)">
//   <path d="M75.6588 47.5924C77.793 39.4702 72.9082 31.1476 64.786 29.0134C56.6638 26.8791 48.3187 31.7252 46.1844 39.8474C44.0501 47.9696 48.935 56.2922 57.0572 58.4264C65.1794 60.5607 73.5245 55.7146 75.6588 47.5924Z" fill="url(#paint9_angular_81_2)"/>
//   </g>
//   <path d="M54.1829 18.3615C54.1829 18.3615 62.1491 19.2615 62.7798 19.1547C63.4105 19.0504 64.359 18.068 67.6192 19.1887C70.8819 20.3118 75.1246 24.6952 75.1246 24.6952C75.1246 24.6952 72.9511 27.8511 71.0905 29.1489C69.2324 30.4467 66.7775 31.8148 66.7775 31.8148L48.2956 36.5135L46.2604 31.3927C46.2604 31.3927 43.5241 31.041 41.3142 29.7092C39.1044 28.3775 37.0352 28.2004 37.0012 28.0597C36.9673 27.919 38.0346 24.8116 40.1353 22.5532C41.615 20.9644 43.0632 20.3822 44.606 19.8558C46.1488 19.3294 47.0463 19.3051 48.3538 19.0237C50.9203 18.4707 54.1829 18.3615 54.1829 18.3615Z" fill="#161616" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M47.1819 19.2153C47.1819 19.2153 48.3196 20.404 49.2486 24.227C50.1777 28.05 50.3863 30.1192 50.3863 30.1192L47.4924 30.6358C47.4924 30.6358 46.9757 26.1918 46.1995 23.7636C45.4232 21.3355 44.4941 19.8873 44.4941 19.8873L47.1819 19.2153Z" fill="white"/>
//   <path d="M64.7206 18.3516C64.7206 18.3516 65.7564 18.9968 66.6855 22.8222C67.6145 26.6453 67.8232 28.7144 67.8232 28.7144L64.9292 29.2311C64.9292 29.2311 64.4125 24.7871 63.6363 22.3589C62.86 19.9307 61.931 18.4826 61.931 18.4826L64.7206 18.3516Z" fill="white"/>
//   <path d="M64.4128 4.00092C64.4128 4.00092 68.7403 7.76328 66.7051 11.7221C63.9227 17.134 66.2515 20.0838 66.2515 20.0838C66.2515 20.0838 65.0968 21.2821 61.6692 21.0322C59.976 20.9109 57.3368 18.7544 57.3368 18.7544C57.3368 18.7544 57.3416 17.7041 58.6491 17.4906C60.0512 17.2626 60.9706 17.037 61.8608 15.6543C64.5632 11.4504 64.4128 4.00092 64.4128 4.00092Z" fill="white"/>
//   <path d="M54.625 10.6784C54.625 10.6784 54.8239 6.40181 57.1163 5.38299C59.411 4.36416 63.9133 5.15739 64.2529 7.47885C64.5925 9.80031 63.4621 13.7373 62.7804 15.0691C61.5069 17.5603 59.2631 17.5337 59.2631 17.5337C59.2631 17.5337 59.183 19.2608 58.7027 19.7144C58.2224 20.168 57.371 20.8181 55.8985 20.5634C54.4261 20.3087 53.5771 19.7411 53.4631 18.9212C53.3491 18.0989 53.907 14.4408 53.742 14.1182C53.5771 13.7955 51.9615 12.9756 52.2186 11.6439C52.4734 10.3121 52.8639 9.94828 53.5892 9.93373C54.3145 9.91917 54.5983 10.5984 54.5983 10.5984L54.625 10.6784Z" fill="#161616"/>
//   <path d="M54.9301 8.76507C55.2867 7.41149 57.0211 6.47757 58.3383 6.94575C58.855 7.1301 59.425 7.42362 60.0242 7.88209C62.4208 9.7184 65.863 8.87423 65.863 8.87423C65.863 8.87423 66.8285 6.67891 65.4239 3.52299C63.8399 -0.0380369 56.9434 -1.18543 53.722 1.415C50.2799 4.1925 50.8984 6.50911 47.7668 8.93973C43.3834 12.3431 43.3252 15.2079 43.3252 15.2079C43.3252 15.2079 46.748 17.3596 48.5721 19.1158C51.3254 21.7648 53.2951 18.1965 53.2951 18.1965L53.773 13.995C53.773 13.995 52.5698 13.0247 52.4145 11.955C52.1695 10.2666 53.0137 9.9634 53.3776 9.94399C53.7487 9.92459 54.571 10.8318 54.571 10.8318L54.9301 8.76507Z" fill="white"/>
//   <path d="M54.7337 11.1735C54.7337 11.1735 54.5469 10.0285 53.5863 9.92909C52.6257 9.82963 52.0047 11.1784 52.3419 12.139C52.582 12.8255 53.2079 13.3907 53.5451 13.6599C53.6833 13.7691 53.7561 13.9413 53.7416 14.116L53.4044 17.7667C53.2952 18.9457 54.0472 20.0373 55.1897 20.3405C55.4808 20.4181 55.801 20.4812 56.1479 20.52C56.3953 20.5467 56.65 20.5539 56.8975 20.5491C58.0327 20.52 58.9836 19.6782 59.1898 18.56C59.2505 18.2301 59.5998 17.7207 59.265 17.7619C56.8223 18.0603 56.1043 16.4326 56.1285 16.3622" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M60.7298 11.7824C60.6837 12.3233 60.6837 13.4052 60.6837 13.4052C60.6837 13.4052 59.8007 13.626 59.3835 13.2378" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M58.0278 10.017C58.0278 10.017 58.3335 10.7156 59.2965 10.5361" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M61.7443 11.1152C61.7443 11.1152 62.1227 11.775 63.0639 11.4937" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M57.9549 14.2746L60.4535 15.0581C60.4535 15.0581 59.9368 16.1376 58.8112 15.798C57.7026 15.4633 57.9549 14.2746 57.9549 14.2746Z" fill="white"/>
//   <path d="M58.2925 12.1734C59.3884 12.1734 60.2768 11.285 60.2768 10.1891C60.2768 9.0932 59.3884 8.2048 58.2925 8.2048C57.1966 8.2048 56.3082 9.0932 56.3082 10.1891C56.3082 11.285 57.1966 12.1734 58.2925 12.1734Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M62.8767 13.3109C63.9726 13.3109 64.861 12.4225 64.861 11.3267C64.861 10.2308 63.9726 9.34238 62.8767 9.34238C61.7809 9.34238 60.8925 10.2308 60.8925 11.3267C60.8925 12.4225 61.7809 13.3109 62.8767 13.3109Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <circle cx="61.5295" cy="14.4859" r="14.2445" stroke="white" stroke-width="0.482863"/>
//   </g>
//   <mask id="mask2_81_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="10" width="29" height="30">
//   <circle cx="14.4859" cy="24.94" r="14.4859" fill="#C4C4C4"/>
//   </mask>
//   <g mask="url(#mask2_81_2)">
//   <g filter="url(#filter10_f_81_2)">
//   <path d="M-15.2918 41.635C-6.49861 37.2951 -2.88845 26.6487 -7.2283 17.8554L-13.8031 4.5338C-18.143 -4.25943 -28.7895 -7.86962 -37.5827 -3.52976L-50.8104 2.99873C-59.6037 7.33858 -63.2138 17.985 -58.874 26.7783L-52.2992 40.0999C-47.9593 48.8931 -37.3128 52.5033 -28.5196 48.1635L-15.2918 41.635Z" fill="url(#paint10_radial_81_2)"/>
//   <path d="M-15.2918 41.635C-6.49861 37.2951 -2.88845 26.6487 -7.2283 17.8554L-13.8031 4.5338C-18.143 -4.25943 -28.7895 -7.86962 -37.5827 -3.52976L-50.8104 2.99873C-59.6037 7.33858 -63.2138 17.985 -58.874 26.7783L-52.2992 40.0999C-47.9593 48.8931 -37.3128 52.5033 -28.5196 48.1635L-15.2918 41.635Z" stroke="#00E29A" stroke-width="0.482863"/>
//   </g>
//   <g filter="url(#filter11_f_81_2)">
//   <rect width="46.6997" height="46.6454" rx="19.769" transform="matrix(-0.551012 -0.834497 -0.834497 0.551012 1.45868 45.4756)" fill="url(#paint11_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter12_f_81_2)">
//   <path d="M12.4866 29.0689C20.883 20.4112 20.6712 6.58624 12.0135 -1.8101L-4.23276 -17.566C-12.8904 -25.9624 -26.7154 -25.7506 -35.1117 -17.0929L-49.3289 -2.43328C-57.7253 6.22437 -57.5134 20.0494 -48.8558 28.4457L-32.6095 44.2017C-23.9519 52.598 -10.1269 52.3862 -1.73055 43.7285L12.4866 29.0689Z" fill="url(#paint12_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter13_f_81_2)">
//   <rect width="67.9371" height="67.8581" rx="24.3142" transform="matrix(-0.551012 -0.834497 -0.834497 0.551012 31.4748 50.4172)" fill="url(#paint13_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter14_f_81_2)">
//   <path d="M-40.4827 50.7926C-28.6048 56.3751 -14.4292 51.2268 -8.8467 39.3488C-3.26421 27.4708 -8.34664 13.2715 -20.2246 7.68902C-32.1026 2.10653 -46.2781 7.25482 -51.8606 19.1328C-57.4431 31.0108 -52.3607 45.2101 -40.4827 50.7926Z" fill="url(#paint14_angular_81_2)"/>
//   </g>
//   <path d="M19.2168 32.4956C19.1866 32.3813 19.7242 27.572 19.7242 27.572C19.7242 27.572 20.9094 26.0211 20.7991 25.4881C20.6862 24.9549 20.3631 24.2207 20.0545 23.8242C19.7458 23.4276 19.4045 18.6814 15.9504 18.7772C12.4966 18.8705 8.04972 19.233 8.0695 20.5449C8.08928 21.8569 7.63643 25.3539 8.07566 26.9734C8.51471 28.5953 8.956 30.8371 10.2733 31.8274C11.5905 32.8202 12.2853 33.0553 12.2853 33.0553L12.1684 39.4929L19.2168 32.4956Z" fill="#161616"/>
//   <path d="M12.296 32.9814L11.9117 38.4364" stroke="white" stroke-width="0.241431"/>
//   <path d="M11.7747 39.9767C11.7747 39.9767 10.653 41.1674 10.2007 43.4992C9.74811 45.8335 7.795 48.9826 7.03145 51.6418C6.26807 54.2984 5.06158 59.1192 4.79783 61.2348C4.53407 63.3504 3.81471 69.4727 3.81471 69.4727C3.81471 69.4727 7.28231 72.6594 8.82946 74.441C10.3766 76.2227 11.7156 77.7015 14.5205 78.8221C17.3253 79.9427 19.2386 80.6537 21.4625 80.1754C23.689 79.6974 25.9461 77.9517 25.9461 77.9517C25.9461 77.9517 26.2453 66.3203 26.0934 61.924C25.9416 57.5277 26.5308 47.5333 26.043 44.6126C25.555 41.6944 23.981 37.8328 22.7628 36.3038C21.5446 34.7749 21.3177 34.7028 20.6422 34.4818C19.9665 34.2659 11.7747 39.9767 11.7747 39.9767Z" fill="white"/>
//   <path d="M9.78891 26.2882C10.7642 26.3569 11.6105 25.622 11.6792 24.6467C11.7479 23.6714 11.0129 22.8251 10.0377 22.7564C9.06241 22.6877 8.2161 23.4227 8.14741 24.3979C8.07871 25.3732 8.81364 26.2195 9.78891 26.2882Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M15.1498 26.6661C16.1251 26.7348 16.9714 25.9998 17.0401 25.0246C17.1088 24.0493 16.3738 23.203 15.3986 23.1343C14.4233 23.0656 13.577 23.8005 13.5083 24.7758C13.4396 25.7511 14.1745 26.5974 15.1498 26.6661Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M11.7249 24.283L13.5339 24.4104" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M10.3895 24.4895C10.5366 24.4999 10.6643 24.389 10.6747 24.2419C10.6851 24.0947 10.5742 23.9671 10.427 23.9567C10.2799 23.9463 10.1522 24.0572 10.1419 24.2043C10.1315 24.3515 10.2424 24.4791 10.3895 24.4895Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M15.5478 24.8535C15.6949 24.8638 15.8226 24.7529 15.833 24.6058C15.8433 24.4587 15.7324 24.331 15.5853 24.3206C15.4382 24.3103 15.3105 24.4212 15.3001 24.5683C15.2898 24.7154 15.4007 24.8431 15.5478 24.8535Z" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M11.7961 26.9295C11.7961 26.9295 12.5235 27.2816 13.0957 27.0848" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M11.5985 29.4776L14.5819 28.3899C14.5819 28.3899 14.6307 29.5789 13.8192 30.0241C12.3872 30.8054 11.5985 29.4776 11.5985 29.4776Z" fill="white"/>
//   <path d="M9.51081 22.1965C9.51081 22.1965 10.6136 21.7795 11.1699 22.0992" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M14.3405 21.8714C14.3405 21.8714 15.4433 21.4544 15.9996 21.7741" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M18.6569 27.6238C18.6569 27.6238 16.987 32.9423 13.6053 33.1707C11.3252 33.3237 8.76983 31.2671 7.93035 26.2079C7.23962 22.0413 8.50529 19.1677 12.6137 18.9395C16.7197 18.7111 19.0428 21.0242 19.2544 22.4363C19.466 23.8485 19.1692 24.4778 19.1692 24.4778C19.1692 24.4778 19.8377 24.1093 20.5311 24.9077C21.2245 25.7062 19.7215 27.5688 19.7215 27.5688L19.3126 31.5278" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M19.92 24.9747C19.1905 25.0508 18.5246 24.55 18.3996 23.8273C18.2798 23.138 18.1227 22.3289 17.9594 21.8227C17.629 20.7948 16.7137 20.6488 14.0528 20.7418C11.392 20.8349 8.97477 20.5091 8.39133 22.0591C8.14046 22.7247 8.07308 26.9755 8.07308 26.9755C8.07308 26.9755 7.37313 25.0394 7.14259 23.172C6.91206 21.3047 7.2929 20.6762 7.35527 19.7907C7.36046 19.7171 6.76247 19.1931 6.48801 18.1666C6.18771 17.0363 6.2091 15.3932 6.2091 15.3932C6.2091 15.3932 7.98375 16.6962 10.7569 16.1674C11.1006 16.1024 11.5275 16.0152 12.0074 15.9342C14.3992 15.5341 18.163 15.2765 20.0523 18.3903C22.0355 21.656 20.5339 24.9108 20.5339 24.9108L19.92 24.9747Z" fill="white"/>
//   <path d="M19.8894 32.8282L21.3319 34.9722C21.3319 34.9722 19.1502 36.3713 17.0801 39.0455C15.0126 41.7199 11.7265 46.5982 10.9891 48.3439C10.2541 50.0897 9.76542 51.2001 9.76542 51.2001C9.76542 51.2001 11.7455 44.5546 12.9486 41.4114C14.1517 38.2681 19.8894 32.8282 19.8894 32.8282Z" fill="white"/>
//   <path d="M19.8891 32.8285C19.8977 32.7068 19.7081 31.3446 19.7081 31.3446L10.8534 39.2626C10.8534 39.2626 12.4568 43.1773 12.4248 43.0526C12.3928 42.928 19.8891 32.8285 19.8891 32.8285Z" fill="#161616" stroke="white" stroke-width="0.241431" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <circle cx="14.4859" cy="24.94" r="14.2445" stroke="white" stroke-width="0.482863"/>
//   </g>
//   <mask id="mask3_81_2" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="56" width="29" height="29">
//   <circle cx="26.5" cy="70.5" r="14.5" fill="#C4C4C4"/>
//   </mask>
//   <g mask="url(#mask3_81_2)">
//   <g filter="url(#filter15_f_81_2)">
//   <path d="M19.1357 106.61C26.393 105.147 31.0903 98.0782 29.6275 90.8209L27.4113 79.8262C25.9484 72.5689 18.8794 67.8716 11.6221 69.3345L0.704877 71.535C-6.5524 72.9979 -11.2497 80.067 -9.78686 87.3242L-7.57066 98.3189C-6.10781 105.576 0.961243 110.274 8.21852 108.811L19.1357 106.61Z" fill="url(#paint15_radial_81_2)"/>
//   <path d="M19.1357 106.61C26.393 105.147 31.0903 98.0782 29.6275 90.8209L27.4113 79.8262C25.9484 72.5689 18.8794 67.8716 11.6221 69.3345L0.704877 71.535C-6.5524 72.9979 -11.2497 80.067 -9.78686 87.3242L-7.57066 98.3189C-6.10781 105.576 0.961243 110.274 8.21852 108.811L19.1357 106.61Z" stroke="#00E29A" stroke-width="0.483333"/>
//   </g>
//   <g filter="url(#filter16_f_81_2)">
//   <rect width="35.2573" height="35.2163" rx="14.9252" transform="matrix(-0.318371 -0.947966 -0.947966 0.318371 30.614 112.659)" fill="url(#paint16_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter17_f_81_2)">
//   <path d="M41.8407 102.823C49.6451 98.1329 52.1694 88.0039 47.479 80.1996L38.6774 65.5546C33.987 57.7502 23.858 55.2258 16.0536 59.9162L2.83883 67.8583C-4.96551 72.5487 -7.48985 82.6777 -2.79945 90.482L6.00219 105.127C10.6926 112.931 20.8216 115.456 28.6259 110.765L41.8407 102.823Z" fill="url(#paint17_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter18_f_81_2)">
//   <rect width="51.2911" height="51.2315" rx="18.3568" transform="matrix(-0.318371 -0.947966 -0.947966 0.318371 51.5594 122.081)" fill="url(#paint18_radial_81_2)"/>
//   </g>
//   <g filter="url(#filter19_f_81_2)">
//   <path d="M-1.01989 108.411C6.56559 114.786 17.907 113.777 24.2821 106.191C30.6572 98.6056 29.7001 87.2597 22.1146 80.8846C14.5291 74.5094 3.18774 75.5192 -3.18739 83.1047C-9.56252 90.6902 -8.60538 102.036 -1.01989 108.411Z" fill="url(#paint19_angular_81_2)"/>
//   </g>
//   <path d="M29.0075 57.6564C29.0075 57.6564 30.6083 61.0964 30.8873 61.9361C31.1663 62.7758 31.1663 62.7758 31.1663 62.7758L29.9934 63.0656L31.857 65.7499C31.857 65.7499 31.0471 66.3756 31.1257 66.8551C31.2069 67.3345 29.6061 72.573 26.3665 74.6939C23.127 76.8121 18.9692 71.5735 18.5683 70.4955C18.1674 69.4147 17.8478 65.2163 18.6089 62.9762C19.37 60.7362 22.3685 57.2176 22.3685 57.2176L29.0075 57.6564Z" fill="#161616"/>
//   <path d="M30.2644 75.5225C30.2644 75.5225 33.8426 75.9695 35.7332 79.6478C37.6239 83.3262 40.4544 96.9508 40.4544 96.9508L41.0937 97.7878C41.0937 97.7878 38.9538 99.8816 39.3412 102.241C39.7285 104.6 40.2377 105.256 40.2377 105.256L37.4912 104.779L35.7414 110.667C35.7414 110.667 36.21 111.919 35.7928 112.49C35.3757 113.062 32.77 115.305 26.987 113.688C21.204 112.071 18.6497 110.873 18.6497 110.873L19.5869 119.419C19.5869 119.419 20.3155 119.939 20.3155 120.356C20.3155 120.773 20.627 124.056 20.627 124.056C20.627 124.056 19.3242 124.994 16.8755 125.462C14.4269 125.931 13.5412 125.931 13.5412 125.931C13.5412 125.931 11.7182 121.919 11.5611 121.399C11.404 120.879 10.4668 117.648 9.94675 115.982C9.42669 114.313 6.24671 103.164 6.30088 97.07C6.35235 90.9728 5.78083 85.9211 9.21812 81.0211C12.6581 76.1239 17.8154 73.7782 17.8154 73.7782L27.5504 75.9993L30.2644 75.5225Z" fill="#161616" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M29.7877 77.0314L30.0207 79.2633C30.0207 79.2633 28.6311 80.1057 28.6311 80.0434C28.6311 79.9811 26.1094 76.4436 26.1094 76.4436L28.4822 75.6201L29.7877 77.0314Z" fill="white"/>
//   <path d="M30.018 79.2628C30.018 79.2628 34.1921 89.293 35.4841 94.1172C36.7762 98.9413 38.3824 108.879 38.1332 109.773C37.884 110.667 34.3329 114.958 34.3329 114.958C34.3329 114.958 30.3837 109.974 30.1372 109.627C29.888 109.28 30.6139 99.9841 30.5652 95.114C30.5164 90.2438 28.6312 80.0457 28.6312 80.0457L30.018 79.2628Z" fill="white"/>
//   <path d="M29.6091 67.0556C30.5517 66.9093 31.8329 65.9667 31.8572 65.75C31.8816 65.5333 29.9937 63.0657 29.9937 63.0657L31.2505 62.7759C31.2505 62.7759 30.2646 59.2763 29.3111 58.1035" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M28.9075 63.3553C28.9075 63.3553 28.3766 63.0411 27.3364 63.4041C26.2963 63.767 26.0796 64.0325 26.0796 64.0325" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M27.9889 63.2578C27.9889 63.2578 28.3031 63.8862 27.458 64.2491C26.6102 64.6121 26.5939 63.8374 26.5939 63.8374" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M30.3349 57.6212C30.4541 58.0139 30.2374 58.878 28.7368 58.7588C27.2362 58.6369 25.5189 57.502 24.7469 58.469C23.9723 59.436 24.8715 61.7329 24.411 63.4746C23.9506 65.2163 22.8075 66.5571 24.2431 67.6026C24.8201 68.0251 22.1033 67.9683 22.1033 67.9683C22.1033 67.9683 21.6807 65.5061 20.4401 65.5061C19.5923 65.5061 19.1264 66.2456 19.0046 67.0202C18.8827 67.7949 19.5923 68.4802 19.6655 68.4558C19.7386 68.4314 19.0154 71.4299 17.8317 71.5518C16.6453 71.6737 15.0499 70.7284 15.4129 69.6666C15.7758 68.6021 16.5749 67.6107 16.4042 66.0153C16.2336 64.4199 15.5564 62.0959 16.5749 59.4847C17.5933 56.8736 18.4384 55.4461 20.2993 54.9369C22.1629 54.4277 24.6765 55.0344 24.6765 55.0344C24.6765 55.0344 25.8629 54.5252 27.2172 54.9856C28.5716 55.4461 29.8257 55.9283 30.3349 57.6212Z" fill="white"/>
//   <path d="M18.9638 71.1402L27.6505 75.8966L25.4565 79.8269L16.6317 74.3419L18.9638 71.1402Z" fill="#161616" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M29.9423 74.3521C29.9206 74.4794 28.5852 75.7877 28.5852 75.7877C28.5852 75.7877 31.3968 78.0386 31.3968 77.9763C31.3968 77.914 31.4591 75.0916 31.4591 75.0916L29.9423 74.3521Z" fill="#161616" stroke="white" stroke-width="0.241667" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M31.738 67.0793C31.738 67.0793 31.394 66.2722 31.0012 66.5051C30.8495 66.5945 31.1177 66.6053 30.8468 66.7028C30.7954 66.7218 31.329 67.4911 30.4947 67.8351C29.4112 68.2793 27.7075 68.4987 26.3288 68.1845C24.9501 67.8703 22.1818 66.6947 22.1818 66.6947C22.1818 66.6947 21.6726 70.3704 22.1575 71.4592C22.6423 72.5481 25.0611 75.2026 26.1527 75.6116C27.8754 76.2563 29.3652 75.7173 31.3967 75.0645C33.4282 74.4117 33.3307 72.3558 33.0652 70.8308C32.8025 69.3032 31.738 67.0793 31.738 67.0793Z" fill="white"/>
//   <path d="M31.478 69.0948C31.478 69.0948 30.9525 69.2736 30.1129 69.2573C29.2623 69.2411 28.4064 69.1436 28.4064 69.1436C28.4064 69.1436 28.8046 70.4058 30.1724 70.4248C31.264 70.4383 31.478 69.0948 31.478 69.0948Z" fill="#161616"/>
//   <path d="M25.4752 63.1347C25.4752 63.1347 27.9033 63.1588 30.1159 62.8725C32.3284 62.5862 33.0869 62.5777 33.0869 62.5777C33.0869 62.5777 33.1393 64.5807 32.4097 65.1509C31.6802 65.7211 31.4617 65.0155 31.0554 64.4738C30.6491 63.932 30.5137 63.1347 29.7522 63.3007C29.321 63.3007 29.7086 64.3689 28.7417 65.3649C27.7748 66.361 26.7056 66.4644 26.0348 65.863C25.0026 64.9391 25.4752 63.1347 25.4752 63.1347Z" stroke="white" stroke-width="0.241667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <path d="M25.3671 63.2552L21.3041 62.1718" stroke="white" stroke-width="0.241667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
//   <circle cx="26.5" cy="70.5" r="14.2583" stroke="white" stroke-width="0.483333"/>
//   </g>
//   <defs>
//   <filter id="filter0_f_81_2" x="35.08" y="60.819" width="85.3464" height="85.4146" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="8.22214" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter1_f_81_2" x="40.0768" y="80.6641" width="79.8639" height="79.8868" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="7.90824" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter2_f_81_2" x="40.872" y="42.243" width="104.011" height="103.961" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="9.02905" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter3_f_81_2" x="41.3032" y="68.0449" width="109.071" height="109.104" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="9.72647" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter4_f_81_2" x="35.4268" y="65.5331" width="90.2325" height="90.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="10.2712" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter5_f_81_2" x="32.281" y="21.632" width="49.1935" height="49.1798" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.18107" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter6_f_81_2" x="45.0266" y="20.9355" width="43.993" height="43.9921" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.05962" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter7_f_81_2" x="19.1034" y="7.4505" width="60.8258" height="61.2186" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.49326" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter8_f_81_2" x="34.6554" y="1.27093" width="63.6025" height="63.6012" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.76308" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter9_f_81_2" x="37.7359" y="20.5622" width="46.3714" height="46.3154" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.97382" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter10_f_81_2" x="-70.8959" y="-15.5516" width="75.6894" height="75.7369" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="4.97143" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter11_f_81_2" x="-65.1432" y="4.56051" width="68.5462" height="68.5615" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="4.78163" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter12_f_81_2" x="-66.4088" y="-34.6459" width="95.9754" height="95.9275" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="5.45932" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter13_f_81_2" x="-64.9781" y="-8.66741" width="98.8442" height="98.8666" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="5.88101" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter14_f_81_2" x="-66.5478" y="-6.98594" width="72.3883" height="72.4535" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="6.21036" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter15_f_81_2" x="-17.8021" y="61.3192" width="55.4448" height="55.5067" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.75333" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter16_f_81_2" x="-17.2438" y="75.987" width="51.1068" height="51.1326" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="3.61004" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter17_f_81_2" x="-13.401" y="49.3147" width="71.4816" height="72.0522" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="4.12168" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter18_f_81_2" x="-17.3319" y="69.4632" width="72.8873" height="72.9248" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="4.44004" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <filter id="filter19_f_81_2" x="-16.7817" y="67.3121" width="54.6581" height="54.6716" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
//   <feFlood flood-opacity="0" result="BackgroundImageFix"/>
//   <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
//   <feGaussianBlur stdDeviation="4.6887" result="effect1_foregroundBlur_81_2"/>
//   </filter>
//   <radialGradient id="paint0_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(83.2708 113.592) rotate(154.331) scale(113.097 113.333)">
//   <stop stop-color="#5AE9FD"/>
//   <stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint1_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(24.1361 24.108) rotate(90) scale(24.108 24.1361)">
//   <stop stop-color="#38FF70"/>
//   <stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
//   </radialGradient>
//   <radialGradient id="paint2_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(92.8773 94.2236) rotate(134.122) scale(33.1272 108.972)">
//   <stop stop-color="#6012C3"/>
//   <stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
//   </radialGradient>
//   <radialGradient id="paint3_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(55.9309 40.9775) rotate(151.133) scale(33.1302 33.1688)">
//   <stop stop-color="#FFF9C5"/>
//   <stop offset="0.755208" stop-color="#FF5C00"/>
//   <stop offset="1" stop-color="#FF451C"/>
//   </radialGradient>
//   <radialGradient id="paint4_angular_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(80.543 110.683) rotate(-154.827) scale(24.5641 24.8814)">
//   <stop stop-color="#FFF5CF"/>
//   <stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint5_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(62.3855 41.7329) rotate(53.8807) scale(70.0101 70.156)">
//   <stop stop-color="#5AE9FD"/>
//   <stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint6_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.9409 14.9235) rotate(90) scale(14.9235 14.9409)">
//   <stop stop-color="#38FF70"/>
//   <stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
//   </radialGradient>
//   <radialGradient id="paint7_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(49.5163 38.0598) rotate(33.672) scale(20.5066 67.4566)">
//   <stop stop-color="#6012C3"/>
//   <stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
//   </radialGradient>
//   <radialGradient id="paint8_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(34.6226 25.3661) rotate(151.133) scale(20.5084 20.5323)">
//   <stop stop-color="#FFF9C5"/>
//   <stop offset="0.8125" stop-color="#FF5C00"/>
//   <stop offset="1" stop-color="#F12E8C"/>
//   </radialGradient>
//   <radialGradient id="paint9_angular_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(60.9216 43.7199) rotate(104.723) scale(15.2058 15.4022)">
//   <stop stop-color="#FFF5CF"/>
//   <stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint10_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-27.7133 32.0543) rotate(154.331) scale(109.413 109.641)">
//   <stop stop-color="#5AE9FD"/>
//   <stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint11_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(23.3498 23.3227) rotate(90) scale(23.3227 23.3498)">
//   <stop stop-color="#38FF70"/>
//   <stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
//   </radialGradient>
//   <radialGradient id="paint12_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-18.4211 13.3178) rotate(134.122) scale(32.048 105.422)">
//   <stop stop-color="#6012C3"/>
//   <stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
//   </radialGradient>
//   <radialGradient id="paint13_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(54.1088 39.6426) rotate(151.133) scale(32.051 32.0883)">
//   <stop stop-color="#FFF9C5"/>
//   <stop offset="0.755208" stop-color="#FF5C00"/>
//   <stop offset="1" stop-color="#FF451C"/>
//   </radialGradient>
//   <radialGradient id="paint14_angular_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-30.3537 29.2408) rotate(-154.827) scale(23.7639 24.0708)">
//   <stop stop-color="#FFF5CF"/>
//   <stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint15_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11.9284 97.2122) rotate(169.203) scale(82.6047 82.7767)">
//   <stop stop-color="#5AE9FD"/>
//   <stop offset="1" stop-color="#5AE9FD" stop-opacity="0"/>
//   </radialGradient>
//   <radialGradient id="paint16_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.6287 17.6082) rotate(90) scale(17.6082 17.6287)">
//   <stop stop-color="#38FF70"/>
//   <stop offset="1" stop-color="#4AE074" stop-opacity="0.65"/>
//   </radialGradient>
//   <radialGradient id="paint17_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(22.3398 85.3408) rotate(148.994) scale(24.1956 79.5918)">
//   <stop stop-color="#6012C3"/>
//   <stop offset="1" stop-color="#9949FF" stop-opacity="0.37"/>
//   </radialGradient>
//   <radialGradient id="paint18_radial_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(40.8511 29.9293) rotate(151.133) scale(24.1978 24.226)">
//   <stop stop-color="#FFF9C5"/>
//   <stop offset="0.755208" stop-color="#FF5C00"/>
//   <stop offset="1" stop-color="#FF451C"/>
//   </radialGradient>
//   <radialGradient id="paint19_angular_81_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(10.5473 94.6479) rotate(-139.955) scale(17.9412 18.173)">
//   <stop stop-color="#FFF5CF"/>
//   <stop offset="1" stop-color="#FFD84B" stop-opacity="0"/>
//   </radialGradient>
//   </defs>
//   </svg>
//   `)
// }