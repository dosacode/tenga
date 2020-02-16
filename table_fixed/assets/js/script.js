

$(()=> {
  $('#bottomRightArea').scroll(function(e) {
    $('#bottomLeftArea').scrollTop($(this).scrollTop()); // 左下のDIVのスクロール位置を更新
    $('#topRightArea').scrollLeft($(this).scrollLeft()); // 右上のDIVのスクロール位置を更新
});
})