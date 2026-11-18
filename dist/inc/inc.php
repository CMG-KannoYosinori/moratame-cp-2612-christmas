<i id="area0"></i>
<section class="area0">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">背景見本</h3>
  <style>
    .container {
      padding: 1em;
      font-size: 2rem;
    }

    .tab_btn {
      display: flex;
      align-items: stretch;
      justify-content: flex-start;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .tab_btn li {
      font-weight: bold;
      padding: 1em;
      border: 2px solid #000;
      border-bottom: none;
      cursor: pointer;
    }

    /*クラスに「active」が付与されたときの指定*/
    .tab_btn li.active {
      background: #ccc;
    }

    .content_list {
      padding: 1em;
      border: 2px solid #000;
    }

    /*通常時は「display: none;」で非表示にしておく*/
    .content_list>li {
      display: none;
    }

    .content_list>li p {
      background: #ccc;
      padding: 1em;
      margin: 0.5em 0;
    }

    /*クラスに「active」が付与されたとき「display: block;」で表示する*/
    .content_list>li.active {
      display: block;
    }
  </style>
  <script>
    $(function() {
      var tab = $('.tab_btn > li'),
        content = $('.content_list > li');
      tab.on('click', function() {
        //何番目のメニューがクリックされたのか、番号を取得する
        var idx = tab.index($(this));
        //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
        tab.removeClass("active").eq(idx).addClass("active");
        //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
        content.removeClass("active").eq(idx).addClass("active");
      });
    });
  </script>
  <div class="container">
    <ul class="tab_btn">
      <li>背景の動いてるやつ</li>
      <li>映画風味</li>
      <li>グラデ＋◇</li>
      <li class="active">無し</li>
    </ul>
    <ul class="content_list">
      <li class="active">
        <!-- ▼ 背景の動いてるやつ ▼ -->
        <div class="area">
          <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <style>
        /* 
        =================================================================================

        ▼▼▼　背景の動いてるやつ　▼▼▼

        =================================================================================
        */
        .area{
        background: #4e54c8;  
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
        width: 100%;
        height:100vh;
        position: fixed;
        z-index: -10;
        top: 0;
        left: 0;
        pointer-events: none;
        }
        .circles{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        }
        .circles li{
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;

        }
        .circles li:nth-child(1){
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
        }
        .circles li:nth-child(2){
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
        }
        .circles li:nth-child(3){
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
        }
        .circles li:nth-child(4){
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
        }

        .circles li:nth-child(5){
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
        }
        .circles li:nth-child(6){
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
        }
        .circles li:nth-child(7){
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
        }
        .circles li:nth-child(8){
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
        }
        .circles li:nth-child(9){
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
        }
        .circles li:nth-child(10){
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
        }
        @keyframes animate {
        0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
        }
        100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
        }
        }
        /* ▲ 背景の動いてるやつ ▲ */
        </style>
        <!-- ▲ 背景の動いてるやつ ▲ -->
      </li>
      <li>
        <!-- ▼ 映画風味 ▼ -->
        <div class='outer-scratch'>
          <div class="inner-scratch">
            <div class="background grain"></div>
          </div>
        </div>
        <style>
        /* 
        =================================================================================

        ▼▼▼　映画風味　▼▼▼

        =================================================================================
        */
        .background {
        width: 100%;
        height: 100%;
        background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
        background-size: cover;
        }
        .outer-scratch, .inner-scratch {
        height: inherit;
        }
        .outer-scratch {
        width: 100%;
        height:100vh;
        position: fixed;
        z-index: -10;
        top: 0;
        left: 0;
        pointer-events: none;
        }
        .outer-scratch:after, .inner-scratch:after {
        content: '';
        width: 120%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding-left: 100px;
        opacity: .08;
        background: url('img/scratch.png') repeat center center;
        -webkit-animation: scratch 0.45s steps(1) infinite;
        animation: scratch 0.45s steps(1) infinite;
        }
        .inner-scratch:after {
        left: 30%;
        -webkit-animation: inner-scratch 2s infinite;
        animation: inner-scratch 2s infinite;
        }
        .grain:after {
        content: '';
        width: 110%;
        height: 110%;
        position: absolute;
        top: -5%;
        left: -5%;
        opacity: .11;
        background: url('img/grain.jpg') repeat center center;
        -webkit-animation: grain 0.5s steps(1) infinite;
        animation: grain 0.5s steps(1) infinite;
        }
        /* Film Animations */
        @keyframes grain {
        0%, 100% {
        transform: translate(0, 0, 0);
        }
        10% {
        transform: translate(-1%, -1%);
        }
        20% {
        transform: translate(1%, 1%);
        }
        30% {
        transform: translate(-2%, -2%);
        }
        40% {
        transform: translate(3%, 3%);
        }
        50% {
        transform: translate(-3%, -3%);
        }
        60% {
        transform: translate(4%, 4%);
        }
        70% {
        transform: translate(-4%, -4%);
        }
        80% {
        transform: translate(2%, 2%);
        }
        90% {
        transform: translate(-3%, -3%);
        }
        }
        @keyframes scratch {
        0%, 100% {
        transform: translateX(0);
        opacity: 0.075;
        }
        10% {
        transform: translateX(-1%);
        }
        20% {
        transform: translateX(1%);
        }
        30% {
        transform: translateX(-2%);
        opacity: 0.09;
        }
        40% {
        transform: translateX(3%);
        }
        50% {
        transform: translateX(-3%);
        opacity: 0.05;
        }
        60% {
        transform: translateX(8%);
        }
        70% {
        transform: translateX(-3%);
        }
        80% {
        transform: translateX(10%);
        opacity: 0.02;
        }
        90% {
        transform: translateX(-2%);
        }
        }
        @keyframes inner-scratch {
        0% {
        transform: translateX(0);
        opacity: 0.08;
        }
        10% {
        transform: translateX(-1%);
        }
        20% {
        transform: translateX(1%);
        }
        30% {
        transform: translateX(-2%);
        }
        40% {
        transform: translateX(3%);
        }
        50% {
        transform: translateX(-3%);
        opacity: 0.06;
        }
        60% {
        transform: translateX(8%);
        }
        70% {
        transform: translateX(-3%);
        }
        80% {
        transform: translateX(10%);
        opacity: 0.03;
        }
        90% {
        transform: translateX(20%);
        }
        100% {
        transform: translateX(30%);
        }
        }


        /* Simple Title Animation */
        @keyframes draw {
        0% {
        width: 0%;
        }

        100% {
        width: 110%;
        }
        }


        @keyframes draw-bottom {
        0% {
        width: 0%;
        }

        100% {
        width: 100%;
        }
        }


        @keyframes fade {
        0% {
        opacity: 0;
        }

        100% {
        opacity: 1;
        }
        }
        /* ▲ 映画風味 ▲ */
        </style>
        <!-- ▲ 映画風味 ▲ -->
      </li>
      <li>
        <!-- ▼ グラデ＋◇ ▼ -->
        <div class='back-box'>
          <div class="back-box-in">
          </div>
        </div>
        <style>
        /* 
        =================================================================================

        ▼▼▼　グラデ＋◇　▼▼▼

        =================================================================================
        */
        .back-box{
        background: #4e54c8;  
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
        width: 100%;
        height:100vh;
        position: fixed;
        z-index: -10;
        top: 0;
        left: 0;
        pointer-events: none;
        }
        .back-box-in {
        position: relative;
        width: 100%;
        height: 100%;
        background: radial-gradient(ellipse at center,  #ffffff 0%,#c5e2f1 50%,#ffffff 100%);
        background-size: 200% 200%;/*ã‚µã‚¤ã‚ºã‚’å¤§ããã²ãã®ã°ã™*/
        animation: bggradient 20s ease infinite;
        }
        @keyframes bggradient{
          0% {
          background-position: 0% 50%;
          }
          50% {
          background-position: 100% 50%;
          }
          100% {
          background-position: 0% 50%;
          }
        }
        /* ◇アニメ */
        :root {
          --daiya-size: 70rem; /* ダイヤサイズ */
        }
        .back-box-in:before {
          content: "";
          width: var(--daiya-size);
          height: var(--daiya-size);
          display: block;
          background: rgba(127,103,171,0.15);
          transform: rotate(45deg);
          position: absolute;
          top: -10rem;
          left: calc(var(--daiya-size) * -0.5);
          animation: bg_box 10s linear infinite;
          pointer-events: none;
          transform-origin:50% 50%;
          z-index: 0;
        }
        .back-box-in:after {
          content: "";
          width: var(--daiya-size);
          height: var(--daiya-size);
          display: block;
          background: rgba(127,103,171,0.15);
          transform: rotate(45deg);
          position: absolute;
          bottom: -10rem;
          right: calc(var(--daiya-size) * -0.5);
          animation: bg_box 10s linear infinite;
          pointer-events: none;
          transform-origin:50% 50%;
          z-index: 0;
        }
        @keyframes bg_box {
          0% { 
            transform: rotate(45deg);
            border-radius: 0;
          }
          50% { 
            transform: rotate(135deg);
            border-radius: 50%;
          }
          100% { 
            transform: rotate(225deg);
            border-radius: 0;
          }
        }
        /* ▲ グラデ＋◇ ▲ */
        </style>
        <!-- ▲ グラデ＋◇ ▲ -->
      </li>
      <li>
        <!-- ▼ 無し ▼ -->
        <!-- ▲ 無し ▲ -->
      </li>
    </ul>
  </div>
</div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ スクロール表示 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area1"></i>
<section class="area1">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">スクロール表示</h3>
  <div class="scroll" data-simplebar data-simplebar-auto-hide="false">
    <table class="default02 fs18 b">
      <tr>
        <th>厚手マット紙</th>
        <th>1〜4枚</th>
        <th>5〜9枚</th>
        <th>10〜19枚</th>
        <th>20枚以上</th>
      </tr>
      <tr>
        <th>B2/A1</th>
        <td>@1,800円（税込）〜</td>
        <td>@1,680円（税込）〜</td>
        <td>@1,560円（税込）〜</td>
        <td>@1,440円（税込）〜</td>
      </tr>
      <tr>
        <th>B1/A0</th>
        <td>@3,360円（税込）〜</td>
        <td>@3,240円（税込）〜</td>
        <td>@3,120円（税込）〜</td>
        <td>@3,000円（税込）〜</td>
      </tr>
    </table>
  </div>
  <!-- ▼ スクロール表示 ▼ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.css"/>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js"></script>
  <!-- ▲ スクロール表示 ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　スクロール表示　▼▼▼

    =================================================================================
    */
    /* 仮テーブル */
    table.default02 {
      width: 100%;
      background: #fff;
      border-spacing: 2px;
      table-layout: fixed;
      border-collapse: separate;
      filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.3));
    }
    table.default02 tr:nth-child(2n-1) td {
      background: #E4F2E9;
    }
    table.default02 th {
      background: #333;
      color: #fff;
      padding: 0.5em;
      text-align: center;
      width: 100%;
    }
    table.default02 td {
      padding: 0.5em;
      text-align: center;
      width: 100%;
    }
    /* スクロールテーブル用設定 */
    .scroll table {
      width: auto;
    }
    .scroll table th,
    .scroll table td {
      padding: 0.5em 1em;
      white-space: nowrap;
      table-layout: auto;
    }
    
    /* スクロール */
    .scroll {
      /* 横用設定 */
      width: 100%;
      overflow-x: scroll;
      padding-bottom: 2em;

      /* 縦用設定 */
      /* height: 20rem;
      overflow-y: scroll;
      padding-right: 2em; */
    }
    .scroll * {
      /* 子要素の文字を貫通させるため自動改行を阻止。不要なら削除 */
      overflow-wrap: break-word;
      word-wrap: break-word;
      white-space: normal;
    }
    .scroll .simplebar-track.simplebar-vertical .simplebar-scrollbar {
      border-radius: 50vmin;
    }
    .scroll .simplebar-scrollbar {
      border-radius: 50vmin;
    }
    .scroll .simplebar-scrollbar::before {
      background: #000;
      border-radius: 50vmin;
    }
    .scroll .simplebar-track {
      background: #ddd;
      border-radius: 50vmin;
    }
    /* 横用 */
    .scroll .simplebar-track.simplebar-horizontal {
      height: 1em;
    }
    .scroll .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
      height: 1em;
      min-width: 1em;
      top: 0;
    }
    .scroll .simplebar-track.simplebar-horizontal .simplebar-scrollbar::before {
      right: 2px;
      bottom: 2px;
      top: 2px;
      left: 2px;
      height: auto;
    }
    /* 縦用 */
    .scroll .simplebar-track.simplebar-vertical {
      width: 1em;
    }
    .scroll .simplebar-track.simplebar-vertical .simplebar-scrollbar {
      width: 1em;
      min-height: 1em;
    }
    /* ▲ スクロール表示 ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ SLICK ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area2"></i>
<section class="area2">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">slick</h3>
  <p class="fs20 mb20">※本体は必須なので忘れずに</p>
  <!-- ▼ slick本体 ▼ -->
  <link rel="stylesheet" href="css/slick.css" />
  <script src="js/slick.min.js"></script>
  <!-- ▲ slick本体 ▲ -->

  <!-- ▼ slick ▼ -->
  <div class="item_list">
    <div class="item">
      <div class="item_in">
        <div class="thumb">
          <div class="curtain-anime">
            <div class="curtain-anime_child"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
          </div>
        </div>
        <div class="ttl fs16 mt1em">【施工管理】転職におすすめの異業種とは？成功するコツや気を付けることを解説</div>
      </div>
    </div>
    <div class="item">
      <div class="item_in">
        <div class="thumb">
          <div class="curtain-anime">
            <div class="curtain-anime_child"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
          </div>
        </div>
        <div class="ttl fs16 mt1em">【施工管理】転職におすすめの異業種とは？成功するコツや気を付けることを解説</div>
      </div>
    </div>
    <div class="item">
      <div class="item_in">
        <div class="thumb">
          <div class="curtain-anime">
            <div class="curtain-anime_child"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
          </div>
        </div>
        <div class="ttl fs16 mt1em">【施工管理】転職におすすめの異業種とは？成功するコツや気を付けることを解説</div>
      </div>
    </div>
    <div class="item">
      <div class="item_in">
        <div class="thumb">
          <div class="curtain-anime">
            <div class="curtain-anime_child"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
          </div>
        </div>
        <div class="ttl fs16 mt1em">【施工管理】転職におすすめの異業種とは？成功するコツや気を付けることを解説</div>
      </div>
    </div>
    <div class="item">
      <div class="item_in">
        <div class="thumb">
          <div class="curtain-anime">
            <div class="curtain-anime_child"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
          </div>
        </div>
        <div class="ttl fs16 mt1em">【施工管理】転職におすすめの異業種とは？成功するコツや気を付けることを解説</div>
      </div>
    </div>
  </div>
  <!-- ▲ slick ▲ -->
  <!-- ▼ slick ▼ -->
  <script type="text/javascript">
    $(function() {
      $(".item_list").slick({
        accessibility: true, // タブと矢印キーのナビゲーション
        slidesToShow: 4, // 表示数
        speed: 3000, // スライド速度
        slidesToScroll: 4, // スライド数
        autoplay: true, // 自動スライド
        autoplaySpeed: 0, // 自動スライド速度
        cssEase: 'linear', // 	滑らかに動く
        arrows: false, // 	前・次の矢印
        dots: false, // ドットインジケーター
        fade: false, // フェード
        pauseOnFocus: true, // フォーカスで一時停止
        pauseOnHover: true, // マウスホバーで一時停止
        variableWidth: false, // 画像サイズ固定。slidesToShowとの選択？
        centerMode: true, // センターモード
        responsive: [{ // SP時
          breakpoint: 768,
          settings: {
            accessibility: true,
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        }, ],
      });
    });
  </script>
  <!-- ▲ slick ▲ -->
  <style>
  /* .item_list */
  .item_list {
    display: flex;
    align-items: stretch;
    justify-content: flex-start;
    gap: 5em;
    flex-wrap: wrap;
  }
  .item_list .item .item_in {
    width: 90%;
    display: table;
    margin: 0 auto;
  }
  .item_list .item .item_in .thumb {
    position: relative;
    overflow: hidden;
  }
  .item_list .item .item_in .thumb:before {
    top: 0;
    left: 0;
    position: relative;
    width: 100%;
    padding-top: 56.25%;
    content: "";
    display: block;
  }
  .item_list .item .item_in .thumb * {
    display: block;
    top: 0;
    left: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 1s all;
  }
  .item_list .item:hover .item_in .thumb img {
    transform: scale(1.2);
  }
  .item_list .slick-prev,
  .item_list .slick-next {
    top: 7.85rem;
  }
  /* ▲ .item_list ▲ */
  </style>

  <!-- ▼ slick ▼ -->
  <div class="slider_outer">
    <div class="slider01 center">
      <div class="item"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
      <div class="item"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
      <div class="item"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
      <div class="item"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
      <div class="item"><a href=""><img src="https://placehold.jp/400x400.png"></a></div>
    </div>
    <div class="slick_pause_outer"><!-- 一時停止ボタン -->
      <button class="slick_pause"></button>
    </div>
  </div>
  <!-- ▲ slick ▲ -->
  <!-- ▼ slick ▼ -->
  <script type="text/javascript">
    $(".slider01").slick({
      accessibility: true, // タブと矢印キーのナビゲーション
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true, // 
      autoplaySpeed: 3000, // 
      cssEase: 'linear', // 	滑らかに動く
      arrows: false, // 	前・次の矢印
      dots: true, // ドットインジケーター
      fade: true, // フェード
      speed: 200, // 
      pauseOnFocus: true, // フォーカスで一時停止
      pauseOnHover: true, // マウスホバーで一時停止
      variableWidth: false, // 画像サイズ固定。slidesToShowとの選択？
      centerMode: true, // センターモード
      responsive: [{
        breakpoint: 768,
        settings: {
          accessibility: true,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      }, ],
    });
    //ボタンをクリックしたとき
    $(".slick_pause").on("click", function() {
      //一時停止中なら
      if($(this).hasClass("paused")){
        //再開
        $(".slider01").slick("slickPlay");
        //「.paused」削除
        $(this).removeClass("paused");
      }else{
        //再生中なら
        //一時停止
        $(".slider01").slick("slickPause");
        //「.paused」付与
        $(this).addClass("paused");
      }
    });
  </script>
  <!-- ▲ slick ▲ -->

  <!-- ▼ slick ▼ -->
  <div class="container">
    <div class="slider">
      <div class="slick-img">
        <img src="og.png" />
      </div>
      <div class="slick-img">
        <img src="og.png" />
      </div>
      <div class="slick-img">
        <img src="og.png" />
      </div>
      <div class="slick-img">
        <img src="og.png" />
      </div>
    </div>
    <div class="thumbnail">
      <div class="thumbnail-img">
        <img src="og.png" />
      </div>
      <div class="thumbnail-img">
        <img src="og.png" />
      </div>
      <div class="thumbnail-img">
        <img src="og.png" />
      </div>
      <div class="thumbnail-img">
        <img src="og.png" />
      </div>
    </div>
  </div>
  <link rel="stylesheet" href="css/slick.css" />
  <script src="js/slick.min.js"></script>
  <script>
    $(function () {
    $(".slider").slick({
      autoplay: true,
      arrows: false,
      asNavFor: ".thumbnail",
      arrows: false, // 	前・次の矢印
      autoplay: false, 
    });
    $(".thumbnail").slick({
      slidesToShow: 3,
      asNavFor: ".slider",
      focusOnSelect: true,
      arrows: true, // 	前・次の矢印
      autoplay: false, 
    });
  });
  </script>
  <!-- ▲ slick ▲ -->

  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ アコーディオンメニュー ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area3"></i>
<section class="area3">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">アコーディオンメニュー</h3>
  <!-- ▼ アコーディオンメニュー ▼ -->
  <ul class="ac">
    <li class="question">メニュー1</li>
    <li class="answer">メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身メニュー1の中身</li>
    <li class="question">メニュー2</li>
    <li class="answer">メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身メニュー2の中身</li>
  </ul>
  <!-- ▲ アコーディオンメニュー ▲ -->
  <!-- ▼ アコーディオンメニュー ▼ -->
  <script>
    $(function() {
      $('.ac .answer').css("display", "none");
      $('.ac .question').on('click', function() {
        $(this).next().slideToggle();
      })
    });
  </script>
  <!-- ▲ アコーディオンメニュー ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　アコーディオンメニュー　▼▼▼

    =================================================================================
    */
    .ac {
      width: 90%;
      max-width: 600px;
      margin: 0 auto;
    }
    .ac .question {
      padding: 2em;
      text-align: center;
      background-color: #6b90ff;
      border-bottom: 1px solid #fff;
      cursor: pointer;
      transition: .3s;
    }
    .ac .answer {
      padding: 2em;
      background-color: #d3deff;
    }
    /* ▲ アコーディオンメニュー ▲ */
  </style>
  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ タブメニュー ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area4"></i>
<section class="area4">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">タブメニュー</h3>
  <!-- ▼ タブメニュー ▼ -->
  <div class="container tabgroup">
    <ul class="tab">
      <li class="active">パスタ</li>
      <li>カレー</li>
      <li>サラダ</li>
    </ul>
    <ul class="content">
      <li class="active">
        <p>トマトソース</p>
      </li>
      <li>
        <p>キーマカレー</p>
        <p>チキンカレー</p>
      </li>
      <li>
        <img src="https://placehold.jp/400x400.png">
      </li>
    </ul>
  </div>
  <!-- ▲ タブメニュー ▲ -->
  <!-- ▼ タブメニュー ▼ -->
  <script>
    $(function () {
      $(".tab > li").click(function () {
        const group = $(this).parents(".tabgroup");
        group.find(".active").removeClass("active");
        $(this).addClass("active");
        const index = $(this).index();
        group.find(".content > li").eq(index).addClass("active");
      });
    });
  </script>
  <!-- ▲ タブメニュー ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　タブメニュー　▼▼▼

    =================================================================================
    */
    .container{
      padding: 1em;
      font-size: 2rem;
    }
    .tab{
      display: flex;
      justify-content: space-between;
    }
    .tab li{
      width: 33%;
      font-weight: bold;
      padding: 1em;
      border: 2px solid #000;
      border-bottom: none;
      cursor: pointer;
    }
    /*クラスに「active」が付与されたときの指定*/
    .tab li.active{
      background: #ccc;
    }
    .content{
      padding: 1em;
      border: 2px solid #000;
    }
    /*通常時は「display: none;」で非表示にしておく*/
    .content li{
      display: none;
    }
    .content li p{
      background: #ccc;
      padding: 1em;
      margin: 0.5em 0;
    }
    /*クラスに「active」が付与されたとき「display: block;」で表示する*/
    .content li.active{
      display: block;
    }
    /* ▲ タブメニュー ▲ */
  </style>
  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ スクロールアニメーション一例 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area5"></i>
<section class="area5">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">スクロールアニメーション一例</h3>
  <p class="fs20 mb20">※「animate__infinite」でループ</p>
  <p class="fs20 mb20">※「data-wow-delay」で時間差</p>
  <p class="fs20 mb20">など色々あるのでオプションを調べてみるとよいかも</p>
  
  <!-- ▼ スクロールアニメーション ▼ -->
  <div class="flex between middle fs20 mt50">
    <div class="wow animate__animated animate__fadeInUp">animate__fadeInUp</div>
    <div class="wow animate__animated animate__backInLeft" data-wow-delay="1s">animate__backInLeft</div>
    <div class="wow animate__animated animate__bounceIn" data-wow-delay="2s">animate__bounceIn</div>
    <div class="wow animate__animated animate__fadeIn animate__infinite" data-wow-delay="3s">animate__fadeIn</div>
  </div>
  <!-- ▲ スクロールアニメーション ▲ -->
   </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ クリック変化 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area6"></i>
<section class="area6">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">クリック変化</h3>
  <!-- ▼ クリック変化 ▼ -->
  <div id="count_item">
    <div id="step01">
      <!-- ここのIDでJSを管理 -->
      <p class="lead">囲みをバッククォートにしないとコード内改行ができないので注意</p>
      <p class="page">1/5</p>
      <ul class="btn_list01">
        <li><a>ここをクリック範囲にしている</a></li>
      </ul>
    </div>
  </div>
  <!-- ▲ クリック変化 ▲ -->
  <!-- ▼ クリック変化 ▼ -->
  <script>
    $(function() {
      $(document).on('click', '#step01 ul.btn_list01 > li a', function() {
        // 1クリック
        document.getElementById('count_item').innerHTML = `
          <div id="step02">
            <p class="lead">ID「count_item」直下のID内のリストをクリック対象にしている。</p>
            <p class="page">2/5</p>
            <ul class="btn_list01">
              <li><a>よくある</a></li>
            </ul>
          </div>`;
      });
      $(document).on('click', '#step02 ul.btn_list01 > li a', function() {
        // 2クリック
        document.getElementById('count_item').innerHTML = `
          <div id="step03">
            <p class="lead">見本</p>
            <p class="page">3/5</p>
            <ul class="btn_list01">
              <li><a>必ずできる</a></li>
            </ul>
          </div>`;
      });
      $(document).on('click', '#step03 ul.btn_list01 > li a', function() {
        // 3クリック
        document.getElementById('count_item').innerHTML = `
          <div id="step04">
            <p class="page">4/5</p>
            <ul class="btn_list01">
              <li><a>必ず勝てる</a></li>
            </ul>
          </div>`;
      });
      $(document).on('click', '#step04 ul.btn_list01 > li a', function() {
        // 4クリック
        document.getElementById('count_item').innerHTML = `
          <div id="step05">
            <p class="lead">次クリック先に初期値の要素を入れてループさせている</p>
            <p class="page">5/5</p>
            <ul class="btn_list01">
              <li><a>必ず勝てる</a></li>
            </ul>
          </div>`;
      });
      $(document).on('click', '#step05 ul.btn_list01 > li a', function() {
        // 5クリック（初期化）
        document.getElementById('count_item').innerHTML = `
          <div id="step01">
            <p class="lead">囲みをバッククォートにしないとコード内改行ができないので注意</p>
            <p class="page">1/5</p>
            <ul class="btn_list01">
              <li><a>ここをクリック範囲にしている</a></li>
            </ul>
          </div>`;
      });
    });
  </script>
  <!-- ▲ クリック変化 ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　クリック変化　▼▼▼

    =================================================================================
    */
    #count_item {
      font-size: 2rem;
    }
    #count_item .page {
      text-align: center;
    }
    #count_item .lead {
      margin: 1em 0;
    }
    #count_item ul.btn_list01 > li {
      margin-top: 1em;
    }
    #count_item ul.btn_list01 > li > a {
      background: #ffd800;
      padding: 0.75em 0.5em;
      display: table;
      text-align: center;
      border-radius: 1.5em;
      min-width: 70%;
      margin: auto;
    }
    /* ▲ クリック変化 ▲ */
  </style>
  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ YOUTUBE動画 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area7"></i>
<section class="area7">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">YOUTUBE動画</h3>
  <!-- ▼ YOUTUBE動画 ▼ -->
  <div class="video">
    <div class="video_inner"><iframe width="1280" height="720" src="https://www.youtube.com/embed/BUCiSSyIGGU" title="PHP For Beginners | 3+ Hour Crash Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  </div>
  <!-- ▲ VIDEO動画 ▲ -->
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em; margin-top: 3em;">VIDEO動画</h3>
  <!-- ▼ VIDEO動画 ▼ -->
  <div class="video">
    <video class="video" src="https://blackdingo5.sakura.ne.jp/wp_parkmatch02/wp-content/themes/parkmatch/movie.mp4" loop autoplay muted playsinline></video>
  </div>
  <!-- ▲ VIDEO動画 ▲ -->
  <style>
  /* 
  =================================================================================

  ▼▼▼　YOUTUBE動画　▼▼▼

  =================================================================================
  */
  .video {
    position: relative;
  }
  .video:before {
    top: 0;
    left: 0;
    position: relative;
    width: 100%;
    padding-top: 56.25%;
    content: "";
    display: block;
  }
  .video * {
    top: 0;
    left: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  /* ▲ YOUTUBE動画 ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ Masonryレイアウト ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area8"></i>
<section class="area8">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">Masonry</h3>
  <p class="fs20 mb20">※現状のブラウザではMasonryレイアウトは未実装なので、代用するならこれが限界</p>
  <!-- ▼ Masonry ▼ -->
  <ul class="tille">
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x100.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x50.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x80.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x400.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x400.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x100.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x120.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x150.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x120.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x50.png"></li>
    <li><img style="width: 100%;" src="https://placehold.jp/24/cc9999/993333/500x100.png"></li>
  </ul>
  <!-- ▲ Masonry ▲ -->
  <style>
  /* 
  =================================================================================

  ▼▼▼　Masonry　▼▼▼

  =================================================================================
  */
  ul.tille {
    column-count: 3;
    column-gap: 1px;
    font-size: 0;
  }
  ul.tille > li {
    break-inside: avoid;
    margin-bottom: 1px;
  }
  /* ▲ Masonry ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ ページめくり ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area9"></i>
<section class="area9">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">ページめくり</h3>
  <p class="fs20 mb20">※iframeで埋め込む場合にはJSのドラッグ可能範囲も切り抜かれる点には注意</p>
  <!-- ▼ ページめくり ▼ -->
  <div id="katudon_turn">
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
    <div><img src="https://placehold.jp/24/cc9999/993333/450x300.png"></div>
  </div>
  <ul class="turn_btns">
    <li>
      <span id="prevpage">前のページ</span>
    </li>
    <li>
      <span id="nextpage">次のページ</span>
    </li>
  </ul>
  <!-- ▲ ページめくり ▲ -->
  <!-- ▼ turn.js ▼ -->
  <script src="js/turn.js"></script>
  <script>
    $(function() {
      $('#katudon_turn').turn({
        width: 900,
        height: 300,
        elevation: 50,
        gradients: true, // ページをめくるアニメーションの可否
        // ページめくりのスピード(ms)
        duration: 1000,
        // ページをめくるときの影->有効
        gradients: true,
        // 自動中央揃え->無効
        autoCenter: false,
        // 右開きか左開きかの設定->右開き
        direction: 'rtl',
      });
      $('#prevpage').click(function() {
        $('#katudon_turn').turn('previous');
      });
      $('#nextpage').click(function() {
        $('#katudon_turn').turn('next');
      });
    });
  </script>
  <!-- ▲ turn.js ▲ -->
  <style>
  /* 
  =================================================================================

  ▼▼▼　turn.js　▼▼▼

  =================================================================================
  */
  #katudon_turn {
    background: #ccc;
    margin: auto;
    max-width: 100%;
  }
  #katudon_turn:before {
      top: 0;
      left: 0;
      position: relative;
      width: 100%;
      padding-top: 25%;
      content: "";
      display: block;
  }
  #katudon_turn .page {
    padding: 0 !important;
  }
  #katudon_turn .page img {
    width: 100%;
  }
  ul.turn_btns {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2em;
    font-size: 2rem;
    margin-top: 2em;
  }
  ul.turn_btns > li {
    cursor: pointer;
  }
  /* ▲ turn.js ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 季節切り替え ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area10"></i>
<section class="area10">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">季節切り替え</h3>
  <p class="fs20 mb20">※PHP式</p>
  <!-- ▼ 季節切り替え ▼ -->
  <?php
  $month = date('md');
  echo $month;
  if ((0231 >= $month) || (1201 <= $month)) {
    echo '冬';
  } else if (0531 >= $month) {
    echo '春';
  } else {
    echo '秋';
  }
  ?>
  <!-- ▲ 季節切り替え ▲ -->
   </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 雪 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
  <i id="area11"></i>
  <section class="area11">
    <div class="inner w1000 bg_white p50">
    <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">雪</h3>
    <!-- ▼ 雪 ▼ -->
    <div class="" style="background: linear-gradient(0deg, rgba(46,88,166,1) 0%, rgba(42,42,41,1) 100%);">
      <div class="cover" style="position: relative; height: 10rem;"></div>
    </div>
    <script type="text/javascript" src="js/snowfall.min.js"></script>
    <script type='text/javascript'>
      $(document).ready(function() {
        $('.cover').snowfall({
          flakeCount: 8, //降らせる数
          minSize: 10, // 最小サイズ（数値）
          maxSize: 20, // 最大サイズ（数値）
          minSpeed: 1, // 最低速度（数値）
          maxSpeed: 2, //最大速度
          round: true,
          // 影をつける（boolean）
          shadow: false,
          // 要素に積もらせる場合
          image: "img/snow.svg",
          // オリジナル画像を使用する場合
          // image : "画像へのパス"
        });
      });
    </script>
    <!-- ▲ 雪 ▲ -->
    </div>
  </section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ スクロールアニメーションその２ ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area12"></i>
<section class="area12">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">スクロールアニメーションその２</h3>
  <!-- ▼ スクロールアニメーションその２ ▼ -->
  <!-- ▼ stretch_img ▼ -->
  <div class="stretch_outer">
    <ul class="stretch_img">
      <li class="first"><img src="img/top.png" alt=""></li>
      <li class="second"></li>
      <li class="third"><img src="img/bottom.png" alt=""></li>
    </ul>
  </div>
  <!-- ▲ stretch_img ▲ -->
  <script>
    // 要素が画面内に入ったらclass付与
    $(window).scroll(function() {
      $('.stretch_img').each(function() {
        var hit = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var wHeight = $(window).height();
        var customTop = 100;
        if (typeof $(this).data('stretch_img') !== 'undefined') {
          // data-stretch_img="任意の値" が設定されている場合
          customTop = $(this).data('stretch_img');
        }
        if (hit + customTop < wHeight + scroll) {
          $(this).addClass("is-active");
        }
      });
    });
  </script>
  <!-- ▲ スクロールアニメーションその２ ▲ -->
  <style>
  /* 
  =================================================================================

  ▼▼▼　スクロールアニメーションその２　▼▼▼

  =================================================================================
  */
  .stretch_outer {
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    height: 520px;
  }
  ul.stretch_img {
    position: relative;
    display: table;
  }
  ul.stretch_img > li.first {
    margin-bottom: -57px;
    z-index: 2;
    position: relative;
  }
  ul.stretch_img > li.second {
    height: 0;
    overflow: hidden;
    background: url(img/middle.png) bottom center repeat-y;
    z-index: 1;
    position: relative;
    transition: 2s all;
  }
  ul.stretch_img.is-active > li.second {
    height: 400px;
  }
  ul.stretch_img > li.third {
  }
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ スクロールアニメーションその3（ファーストビュー含む） ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area13"></i>
<section class="area13">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">スクロールアニメーションその3（ファーストビュー含む）</h3>
  <!-- ▼ スクロールアニメーションその3 ▼ -->
  <!-- ▼ stretch_img ▼ -->
  <p class="count" data-num="1000" style="font-size: 10rem;">0</p>
  <!-- ▲ stretch_img ▲ -->
  <script>
    jQuery(function() { //ファーストビュー用
      jQuery(window).scroll(function() { //スクロール用
        jQuery('.count').each(function() {
          var elemPos = jQuery(this).offset().top;
          var scroll = jQuery(window).scrollTop();
          var windowHeight = jQuery(window).height();
          if (scroll > elemPos - windowHeight + 0) {
            // ここから動作内容
            var countElm = $('.count'),
              countSpeed = 1;

            countElm.each(function() {
              var self = $(this),
                countMax = self.attr('data-num'),
                thisCount = self.text(),
                countTimer;

              function timer() {
                countTimer = setInterval(function() {
                  var countNext = thisCount++;
                  self.text(countNext);

                  if (countNext == countMax) {
                    clearInterval(countTimer);
                  }
                }, countSpeed);
              }
              timer();
            });
          }
        });
      });
      jQuery(window).scroll(); //ファーストビュー用
    });
  </script>
  <!-- ▲ スクロールアニメーションその3 ▲ -->
   </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 見積もり機能 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area14"></i>
<section class="area14">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">見積もり機能</h3>
  <p class="fs20 mb50">ダスキンのLPで作ったやつ</p>
  <!-- ▼ 見積もり機能 ▼ -->
  <!-- ▼ estimate ▼ -->
  <form action="#" name="form1">
  <ul class="estimate">
    <li>
      <div class="item01_01">壁掛け型エアコン</div>
      <div class="item01_02">
        <input onChange="keisan()" type="number" min="0" step="1" value="0" name="sample1_1" class="form-ticker-symbol fs20" maxlength="2">台
      </div>
      <div class="item01_03"><input class="price fs20 no-spin" type="number" min="0" step="1" name="field1_1" value="0" disabled>円</div>
    </li>
    <li>
    <div class="item01_01">壁掛け型エアコンお掃除機能付</div>
    <div class="item01_02"><input onChange="keisan()" type="number" min="0" step="1" value="0" name="sample1_2" class="form-ticker-symbol sample1_2 fs20" maxlength="2">台</div>
    <div class="item01_03"><input class="price fs20 no-spin" type="number" min="0" step="1" name="field1_2" value="0" disabled>円</div>
    </li>
    <li>
    <div class="item01_01">抗菌コート付き　エアコンクリーニング</div>
    <div class="item01_02"><input onChange="keisan()" type="number" min="0" step="1" value="0" name="sample1_3" class="form-ticker-symbol sample1_3 fs20" maxlength="2">台</div>
    <div class="item01_03"><input class="price fs20 no-spin" type="number" min="0" step="1" name="field1_3" value="0" disabled>円</div>
    </li>
    <li>
    <div class="item01_01">室外機クリーニング</div>
    <div class="item01_02"><input onChange="keisan()" type="number" min="0" step="1" value="0" name="sample1_4" class="form-ticker-symbol sample1_4 fs20" maxlength="2">台</div>
    <div class="item01_03"><input class="price fs20 no-spin" type="number" min="0" step="1" name="field1_4" value="0" disabled>円</div>
    </li>
  </ul>
  <div class="total mt40 fs16">
              <h5 class="fs25 m">合計概算金額</h5>
              <div class="price fs30 b mt40 right"><input class="no-spin" type="number" min="0" step="1" name="field_total" value="0" disabled>円</div>
            </div>
  </form>
  <!-- ▲ estimate ▲ -->
  <script type="text/javascript">
    function keisan(){
      // 壁掛け型エアコン
      var price1_1 = document.form1.sample1_1.value * 10; // 単価を設定
      document.form1.field1_1.value = price1_1; // 小計を表示
      // 壁掛け型エアコンお掃除機能付
      var price1_2 = document.form1.sample1_2.value * 100; // 単価を設定
      document.form1.field1_2.value = price1_2; // 小計を表示
      // 抗菌コート付き　エアコンクリーニング
      var price1_3 = document.form1.sample1_3.value * 1000; // 単価を設定
      document.form1.field1_3.value = price1_3; // 小計を表示
      // 室外機クリーニング
      var price1_4 = document.form1.sample1_4.value * 10000; // 単価を設定
      document.form1.field1_4.value = price1_4; // 小計を表示

      // 合計を計算
      var total = price1_1 + price1_2 + price1_3 + price1_4;
      document.form1.field_total.value = total; // 合計を表示


      // ここから問い合わせの見積もりにも反映（連動不要なら以降削除）
      // 変数に代入
      var estimate_value = "【合計概算金額】 " + total + "円" + "\n";
      var estimate1_1 = "\n" + "【エアコンクリーニング】壁掛け型エアコン " + document.form1.sample1_1.value + "台分" + price1_1 + "円";
      var estimate1_2 = "\n" + "【エアコンクリーニング】壁掛け型エアコンお掃除機能付 " + document.form1.sample1_2.value + "台分" + price1_2 + "円";
      var estimate1_3 = "\n" + "【エアコンクリーニング】抗菌コート付き エアコンクリーニング " + document.form1.sample1_3.value + "台分" + price1_3 + "円";
      var estimate1_4 = "\n" + "【エアコンクリーニング】室外機クリーニング " + document.form1.sample1_4.value + "台分" + price1_4 + "円";
      // 台数指定が0以外なら文字列追加
      if (price1_1 != 0) { estimate_value = estimate_value + estimate1_1; }
      if (price1_2 != 0) { estimate_value = estimate_value + estimate1_2; }
      if (price1_3 != 0) { estimate_value = estimate_value + estimate1_3; }
      if (price1_4 != 0) { estimate_value = estimate_value + estimate1_4; }
      // 反映先に変数estimate_valueを入れる
      document.form.content.value =  estimate_value;

    }
  </script>
  <!-- ▲ 見積もり機能 ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　見積もり機能　▼▼▼

    =================================================================================
    */
    /* スピンボタン削除クラス */
    .no-spin::-webkit-inner-spin-button,
    .no-spin::-webkit-outer-spin-button {
      -webkit-appearance: none !important;
      margin: 0 !important;
    }
    .no-spin {
      -moz-appearance: textfield !important;
    }
    /* estimate */
    ul.estimate {
      background: #fff;
      padding: 2em;
      border: 2px solid;
      border-radius: 0.5rem;
    }
    ul.estimate > li {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      border-bottom: 1px dashed;
    }
    ul.estimate > li .item01_01 {
      flex: 2;
      padding: 1em;
    }
    ul.estimate > li .item01_02 {
      flex: 1;
      padding: 1em;
    }
    ul.estimate > li .item01_02 input {
      display: inline-block;
      width: 60%;
      border: 1px solid;
      margin-right: 0.5em;
      text-align: right;
      padding: 0 0.2em;
    }
    ul.estimate > li .item01_03 {
      flex: 1;
      padding: 1em;
    }
    ul.estimate > li .item01_03 .price {
      display: inline-block;
      width: 80%;
      border: 1px solid;
      margin-right: 0.5em;
      text-align: right;
      padding: 0 0.2em;
    }
    .total .price {
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }
  </style>
  </div>
</section>
<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ お問い合わせ ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area15"></i>
<section class="area15">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">お問い合わせ</h3>
  <!-- ▼ お問い合わせ ▼ -->
  <p class="fs16 red b lh150p"><a href="contact/">こちらから参照。</a><br>headerが重複するのでテンプレに埋め込みは中止。<br>上記の「見積もり機能」と連動させる場合は外部ファイルからヘッダー、フッターを削除し埋め込む。</p>
  <!-- ▲ お問い合わせ ▲ -->
   </div>
</section>
<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ select切り替え ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area16"></i>
<section class="area16">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">select切り替え</h3>
  <div class="tabgroup">
    <!-- ▼ select_group ▼ -->
    <!-- select型 -->
    <div class="select_group fs24 green mt100 mb100">
      <select>
        <option value="con01">南･心斎橋店</option>
        <option value="con02">堺筋本町店</option>
        <option value="con03" selected>大阪日本橋店</option>
      </select>
    </div>
    <!-- ▲ select_group ▲ -->
    <!-- ▼ select_group_content ▼ -->
    <ul class="select_group_content fs20 mt80">
      <li id="con01">南･心斎橋店</li>
      <li id="con02">堺筋本町店</li>
      <li id="con03" class="active">大阪日本橋店</li>
    </ul>
    <!-- ▲ select_group_content ▲ -->
  </div>

  <!-- ▼ select型 ▼ -->
  <script>
    $('.select_group select').change(function () {
      var val = $('.select_group select option:selected').val();
      if (val == '.select_group select') return;
      $('.select_group_content li[id]').fadeOut();
      $('.select_group_content li#' + val ).fadeIn();
    });
  </script>
  <!-- ▲ select型 ▲ -->
  <style>
    /* 
    =================================================================================

    ▼▼▼　select切り替え　▼▼▼

    =================================================================================
    */
    .select_group select {
      cursor: pointer;
    }
    /*通常時は「display: none;」で非表示にしておく*/
    ul.select_group_content > li {
      display: none;
    }
    /*クラスに「active」が付与されたとき「display: block;」で表示する*/
    ul.select_group_content > li.active{
      display: block;
    }

    /* select型 */
    .select_group {
      position: relative;
    }
    .select_group select {
      border: 2px solid;
      background: #fff;
      position: relative;
      text-align: left;
      width: 100%;
      height: 7rem;
      line-height: 1;
      padding: 0.5em 7rem 0.5em 0.5em;
    }
    .select_group:before {
      content: "";
      display: block;
      position: absolute;
      width: 7rem;
      height: 7rem;
      top: 0;
      right: 0;
      border: 2px solid;
      background: #008B41;
      z-index: 1;
      pointer-events: none;
    }
    .select_group:after {
      content: "▼";
      display: block;
      position: absolute;
      font-size: 4rem;
      line-height: 1;
      top: 1.5rem;
      right: 1.5rem;
      z-index: 2;
      pointer-events: none;
      color: #fff;
    }
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 見出しアニメーション ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area17"></i>
<section class="area17">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">見出しアニメーション</h3>
  <!-- ▼ midashi_list ▼ -->
  <ul class="midashi_list">

    <li>
      <p class="eachTextAnime fs20">テキストが1文字ずつ出てきますテキストが1文字ずつ出てきますテキストが1文字ずつ出てきますテキストが1文字ずつ出てきますテキストが1文字ずつ出てきます</p>
      <style>
        .eachTextAnime span{opacity: 0;}
        .eachTextAnime.appeartext span{ animation:text_anime_on 1s ease-out forwards; }
        @keyframes text_anime_on {
          0% {opacity:0;}
          100% {opacity:1;}
        }
      </style>
      <script>
        // eachTextAnimeにappeartextというクラス名を付ける定義
        function EachTextAnimeControl() {
          $('.eachTextAnime').each(function () {
            var elemPos = $(this).offset().top - 50;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
              $(this).addClass("appeartext");

            } else {
              $(this).removeClass("appeartext");
            }
          });
        }
        // 画面をスクロールをしたら動かしたい場合の記述
        $(window).scroll(function () {
          EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面をスクロールをしたら動かしたい場合の記述
        // 画面が読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function () {
          //spanタグを追加する
          var element = $(".eachTextAnime");
          element.each(function () {
            var text = $(this).text();
            var textbox = "";
            text.split('').forEach(function (t, i) {
              if (t !== " ") {
                if (i < 10) {
                  textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
                } else {
                  var n = i / 10;
                  textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
                }
              } else {
                textbox += t;
              }
            });
            $(this).html(textbox);
          });
          EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
      </script>
    </li>

    <li class="mt50">
      <p>
        <span class="bgextend bgLRextendTrigger fs20">
          <span class="bgappearTrigger">背景色が伸びて出現（左から右）背景色が伸びて出現（左から右）背景色が伸びて出現（左から右）背景色が伸びて出現（左から右）背景色が伸びて出現（左から右）背景色が伸びて出現（左から右）</span>
        </span>
      </p>
      <style>
        /*==================================================
        背景色が伸びて出現
        ===================================*/
        /*全共通*/
        .bgextend{
          animation-name:bgextendAnimeBase;
          animation-duration:1s;
          animation-fill-mode:forwards;
          position: relative;
          overflow: hidden;/*　はみ出た色要素を隠す　*/
          opacity:0;
          display: table;
          margin-left: auto;
          margin-right: auto;
        }
        @keyframes bgextendAnimeBase{
          from {
            opacity:0;
          }
          to {
            opacity:1;  
          }
        }
        /*中の要素*/
        .bgappear{
          animation-name:bgextendAnimeSecond;
          animation-duration:1s;
          animation-delay: 0.6s;
          animation-fill-mode:forwards;
          opacity: 0;
        }
        @keyframes bgextendAnimeSecond{
          0% {
          opacity: 0;
          }
          100% {
          opacity: 1;
          }
        }
        /*左から右*/
        .bgLRextend::before{
          animation-name:bgLRextendAnime;
          animation-duration:1s;
          animation-fill-mode:forwards;
          content: "";
          position: absolute;
          width: 100%;
          height: 100%;
          background-color: #666;/*伸びる背景色の設定*/
          display: table;
        }
        @keyframes bgLRextendAnime{
          0% {
            transform-origin:left;
            transform:scaleX(0);
          }
          50% {
            transform-origin:left;
            transform:scaleX(1);
          }
          50.001% {
            transform-origin:right;
          }
          100% {
            transform-origin:right;
            transform:scaleX(0);
          }
        }
        /* スクロールをしたら出現する要素にはじめに透過0を指定　*/
        .bgappearTrigger,
        .bgLRextendTrigger{
            opacity: 0;
        }
      </style>
      <script>
        // 動きのきっかけの起点となるアニメーションの名前を定義
        function BgFadeAnime(){
          // 背景色が伸びて出現（左から右）
          $('.bgLRextendTrigger').each(function(){ //bgLRextendTriggerというクラス名が
            var elemPos = $(this).offset().top-50;//要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
              $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
            } else {
              $(this).removeClass('bgLRextend');// 画面外に出たらbgLRextendというクラス名を外す
            }
          }); 
          // 文字列を囲う子要素
          $('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
          var elemPos = $(this).offset().top-50;//要素より、50px上の
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll >= elemPos - windowHeight){
            $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
          }else{
            $(this).removeClass('bgappear');// 画面外に出たらbgappearというクラス名を外す
          }
          });   
        }
        // 画面をスクロールをしたら動かしたい場合の記述
        $(window).scroll(function (){
          BgFadeAnime();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面をスクロールをしたら動かしたい場合の記述
        // 画面が読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function(){
          BgFadeAnime();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
      </script>
    </li>

    <li class="mt50">
      <div class="p50 white" style="background: #000;">
        <p class="glowAnime fs20">テキストがほのかに光りながら出現しますテキストがほのかに光りながら出現しますテキストがほのかに光りながら出現しますテキストがほのかに光りながら出現します</p>
      </div>
      <style>
        @charset "utf-8";
        /*========= 光りながら出現させるためのCSS ===============*/
        .glowAnime span{opacity: 0;}
        /*アニメーションで透過を0から1に変化させtext-shadowをつける*/
        .glowAnime.glow span{ animation:glow_anime_on 1s ease-out forwards; }

        @keyframes glow_anime_on{
          0% { opacity:0; text-shadow: 0 0 0 #fff,0 0 0 #fff;}
          50% { opacity:1;text-shadow: 0 0 10px #fff,0 0 15px #fff; }
          100% { opacity:1; text-shadow: 0 0 0 #fff,0 0 0 #fff;}
        }
      </style>
      <script>
        // glowAnimeにglowというクラス名を付ける定義
        function GlowAnimeControl() {
          $('.glowAnime').each(function () {
            var elemPos = $(this).offset().top - 50;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
              $(this).addClass("glow");
            } else {
              $(this).removeClass("glow");
            }
          });
        }
        // 画面をスクロールをしたら動かしたい場合の記述
        $(window).scroll(function () {
          GlowAnimeControl();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面をスクロールをしたら動かしたい場合の記述
        // 画面が読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function () {
          //spanタグを追加する
            var element = $(".glowAnime");
          element.each(function () {
            var text = $(this).text();
            var textbox = "";
            text.split('').forEach(function (t, i) {
              if (t !== " ") {
                if (i < 10) {
                  textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
                } else {
                var n = i / 10;
                  textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
                }
              } else {
                textbox += t;
              }
            });
            $(this).html(textbox);
          });
          GlowAnimeControl();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
      </script>
    </li>
    
    <li class="mt50 fs20"><span class="text_appearance">下から一文字ずつ飛び出す文字。</span><span class="text_appearance">改行は効かないのでspanを増やす。</span></li>
    <style>
      .text_appearance {
        overflow: hidden;
        display: block;
      }
      .text_appearance span{
        display: inline-block;
        font-weight: bold;
        transform: translateY(100%);
        animation: text_appearance 1s ease forwards;
        font-family: inherit;
      }
      @keyframes text_appearance {
        100%{
        transform: translateY(0px);
        }
      }
    </style>
    <script>
      // ▼ 下から一文字ずつ飛び出す文字 ▼
      let text_appearance = document.querySelectorAll(".text_appearance");
      for (let i = 0; i < text_appearance.length; i++) {
        let text = text_appearance[i].textContent; // innerHTML ではなく textContent を使用
        let textParts = "";
        text.split("").forEach(function (value, index) {
          let span = document.createElement("span");
          span.style.animationDelay = index * 0.2 + "s";
          // 半角スペースを &nbsp; に変換
          span.innerHTML = value === " " ? "&nbsp;" : value;
          textParts += span.outerHTML;
        });
        text_appearance[i].innerHTML = textParts;
      }
      // ▲ 下から一文字ずつ飛び出す文字 ▲
    </script>
    
    <li class="mt50"></li>
    
    <li class="mt50"></li>

  </ul>
  <!-- ▲ midashi_list ▲ -->
   </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ マウスストーカー ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area18"></i>
<section class="area18">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">マウスストーカー</h3>
  <!-- ▼▼ マウスストーカー ▼▼ -->
  <div id="mouse-stalker"></div>
  <script>
  const stalker = document.getElementById('mouse-stalker');
  let hovFlag = false;
  document.addEventListener('mousemove', function (e) {
    stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
  });
  const linkElem = document.querySelectorAll('a:not(.no_stick_)');
  for (let i = 0; i < linkElem.length; i++) {
    linkElem[i].addEventListener('mouseover', function (e) {
        hovFlag = true;
        stalker.classList.add('is_active');
    });
    linkElem[i].addEventListener('mouseout', function (e) {
        hovFlag = false;
        stalker.classList.remove('is_active');
    });
  }
  </script>
  <!-- ▲▲ マウスストーカー ▲▲ -->
  <style>
/* 
=================================================================================

▼▼▼　マウスストーカー　▼▼▼

=================================================================================
*/
#mouse-stalker {
  pointer-events: none;
  position: fixed;
  top: -10px; 
  left: -10px; 
  width: 20px; 
  height: 20px;
  background: #fff;
  border-radius: 50%;
  transform: translate(0, 0);
  transition: transform 0.2s; 
  transition-timing-function: ease-out;
  z-index: 999;
  mix-blend-mode: difference;
}  
#mouse-stalker.is_active {
  top: -40px; 
  left: -40px;
  width: 80px;
  height: 80px;
  transition: 0.2s;
}
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ ループ文字 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area19"></i>
<section class="area19">
  <div class="bg_white pt50 pb50">
    <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">ループ文字</h3>
  
    <!-- ▼ ループ文字 ▼ -->
    <div class="roop_text_outer">
      <div class="roop_text b pop">あいうえおかきくけこさしすせそ</div>
      <div class="roop_text b pop">あいうえおかきくけこさしすせそ</div>
    </div>
    <!-- ▲ ループ文字 ▲ -->

<style>
/* 
=================================================================================

▼▼▼　ループ文字　▼▼▼

=================================================================================
*/

:root {
  --roop_box_font: 15; /* 文字数 */
  --roop_field: 100vw; /* ループ範囲横幅 */
}
.roop_text_outer {
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  pointer-events: none;
  width: var(--roop_field);
}
.roop_text {
  white-space: nowrap;
  animation: move02 backwards 5s infinite linear normal;
  -webkit-text-stroke: 1px #31A9B8;
  text-stroke: 1px #31A9B8;
  color: transparent;
  font-size: calc(var(--roop_field) / var(--roop_box_font));
  line-height: 1;
}
@keyframes move02 {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}
</style>

  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ ボタン見本 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area21"></i>
<section class="area21">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">ボタン見本</h3>
  <!-- ▼ sample ▼ -->
  <ul class="sample start top col3 wrap gap30 center">
    <li>
      <!-- ▼ btn01 ▼ -->
      <div class="btn01 fs18"><a href="#">ボタン０１</a>
      <!-- ▲ btn01 ▲ -->
    </li>
    <li>
      <!-- ▼ btn02 ▼ -->
      <div class="btn02 fs18">
        <a href="#">
          <span class="txt">ボタン０２</span>
          <span class="arrow">
            <span class="material-symbols-outlined">arrow_forward</span>
          </span>
        </a>
      </div>
      <!-- ▲ btn02 ▲ -->
    </li>
    <li>
      <!-- ▼ btn03 ▼ -->
      <div class="btn03 fs18"><a href="#">ボタン０３</a>
      <!-- ▲ btn03 ▲ -->
    </li>
    <li>
      <!-- ▼ btn04 ▼ -->
      <div class="btn04 fs18">
        <a href="#">
          <span class="txt">ボタン０４</span>
          <span class="arrow material-symbols-outlined">arrow_forward</span>
        </a>
      </div>
      <!-- ▲ btn04 ▲ -->
    </li>
    <li>
      <!-- ▼ btn05 ▼ -->
      <div class="btn05 fs18">
        <a href="#">
          <span class="txt">ボタン０５</span>
          <span class="material-symbols-outlined">arrow_forward</span>
        </a>
      </div>
      <!-- ▲ btn05 ▲ -->
    </li>
    <li>
      <!-- ▼ btn06 ▼ -->
      <div class="btn06 fs18">
        <a href="#">
          <span class="txt">ボタン０６</span>
          <span class="material-symbols-outlined">arrow_forward</span>
        </a>
      </div>
      <!-- ▲ btn06 ▲ -->
    </li>
    <li>
      <!-- ▼ btn07 ▼ -->
      <div class="btn07 fs18">
        <a href="#">ボタン０７</a>
      </div>
      <!-- ▲ btn07 ▲ -->
    </li>
    <li>
      <!-- ▼ btn08 ▼ -->
      <div class="btn08 fs18">
        <a href="#">ボタン０８</a>
      </div>
      <!-- ▲ btn08 ▲ -->
    </li>
    <li>
      <!-- ▼ btn09 ▼ -->
      <div class="btn09 fs18">
        <a href="#">ボタン０９</a>
      </div>
      <!-- ▲ btn09 ▲ -->
    </li>
  </ul>
  <!-- ▲ sample ▲ -->
   </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ マテリアルアイコン ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area22"></i>
<section class="area22">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">マテリアルアイコン</h3>
  <!-- ▼ マテリアルアイコン ▼ -->
  <ul class="gap40 start wrap fs60">
    <li><span class="material-symbols-outlined">search</span></li>
    <li><span class="material-symbols-outlined">done</span></li>
    <li><span class="material-symbols-outlined">navigate_next</span></li>
    <li><span class="material-symbols-outlined">arrow_forward_ios</span></li>
    <li><span class="material-symbols-outlined">open_in_new</span></li>
    <li><span class="material-symbols-outlined">arrow_back_ios_new</span></li>
    <li><span class="material-symbols-outlined">navigate_before</span></li>
    <li><span class="material-symbols-outlined">arrow_circle_right</span></li>
    <li><span class="material-symbols-outlined">arrow_right</span></li>
    <li><span class="material-symbols-outlined">arrow_left</span></li>
    <li><span class="material-symbols-outlined">add</span></li>
    <li><span class="material-symbols-outlined">remove</span></li>
    <li><span class="material-symbols-outlined">clear</span></li>
    <li><span class="material-symbols-outlined">play_circle</span></li>
    <li><span class="material-symbols-outlined">pause_circle_filled</span></li>
    <li><span class="material-symbols-outlined">call</span></li>
    <li><span class="material-symbols-outlined">email</span></li>
    <li><span class="material-symbols-outlined">arrow_forward</span></li>
    <li><span class="material-symbols-outlined">phone_iphone</span></li>
    <li><span class="material-symbols-outlined">error_outline</span></li>
    <li><span class="material-symbols-outlined">warning_amber</span></li>
    <li><span class="material-symbols-outlined">arrow_upward</span></li>
    <li><span class="material-symbols-outlined">arrow_downward</span></li>
    <li><span class="material-symbols-outlined">arrow_back</span></li>
    <li><span class="material-symbols-outlined">expand_less</span></li>
    <li><span class="material-symbols-outlined">expand_more</span></li>
  </ul>
  <!-- ▲ マテリアルアイコン ▲ -->

  <h3 style="font-size: 3rem; text-align: center; margin-top: 3em; margin-bottom: 1em;">マテリアルアイコン（疑似要素版）</h3>
  <!-- ▼ マテリアルアイコン ▼ -->
  <ul class="gap40 start wrap fs60">
    <li><span class="gi_01 material-symbols-outlined"></span></li>
    <li><span class="gi_02 material-symbols-outlined"></span></li>
    <li><span class="gi_03 material-symbols-outlined"></span></li>
    <li><span class="gi_04 material-symbols-outlined"></span></li>
    <li><span class="gi_05 material-symbols-outlined"></span></li>
    <li><span class="gi_06 material-symbols-outlined"></span></li>
    <li><span class="gi_07 material-symbols-outlined"></span></li>
    <li><span class="gi_08 material-symbols-outlined"></span></li>
    <li><span class="gi_09 material-symbols-outlined"></span></li>
    <li><span class="gi_10 material-symbols-outlined"></span></li>
    <li><span class="gi_11 material-symbols-outlined"></span></li>
    <li><span class="gi_12 material-symbols-outlined"></span></li>
    <li><span class="gi_13 material-symbols-outlined"></span></li>
    <li><span class="gi_14 material-symbols-outlined"></span></li>
    <li><span class="gi_15 material-symbols-outlined"></span></li>
    <li><span class="gi_16 material-symbols-outlined"></span></li>
    <li><span class="gi_17 material-symbols-outlined"></span></li>
    <li><span class="gi_18 material-symbols-outlined"></span></li>
    <li><span class="gi_19 material-symbols-outlined"></span></li>
    <li><span class="gi_20 material-symbols-outlined"></span></li>
    <li><span class="gi_21 material-symbols-outlined"></span></li>
    <li><span class="gi_22 material-symbols-outlined"></span></li>
    <li><span class="gi_23 material-symbols-outlined"></span></li>
    <li><span class="gi_24 material-symbols-outlined"></span></li>
    <li><span class="gi_25 material-symbols-outlined"></span></li>
    <li><span class="gi_26 material-symbols-outlined"></span></li>
  </ul>
  <style>
    .gi_01:before { content: "\e8b6"; }
    .gi_02:before { content: "\e876"; }
    .gi_03:before { content: "\e409"; }
    .gi_04:before { content: "\e5e1"; }
    .gi_05:before { content: "\e89e"; }
    .gi_06:before { content: "\e2ea"; }
    .gi_07:before { content: "\e408"; }
    .gi_08:before { content: "\eaaa"; }
    .gi_09:before { content: "\e5df"; }
    .gi_10:before { content: "\e5de"; }
    .gi_11:before { content: "\e145"; }
    .gi_12:before { content: "\e15b"; }
    .gi_13:before { content: "\e14c"; }
    .gi_14:before { content: "\e038"; }
    .gi_15:before { content: "\e035"; }
    .gi_16:before { content: "\e0b0"; }
    .gi_17:before { content: "\e0be"; }
    .gi_18:before { content: "\e5c8"; }
    .gi_19:before { content: "\e325"; }
    .gi_20:before { content: "\e001"; }
    .gi_21:before { content: "\f083"; }
    .gi_22:before { content: "\e5d8"; }
    .gi_23:before { content: "\e5db"; }
    .gi_24:before { content: "\e5c4"; }
    .gi_25:before { content: "\e5ce"; }
    .gi_26:before { content: "\e5cf"; }
  </style>
  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ よくある質問 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area23"></i>
<section class="area23">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">よくある質問</h3>
  
  <!-- ▼ aco_box ▼ -->
  <ul class="aco_box fs14">
    <!-- aco_box_li -->
    <li class="aco_box_li">
      <div class="aco_box_ttl b">
        <div class="content_box">
          <span class="ttl red b fs34 pop">Q</span>
          <span class="txt fs20">複数設置対応</span>
          <span class="ico red fs20"></span>
        </div>
      </div>
      <div class="aco_box_btn">
        <div class="aco_box_target">
          <div class="content_box">
            <span class="ttl red b fs34 pop">A</span>
            <span class="txt">closeボタン不要なら、JSの発火ボタンを「aco_box_target」に変更で良い。ただし、リンクの重複には注意</span>
          </div>
        </div>
        <div class="close">
          <span class="txt fs20 b">閉じる</span>
          <sp×n class="img">×</sp×n>
        </div>
      </div>
    </li>
  </ul>
  <!-- ▲ aco_box ▲ -->
<style>
/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
　▼▼　ul.aco_box　▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
ul.aco_box > li {
  background: #fff;
  border: 2px solid #D22A37;
  border-radius: 1em;
}
ul.aco_box > li + li {
  margin-top: 1em;
}
ul.aco_box > li .aco_box_ttl {
  position: relative;
  cursor: pointer;
  padding: 2em 0 2em 0;
}
ul.aco_box > li .content_box {
  padding: 0 2em;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 1em;
}
ul.aco_box > li .content_box .ttl {
  text-align: center;
  width: 1em;
  display: block;
  line-height: 1;
}
ul.aco_box > li .content_box .txt {
  flex: 1;
}
ul.aco_box > li .content_box .ico {
  text-align: center;
  width: 1em;
}
ul.aco_box > li .content_box .ico:after {
  content: "＋";
  display: block;
  width: 1em;
  height: 1em;
  top: 50%;
  pointer-events: none;
}
ul.aco_box > li.open .aco_box_ttl .content_box .ico:after {
  content: "－";
}
ul.aco_box > li .aco_box_btn {
  position: relative;
  margin: 0;
}
ul.aco_box > li .aco_box_btn .aco_box_target {
  position: relative;
}
/* 閉じボタン */
ul.aco_box > li .aco_box_btn .close {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5em;
  cursor: pointer;
  padding: 1em 0;
}
ul.aco_box > li .aco_box_btn .close .img {
  text-align: center;
  line-height: 1.5em;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #D22A37;
  color: #fff;
}
/* ▲ ul.aco_box ▲ */
</style>
  <script>
    $("ul.aco_box > li .aco_box_btn").hide();
    $("ul.aco_box > li .aco_box_ttl").on("click", function(e) {
      $list = $(this).parent();
      $('.aco_box_btn',$list).slideToggle(500);
      if($list.hasClass('open')) {
        $list.removeClass('open');
      } else {
        $list.addClass('open');
      }
    });
    $("ul.aco_box > li .close").on("click", function(e) {
      $list02 = $(this).parents('.aco_box_li');
      $('.aco_box_btn',$list02).slideToggle(500);
      $list02.removeClass('open');
    });
  </script>
  </div>
</section>


<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ モーダル画像 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area24"></i>
<section class="area24">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">モーダル画像</h3>
  <!-- ▼ モーダル画像 ▼ -->
  <div class="modal">
    <div class="modal_content">
        <div class="modal_close_box">
            <div class="modal_close"></div>
        </div>
    </div>
  </div>
  <div class="center"><img class="modal_img" width="300" src="https://www.excrie.co.jp/img/ogimage.jpg"></div>
  <!-- ▲ モーダル画像 ▲ -->
  <style>
    .modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal_img {
  cursor: pointer;
}

.modal_content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 90%;
  max-width: 1000px;
  height: 80%;
}

.modal_content img {
  width: 100%;
 height: 100%;
  object-fit: contain;
}


.modal_close {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  top: -50px;
  right: 0px;
  transition: 0.3s;
}

.modal_close:hover {
  opacity: 0.7;
}

.modal_close::before, .modal_close::after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 2px;
  margin-top: -1px;
  margin-left: -50%;
  background-color: #fff;
}

.modal_close::before {
  transform: rotate(45deg);
}

.modal_close::after {
  transform: rotate(-45deg);
}

.modal_close_box {
  position: relative;
}

.lock {
  overflow: hidden !important;
}
  </style>
  <script>
    $(function () {
      //モーダルウィンドウを表示する
      $(".modal_img").click(function () {
        $(".modal").fadeIn();
        $(".modal_content").fadeIn();
        var imgSrc = $(this).attr("src");
        $(".modal_content").html('<img src="' + imgSrc + '">');
        //.modal_contentの高さを取得
        var height = $(".modal_content").height();
        //画像の高さを取得
        var imgHeight = $(".modal_content img").height();
        //サイトの背景をスクロールさせない
        $("body").addClass("lock");
        $("html").addClass("lock");
      });
      //モーダルウィンドウを閉じる
      $(".modal").click(function () {
        $(".modal").fadeOut();
        $(".modal_content").fadeOut();
        //サイトの背景をスクロールさせる
        $("body").removeClass("lock");
        $("html").removeClass("lock");
        //.modal_contentのoverflow-y:scrollを削除
        $(".modal_content").css("overflow-y", "visible");
      });
    });
  </script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ News一例 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area25"></i>
<section class="area25">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">News一例</h3>
  <!-- ▼ top_news_box ▼ -->
  <div class="top_news_box">
    <div class="left_box w200">
      <h3 class="fs60">News</h3>
      <div class="btn03 fs14 m center">
        <a href="contact/">
          <span class="txt">ニュース一覧へ</span>
        </a>
      </div>
    </div>
    <div class="right_box">
      <!-- ▼ top_news ▼ -->
      <ul class="top_news fs14 m">
        <li>
          <div class="tag"><a class="white bg_black">婚活キャンペーン</a></div>
          <div class="day">2024.00.00</div>
          <div class="ttl"><a>お知らせが入ります。お知らせが入ります。お知らせが入ります。お知らせが入ります。お知らせが入ります。お知らせが入ります。お知らせが入ります。お知らせが入ります。</a></div>
        </li>
      </ul>
      <!-- ▲ top_news ▲ -->
    </div>
  </div>
  <!-- ▲ top_news_box ▲ -->
  <style>
/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
　▼▼　top_news　▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
@media screen and (min-width: 769px) {/* PC用 */
  .top_news_box {
    display: flex;
    align-items: stretch;
    justify-content: flex-start;
    gap: 7rem;
  }
  .top_news_box .left_box {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: space-between;
    gap: 2rem;
  }
}
.top_news_box .right_box {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
@media screen and (max-width: 768px) {/* SP用 */
  .top_news_box .btn03 {
    display: table;
    width: 60vw;
    margin-left: auto;
    margin-right: auto;
  }
}
/* ▼ ul.top_news ▼ */
ul.top_news > li {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 3rem;
  border-bottom: 2px dotted #C6C7C7;
  padding: 1.5em 0;
}
@media screen and (max-width: 768px) {/* SP用 */
  ul.top_news > li {
    flex-wrap: wrap;
  }
}
ul.top_news > li .tag a {
  width: 10em;
  display: block;
  text-align: center;
  border-radius: 50vmin;
}
ul.top_news > li .ttl {
  width: 100%;
}
ul.top_news > li .ttl a {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1; /* 任意の行数を指定 */
}
/* ▲ ul.top_news ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ レスポンシブ自動切り替え画像 ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area26"></i>
<section class="area26">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">レスポンシブ自動切り替え画像</h3>
  <!-- ▼ レスポンシブ自動切り替え画像 ▼ -->
  <picture>
    <!-- SP -->
    <source srcset="https://placehold.jp/24/cc9999/993333/200x50.png" media="(max-width: 768px)" type="image/png">
    <!-- PC -->
    <img src="https://placehold.jp/24/cc9999/993333/500x300.png" alt="">
  </picture>
  <!-- ▲ レスポンシブ自動切り替え画像 ▲ -->
  <style></style>
  <script></script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 画像アニメーション ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area27"></i>
<section class="area27">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">画像アニメーション</h3>
  <!-- ▼ sample start top col3 wrap gap30 center ▼ -->
  <ul class="sample start top col3 wrap gap30 center">
    <li>
      <!-- ▼ sample_anime01 ▼ -->
      <a class="sample_anime01">
        <span class="bg"><img src="https://placehold.jp/24/cc9999/993333/500x300.png" alt=""></span>
        <span class="line01 bg_black"></span>
        <span class="line02 bg_black"></span>
        <span class="line03 bg_black"></span>
        <span class="line04 bg_black"></span>
      </a>
      <!-- ▲ sample_anime01 ▲ -->
      <style>
      /* ▼ sample_anime01 ▼ */
      .sample_anime01 {
        position: relative;
        display: block;
      }
      .sample_anime01:hover .line01 {
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 100%;
        display: block;
        animation: line01_move .5s 1;
      }
      .sample_anime01:hover .line02 {
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        height: 3px;
        display: block;
        animation: line02_move .5s 1;
      }
      .sample_anime01:hover .line03 {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3px;
        display: block;
        animation: line02_move .5s 1;
      }
      .sample_anime01:hover .line04 {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 3px;
        height: 100%;
        display: block;
        animation: line01_move .5s 1;
      }
      @keyframes line01_move {
        0% { height: 0; }
        100% { height: 100%; }
      }
      @keyframes line02_move {
        0% { width: 0; }
        100% { width: 100%; }
      }
      /* ▲ sample_anime01 ▲ */
      </style>
    </li>
    <li>
      <!-- ▼ sample_anime02 ▼ -->
      <a class="sample_anime02">
        <div class="content_box">
          <div class="content_box_in fs16">
            <p>手直し手直し手直し手直し手直し手直し手直し手直し手直し手直し手直し手直し</p>
            <p>手直し手直し手直し手直し手直し手直し手直し手直し手直し手直し手直し</p>
          </div>
        </div>
        <div class="bg_box"><img src="https://www.excrie.co.jp/img/ogimage.jpg" alt=""></div>
      </a>
      <!-- ▲ sample_anime02 ▲ -->
      <style>
      /* ▼ sample_anime02 ▼ */
      .sample_anime02 {
        position: relative;
        display: block;
        overflow: hidden;
      }
      .sample_anime02 .content_box {
        position: relative;
        padding: 4rem;
        z-index: 1;
      }
      .sample_anime02 .bg_box {
        transition: 1s all;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      .sample_anime02 .bg_box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 1s all;
        transform: scale(1);
      }
      .sample_anime02:hover .bg_box img {
        transform: scale(1.3);
      }
      /* ▲ sample_anime02 ▲ */
      </style>
    </li>
    <li>
      <div class="curtain-anime">
        <div class="curtain-anime_child">
          <a><img src="https://placehold.jp/24/cc9999/993333/400x300.png" alt=""></a>
        </div>
      </div>
      <style>
        /* ▼ curtain-anime ▼ */
        :root {
          --curtain-anime-time: 1s; /* アニメ時間 */
        }
        .curtain-anime {
          position: relative;
        }
        .curtain-anime.is-active:before {
          content: "";
          position: absolute;
          z-index: 1;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: #000;
          animation: curtain-anime01 var(--curtain-anime-time) ease forwards;
          pointer-events: none;
        }
        @keyframes curtain-anime01 {
          0% { 
            max-width: 0;
            left: 0;
          }
          50% { 
            max-width: 100%;
            left: 0;
          }
          100% { 
            max-width: 0;
            left: 100%;
          }
        }
        .curtain-anime.is-active > .curtain-anime_child {
          position: relative;
          z-index: 0;
          animation: curtain-anime02 var(--curtain-anime-time) ease forwards;
        }
        @keyframes curtain-anime02 {
          0% {
            opacity: 0;
          }
          50% { 
            opacity: 0;
          }
          51% { 
            opacity: 100;
          }
          100% { 
            opacity: 100;
          }
        }
        /* ▲ curtain-anime ▲ */
      </style>
      <script>
      function open_bnr02() {
        $('.curtain-anime').each(function() {
          var hit = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var wHeight = $(window).height();
          var customTop = 100;
          if (typeof $(this).data('curtain-anime') !== 'undefined') {
            customTop = $(this).data('curtain-anime');
          }
          if (hit + customTop < wHeight + scroll) {
            $(this).addClass("is-active");
          }
        });
      }
      $(window).scroll(function() {
        open_bnr02();
      });
      $(window).on('load', function() {
        open_bnr02();
      });
      </script>
    </li>
  </ul>
  <!-- ▲ sample start top col3 wrap gap30 center ▲ -->
  
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 吹き出しデザイン ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area28"></i>
<section class="area28">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">吹き出しデザイン</h3>
  <!-- ▼ 吹き出しデザイン ▼ -->
  <!-- 右用 -->
  <div class="fukidashi v_right mt20">
    <div class="fukidashi_box">
      <p class="fs20">右用吹き出しデザイン</p>
    </div>
  </div>
  <!-- 左用 -->
  <div class="fukidashi v_left mt20">
    <div class="fukidashi_box">
      <p class="fs20">左用吹き出しデザイン</p>
    </div>
  </div>
  <!-- ▲ 吹き出しデザイン ▲ -->
  <style>
/* 吹き出しベース */
.fukidashi {
position: relative;
border: 5px solid #c8c8c8;
}
.fukidashi_box {
  background-color: #ffffff;
  padding: 1rem 2rem;
  position: relative;
  z-index: 1;
}
.fukidashi:before,
.fukidashi:after {
content: " ";
pointer-events: none;
position: absolute;
width: 2rem;
height: 2rem;
}
/* 右用 */
.v_right:before,
.v_right:after {
  top: 50%;
  left: 0%;
  transform: translate(-100%, -50%);
  clip-path: polygon(100% 0, 0 50%, 100% 100%);
  background: #c8c8c8;
}
.v_right:after {
  left: 10px;
  background: #fff;
}
/* 左用 */
.v_left:before,
.v_left:after {
  top: 50%;
  left: 100%;
  transform: translate(0, -50%);
  clip-path: polygon(0 0, 0 100%, 100% 50%);
  background: #c8c8c8;
}
.v_left:after {
  left: calc(100% - 10px);
  background: #fff;
}
  </style>
  <script></script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ サイドスクロール ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area29"></i>
<section class="area29">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">サイドスクロール</h3>
  <p class="fs20 mb20">※画面右の追従してる数字たち。使う場合は数指定の値やid名を各々調整。</p>
  <!-- ▼ サイドスクロール ▼ -->
  <i id="side_position"></i>
  <section class="pc side_position">
    <div class="side_box animate__animated animate__fadeInUp">
      <div class="side_txt01 fs12 lh100p">
          <p><a href="#footer">SCROLL&nbsp;<span class="material-symbols-outlined">navigate_next</span></a></p>
      </div>
      <!-- ▼ side_circle ▼ -->
      <ul id="side_circle" class="side_circle fs10">
      </ul>
      <!-- ▲ side_circle ▲ -->
      <div class="side_txt02 fs12 lh100p">
          <p><a href="#"><span class="material-symbols-outlined">navigate_before</span>&nbsp;Page Top</a></p>
      </div>
    </div>
  </section>
  <!-- ▲ サイドスクロール ▲ -->
  <style>
    /* 
=================================================================================

▼▼▼　side_position　▼▼▼

=================================================================================
*/

.side_position {
  position: fixed;
  z-index: 5;
  right: 2rem;
  bottom: 0;
  height: 100%;
  pointer-events: none;
  display: flex;
  align-items: center;
  justify-content: center;
}

.side_position > * {
  pointer-events: all;
}

/* ul.side_circle */
ul.side_circle {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2em;
  flex-wrap: wrap;
  flex-direction: column;
  padding: 2em 0;
}
ul.side_circle:before {
  content: "";
  display: block;
  width: 0;
  height: 100%;
  border-left: 1px dashed #e65550;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 50%;
}
ul.side_circle > li > a {
  width: 2em;
  height: 2em;
  line-height: 2em;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #DBD2D2;
  color: #fff;
  transition: .5s all;
  transform: scale(1);
}
ul.side_circle > li > a.big {
  background: #e65550;
  transform: scale(1.5);
}
/* ▲ ul.side_circle ▲ */

.side_position .side_txt01,
.side_position .side_txt02 {
  height: 8em;
  width: 1em;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-writing-mode: vertical-rl;
  -ms-writing-mode: tb-rl;
  writing-mode: vertical-rl;
  display: table;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.side_position .side_txt01 a:hover,
.side_position .side_txt02 a:hover {
  color: #e65550;
}
  </style>
  <!-- ▼ サイドスクロール ▼ -->
  <script>
    var block_pt = 20; // 数指定
    for (let i = 0; i < block_pt; i++) {
      $('.side_circle').append('<li><a id="area'+i+'_target" href="#area'+i+'">'+i+'</a></li>')
    };
    $(window).scroll(function () {
      for (let i = 0; i < block_pt; i++) {
        // const num = numbers[i];
        var tage = $('#area'+i+'_target');
        var pos = $('#area'+i).offset();
        var end_pos = $('#area'+(i+1)).offset();
        if ($(this).scrollTop() > (pos.top - 150) && $(this).scrollTop() < (end_pos.top - 150)) {/* 開始位置上端と終了位置上端の間 */
        tage.addClass("big");
        } else {/* それ以外の場合 */
        tage.removeClass("big");
        }
      }
    });
    </script>
    <!-- ▲ side_position ▲ -->
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ サンプルテーブル ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area30"></i>
<section class="area30">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">サンプルテーブル</h3>
  <!-- ▼ サンプルテーブル ▼ -->
  <table class="default_table fs14">
    <tr>
      <th>会社名</th>
      <td>株式会社会社名会社名</td>
    </tr>
    <tr>
      <th>代　表</th>
      <td>会社名会社名会社名会社名</td>
    </tr>
    <tr>
      <th>本社所在地</th>
      <td>会社名会社名会社名会社名会社名会社名</td>
    </tr>
    <tr>
      <th>事業内容</th>
      <td>会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名会社名</td>
    </tr>
    <tr>
      <th>資本金</th>
      <td>1,000万円</td>
    </tr>
  </table>
  <!-- ▲ サンプルテーブル ▲ -->
  <style>
    /* ▼ table.default_table ▼ */
    table.default_table {
      border-collapse: separate;
      width: 100%;
      border-top: 1px solid #45322B;
      border-spacing: 0;
    }

    table.default_table th {
      font-weight: bold;
      background: #FBF8F3;
      padding: 1.5em 2em;
      text-align: left;
      vertical-align: middle;
      border-bottom: 1px solid #45322B;
      width: 30rem;
    }

    table.default_table td {
      background: #fff;
      padding: 1.5em 2em;
      text-align: left;
      vertical-align: top;
      border-bottom: 1px solid #45322B;
    }
    @media screen and (max-width: 768px) {/* SP用 */
      table.default_table th,
      table.default_table td {
        display: block;
        width: 100%;
      }  
    }
    /* ▲ table.default_table ▲ */
  </style>
  <script></script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ 番号付きリスト ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area31"></i>
<section class="area31">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">番号付きリスト</h3>
  <!-- ▼ 番号付きリスト ▼ -->
  <!-- ▼ num_list ▼ -->
  <ul class="num_list fs14">
    <li>
      <p>当社の事業体制を考慮し、個人情報を取扱う部門ごとに管理責任者をおき、法令等に準拠した適法且つ適切な方法で個人情報を取得、利用及び提供します。個人情報の利用に際しては、特定した利用目的の達成に必要な範囲を超えた目的外利用を行わないこと、及びそのための適切な措置を講じます。</p></li>
    <li>
      <p>個人情報を取扱う業務において、個人情報の保護に関する法令及び国が定める指針その他規範を遵守するとともに、社内規程に準拠して行動します。</p></li>
  </ul>
  <!-- ▲ num_list ▲ -->
   <br>
   <br>
   <br>
  <!-- ▼ num_list02 ▼ -->
  <ol class="num_list02 fs14">
    <li>
      <p>アイ＆リンクで展開する各種サービスに関するご案内、お問い合わせ対応、サービスの連絡、各種資料・挨拶状の送付</p>
    </li>
    <li>
      <p>当社グループ会社が提供する各種サービスに関する案内、お問い合わせ対応、サービスの連絡、各種資料・挨拶状の送付</p>
    </li>
  </ol>
  <!-- ▲ num_list02 ▲ -->
  <!-- ▲ 番号付きリスト ▲ -->
  <style>
/* 
=================================================================================

▼▼▼　番号リスト　▼▼▼

=================================================================================
*/
/* .num_list */
.num_list {
  counter-reset: number 0;           /* number のカウンタを 0 にセット */
}
.num_list > li {
  position: relative;
  display: flex;
  align-items: stretch;
  justify-content: flex-start;
  gap: 1em;
}
.num_list > li:before {
  counter-increment: number 1;      /* number カウンタを増加 */
  content: counter(number);      /* 表示形式を指定 */
  font-size: 1.5em;
  width: 1.5em;
  height: 1.5em;
  line-height: 1.5em;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #fff;
  background: #D22A37;
  border-radius: 0.6rem;
}
.num_list > li p {
  flex: 1;
  margin-block: calc((1em - 1lh) / 2);
}
.num_list > li + li {
  margin-top: 2.5em;
}
/* ▲ .num_list ▲ */

/* .num_list02 */
.num_list02 {
  counter-reset: number02 0;/* number のカウンタを 0 にセット */
}
.num_list02 > li {
  position: relative;
  display: flex;
  align-items: stretch;
  justify-content: flex-start;
  gap: 0.5em;
}
.num_list02 > li:before {
  counter-increment: number02 1;/* number カウンタを増加 */
  content: counter(number02)".";/* 表示形式を指定 */
  width: 1em;
  text-align: right;
}
.num_list02 > li p {
  flex: 1;
}
.num_list02 > li + li {
  /* margin-top: 2.5em; */
}
/* ▲ .num_list02 ▲ */
  </style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ モーダルウィンドウ ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area32"></i>
<section class="area32">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">モーダルウィンドウ</h3>
  <!-- ▼ モーダルウィンドウ ▼ -->
  <!-- ▼ p-sample-list ▼ -->
  <ul class="p-sample-list fs16">
    <li>
      <div class="p-sample-list-box">
        <div class="p-sample-list-box-img"><img src="https://www.excrie.co.jp/img/ogimage.jpg" alt=""></div>
        <div class="p-sample-list-box-txt">
          <div class="ttl">UHA味覚糖<br>株式会社様</div>
          <p>Instagram・<br>TikTok プロモーション</p>
        </div>
      </div>
      <div class="btn"><a>詳細を見る</a></div>
    </li>
    <li>
      <div class="p-sample-list-box">
        <div class="p-sample-list-box-img"><img src="https://www.excrie.co.jp/img/ogimage.jpg" alt=""></div>
        <div class="p-sample-list-box-txt">
          <div class="ttl">UHA味覚糖<br>株式会社様</div>
          <p>Instagram・<br>TikTok プロモーション</p>
        </div>
      </div>
      <div class="btn"><a>詳細を見る</a></div>
    </li>
  </ul>
  <!-- ▲ p-sample-list ▲ -->
  <!-- ▼ modal_box_outer ▼ -->
  <ul class="modal_box_outer fs16">
    <li>
      <div class="modal_box">
        <div class="bg"></div>
        <div class="con_box">
          <div class="img_box"><img src="https://www.excrie.co.jp/img/ogimage.jpg"></div>
          <div class="txt_box">
            <div class="ttl">UHA味覚糖株式会社様</div>
            <p class="txt01">PR商品サービス</p>
            <p class="txt02">UHAグミサプリ</p>
            <p class="txt01">施策内容</p>
            <p class="txt02">Instagram・TikTok プロモーション</p>
          </div>
          <div class="close">×</div>
        </div>
      </div>
    </li>
    <li>
      <div class="modal_box">
        <div class="bg"></div>
        <div class="con_box">
          <div class="img_box"><img src="https://www.excrie.co.jp/img/ogimage.jpg"></div>
          <div class="txt_box">
            <div class="ttl">UHA味覚糖株式会社様</div>
            <p class="txt01">PR商品サービス</p>
            <p class="txt02">UHAグミサプリ</p>
            <p class="txt01">施策内容</p>
            <p class="txt02">Instagram・TikTok プロモーション</p>
          </div>
          <div class="close">×</div>
        </div>
      </div>
    </li>
  </ul>
  <!-- ▲ modal_box_outer ▲ -->
  <!-- ▲ モーダルウィンドウ ▲ -->
<style>
/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
　▼▼　モーダルウィンドウ　▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
.p-sample {
  position: relative;
}
/* .p-sample-list */
.p-sample-list {
  display: flex;
  align-items: stretch;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
  line-height: 1.2;
}
.p-sample-list > li {
  width: calc((99.99% - 4rem) / 3);
}
.p-sample-list > li img {
  max-width: 100%;
}
.p-sample-list > li .ttl {
  color: #2887D1;
  font-weight: bold;
  margin-bottom: 1em;
}
.p-sample-list-box {
  border: 1px solid;
  border-radius: 2rem;
  overflow: hidden;
}
.p-sample-list > li .btn > a {
  border-radius: 50vmin;
  text-align: center;
  background: #FFEA00;
  display: table;
  margin: 0 auto;
  padding: 0.5em 2em;
  margin-top: 1em;
  font-weight: bold;
  line-height: 1.2;
}
.p-sample-list-box-txt {
  padding: 2em;
}
/* ▲ .p-sample-list ▲ */
/* ul.modal_box_outer */
ul.modal_box_outer {
}
ul.modal_box_outer > li {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: 99;
  transform: scale(0);
  transition: 1s all;
}
ul.modal_box_outer > li.active {
  transform: scale(1);
}
ul.modal_box_outer > li .modal_box {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
ul.modal_box_outer > li .bg {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
ul.modal_box_outer > li .con_box {
  background: #fff;
  display: flex;
  align-items: stretch;
  justify-content: flex-start;
  gap: 2rem;
  padding: 3.571rem;
  border-radius: 2.142rem;
  position: relative;
  filter: drop-shadow(10px 10px 10px rgba(0,0,0,0.2));
  border: 2px solid #2887D1;
  animation: text_anime_off .5s ease-out forwards;
  max-width: 90vw;
  max-height: 90vh;
  overflow-y: auto;
}
@media screen and (max-width: 768px) {/* SP用 */
  .p-sample-list > li {
    width: calc((99.99% - 2rem) / 2);
  }
  ul.modal_box_outer > li .con_box {
    flex-wrap: wrap;
  }
  ul.modal_box_outer > li .con_box .img_box {
    width: 100%;
    text-align: center;
  }
  ul.modal_box_outer > li .con_box .img_box img {
    margin: 0 auto;
    display: table;
  }
  ul.modal_box_outer > li .con_box .txt_box {
    width: 100%;
  }
}
ul.modal_box_outer > li.active .con_box {
  animation: text_anime_on 2s ease-out forwards;
  opacity: 0;
  position: relative;
}
@keyframes text_anime_on {
  0% {opacity:0;}
  50% {opacity:0;}
  100% {opacity:1;}
}
@keyframes text_anime_off {
  0% {opacity:1;}
  100% {opacity:0;}
}
ul.modal_box_outer > li.active .con_box .close {
  position: absolute;
  top: 2rem;
  right: 2rem;
  width: 4rem;
  height: 4rem;
  font-size: 4rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
ul.modal_box_outer > li .con_box .img_box {
  width: 50%;
}
ul.modal_box_outer > li .con_box .txt_box {
  padding-top: 10%;
  line-height: 1.2;
}
ul.modal_box_outer > li .con_box .txt_box .ttl {
  color: #2887D1;
  margin-bottom: 1em;
  font-weight: bold;
}
ul.modal_box_outer > li .con_box .txt_box .txt01 {
  color: #2887D1;
  margin-top: 1em;
  font-weight: bold;
}
ul.modal_box_outer > li .con_box .txt_box .txt02 {
  font-weight: bold;
}
.lock {
  overflow: hidden !important;
}
/* ▲ ul.modal_list ▲ */
</style>
  <script>
  $(function() {
    var tab = $('.p-sample-list > li .btn a'),
    content = $('.modal_box_outer > li');
    tab.on('click', function() {
      //何番目のメニューがクリックされたのか、番号を取得する
      var idx = tab.index($(this));
      //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
      tab.removeClass("active").eq(idx).addClass("active");
      //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
      content.removeClass("active").eq(idx).addClass("active");
      //サイトの背景をスクロールさせない
      $("body").addClass("lock");
      $("html").addClass("lock");
    });
    //モーダルウィンドウを閉じる
    $('.modal_box_outer > li .close').on('click', function() {
      //「active」クラスを削除
      $(this).closest(".active").removeClass("active")
      //サイトの背景をスクロールさせない
      $("body").removeClass("lock");
      $("html").removeClass("lock");
    });
    $('.modal_box_outer > li .bg').on('click', function() {
      //「active」クラスを削除
      $(this).closest(".active").removeClass("active")
      //サイトの背景をスクロールさせない
      $("body").removeClass("lock");
      $("html").removeClass("lock");
    });
  });
  </script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ ページネーション ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area33"></i>
<section class="area33">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">ページネーション</h3>
  <p class="fs20 red mb20">※見た目ようだから機能はついてないよ！</p>
  <!-- ▼ ページネーション ▼ -->
  <div class="pagination mt50">
    <div class="pnavi fs16">
      <span aria-current="page" class="page-numbers current">1</span>
      <a class="page-numbers" href="">2</a>
      <a class="page-numbers" href="">3</a>
      <a class="next page-numbers" href="">次へ</a>
    </div>
  </div>
  <!-- ▲ ページネーション ▲ -->
<style>
.pnavi {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}
.pnavi > .page-numbers {
  width: 3em;
  height: 3em;
  border-radius: 50vmin;
  display: flex;
  align-items: center;
  justify-content: center;
}
.pnavi > span {
  background: #38384E;
  color: #fff;
}
.pnavi > a {
  background: #F0F0F2;
}
.pnavi > span:hover,
.pnavi > a:hover {
  background: #38384E;
  color: #fff;
  opacity: 1;
  filter: alpha(opacity=100);
}
</style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ WP投稿記事テンプレートレイアウト（#detailed） ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area34"></i>
<section class="area34">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">WP投稿記事テンプレートレイアウト（#detailed）</h3>
  <p class="fs20 red mb20">※WPのブログ記事装飾用css群。<br>ID「detailed」内の「contents」class内に記載していく仕様。<br>見た目ようだから機能はついてないよ！</p>
  <!-- ▼ WP投稿記事テンプレートレイアウト（#detailed） ▼ -->
  <div id="detailed" class="mt50">
    <div class="contents fs16 lh180p">
    <h2>私立学校の先生になるには</h2>
    <p>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</p>
    <h3>私立学校の先生になるには</h3>
    <p>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</p>
    <h4>私立学校の先生になるには</h4>
    <p>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</p>
    <h5>私立学校の先生になるには</h5>
    <p>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</p>
    <h6>私立学校の先生になるには</h6>
    <p>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</p>
    <p><img src="https://placehold.jp/24/cc9999/993333/500x300.png" alt=""></p>
    <ol>
      <li>私立学校の先生になるには</li>
      <li>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</li>
    </ol>
    <ul>
      <li>私立学校の先生になるには</li>
      <li>公立学校の採用条件は、各都道府県および政令指定都市の教育委員会が行う、教員採用選考試験に合格することです。試験は自治体ごとにまとめて行われ、合格すると、各自治体のもとで働く地方公務員として管轄の学校に配属されるシステムになっています。</li>
    </ul>
    </div>
  </div>
  <!-- ▲ WP投稿記事テンプレートレイアウト（#detailed） ▲ -->
<style>
/* ▼▼▼▼▼▼ 以下#detailed .contents内部のデザイン ▼▼▼▼▼▼ */

/* 見出し2 */
#detailed .contents h2 {
  background: #38384E;
  color: #fff;
  font-size: 200%;
  font-weight: bold;
  padding: 0.2em 0.5em;
}

/* 見出し3 */
#detailed .contents h3 {
  background: #F0F0F2;
  font-size: 150%;
  font-weight: bold;
  padding: 0.5em;
}

/* 見出し4 */
#detailed .contents h4 {
  font-size: 120%;
  font-weight: bold;
  padding-bottom: 0.2em;
  border-bottom: 3px solid #38384E;
}

/* 見出し5 */
#detailed .contents h5 {
  border: 1px solid;
  padding: 1em 2em;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/* 見出し6 */
#detailed .contents h6 {
  background: #F0F0F2;
  border-left: 3px solid #009B79;
  border-right: 3px solid #009B79;
  padding: 3em;
}

/* リスト */
#detailed .contents ol,
#detailed .contents ul {
  padding: 2em 3em 2em 5em;
  background: rgba(0, 155, 121, 0.2);
}
#detailed .contents ol {
  list-style-type: decimal;
}
#detailed .contents ol > li + li {
  margin-top: 1em;
}
#detailed .contents ul {
  list-style-type: disc;
}
#detailed .contents ul > li + li {
  margin-top: 1em;
}

/* 画像 */
#detailed .contents p > img {
  display: table;
  margin: 0 auto;
}

/* 斜体廃止　→　マーカー */
/* #detailed .contents em {
  display: inline;
  background: linear-gradient(0deg,
  rgba(255,241,0,1) 0%,
  rgba(255,241,0,1) 40%,
  rgba(255,241,0,0) 40%,
  rgba(255,241,0,0) 100%);
  font-style: normal;
} */

/* 余白 */
#detailed .contents > * + * {
  margin-top: 1em;
}

@media screen and (max-width: 768px) {/* SP用 */
  #detailed .contents ol,
  #detailed .contents ul {
    padding: 1em 1em 1em 3em;
    background: rgba(0, 155, 121, 0.2);
  }
}

#detailed .contents table {
  margin-left: auto;
  margin-right: auto;
}
#detailed .contents table th {
  border: 1px solid;
  padding: 0.2em 0.5em;
}
#detailed .contents table td {
  border: 1px solid;
  padding: 0.5em 1em;
}
/* ▲▲▲▲▲▲ 以下#detailed .contents内部のデザイン ▲▲▲▲▲▲ */

/* ====================▲ WP投稿記事テンプレートレイアウト（#detailed） ▲==================== */
</style>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ テーブルスクロールヒント ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area99"></i>
<section class="area99">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">テーブルスクロールヒント</h3>
  <!-- ▼ テーブルスクロールヒント ▼ -->
  <div class="js-scrollable">
  <table class="default02 fs18 b">
      <tbody><tr>
        <th>厚手マット紙</th>
        <th>1〜4枚</th>
        <th>5〜9枚</th>
        <th>10〜19枚</th>
        <th>20枚以上</th>
      </tr>
      <tr>
        <th>B2/A1</th>
        <td>@1,800円（税込）〜</td>
        <td>@1,680円（税込）〜</td>
        <td>@1,560円（税込）〜</td>
        <td>@1,440円（税込）〜</td>
      </tr>
      <tr>
        <th>B1/A0</th>
        <td>@3,360円（税込）〜</td>
        <td>@3,240円（税込）〜</td>
        <td>@3,120円（税込）〜</td>
        <td>@3,000円（税込）〜</td>
      </tr>
    </tbody></table>
  </div>
  <!-- ▲ テーブルスクロールヒント ▲ -->
  <style>
    @media screen and (max-width: 768px) {/* SP用 */
      .js-scrollable table {
        width: auto;
        max-width: none;
        table-layout: auto;
      }

      .js-scrollable table tr th,
      .js-scrollable table tr td {
        width: auto;
        max-width: none;
        white-space: nowrap; /* 自動改行無効。不要なら削除 */
      }
    }
  </style>
  <link rel="stylesheet" href="css/scroll-hint.css">
  <script src="js/scroll-hint.min.js"></script>
  <script>
    function initScrollHintIfMobile() {
      if (window.innerWidth <= 768 && !document.querySelector('.scroll-hint')) {
        new ScrollHint('.js-scrollable');
      }
    }
    window.addEventListener('DOMContentLoaded', initScrollHintIfMobile);
    window.addEventListener('resize', initScrollHintIfMobile);
  </script>
  </div>
</section>

<!-- 
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
▼▼▼ ■ ▼▼▼
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
-->
<i id="area99"></i>
<section class="area99">
  <div class="inner w1000 bg_white p50">
  <h3 style="font-size: 3rem; text-align: center; margin-bottom: 1em;">■</h3>
  <!-- ▼ ■ ▼ -->
  <div class="wrap">
    <a href="###">Stick Link</a>
    <a href="###" class="no_stick_">No Stick</a>
  </div>
  <!-- ▲ ■ ▲ -->
  <style></style>
  <script></script>
  </div>
</section>