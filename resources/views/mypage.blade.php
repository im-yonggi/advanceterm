<style>
.header{
  display: flex;
  justify-content: space-between;
  width: 180px;
  align-items: center;
}

.hamburger-menu{
  background-color: #0538ff;
  width: 48px;
  height: 48px;
  border-radius: 10px;
}

.title{
  width: 60%;
  color: #0538ff;
}

.name__container{
  margin: 40px auto;
  width: 90%;
  padding-left: 50%;
}

.main__container{
  width: 90%;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
}

.reservation__container{
  width: 40%;
}

.reservation__card{
  background-color: #305def;
  border-radius: 5px;
}

.reservation__card__header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  color: white;
  margin: 0 auto;
}

.reservation__content{
  color: white;
  font-size: 12px;
  width: 80%;
  margin: 0 auto;
}

th{
  text-align: left;
  width: 60px;
}

tr{
  margin-bottom: 16px;
  display: block;
}

td{
  text-align: center;
}

.favorite__container{
  width: 50%;
}

.shop__container{
  display: flex;
}

.shop__card{
  width: 44%;
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
  <title>Document</title>
</head>
<body>
  <header class="header">
    <div class="hamburger-menu">
      <!-- ハンバーガーメニュー記載 -->
      <div class="top__bar"></div>
      <div class="mlddle__bar"></div>
      <div class="bottom__bar"></div>
    </div>
    <h1 class="title">Rese</h1>
  </header>
  <!-- 共通終わり -->
  <div class="name__container">
    {{$item->user->name}}さん
  </div>
  <div class="main__container">
    <div class="reservation__container">
      <h3>予約状況</h3>
      <!-- @foreach -->
      <div class="reservation__card">
        <div class="reservation__card__header">
          <h4>予約1</h4>
          <!-- 擬似要素で時計マーク挿入 -->
          <form method="post" action="/reserve/delete">
            <input type="hidden" name="reservation_id" value="{{$item->reservation_id}}">
            <button class="reservation__delete__button">バツ</button>
          </form>
        </div>
        <div class="reservation__content">
          <table>
            <tr>
              <th>Shop</th>
              <td>{{$item->name}}</td>
            </tr>
            <tr>
              <th>Date</th>
              <td>{{$item->date}}</td>
            </tr>
            <tr>
              <th>Time</th>
              <td>{{$item->Time}}</td>
            </tr>
            <tr>
              <th>number</th>
              <td>{{$item->number}}人</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="favorite__container">
      <h3>お気に入り店舗</h3>
      <!-- indexと共通 -->
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
      </div>
    </div>
  </div>
  
</body>
</html>