var ChartCtrl = require("./controllers/ChartCtrl");
var DatatablesCtrl = require("./controllers/DatatablesCtrl");

/**
 * Chart Color
 */
var Chart = require('chart.js');
var $ = require( 'jquery' );
require("bootstrap");

Chart.defaults.global.defaultFontFamily = "'Ubuntu', sans-serif";

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};


var SmartAdminController = (function(){
    var app, minimizeBtn, body, wrapperMenu;

    app = {};

    minimizeBtn = document.getElementById("menuToggler");
    body = document.body;

    wrapperMenu = document.querySelector('.wrapper-menu');

    

    function addEvent(evnt, elem, func) {
        if (elem.addEventListener) // W3C DOM
            elem.addEventListener(evnt, func, false);
        else if (elem.attachEvent) { // IE DOM
            elem.attachEvent("on" + evnt, func);
        } else { // No much to do
            elem[evnt] = func;
        }
    }
    /**
     * ClassToggler method
     * @param {*} ele 
     * @param {*} className 
     */
    function classToggler(ele, className){
        if (ele.classList) {
            ele.classList.toggle(className);
        } else {
            var classes = ele.className.split(" ");
            var i = classes.indexOf(className);
    
            if (i >= 0)
                classes.splice(i, 1);
            else
                classes.push(className);
            ele.className = classes.join(" ");
        }  
    }

    function openNav(){
        classToggler(body, "nav-open");
        classToggler(wrapperMenu, "open");
    }

    function toggleMinimize() {
        classToggler(body, "minimize");
    }

    app.init = function(){
        addEvent("click", minimizeBtn, toggleMinimize);
        addEvent("click", wrapperMenu, openNav);

        ChartCtrl.init();
        DatatablesCtrl.init();
    };

    return app;
})();

var domReady = function (callback) {
    document.readyState === "interactive" || document.readyState === "complete" ? callback() : document.addEventListener("DOMContentLoaded", callback);
};

domReady(function () {
    SmartAdminController.init();
});

