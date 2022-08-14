<style>
*{
  background-color: #EEEEEE;
}

.shop_detail__container{
  display: flex;
  justify-content: space-between;
  width: 90%;
  margin: 0 auto;
}

.shop__detail__content{
  width: 45%;
}

.header {
  display: flex;
  justify-content: space-between;
  width: 180px;
  align-items: center;
}

.hamburger-menu {
  background-color: #0538ff;
  width: 48px;
  height: 48px;
  border-radius: 10px;
}

.title {
  width: 60%;
  color: #0538ff;
}

.shop__title{
  display: flex;
  align-items: center;
}

.back__anker{
  margin-right: 20px;
  background-color: white;
  padding: 5px 10px;
  border-radius: 10px;
}

.back__anker>a{
  text-decoration: none;
  font-size: 10px;
  background-color: white;
  color: black;
}

.shop__image{
  width: 35%;
}

.shop__image>img{
  width: 100%;
}

.shop__tag {
  display: flex;
  width: 30%;
}

.shop__area,
.shop__category {
  font-size: 10px;
}

.shop__summary{
  margin-top: 40px;
  width: 35%;
}

/* 画面右 */
.reservation__form,.form__title,form,table,tr,th,td{
  background-color: #305DEF;
}

.reservation__form{
  width: 45%;
  padding: 0 40px 0 10px;
  border-radius: 5px;
  position: relative;
}

.form__title{
  color: white;
}

table{
  width: 100%;
}

input{
  border-radius: 5px;
}

.form__content{
  width: 100%;
}

.reservation__confirmation, .confirmation{
  background-color: #4D7FFF;
}

.reservation__confirmation{
  border-radius: 5px;
  padding: 20px 5px;
  margin-top: 20px;
}

.confirmation{
  color: white;
  font-size: 10px;
  text-align: left;
}

.confirmation__content{
  margin-left: 40px;
  display: block;
}

.reservation__button{
  position: absolute;
  bottom:0px;
  right:0px;
  width: 100%;
  background-color: #0538FF;
  color: white;
  font-size: 12px;
  border: none;
  height: 36px;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>
<body>
  <div class="shop_detail__container">
    <div class="shop__detail__content">
      <!-- display flexで予約フォームと横並びにするためとはいえ、headerが入れ子の入れ子は非常識？ -->
      <!-- 共通 -->
      <header class="header">
        <div class="hamburger-menu">
          <!-- ハンバーガーメニュー記載 -->
          <div class="top__bar"></div>
          <div class="mlddle__bar"></div>
          <div class="bottom__bar"></div>
        </div>
        <h1 class="title">Rese</h1>
      </header>
      <div class="shop__title">
        <div class="back__anker">
          <a href="/">＜</a>
        </div>
        <h2>{{$item->name}}</h2>
      </div>
      <div class="shop__image">
        <img src="{{$item->url}}" alt="{{$item->name}}画像">
      </div>
      <div class="shop__tag">
        <p class="shop__area">#{{$item->area}}</p>
        <p class="shop__category">#{{$item->category}}</p>
      </div>
      <p class="shop__summary">
        {{$item->summary}}
      </p>
    </div>
    <div class="reservation__form">
      <h2 class="form__title">予約</h2>
      <form method="post" action="/">
    <!-- @csrf -->
        <input type="hidden" name="id" value="{{$item -> id}}">
        <table>
          <tr>
            <td>
              <input type="date" name="date">
            </td>
          </tr>
          <tr>
            <td>
              <input type="time" name="time" class="form__content">
              <!-- プルダウンで選択する方法検索 →Select?で関数組んで、時間が15分ごと？に出るようにする？-->
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="number" class="form__content">
              <!--  form内にインプットした項目をリアルタイムで表示する方法検索  -->
            </td>
          </tr>
        </table>
        <div class="reservation__confirmation">
          <table class="confirmation">
            <tr class="confirmation">
              <th class="confirmation">Shop</th>
              <td class="confirmation confirmation__content">XXX</td>
            </tr>
            <tr class="confirmation">
              <th class="confirmation">Date</th>
              <td class="confirmation confirmation__content">XXX</td>
            </tr>
            <tr class="confirmation">
              <th class="confirmation">Time</th>
              <td class="confirmation confirmation__content">XXX</td>
            </tr>
            <tr class="confirmation">
              <th class="confirmation">Number</th>
              <td class="confirmation confirmation__content">XXX</td>
            </tr>
          </table>
        </div>
      <button class="reservation__button">予約する</button>
      </form>
    </div>
  </div>
</body>
</html>