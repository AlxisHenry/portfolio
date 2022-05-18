/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/burger-menu.js":
/*!************************************************!*\
  !*** ./resources/js/components/burger-menu.js ***!
  \************************************************/
/***/ ((module) => {

var ExtendsAnimationClass = '__element__navbar__extends__';
var ReverseExtendsAnimationClass = '__reverse__element__navbar__extends__';
var ExtendsNavbar = 'NavbarUpAnimation';
var ReverseExtendsNavbar = 'NavbarReverseAnimation';
var Button = document.querySelector('.burger-button');
var Navbar = document.querySelector('.burger-element');
var ElementToMoveDuringExtends = [document.querySelector('.__presentation__'), document.querySelector('.__about__card__'), document.querySelector('#__spoilerProjects'), document.querySelector('#__spoilerCards')];

var ButtonAction = function ButtonAction() {
  if (!Button || !Navbar) {
    return false;
  }

  Button.addEventListener('click', function (e) {
    Button.classList.toggle('is-active');

    if (Navbar.classList.length === 1) {
      Navbar.classList.add(ExtendsNavbar);
    } else {
      Navbar.classList.toggle(ReverseExtendsNavbar);
      Navbar.classList.toggle(ExtendsNavbar);
    }
  });
};

var NavbarAnimation = function NavbarAnimation() {
  if (!Button || !Navbar) {
    return false;
  }

  Button.addEventListener('click', function (e) {
    if (window.innerWidth > 1500) {
      if (Navbar.classList.contains(ExtendsNavbar)) {
        ElementToMoveDuringExtends.forEach(function (Element) {
          Element.classList.remove(ReverseExtendsAnimationClass);
          Element.classList.add(ExtendsAnimationClass);
        });
      } else {
        ElementToMoveDuringExtends.forEach(function (Element) {
          Element.classList.remove(ExtendsAnimationClass);
          Element.classList.add(ReverseExtendsAnimationClass);
        });
      }
    }
  });
};

var ResizeNavAnimation = function ResizeNavAnimation() {
  if (Moov_Presentation) {
    if (window.innerWidth <= 1500) {
      Moov_Presentation.classList.remove('moov_this_element_reverse');
      Moov_Presentation.classList.remove('moov_this_element');
    } else {
      if (burgerElement.classList.contains('NavbarUpAnimation')) {
        Moov_Presentation.classList.add('moov_this_element');
      }
    }
  }

  if (Moov_Article) {
    if (window.innerWidth <= 1500) {
      Moov_Article.classList.remove('moov-article-element');
      Moov_Article.classList.remove('reverse-moov-article-element');
    } else {
      if (burgerElement.classList.contains('NavbarUpAnimation')) {
        Moov_Article.classList.add('moov-article-element');
      }
    }
  }

  console.log(Mooov_About);

  if (Mooov_About) {}
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
  Button: ButtonAction,
  Animation: NavbarAnimation,
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