<style>
.top__container{
  display: flex;
  justify-content: space-between;
  width: 90%;
  margin: 20px auto 20px auto;
}

.header{
  display: flex;
  justify-content: space-between;
  width: 180px;
  align-items: center;
}

.hamburger-menu{
  background-color: #0538ff;
  width: 32px;
  height: 32px;
  border-radius: 10px;
  cursor: pointer;
  position: relative;
  padding: 6px;
}

.top__bar{
  width: 50%;
  top:11px;
}

.middle__bar{
  width: 80%;
  top: 22px;
}

.bottom__bar{
  width: 20%;
  top: 33px;
}

.top__bar, .middle__bar, .bottom__bar{
  background-color: white;
  position: absolute;
  height: 2px;
}

.hamburger__menu.open div:nth-of-type(1){
  top: 22px;
  transform: rotate(45deg);
  width: 80%;
}

.hamburger__menu.open div:nth-of-type(2){
  opacity: 0;
}

.hamburger__menu.open div:nth-of-type(3){
  top: 22px;
  transform: rotate(-45deg);
  width: 80%;
}

.title{
  width: 60%;
  color: #0538ff;
}

.search__content{
  border: none;
}

table{
  border: 1px solid;
  border-radius: 5px;
}

td:not(:last-child){
  border-right: 1px solid;
}

/* Header終わり */

.shop__container{
  width: 90%;
  margin: 20px auto 20px auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.shop__card{
  width: 22%;
  margin-bottom: 30px;
}

.shop__card:not(:last-child){
  margin-right: 20px;
}

.shop__image{
  width: 100%;
  height: 100px;
}

.shop__title{
  font-size: 16px;
}

.shop__tag{
  display: flex;
  width: 30%;
}

.shop__area, .shop__category{
  font-size: 10px;
}

.shop__link{
  display: flex;
  justify-content: space-between;
}

.shop__detail-link{
  background-color: #0538ff;
  border-radius: 5px;
  padding: 3px 5px 3px 5px;
}

.shop__detail-link>a{
  color: white;
  text-decoration: none;
  font-size: 14px;
}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
</head>
<body>
  <div class="top__container">
    <!-- 共通 -->
    <header class="header">
      <div class="hamburger-menu">
        <!-- ハンバーガーメニュー記載 -->
        <div class="top__bar"></div>
        <div class="middle__bar"></div>
        <div class="bottom__bar"></div>
      </div>
      <h1 class="title">Rese</h1>
    </header>
    <!-- 共通終わり -->
    <div class="search__box">
      <form method="post" action="/" class>
      @csrf
        <table>
          <tr>
            <td>
              <select name="area" class="search__content">
                <option value="0" selected>All area</option>
                <option value="1">東京</option>
                <!-- その他選択肢記載 -->
                <!-- Optionのプルダウンボタンの編集方法 -->
              </select>
            </td>
            <td>
              <select name="category" class="search__content">
                <option value="0" selected>All genre</option>
                <option value="1">焼肉</option>
                <!-- その他選択肢記載 -->
                <!-- Optionのプルダウンボタンの編集方法 -->
              </select>
            </td>
            <td>
              <input type="text" name="name" value="Serach..." class="search__content">
              <!-- 薄文字の初期表示等確認 -->
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <!-- 共通 -->
  <div class="shop__container">
    <!-- @foreach -->
    <div class="shop__card">
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <h2 class="shop__title">
        {{$item->name}}
      </h2>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <div class="shop__link">
        <div class="shop__detail-link"><a href="/detail/{{$item->id}}">詳しくみる</a></div>
        <div class="favorite">
          <!-- @if(!empty""$item->favorite_id") -->
          <form action="/favorite/delete">
          <!-- @csrf -->
            <input type="hidden" name="shop_id" value="{{$item->shop_id}}">
            <button class="favorite__button">ハート</button>
          </form>
        </div>
      </div>
    </div>
    <div class="shop__card">
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <h2 class="shop__title">
        {{$item->name}}
      </h2>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <div class="shop__link">
        <div class="shop__detail-link"><a href="/detail/{{$item->id}}">詳しくみる</a></div>
        <div class="favorite">
          <!-- @if(!empty""$item->favorite_id") -->
          <form action="/favorite/delete">
          <!-- @csrf -->
            <input type="hidden" name="shop_id" value="{{$item->shop_id}}">
            <button class="favorite__button">ハート</button>
          </form>
        </div>
      </div>
    </div>
    <div class="shop__card">
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <h2 class="shop__title">
        {{$item->name}}
      </h2>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <div class="shop__link">
        <div class="shop__detail-link"><a href="/detail/{{$item->id}}">詳しくみる</a></div>
        <div class="favorite">
          <!-- @if(!empty""$item->favorite_id") -->
          <form action="/favorite/delete">
          <!-- @csrf -->
            <input type="hidden" name="shop_id" value="{{$item->shop_id}}">
            <button class="favorite__button">ハート</button>
          </form>
        </div>
      </div>
    </div>
    <div class="shop__card">
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <h2 class="shop__title">
        {{$item->name}}
      </h2>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <div class="shop__link">
        <div class="shop__detail-link"><a href="/detail/{{$item->id}}">詳しくみる</a></div>
        <div class="favorite">
          <!-- @if(!empty""$item->favorite_id") -->
          <form action="/favorite/delete">
          <!-- @csrf -->
            <input type="hidden" name="shop_id" value="{{$item->shop_id}}">
            <button class="favorite__button">ハート</button>
          </form>
        </div>
      </div>
    </div>
    <div class="shop__card">
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <h2 class="shop__title">
        {{$item->name}}
      </h2>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <div class="shop__link">
        <div class="shop__detail-link"><a href="/detail/{{$item->id}}">詳しくみる</a></div>
        <div class="favorite">
          <!-- @if(!empty""$item->favorite_id") -->
          <form action="/favorite/delete">
          <!-- @csrf -->
            <input type="hidden" name="shop_id" value="{{$item->shop_id}}">
            <button class="favorite__button">ハート</button>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</body>
</html>