if (document.body.classList.contains('category')) {

  const $container = document.getElementById('masonry-wrapper');

  if ($container) {
    let msnry = new Masonry($container, {
      // Masonry options...
      itemSelector: '.grid__item', // select none at first
      columnWidth: '.grid__col-sizer',
      gutter: '.grid__gutter-sizer',
      percentPosition: true,
      transitionDuration: '0.8s',
      stagger: '0.2s',
      visibleStyle: {transform: 'translateY(0)', opacity: 1},
      hiddenStyle: {transform: 'translateY(400px)', opacity: 0},
    });

    // init Infinite Scroll
    let infScroll = new InfiniteScroll($container, {
      // Infinite Scroll options...
      hideNav: '.navigation',
      path: '.navigation a', // selector for the NEXT link (to page 2)
      append: '.grid__item', // selector for all items you'll retrieve
      outlayer: msnry,
      history: false,
      status: '.page-load-status',
    });

    infScroll.on('append', function (response, path, items) {
      imagesLoaded($container, function (instance) {
        msnry.layout()
      });
    });
  }

}