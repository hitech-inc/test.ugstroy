@extends('frontend.layouts.master')
@section('content')

<div id="contacts-block">
  <h1>Как с нами связаться</h1>
  <p>Вы можете связаться с нами любым удобным для вас способом: через сайт, через почту, позвонив на телефон или встретиться лично</p>
<!--   <a href="#button">Связаться с нами<span></span><span>Связаться с нами</span></a> -->
  <a href="#modal-callback" class="Btn">Связаться с нами</a>
</div>

<div id="calls">
  <div class="c-container">
    <div class="c-left">
      <div class="cl-left">
        <img src="/img/call.png" alt="">
      </div>
      <div class="cl-right">
        <h3>г.Шымкент ул.Х.Дулати (быв.К.Маркса), 201А</h3>
        <p>Режим работы:</p>
        <p>Пн-Пт с 9:00 до 18:00</p>
        <p>Сб с 9:00 до 13:00</p>
        <div>
            <span class="clrsa"></span>
            <p>+7 (7252) 42 11 44</p><br>
          </div>
          <div>
            <p style="margin-left: 45px;">+7 (7252) 27 11 44</p><br>
          </div>
          <div>
            <p style="margin-left: 45px;">+7 (707) 556 30 06</p>
          </div>
          <div>
            <span class="clrsb"></span> 
            <p>iugstroyinvest@mail.ru</p>
          </div>  
      </div>
    </div>
    <div class="c-right">
      <img src="/img/contacts.png" alt="more-text">
    </div>
  </div>
</div>

<div id="c-map">
  <div class="cm-container">
    <div class="cm-left">
      <img src="/img/on_map.png" alt="more-text">
    </div>
    <div class="cm-right">
      <div id="map"></div>
    </div>
  </div>
</div>
<div id="socials">
  <h3>Мы в соц. сетях</h3>
  <div class="social-con">
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>    
  </div>
</div>

<!-- Start remodal -->
<div class="remodal-bg">
  <div class="remodal" data-remodal-id="modal-callback">
    <h4>Обратная связь</h4>
    <form action="/contacts" method="post" name="myForm" onsubmit="return validateForm()">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Ваше имя" id="name">
      </div>
      <div class="form-group">
        <input type="phone" id="phone_mask" name="phone" class="form-control" placeholder="+7 (XXX) XXX-XX-XX">
      </div>
      <div class="form-group">
        <textarea name="text" id="" cols="30" rows="10" class="form-control" placeholder="Ваш текст">
          
        </textarea>
      </div>
      <button data-remodal-action="close" class="remodal-close"></button>
      <br>
      <div class="form-group">
        <input type="submit" class="remodal-confirm form-control" style="font-size: 1.5rem"></input>
      </div>
    </form>
  </div>
</div>
<!-- End remodal -->

<script>
  function validateForm() {
    //validate phone
    var re = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,17}(\s*)?$/;
    var myPhone = document.getElementById('phone_mask').value;
    var valid = re.test(myPhone);

    // validate name input
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone_mask").value;
        
    if (name == ""){
      $("#name").attr('placeholder', 'Введите Имя').val('').css({'border':'2px solid red'});
      //return false;
    }
    else $("#name").css('border', '2px solid green'); 

    if (phone == ""){
      $("#phone_mask").attr('placeholder', 'Введите Номер телефона например: +7 (777) 777-7777').val('').css({'border':'2px solid red'});
        return false;
    }

    else if(!valid) $("#phone_mask").attr('placeholder', 'Введите например: +7 (777) 777-7777').val('').css({'border':'2px solid red'});

    else $("#phone_mask").css('border', '2px solid green');

      return valid;
    }
</script>

<script>
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 42.345495 , lng: 69.606408}
  });
  var marker = new google.maps.Marker({
    position: {lat: 42.345495, lng: 69.606408},
    map: map,
    title: 'Наш офис!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>
@endsection

@section('scripts')
<script>
  /*======================*/


</script>
@endsection