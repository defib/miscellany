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
/******/ 	return __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/timeline.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/timeline.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var validTimelineForm = false;
var eraForm;
$(document).ready(function () {
  initTimelineForms();
  $(document).on('shown.bs.modal shown.bs.popover', function () {
    initTimelineForms();
  });
});
/**
 *
 */

function initTimelineForms() {
  eraForm = $('#timeline-era-form');

  if (eraForm.length === 0) {
    return;
  }

  eraForm.on('submit', function (e) {
    if (validTimelineForm) {
      return true;
    }

    window.entityFormHasUnsavedChanges = false;
    e.preventDefault();
    var submitBtn = $(this).find('.btn-success');
    submitBtn.data('reset', submitBtn.html()).html('<i class="fa fa-spinner fa-spin"></i>').prop('disabled', true); // Allow ajax requests to use the X_CSRF_TOKEN for deletes

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: $(this).attr('action'),
      method: $(this).attr('method'),
      data: $(this).serialize()
    }).done(function (res) {
      // If the validation succeeded, we can really submit the form
      validTimelineForm = true;
      eraForm.submit();
      return true;
    }).fail(function (err) {
      //console.log('error', err);
      // Reset any error fields
      eraForm.find('.input-error').removeClass('input-error');
      eraForm.find('.text-danger').remove(); // If we have a 503 error status, let's assume it's from cloudflare and help the user
      // properly save their data.

      if (err.status === 503) {
        $('#entity-form-503-error').show();
        resetFormSubmitAnimation();
      } // If it's 403, the session is gone


      if (err.status === 403) {
        $('#entity-form-403-error').show();
        resetFormSubmitAnimation();
      } // Loop through the errors to add the class and error message


      var errors = err.responseJSON.errors;
      var errorKeys = Object.keys(errors);
      var foundAllErrors = true;
      errorKeys.forEach(function (i) {
        var errorSelector = $('[name="' + i + '"]'); //console.log('error field', '[name="' + i + '"]');

        if (errorSelector.length > 0) {
          eraForm.find('[name="' + i + '"]').addClass('input-error').parent().append('<div class="text-danger">' + errors[i][0] + '</div>');
        } else {
          foundAllErrors = false;
        }
      });
      var firstItem = Object.keys(errors)[0];
      var firstItemDom = eraForm.find('[name="' + firstItem + '"]'); // If we can actually find the first element, switch to it and the correct tab.

      if (firstItemDom.length > 0) {
        firstItemDom.focus();
      } // Reset submit buttons


      resetFormSubmitAnimation();
    });
  });
}
/**
 *
 */


function resetFormSubmitAnimation() {
  var submitBtn = eraForm.find('.btn-success');

  if (submitBtn.length > 0) {
    $.each(submitBtn, function () {
      $(this).removeAttr('disabled');

      if ($(this).data('reset')) {
        $(this).html($(this).data('reset'));
      }
    });
  }
}

/***/ }),

/***/ 19:
/*!********************************************!*\
  !*** multi ./resources/assets/js/timeline ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jay/Documents/GitHub/miscellany/resources/assets/js/timeline */"./resources/assets/js/timeline.js");


/***/ })

/******/ });