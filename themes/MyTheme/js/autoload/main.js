/**
 * Created by viller_m on 19/08/2015.
 */
$(function() {
    $(document).ready(function() {
        $('body').height($(document).height());
        $('body').width($(document).width());
        $('body').particleground();
    });

    $(window).resize(function() {
        $('body').height($(window).height());
        $('body').width($(window).width());
        $('body').particleground();
        console.log('rezise');
    });
});