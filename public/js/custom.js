$(document).ready(function(){
  $('a.nav-link[href*="#"]').on('click', function(event) {
      var targetID = this.href.split("#")[1];
      var target = $('#' + targetID);
      if (target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
          scrollTop: target.offset().top
      }, 1500); // Adjust the duration here (1000ms = 1s)
      }
  });
});


let elmID = document.getElementsByTagName('section');
let util = {
  mobileMenu() {
    $('#nav').toggleClass('nav-visible');
  },
  windowResize() {
    if ($(window).width() > 800) {
      $('#nav').removeClass('nav-visible');
    }
  },
  scrollEvent() {
    let HeaderHeight = document.getElementById('sticky_header').offsetHeight;
    let scrollPosition = $(document).scrollTop();
    let scrollMenuIds = $('a.nav-link[href]');
    for (var i = 0; i < scrollMenuIds.length; i++) {
      let link = scrollMenuIds[i];
      let container = $(link).attr('href');
      console.log('link item', container);
      containerOffset = $(container)?.offset()?.top;
      containerHeight = $(container).outerHeight();
      containerBottom = Math.round(containerOffset + containerHeight);
      if (
        scrollPosition < containerBottom - HeaderHeight &&
        scrollPosition >= containerOffset - HeaderHeight
      ) {
        $(link).addClass('active');
        $(container).offset() - 200;
        console.log('container offset value', $(container).offset());
      } else {
        $(link).removeClass('active');
        $(container).scrollTop();
      }
    }

    stickyHeader();
    // getAllElmId(elmID);
  },
};

$(document).ready(function () {
  $('#menu').click(util.mobileMenu);
  $(window).resize(util.windowResize);
  // $(document).scroll(util.scrollEvent);
});

function stickyHeader() {
  let TopHeader = document.getElementById('sticky_header');
  if (window.pageYOffset > 250) {
    TopHeader.classList.add('sticky');
  } else {
    TopHeader.classList.remove('sticky');
  }
}

// function getAllElmId(itemId) {
//   for (var i = 0; i < elmID.length; i++) {
//     console.log('clicked Tab', itemId[i].id);
//     if (itemId[i].id === 'vision') {
//       document.getElementById(itemId[i].id).classList.add('elm_p_top');
//       console.log('class added');
//     } else if (itemId[i].id === 'services') {
//       document.getElementById(itemId[i].id).classList.add('elm_p_top');
//       console.log('class added');
//     } else if (itemId[i].id === 'portfolio') {
//       document.getElementById(itemId[i].id).classList.add('elm_p_top');
//       console.log('class added');
//     } else if (itemId[i].id === 'join') {
//       document.getElementById(itemId[i].id).classList.add('elm_p_top');
//       console.log('class added');
//     } else if (itemId[i].id === 'faq') {
//       document.getElementById(itemId[i].id).classList.add('elm_p_top');
//       console.log('class added');
//     }

//     else {
//       document.getElementById(itemId[i].id).classList.remove('elm_p_top');
//       console.log('class remove');
//     }
//   }
// }

function elementInViewport2(el) {
  let rect = el.getBoundingClientRect(),
    vWidth = window.innerWidth || document.documentElement.clientWidth,
    vHeight = window.innerHeight || document.documentElement.clientHeight,
    efp = function (x, y) {
      return document.elementFromPoint(x, y);
    };

  // Return false if it's not in the viewport
  if (
    rect.right < 0 ||
    rect.bottom < 0 ||
    rect.left > vWidth ||
    rect.top > vHeight
  )
    return false;

  // Return true if any of its four corners are visible
  return (
    el.contains(efp(rect.left, rect.top)) ||
    el.contains(efp(rect.right, rect.top)) ||
    el.contains(efp(rect.right, rect.bottom)) ||
    el.contains(efp(rect.left, rect.bottom))
  );
}

function responsiveMenu() {
  const hamburger1 = document.getElementById('burger-menu1');
  const hamburger2 = document.getElementById('burger-menu2');
  const navMenu = document.getElementById('nav_menu');
  const navOverlay = document.getElementById('overlay');
  const closeMenu = document.getElementById('close-menu');

  hamburger1.addEventListener('click', () => {
    // hamburger1.classList.toggle('is-active');
    navMenu.classList.add('open-nav');
    navOverlay.classList.add('open_overlay');
  });

  hamburger2.addEventListener('click', () => {
    // hamburger2.classList.toggle('is-active');
    navMenu.classList.add('open-nav');
    navOverlay.classList.add('open_overlay');
  });

  closeMenu.addEventListener('click', () => {
    hamburger1.classList.remove('is-active');
    hamburger2.classList.remove('is-active');
    navMenu.classList.remove('open-nav');
    navOverlay.classList.remove('open_overlay');
  });

  document.querySelectorAll('.nav-link').forEach((link) =>
    link.addEventListener('click', () => {
      hamburger1.classList.remove('is-active');
      hamburger2.classList.remove('is-active');
      navMenu.classList.remove('open-nav');
      navOverlay.classList.remove('open_overlay');
    })
  );
}

// responsiveMenu();

$(document).ready(function () {
  $('.developer-list').isotope({
    itemSelector: '.team-col-item',
  });

  // filter items on button click
  $('.filter-tag-blk').on('click', '.type-tag', function () {
    // console.log('tab click');
    var filterValue = $(this).attr('data-filter');
    $('.developer-list').isotope({ filter: filterValue });
    $('.filter-tag-blk .type-tag').removeClass('selected-tag');
    $(this).addClass('selected-tag');
  });

  $('.faq-content-blk').hide();
  $('.faqs-list-blk > .faq-dtl-box:eq(0) .faq-title-blk')
    .addClass('active-tab')
    .next()
    .slideDown();

  $('.faqs-list-blk .faq-title-blk').click(function (j) {
    let dropContent = $(this).closest('.faq-dtl-box').find('.faq-content-blk');

    $(this)
      .closest('.faqs-list-blk')
      .find('.faq-content-blk')
      .not(dropContent)
      .slideUp();

    if ($(this).hasClass('active-tab')) {
      $(this).removeClass('active-tab');
    } else {
      $(this)
        .closest('.faqs-list-blk')
        .find('.faq-title-blk.active-tab')
        .removeClass('active-tab');
      $(this).addClass('active-tab');
    }

    dropContent.stop(false, true).slideToggle();

    j.preventDefault();
  });

  // $('.info-txt-blk').hide();
  $('.location-list > .location-txt-blk:eq(0) .location-title')
    .addClass('active-title')
    .next()
    .slideDown();

  $('.location-list .location-title').click(function (j) {
    let dropContent = $(this)
      .closest('.location-txt-blk')
      .find('.info-txt-blk');
    $(this)
      .closest('.location-list')
      .find('.info-txt-blk')
      .not(dropContent)
      .slideUp();

    if ($(this).hasClass('active-title')) {
      $(this).removeClass('active-title');
    } else {
      $(this)
        .closest('.location-list')
        .find('.location-title.active-title')
        .removeClass('active-title');
      $(this).addClass('active-title');
    }

    dropContent.stop(false, true).slideToggle();

    j.preventDefault();
  });
});

function joinUsModal() {
  document.body.classList.add('mdl_body');
}

function closeJoinUsModal() {
  document.body.classList.remove('mdl_body');
}
