//paginationとしてHTMLに出力される

jQuery(function ($) {
  $('.card-container--archive,.card--page').paginathing({//親要素のclassを記述
    pageNumbers: true,
    perPage: 3,//1ページあたりの表示件数
    firstText: '<i class="fas fa-angle-left"></i>',
    lastText: '<i class="fas fa-angle-right"></i>',
    prevText: '<i class="fas fa-angle-left"></i><span class=pagination-list__text>前へ</span>',
    nextText: '<span class=pagination-list__text>次へ</span><i class="fas fa-angle-right"></i>',
    activeClass: 'navi-current',
  })
});