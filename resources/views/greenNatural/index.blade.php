<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('greenNaturalStyle/style.css')}}">
    <!-- <link rel="stylesheet" href="index.js"> -->
    <!-- Masukkan library Waypoints -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKt3UL3LbTQzQ9OpOlpT33aOhlre32XCc&callback=initMap" async defer></script>
    <title>{{$greenNatural->groom_nick_name}} & {{$greenNatural->bride_nick_name}}</title>
  </head>
  <body>
    <div class="loader">
      <img src="{{asset('admin/dist/img/logopangodi.png')}}" style="width:130px; height:60px;" alt="Loading...">
    </div>
   
    {{-- <div class="parallax" id="parallax">
      <div class="opening">
       <div class="name"> {{$greenNatural->groom_nick_name}}<br>{{$greenNatural->bride_nick_name}}</div>
       <div class="guest">
        <h3>Dear,</h3>
        @if($tamu)
          <h2>{{$tamu}}</h2>
        @else
          <h2>Nama Tamu</h2>
        @endif
      </div>
      
        <div class="button">
          <a id="button-open" href="#">
            <img src="{{asset('greenNaturalStyle/decoration/buttonopen.png')}}" alt="">
          </a>
        </div>
      </div>
    </div> --}}

    <div class="parallax" id="parallax">
      {{-- <div class="opening" style="background-image: url('{{ asset('greenNaturalStyle/decoration/1.png') }}'), url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bg_opening) }}');
      background-size: 100% 100vh, 100% 100vh;
      background-repeat: no-repeat;
      background-position: center top, center center;"> --}}
      <div class="opening" style="background-image:url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bg_opening) }}');
        background-size: 100% 100vh, 100% 100vh;
        background-repeat: no-repeat;
        background-position: center top, center center;">
       
        <div class="name" style="margin-bottom: -50px;">
          <span class="groom-name">{{$greenNatural->groom_nick_name}} </span><br>
          <div class="and">&</div>
          <span class="bride-name">{{$greenNatural->bride_nick_name}}</span>
        </div>
        <div class="guest " style="margin-left:auto; margin-right:auto; margin-bottom:350px;">
          <h3>Kepada Bapak/Ibu Saudara (i)</h3>
          @if($tamu)
            <h2>{{$tamu}}</h2>
          @else
            <h2>Nama Tamu</h2>
          @endif
          <div class="button" style="margin-right: 13px;">
            <a id="button-open" href="#">
              <img src="{{ asset('greenNaturalStyle/decoration/buttonopen.png') }}" alt="">
            </a>
          </div>
        </div>
    
       
      </div>
    </div>
    
    <audio id="myAudio">
      <source src="{{asset('greenNaturalStyle/music.mp3')}}" type="audio/mpeg">
    </audio>
    

    <div class="section1" style="background-image: url('{{asset('greenNaturalStyle/decoration/4.png')}}'), url('{{asset('greenNaturalStyle/decoration/3.png')}}'), url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bg_section1) }}') ;
    background-size: 5% 6vh,100% 45vh, 100% 80vh;
    background-repeat: no-repeat;
    background-position: center bottom 260px,center bottom, center top;">
      <div class="wedding">
        <h2 style="color: black;">THE WEDDING OF</h2>
        <div class="name" style="color:#758671;">
          <p class="groom-name">{{$greenNatural->groom_nick_name}}</p>
          <p class="bride-name">{{$greenNatural->bride_nick_name}}</p> 
        </div>
        @php
            use Carbon\Carbon;
            setlocale(LC_TIME, 'id_ID.utf8');
            $hari = strtoupper(Carbon::parse($greenNatural->akad_date_start)->locale('id')->dayName);
            $tanggal = Carbon::parse($greenNatural->akad_date_start)->format('d.m.Y');
            $jam = Carbon::parse($greenNatural->akad_date_start)->format('H:i');
        @endphp

        <h2 style="color: black;">{{ $hari }}, {{ $tanggal }} <br>
          {{ $jam }} WITA</h2>
      </div>
      <div class="quote">
        <p1>"Dan di antara tanda-tanda kekuasaan Allah ialah Diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu merasa tentram disamping-Nya dan dijadikan-Nya rasa kasih sayang diantara kamu. Sesungguhnya pada yang demikian menjadi bukti kekuasaan Allah bagi kaum yang berpikir."</p1>
        <p2>QS. Ar rum(21)</p2>
      </div>
      
    </div>
 
    <div class="section2" @if($greenNatural->groom_image || $greenNatural->bride_image)
      style="background-image: url('{{ asset('greenNaturalStyle/decoration/decoration.png') }}'),
       url('{{ asset('storage/assets/greenNatural/'.$greenNatural->groom_image) }}'), 
      url('{{ asset('greenNaturalStyle/decoration/6 1.png') }}'),
       url('{{ asset('greenNaturalStyle/decoration/decoration2.png') }}'), 
      url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bride_image) }}'); 
      background-size: 150px 180px,115px 140px,5% 6vh, 150px 180px, 115px 140px;
      background-position: center top 40px,center top 60px,center top 400px,center bottom 160px,center bottom 180px;
      background-repeat: no-repeat;" @endif>
     
      <div class="bridegroom">  
      <div class="text-dec-groom" @if($greenNatural->groom_image || $greenNatural->bride_image) style="margin-top: -200px;" @endif>
        <p @if($greenNatural->groom_image || $greenNatural->bride_image)
           style="font-size: 45px; margin-top: 140px;" @elseif($greenNatural->groom_image==null && $greenNatural->bride_image==null)
           style="margin-bottom:28px;" @endif>{{$greenNatural->groom_nick_name}}</p>
        

        {{-- <p1>{{$greenNatural->groom_name}}</p1> --}}
        <p1>ISMAIL</p1>
        <div class="ig">
          @php
            $urlParts = parse_url($greenNatural->groom_socmed);
            $path = isset($urlParts['path']) ? $urlParts['path'] : '';
            $pathInfo = pathinfo($path);
            $username = $pathInfo['basename'];
          @endphp
        
          <a href="{{$greenNatural->groom_socmed}}">{{ "@" . $username }}</a>
        </div>
        
        <p2 @if($greenNatural->groom_image==null && $greenNatural->bride_image==null) style="font-size:16px;" @endif>{!!$greenNatural->groom_desc!!}</p2>  
      </div>

      <div class="text-dec-bride" @if($greenNatural->groom_image==null && $greenNatural->bride_image==null) style="margin-top:200px;" @endif>
        <p @if($greenNatural->groom_image || $greenNatural->bride_image) style="font-size: 45px; margin-top: 132px;" 
          @elseif($greenNatural->groom_image==null && $greenNatural->bride_image==null)
          style="margin-bottom:28px;" @endif>{{$greenNatural->bride_nick_name}}</p>
        {{-- <p1>{{$greenNatural->bride_name}}</p1> --}}
        <p1>ASMAWATI AHMAD</p1>
        <div class="ig">
          @php
            $urlParts = parse_url($greenNatural->bride_socmed);
            $path = isset($urlParts['path']) ? $urlParts['path'] : '';
            $pathInfo = pathinfo($path);
            $username = $pathInfo['basename'];
          @endphp
          <a href="{{$greenNatural->bride_socmed}}">{{ "@" . $username }}</a>
        </div>
        <p2 @if($greenNatural->groom_image==null && $greenNatural->bride_image==null) style="font-size:16px;" @endif>{!!$greenNatural->bride_desc!!}</p2> 
      </div>
      </div>
    </div>
    {{-- @endif --}}


    {{-- @if($greenNatural->groom_image==null && $greenNatural->bride_image==null)
    <div class="section2imagenull">
      vfvveeeeerr
    </div>
    @endif --}}


  
    {{-- <div class="section3" style="background-image: url('{{ asset('greenNaturalStyle/decoration/4.png') }}'), url('{{ asset('greenNaturalStyle/decoration/7 1.png') }}'), url('{{ asset('greenNaturalStyle/decoration/3.png') }}'), url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bg_countdown_timer) }}');">
      <div class="countdown">
        Countdown Timer
      </div>
      <div class="countdown-row">
        <div class="col-auto">
          <div class="day">00</div>
          <div class="text-day">Hari</div>
        </div>
        <div class="col-auto">
          <div class="hours">00</div>
          <div class="text-hours">Jam</div>
        </div>
        <div class="col-auto">
          <div class="minute">00</div>
          <div class="text-minute">Menit</div>
        </div>
        <div class="col-auto">
          <div class="second">00</div>
          <div class="text-second">Detik</div>
        </div>

      </div>

      <div class="wedding-announcement">
        <div class="save-the-date">Save the Date</div>
        <div class="announcement">dengan segala kerendahan hati, menjadi sebuah kebahagian bagi kami untuk mengumumkan hari pernikahan kami yang akan dilaksanakan pada:</div>
      </div>
    </div> --}}

    <div class="section3" style="background-image: url('{{ asset('greenNaturalStyle/decoration/4.png') }}'), url('{{ asset('greenNaturalStyle/decoration/7 1.png') }}'), url('{{ asset('greenNaturalStyle/decoration/3.png') }}'), url('{{ asset('storage/assets/greenNatural/'.$greenNatural->bg_countdown_timer) }}');">
      <div class="countdown">
          Countdown Timer
      </div>
      <div class="countdown-row">
          <div class="col-auto">
              <div class="day" id="day">00</div>
              <div class="text-day">Hari</div>
          </div>
          <div class="col-auto">
              <div class="hours" id="hours">00</div>
              <div class="text-hours">Jam</div>
          </div>
          <div class="col-auto">
              <div class="minute" id="minutes">00</div>
              <div class="text-minute">Menit</div>
          </div>
          <div class="col-auto">
              <div class="second" id="seconds">00</div>
              <div class="text-second">Detik</div>
          </div>
      </div>
  
      <div class="wedding-announcement">
          <div class="save-the-date">Save the Date</div>
          <div class="announcement">dengan segala kerendahan hati, menjadi sebuah kebahagian bagi kami untuk mengumumkan hari pernikahan kami yang akan dilaksanakan pada:</div>
      </div>
  </div>
  
  <script>
      // Fungsi untuk menghitung mundur
      function countdown() {
              // Mendapatkan tanggal dan waktu dari $greenNatural->akad_date_start
      var akadDate = "{{ $greenNatural->akad_date_start }}";

      // Memecah tanggal dan waktu menjadi komponen terpisah
      var akadDateComponents = akadDate.split(/[- :]/);

      // Membuat objek Date dengan komponen tanggal dan waktu yang telah dipisah
      var weddingDate = new Date(akadDateComponents[0], akadDateComponents[1] - 1, akadDateComponents[2], akadDateComponents[3], akadDateComponents[4], akadDateComponents[5]);

          var now = new Date();
  
          var distance = weddingDate.getTime() - now.getTime();
  
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
          // Tampilkan nilai countdown pada elemen dengan id yang sesuai
          document.getElementById("day").innerHTML = days.toString().padStart(2, "0");
          document.getElementById("hours").innerHTML = hours.toString().padStart(2, "0");
          document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, "0");
          document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, "0");
  
          // Perbarui countdown setiap 1 detik
          setTimeout(countdown, 1000);
      }
  
      // Panggil fungsi countdown untuk memulai perhitungan mundur
      countdown();
  </script>
  
 

    <div class="section4">
      <div class="akad-details">
        <div class="title">Akad Nikah</div>
        <div class="time">{{ \Carbon\Carbon::parse($greenNatural->akad_date_start)->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</div>
        <div class="time">Pukul 10:00 - 11:00 WITA</div>
        <div class="address">{!!$greenNatural->akad_location!!}</div>
        <div class="show-location" data-latlong="{{$greenNatural->latlong_akad_location}}"><a href="javascript:void(0)">Lihat Lokasi</a></div>
      </div>
      <div class="resepsi-details">
        <div class="title">Resepsi</div>
        <div class="time">{{ \Carbon\Carbon::parse($greenNatural->resepsi_date_start)->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</div>
        <div class="time">Pukul 11:00 - selesai</div>
        {{-- <div class="address">{!!$greenNatural->resepsi_location!!}</div> --}}
        <div class="address">Jl. Pasar Pajalele & <br>
          Bungi, Sebelah Timur Pasar Bungi (Bungi Creative)</div>
        <div class="show-location" data-latlong="{{$greenNatural->latlong_resepsi_location}}"><a href="javascript:void(0)">Lihat Lokasi</a></div>
      </div>
    </div>

    
    

    {{-- <div class="section5">
      <div class="story-title">Our Story</div>
      <div class="wrap">
      <div class="decoration-story">
        <div class="circle1"></div>
        <div class="line1"></div>
        <div class="circle2"></div>
        <div class="line2"></div>
        <div class="circle3"></div>

      </div>
      <div class="story-content">
        <div class="time">Jumat, 12 Desember 2023</div>
        <div class="content">fgngfjd dngdnggj nidgnagd nfnggndn nidngnagnadn dgnngngn dsgngngn fnsgnjgnd ngndgg ndsgngnd</div>
        <div class="time">Jumat, 12 Desember 2023</div>
        <div class="content"></div>
        <div class="time">Jumat, 12 Desember 2023</div>
        <div class="content"></div>
      </div>
    </div>
    </div> --}}

    {{-- <div class="section6">
      <div class="gallery-title">
        Our Gallery
      </div>

      <div class="foto-galleries">
        <div class="col-auto">
          <div class="foto11"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto12"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto8"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto9"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto10"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto1"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto2"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto3"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto4"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto5"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto6"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto7"><img src="DYT04382.JPG" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
      </div>
    </div> --}}

    {{-- <div class="section7">
      <div class="wrap-gift">
        <div class="gift-title">Wedding Gift</div>
        <div class="gift-content">Bagi bapak/ibu/saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account dan e-wallet dibawah ini</div>
        <div class="gift-box">
          <div class="gift-button groom"><img src="{{asset('greenNaturalStyle/decoration/giftbox1.png')}}" alt=""><a href="javascript:void(0)">Wedding gift groom</a></div>
          <div class="gift-button bride"><img src="{{asset('greenNaturalStyle/decoration/giftbox2.png')}}" alt=""><a href="javascript:void(0)">Wedding gift bride</a></div>
        </div>
      </div>
      <div class="account-number-detail-groom">
        <h1>502801024469536</h1>
        <div class="account-button"><a href="#">Salin Rekening</a></div>
        <p>Mandiri : Mail</p>
      </div>
      <div class="account-number-detail-bride">
        <h1>749001004672536</h1>
        <div class="account-button"><a href="#">Salin Rekening</a></div>
        <p>BRI : Asmawati</p>
      </div>
    </div> --}}

    <div class="section7">
      <div class="wrap-gift1">
        <p class="title">Amplop Digital</p>
        <div class="account-groom">
          <img src="{{asset('greenNaturalStyle/brilogo.png')}}" alt="" style="width: 100px; height:auto;">
          <p class="account-number">502801024469536</p>
          <p class="name">Mail</p>
          <div class="account-button" style=""><a href="#" style="color:white;">Copy Rek</a></div>
        </div>
        <div class="lines" style="display: flex; margin-top:30px; align-items:center; justify-content:center; text-align:center; margin-left:auto;margin-right:auto;width:fit-content;">
          <div class="line1" style="background-color: #758671; width:110px; height:3px; border-radius:30px;"></div> 
          <img src="{{asset('greenNaturalStyle/decoration/6 1.png')}}" alt="" style="width:10px; height:auto; margin-right:7px;margin-left:7px;"> 
          <div class="line2" style="background-color: #758671; width:110px; height:3px; border-radius:30px;"></div>
        </div>
         
        <div class="account-bride">
          <img src="{{asset('greenNaturalStyle/brilogo.png')}}" alt="" style="width: 100px; height:auto;">
          <p class="account-number">749001004672536</p>
          <p class="name">Asmawati</p>
          <div class="account-button"><a href="#" style="color:white;">Copy Rek</a></div>
        </div>
      </div>
    </div>

    <div class="section8">
      <div class="wrap-reservation">
        <div class="wrap-reservation-content">
          <div class="title-reservation">Reservation</div>
          <div class="content-reservation">Silahkan Konfirmasi Kehadiran Anda, Serta Kirimkan Doa & Ucapan Kepada Kedua Mempelai</div>
        </div>

        <div class="wrap-reservation-form">
          <form action="{{route('storeChat', $greenNatural->slug)}}" method="post">
            @csrf
          <div class="input-reservation">
            <input type="text" placeholder="Nama Anda" name="name">
            <input type="number" min="1" placeholder="1 Orang" name="people">
            <input type="text" placeholder="No Hp/No WhatsApp" name="no_hp">
            <textarea id="" cols="30" rows="10" placeholder="Berikan doa dan ucapan untuk kedua mempelai" name="content"></textarea>
            <button type="submit">Send</button>
          </div>
          </form>
        </div>

        <div class="chat">
          @foreach($chats as $chat)
          <div class="row-auto">
            <div class="circle-name">{{ ucfirst($chat->name[0]) }}</div>
            <div class="col-auto">
              <div class="title-name">{{ $chat->name ?? 'No Messages' }}</div>
              <div class="content-chat">{{ $chat->content }}</div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </div>


    <div class="section9">
      <div class="closing">
        <div class="closing-title">
          <span class="groom-name" >{{$greenNatural->groom_nick_name}}</span><br>
          <span class="bride-name" style="margin-top:20px;">{{$greenNatural->bride_nick_name}}</span>

          {{-- <span class="groom-name">Ismail</span><br>
          <span class="bride-name">Asma</span> --}}
        </div>
        <div class="closing-content">
          See You On Our Spesial Day
        </div>
        <div class="pangodi">
          <img src="{{asset('greenNaturalStyle/decoration/Logo Pangodi (1).png')}}" alt="" >
        </div>
        <div class="socmed-pangodi">
          <a href=""><img src="{{asset('greenNaturalStyle/decoration/WA.png')}}" alt=""></a>
          <a href=""><img src="{{asset('greenNaturalStyle/decoration/IG.png')}}" alt=""></a>
          <a href=""><img src="{{asset('greenNaturalStyle/decoration/TW.png')}}" alt=""></a>
        </div>
      </div>
    </div>

    <div class="footer">
      Copyright 2023 &copy; All rights Reserved. <br>
      Design by pangodiinvitation.com
    </div>

    <script src="{{asset('greenNaturalStyle/script.js')}}"></script>
    

   
  </body>
</html>


