window.addEventListener('load',function() {

  function headerColorchange () {
    var
      element = document.getElementsByClassName('js-header-color-change')[0],
      addStyle = 'is-change'

    element.classList.add(addStyle)
  }

  headerColorchange()

})