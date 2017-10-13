/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(window).on('load resize', function () {
    height = $(window).height();
    $('.section').css('min-height', height);

    var buttonClicked = false;
    $('.arrow i:first-child').click(function (e) {
        if (buttonClicked) {
            e.preventDefault();
            return;
        }

        buttonClicked = true;
        slider('prev');

        setTimeout(function () {
            buttonClicked = false;
        }, 900);
    });

    $('.arrow i:last-child').click(function (e) {
        if (buttonClicked) {
            e.preventDefault();
            return;
        }

        buttonClicked = true;
        slider('next');

        setTimeout(function () {
            buttonClicked = false;
        }, 900);
    });
});
var globalCurrent = 1;
function slider(direction) {
    // Count all elem
    var numItems = $('.slider-wrap img').length;
    // Get current img
    var currentItem = $('.slider-wrap img.active');

    if (direction == 'next') {
        globalCurrent += 1;
    } else if (direction == 'prev') {
        globalCurrent -= 1;
    }

    if (globalCurrent < 1) {
        globalCurrent = numItems;
    } else if (globalCurrent > numItems) {
        globalCurrent = 1;
    }

    var currentId = '.slider-wrap #' + currentItem.attr('id');
    var nextId = '.slider-wrap #' + globalCurrent;

    if ($('.slider-wrap img.active').length >= 2) {
        $('.slider-wrap img').removeClass('active');
        $('.slider-wrap img:first-child').addClass('active');
    }

    $(currentId).fadeOut('slow');
    $(currentId).promise().done(function () {
        $(currentId).removeClass('active');
        $(nextId).addClass('active');

        $(nextId).css({
            'display': 'none'
        });
        $(nextId).fadeIn(400);
    });
}

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);