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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/header.js":
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*hamburger menu icon*/
$(document).ready(function () {
  $('.second-button').click(function () {
    $('.animated-icon2').toggleClass('open');
  });
});
/*hamburger menu icon*/

$(document).ready(function () {
  $('#sidebarCollapse, #sidebarCollapseMedia').click(function () {
    $('.animated-icon2').toggleClass('open');
  });
});
/*logout*/

$(document).ready(function () {
  $("#logout-link").click(function (event) {
    $("#logout-form").submit();
    event.preventDefault();
  });
});
/*phone mask*/

$(document).ready(function () {
  $.mask.definitions['9'] = false;
  $.mask.definitions['0'] = "[0-9]"; // $.mask.definitions['5'] = "[0-9]";

  $('input[name=phone]').on('focus', function () {
    $(this)[0].setSelectionRange(5, 5);
    return false;
  });
  $('input[name=phone]').mask('+994(00) 000-00-00');
});
/*logout*/

$(document).ready(function () {
  $('#sidebarCollapse').click(function () {
    $('#sidebar, #content').toggleClass('active');
    event.preventDefault();
  });
});
$(document).ready(function () {
  $('#sidebarCollapseMedia').click(function () {
    if ($('#sidebar').hasClass('active')) {
      $('#sidebar').removeClass('active');
    } else {
      $('#sidebar').addClass('active');
    }

    event.preventDefault();
  });
});
$(document).ready(function () {
  $("input[name=userimg]").change(function () {
    $(".user_edit_form").submit();
  });
}); //;

$(document).ready(function () {
  $('#navbarDropdown').click(function () {
    $('.nav-link.dropdown-toggle').toggleClass('open');
  });
}); //accordion

$(document).ready(function () {
  $('.cssmenu li.has-sub > a').click(function () {
    $(this).removeAttr('href');
    var element = $(this).parent('li');

    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp();
    } else {
      element.addClass('open');
      element.children('ul').slideDown();
      element.siblings('li').children('ul').slideUp();
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp();
    }
  });
  $('.cssmenu > ul > li.has-sub > a').append('<span class="holder"></span>');
});

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/header.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\openserver\domains\new\resources\js\header.js */"./resources/js/header.js");


/***/ })

/******/ });