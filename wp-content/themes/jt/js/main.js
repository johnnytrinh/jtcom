$(function() {

    var container = document.querySelector('#container');
    var msnry = new Masonry( container, {
        columnWidth: '.col-33',
        itemSelector: '.grid-item',
        isFitWidth: true,
        isResizeBound:true

    });

});

