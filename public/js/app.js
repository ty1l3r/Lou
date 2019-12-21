/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');

const $ = require('jquery');
global.$ = global.jQuery = $;
/* require('./modernizr.custom.63321.js'); 
require('./jquery.menu.js');    */


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.


require('popper.js');
require('./bootstrap.min.js');
/* require('./jquery.dropdown.js'); */
/* require('./lightbox.min.js'); */


console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
