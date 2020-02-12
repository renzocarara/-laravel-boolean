require('./bootstrap');

var $ = require('jquery');

require('../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');

// abilito Boostrap tooltip
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

// abilito Boostrap Popover
$(function() {
    $('[data-toggle="popover"]').popover();
});


$(document).ready(function() {

    // accordion delle FAQ
    // catturo click sulla domanda
    $('#faq-section button').click(function() {
        console.log("intercettato");
        // invoco funzione per fare un toggle tra '+' e '-'
        togglePlusMinusIcon($(this));
    });

});

// ---------------------------- FUNCTIONs --------------------------------------
function togglePlusMinusIcon(that) {

    // mi ricavo il riferimento all'icona associata a quella domanda
    var iconReference = $(that).children();

    // ricavo l'id dell'accordion (left o right) al quale appartiene la domanda cliccata
    var whichAccordion = $(that).closest('.accordion').attr('id');

    // verifco che icona ('+ o '-') è visualizzata al momento del click
    if ($(iconReference).hasClass('fa-plus')) {
        // ripristino il '+' su una eventuale altra domanda aperta
        $('#' + whichAccordion + ' button i').removeClass('fa-minus').addClass('fa-plus');

        // cambio icona da + a - sulla domanda cliccata
        $(iconReference).addClass('fa-minus').removeClass('fa-plus');
    } else {
        // cambio icona da - a +
        $(iconReference).removeClass('fa-minus').addClass('fa-plus');
    }
}