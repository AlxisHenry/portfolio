/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/burger-menu.js":
/*!************************************************!*\
  !*** ./resources/js/components/burger-menu.js ***!
  \************************************************/
/***/ ((module) => {

var burgerButton = document.querySelector('.burger-button');
var burgerElement = document.querySelector('.burger-element');
var burgerMouvement = document.querySelector('.__presentation__');
var ArticleElement = document.querySelector('.__target__article__');

var toggleNav = function toggleNav() {
  if (burgerButton) {
    burgerButton.addEventListener('click', function (e) {
      burgerButton.classList.toggle('is-active');

      if (burgerElement) {
        if (!burgerElement.classList.contains('NavbarUpAnimation')) {
          burgerElement.classList.remove('NavbarReverseAnimation');
          burgerElement.classList.add('NavbarUpAnimation');

          if (burgerMouvement) {
            if (window.innerWidth <= 1500) {} else {
              burgerMouvement.classList.remove('moov_this_element_reverse');
              burgerMouvement.classList.add('moov_this_element');
            }
          }

          if (ArticleElement) {
            if (window.innerWidth <= 1500) {} else {
              ArticleElement.classList.remove('reverse-moov-article-element');
              ArticleElement.classList.add('moov-article-element');
            }
          }
        } else {
          burgerElement.classList.add('NavbarReverseAnimation');
          burgerElement.classList.remove('NavbarUpAnimation');

          if (burgerMouvement) {
            if (window.innerWidth <= 1500) {} else {
              burgerMouvement.classList.remove('moov_this_element');
              burgerMouvement.classList.add('moov_this_element_reverse');
            }
          }

          if (ArticleElement) {
            if (window.innerWidth <= 1500) {} else {
              ArticleElement.classList.add('reverse-moov-article-element');
              ArticleElement.classList.remove('moov-article-element');
            }
          }
        }
      }

      e.preventDefault();
    }, false);
  }
};

var ResizeNavAnimation = function ResizeNavAnimation() {
  if (burgerMouvement) {
    if (window.innerWidth <= 1500) {
      burgerMouvement.classList.remove('moov_this_element_reverse');
      burgerMouvement.classList.remove('moov_this_element');
    } else {
      if (burgerElement.classList.contains('NavbarUpAnimation')) {
        burgerMouvement.classList.add('moov_this_element');
      }
    }
  }

  if (ArticleElement) {
    if (window.innerWidth <= 1500) {
      ArticleElement.classList.remove('moov-article-element');
      ArticleElement.classList.remove('reverse-moov-article-element');
    } else {
      if (burgerElement.classList.contains('NavbarUpAnimation')) {
        ArticleElement.classList.add('moov-article-element');
      }
    }
  }
};

var HoverNavbarMenu = function HoverNavbarMenu() {
  var NavTitle = document.querySelectorAll('.burger-element a:not(.nav-active)');

  if (NavTitle) {
    NavTitle.forEach(function (__NavTitle) {
      return __NavTitle.addEventListener('mouseover', function () {
        var LoadingBar = __NavTitle.children[0].children[1];
        LoadingBar.classList.remove('loading__navbar_animation_down');
        LoadingBar.classList.add('loading__navbar_animation_up');
      });
    });
    NavTitle.forEach(function (__NavTitle) {
      return __NavTitle.addEventListener('mouseout', function () {
        var LoadingBar = __NavTitle.children[0].children[1];
        LoadingBar.classList.add('loading__navbar_animation_down');
      });
    });
  }
};

module.exports = {
  Burger: toggleNav,
  Resize: ResizeNavAnimation,
  Hover: HoverNavbarMenu
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/components/burger-menu.js");
/******/ 	
/******/ })()
;