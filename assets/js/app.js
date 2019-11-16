$(function () {

  /**
  ** 背景の色を変更する
  ** @backgroundColorchange
  ** @return 返り値はなし
  **/        

  function backgroundColorchange () {
     // 変数で要素を定義することで見通しをよくする
    var
      element = $('.js-bg-color-change'),
      addStyle = 'is-change'
    element.addClass(addStyle) 

    // 変数使わないと見通しが悪く下記のような例になる
    // $('.js-bg-color-change').addClass('is-change')
  }
  

  //即時関数で定義してここで実行
  backgroundColorchange()

  /**
  ** 見出しをフェードインさせる
  ** @headingFadeIn
  ** @return 返り値はなし
  **/         

  function headingFadeIn () {

    // 変数で要素を指定
    var
      headingelement = $('.js-heading-fadein'),
      timing = 'slow'

    // jQueryのfadeInというAPI機能を使ったフェードイン
    // slowやfast 数値での指定もできる
    headingelement.fadeIn(timing)
  }

  //即時関数で定義してここで実行
  headingFadeIn()


})