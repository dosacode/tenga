

$(()=> {
  const cell = $('.js-cell-fixed'),
  const secondCell = $('.is-second')
  cell.each(function(index) {
    const height = $(this).offset().top
    const left = $(this).offset().left
    $(this).css('top',height)
    $(this).css('left',left)
    console.log(height)
  });

  secondCell.each(function( ) {
    $(this).css('marginLeft', 0)
  })
})