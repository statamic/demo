/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./resources/js/cp.js ***!
  \****************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

document.addEventListener("DOMContentLoaded", function (event) {
  var _welcome$classList;

  // Pre-populate login creds
  document.querySelector('.outside #input-email').value = "david.hasselhoff@example.com";
  document.querySelector('.outside #input-password').value = "secretsecrets"; // Add welcome message

  var welcome = document.createElement('div');

  (_welcome$classList = welcome.classList).add.apply(_welcome$classList, _toConsumableArray("max-w-sm mx-auto mb-4 text-center text-xs border border-yellow-dark rounded p-4 bg-yellow dark:bg-dark-blue-100 dark:border-none".split(' ')));

  welcome.innerHTML = "\n        <p class=\"mb-4\">\uD83D\uDC4B Welcome to the Statamic Demo.</p>\n        <p class=\"mb-4\">Feel free to log in using the provided account, take a look around, and see how your actions are reflected on the front-end.</p>\n        <p>Every 30 minutes everything will be reverted to a clean slate.</p>\n    ";
  document.querySelector('.logo').insertAdjacentElement('afterend', welcome);
});
/******/ })()
;