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

  /**
  ** 見出しをフェードインさせる
  ** @textDataGet
  ** @return なし
  **/          

  function textDataGet () {

    //ここで空配列を定義
    var data = [];

    // jQueryのajaxでjsonデータを取得
    $.ajax({
      type: 'GET',
      // url: 'https://spla2.yuu26.com/gachi/now',
      url:'/assets/js/sample.json',
      dataType: 'json'
    })
    .then(

      // 最初にjsonデータが取ってこれたときの処理を
      function(json) {

        // for文で繰り返し処理。ここはJavaScriptでjQueryの構文ではない
        // JSONのresult直下の{},の数だけ繰り返し
        for(var i = 0; i < json.result.length; i++){

          // 配列にJSONデータを入れていく。
          //[i]は
          data.push({
            'stage': json.result[i].rule,
            'image': json.result[i].maps_ex[0].image
          })
        }
        
        // dataに入った配列のお数だけfor文で繰り返し処理。ここはJavaScriptでjQueryの構文ではない
        for(var i = 0; i < data.length; i++){
          console.log('今のスプラトゥーンのガチマッチは' + data[i]['stage'] + 'です。')
          console.log(data[i]['image'])
        }
      },

      // jsonが読み込めなかった時のエラー時の処理
      // urlを空にするなどするとこちらの処理に切り替わります。
      function() {
        console.log('読み込みに失敗しました');
      }
    )
   }
   textDataGet()
  
})