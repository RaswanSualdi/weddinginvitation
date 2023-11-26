<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('blueOceanStyle/style.css')}}">
    <!-- <link rel="stylesheet" href="index.js"> -->
    <!-- Masukkan library Waypoints -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKt3UL3LbTQzQ9OpOlpT33aOhlre32XCc&callback=initMap" async defer></script>
    <title>{{$blueOcean->groom_nick_name}} & {{$blueOcean->bride_nick_name}}</title>
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
      <div class="opening" style="background-image:url('{{ asset('storage/assets/blueOcean/'.$blueOcean->bg_opening) }}');
        background-size: 100% 100vh, 100% 100vh;
        background-repeat: no-repeat;
        background-position: center top, center center;">
       
        <div class="name">
          {{-- <span class="groom-name">{{$blueOcean->groom_nick_name}} </span><br>
          <span class="bride-name">{{$blueOcean->bride_nick_name}}</span> --}}
          <span class="groom-name">Rudy</span><br>
          <span class="bride-name">Imha</span>
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
              <img src="{{ asset('blueOceanStyle/decoration/buttonopen.png') }}" alt="">
            </a>
          </div>
        </div>
    
       
      </div>
    </div>
    
    <audio id="myAudio">
      <source src="{{asset('blueOceanStyle/music.mp3')}}" type="audio/mpeg">
    </audio>
    

    <div class="section1" style="background-image: url('{{asset('blueOceanStyle/decoration/4.png')}}'), url('{{asset('blueOceanStyle/decoration/3.png')}}'), url('{{ asset('storage/assets/blueOcean/'.$blueOcean->bg_section1) }}') ;
    background-size: 5% 6vh,100% 45vh, 100% 80vh;
    background-repeat: no-repeat;
    background-position: center bottom 260px,center bottom, center top;">
      <div class="wedding">
        <h2 style="color: white;">THE WEDDING OF</h2>
        <div class="name" style="color:white;">
          {{-- <p class="groom-name">{{$blueOcean->groom_nick_name}}</p>
          <p class="bride-name">{{$blueOcean->bride_nick_name}}</p>  --}}
          <p class="groom-name">Rudy</p>
          <p class="bride-name">Imha</p> 
        </div>
        @php
            use Carbon\Carbon;
            setlocale(LC_TIME, 'id_ID.utf8');
            $hari = strtoupper(Carbon::parse($blueOcean->akad_date_start)->locale('id')->dayName);
            $tanggal = Carbon::parse($blueOcean->akad_date_start)->format('d.m.Y');
            $jam = Carbon::parse($blueOcean->akad_date_start)->format('H:i');
        @endphp

        <h2 style="color: white;">{{ $hari }}, {{ $tanggal }} <br>
          {{ $jam }} WITA</h2>
      </div>
      <div class="quote">
        <p1>"Dan di antara tanda-tanda kekuasaan Allah ialah Diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu merasa tentram disamping-Nya dan dijadikan-Nya rasa kasih sayang diantara kamu. Sesungguhnya pada yang demikian menjadi bukti kekuasaan Allah bagi kaum yang berpikir."</p1>
        <p2>QS. Ar rum(21)</p2>
      </div>
      
    </div>
 
    <div class="section2" @if($blueOcean->groom_image || $blueOcean->bride_image)
      style="background-image: url('{{ asset('blueOceanStyle/decoration/frame.png') }}'),
       url('{{ asset('storage/assets/blueOcean/'.$blueOcean->groom_image) }}'), 
      url('{{ asset('blueOceanStyle/decoration/BuluBiru.png') }}'),
       url('{{ asset('blueOceanStyle/decoration/frame.png') }}'), 
      url('{{ asset('storage/assets/blueOcean/'.$blueOcean->bride_image) }}'); 
      background-size: 150px 180px,115px 140px,5% 6vh, 150px 180px, 115px 140px;
      background-position: center top 40px,center top 60px,center top 53%,center bottom 150px,center bottom 170px;
      background-repeat: no-repeat;" @endif>
     
      <div class="bridegroom">  
      <div class="text-dec-groom" @if($blueOcean->groom_image || $blueOcean->bride_image) style="margin-top: -200px;" @endif>
        {{-- <p @if($blueOcean->groom_image || $blueOcean->bride_image)
           style="font-size: 45px; margin-top: 140px;" @elseif($blueOcean->groom_image==null && $blueOcean->bride_image==null)
           style="margin-bottom:28px;" @endif>{{$blueOcean->groom_nick_name}}</p> --}}
        
            <p @if($blueOcean->groom_image || $blueOcean->bride_image)
           style="font-size: 45px; margin-top: 140px;" @elseif($blueOcean->groom_image==null && $blueOcean->bride_image==null)
           style="margin-bottom:28px;" @endif>Rudy</p>

        {{-- <p1>{{$blueOcean->groom_name}}</p1> --}}
        <p1>{{$blueOcean->groom_name}}</p1>
        <div class="ig">
          @php
            $urlParts = parse_url($blueOcean->groom_socmed);
            $path = isset($urlParts['path']) ? $urlParts['path'] : '';
            $pathInfo = pathinfo($path);
            $username = $pathInfo['basename'];
          @endphp
        
          <a href="{{$blueOcean->groom_socmed}}">{{ "@" . $username }}</a>
        </div>
        
        {{-- <p2 @if($blueOcean->groom_image==null && $blueOcean->bride_image==null) style="font-size:16px;" @endif>{!!$blueOcean->groom_desc!!}</p2>  --}}
        <p2 @if($blueOcean->groom_image==null && $blueOcean->bride_image==null) style="font-size:16px;" @endif>Anak Pertama dari pasangan <br> Hamka dan Darmawati m</p2>  

      </div>

      <div class="text-dec-bride" @if($blueOcean->groom_image==null && $blueOcean->bride_image==null) style="margin-top:200px;" @endif>
        {{-- <p @if($blueOcean->groom_image || $blueOcean->bride_image) style="font-size: 45px; margin-top: 90px;" 
          @elseif($blueOcean->groom_image==null && $blueOcean->bride_image==null)
          style="margin-bottom:28px;" @endif>{{$blueOcean->bride_nick_name}}</p> --}}

          <p @if($blueOcean->groom_image || $blueOcean->bride_image) style="font-size: 45px; margin-top: 90px;" 
          @elseif($blueOcean->groom_image==null && $blueOcean->bride_image==null)
          style="margin-bottom:28px;" @endif>Imha</p>
        {{-- <p1>{{$greenNatural->bride_name}}</p1> --}}
        <p1>{{$blueOcean->bride_name}}</p1>
        <div class="ig">
          @php
            $urlParts = parse_url($blueOcean->bride_socmed);
            $path = isset($urlParts['path']) ? $urlParts['path'] : '';
            $pathInfo = pathinfo($path);
            $username = $pathInfo['basename'];
          @endphp
          <a href="{{$blueOcean->bride_socmed}}">{{ "@" . $username }}</a>
        </div>
        {{-- <p2 @if($blueOcean->groom_image==null && $blueOcean->bride_image==null) style="font-size:16px;" @endif>{!!$blueOcean->bride_desc!!}</p2>  --}}
        <p2 @if($blueOcean->groom_image==null && $blueOcean->bride_image==null) style="font-size:16px;" @endif>Anak Bungsu dari pasangan <br> P.Pajinnai Makkatutu dan Sitti Salwah</p2> 

      </div>
      </div>
    </div>
    {{-- @endif --}}


    {{-- @if($blueOcean->groom_image==null && $blueOcean->bride_image==null)
    <div class="section2imagenull">
      vfvveeeeerr
    </div>
    @endif --}}


  
    {{-- <div class="section3" style="background-image: url('{{ asset('blueOceanStyle/decoration/4.png') }}'), url('{{ asset('blueOceanStyle/decoration/7 1.png') }}'), url('{{ asset('blueOceanStyle/decoration/3.png') }}'), url('{{ asset('storage/assets/blueOcean/'.$blueOcean->bg_countdown_timer) }}');">
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

    <div class="section3" style="background-image: url('{{ asset('blueOceanStyle/decoration/4.png') }}'), url('{{ asset('blueOceanStyle/decoration/7 1.png') }}'), url('{{ asset('blueOceanStyle/decoration/3.png') }}'), url('{{ asset('storage/assets/blueOcean/'.$blueOcean->bg_countdown_timer) }}');">
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
              // Mendapatkan tanggal dan waktu dari $blueOcean->akad_date_start
      var akadDate = "{{ $blueOcean->akad_date_start }}";

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
        <div class="time">{{ \Carbon\Carbon::parse($blueOcean->akad_date_start)->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</div>
        <div class="time">Pukul 11:00 WITA - Selesai </div>
        <div class="address">{!!$blueOcean->akad_location!!}</div>
        {{-- <div class="show-location" data-latlong="{{$blueOcean->latlong_akad_location}}"><a href="javascript:void(0)">Lihat Lokasi</a></div> --}}
        <div class="show-location" data-latlong="-3.5062830448150635,119.48747253417969"><a href="javascript:void(0)">Lihat Lokasi</a></div>

      </div>
      <div class="resepsi-details" style="margin-top:-30px;">
        <div class="title">Resepsi</div>
        <div class="address-resepsi" style="font-weight: bold;">Kediaman Mempelai Wanita</div>
        <div class="time">Senin, 17 Juli 2023</div>
        <div class="time">Pukul 12:30 WITA - Selesai</div>
        {{-- <div class="show-location" data-latlong="{{$blueOcean->latlong_resepsi_location}}" style="margin-top: 10px; margin-bottom:25px;"><a href="javascript:void(0)">Lihat Lokasi</a></div> --}}
        <div class="show-location" data-latlong="-3.5062830448150635,119.48747253417969" style="margin-top: 10px; margin-bottom:25px;"><a href="javascript:void(0)">Lihat Lokasi</a></div>


        {{-- <div class="address">{!!$blueOcean->resepsi_location!!}</div> --}}
        <div class="address-resepsi" style="font-weight: bold;">Kediaman Mempelai Pria</div>
        <div class="time">Selasa, 18 Juli 2023</div>
        <div class="time">Pukul 11 WITA - Selesai</div>
        <div class="desc-location">Jl. Uloe (Jl. Bendungan Bila) Desa Bila Riase Kec. Putu Riase Kab. Sidrap</div>
  
        {{-- <div class="show-location" data-latlong="{{$blueOcean->latlong_resepsi_location}}" style="margin-top: 10px; margin-bottom:10px;"><a href="javascript:void(0)">Lihat Lokasi</a></div> --}}
        <div class="show-location" data-latlong="-3.806736707687378,120.02830505371094" style="margin-top: 10px; margin-bottom:10px;"><a href="javascript:void(0)">Lihat Lokasi</a></div>


        
        
      </div>
    </div>

    
    

    <div class="section5">
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
        <div class="time">Awal Kenal</div>
        <div class="content" style="font-size: 13px;">Kami berkenalan lewat sosmed. Perlahan dan pasti, komunikasi terjalin di penghujung tahun 2021. Kala itu, Tuhan sedang memberikan bertubi-tubi cobaan hidup, tapi Allah juga maha baik. Diberikan penawar duka yang manis</div>
        <div class="time">Awal Bertemu</div>
        <div class="content" style="font-size: 13px;">Tegas, dia menempuh perjalanan yang panjang, berkunjung ke rumah bertemu kerabat dan rumpun keluarga Pajalele. Sekali lagi Tuhan maha baik, dengan teguh, dia bertamu membawa keluarga. Membincang hal-hal serius tentang jenjang pernikahan.</div>
        <div class="time">Memutuskan Untuk Menikah</div>
        <div class="content" style="font-size: 13px;">Hari itu, dengan tekad bulat, dia menyatakan pinangan dengan disaksikan kedua keluarga dan rumpun keluarga kami.</div>
      </div>
    </div>
    </div>

    <div class="section6" @if($blueOcean->bride_account_number||$blueOcean->groom_account_number)
      style = "margin-bottom:0px;"
      @endif>
      <div class="gallery-title">
        Our Gallery
      </div>

      <div class="foto-galleries">
        <div class="col-auto">
          <div class="foto11"><img src="{{asset('blueOceanStyle/image/galleri1.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto12"><img src="{{asset('blueOceanStyle/image/galleri2.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto8"><img src="{{asset('blueOceanStyle/image/galleri3.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto9"><img src="{{asset('blueOceanStyle/image/galleri4.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto10"><img src="{{asset('blueOceanStyle/image/galleri5.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto1"><img src="{{asset('blueOceanStyle/image/galleri6.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto2"><img src="{{asset('blueOceanStyle/image/galleri7.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto3"><img src="{{asset('blueOceanStyle/image/galleri8.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto4"><img src="{{asset('blueOceanStyle/image/galleri9.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
        <div class="col-auto">
          <div class="foto5"><img src="{{asset('blueOceanStyle/image/galleri10.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto6"><img src="{{asset('blueOceanStyle/image/galleri11.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
          <div class="foto7"><img src="{{asset('blueOceanStyle/image/galleri12.jpeg')}}" alt="" class="foto-img" onclick="showImage(this)"></div>
        </div>
      </div>
    </div>

    {{-- <div class="section7">
      <div class="wrap-gift">
        <div class="gift-title">Wedding Gift</div>
        <div class="gift-content">Bagi bapak/ibu/saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account dan e-wallet dibawah ini</div>
        <div class="gift-box">
          <div class="gift-button groom"><img src="{{asset('blueOceanStyle/decoration/giftbox1.png')}}" alt=""><a href="javascript:void(0)">Wedding gift groom</a></div>
          <div class="gift-button bride"><img src="{{asset('blueOceanStyle/decoration/giftbox2.png')}}" alt=""><a href="javascript:void(0)">Wedding gift bride</a></div>
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
   @if($blueOcean->bride_account_number||$blueOcean->groom_account_number) 
    <div class="section7">
      <div class="wrap-gift1">
        <p class="title">Amplop Digital</p>
        <div class="account-groom">
          <img src="{{asset('blueOceanStyle/brilogo.png')}}" alt="" style="width: 100px; height:auto;">
          <p class="account-number" style="color: #9bc5f5ff">749001014578536</p>
          <p class="name" style="color: #9bc5f5ff">SITTI HALIMA</p>
          <div class="account-button" style=""><a href="#" style="color:white;">Copy Rek</a></div>
        </div>
        <div class="lines" style="display: flex; margin-top:30px; align-items:center; justify-content:center; text-align:center; margin-left:auto;margin-right:auto;width:fit-content;">
          <div class="line1" style="background-color: #9bc5f5ff; width:110px; height:3px; border-radius:30px;"></div> 
          <img src="{{asset('blueOceanStyle/decoration/BuluBiru.png')}}" alt="" style="width:10px; height:auto; margin-right:7px;margin-left:7px;"> 
          <div class="line2" style="background-color: #9bc5f5ff; width:110px; height:3px; border-radius:30px;"></div>
        </div>
         
        <div class="account-bride">
          <img src="{{asset('blueOceanStyle/sulselbarlogo.png')}}" alt="" style="width: 80px; height:auto;">
          <p class="account-number" style="color: #9bc5f5ff">0502010000212632</p>
          <p class="name" style="color: #9bc5f5ff">SITTI HALIMA, SKM. </p>
          <div class="account-button"><a href="#" style="color:white;">Copy Rek</a></div>
        </div>
      </div>
    </div>
    @endif

    <div class="section8">
      <div class="wrap-reservation">
        <div class="wrap-reservation-content">
          <div class="title-reservation" style="color: #9bc5f5ff; margin-bottom:20px;" >Reservation</div>
          <div class="content-reservation" style="color: #9bc5f5ff">Silahkan Konfirmasi Kehadiran Anda, Serta Kirimkan Doa & Ucapan Kepada Kedua Mempelai</div>
        </div>

        <div class="wrap-reservation-form">
          <form action="{{route('storeChat.blueocean', $blueOcean->slug)}}" method="post">
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
            <div class="circle-name" style="background-color: #99dbf5ff; ">{{ ucfirst($chat->name[0]) }}</div>
            <div class="col-auto">
              <div class="title-name">{{ $chat->name ?? 'No Messages' }}</div>
              <div class="content-chat" style="color: black">{{ $chat->content }}</div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </div>


    <div class="section9">
      <div class="closing">
        <div class="closing-title">
          {{-- <span class="groom-name" >{{$blueOcean->groom_nick_name}}</span><br>
          <span class="bride-name" style="margin-top:20px;">{{$blueOcean->bride_nick_name}}</span> --}}

          <span class="groom-name" >Rudy</span><br>
          <span class="bride-name" style="margin-top:20px;">Imha</span>

          {{-- <span class="groom-name">Ismail</span><br>
          <span class="bride-name">Asma</span> --}}
        </div>
        <div class="closing-content">
          See You On Our Spesial Day
        </div>
        <div class="pangodi">
          <img src="{{asset('blueOceanStyle/decoration/Logo Pangodi (1).png')}}" alt="" >
        </div>
        <div class="socmed-pangodi">
          <a href=""><img src="{{asset('blueOceanStyle/decoration/WA.png')}}" alt=""></a>
          <a href=""><img src="{{asset('blueOceanStyle/decoration/IG.png')}}" alt=""></a>
          <a href=""><img src="{{asset('blueOceanStyle/decoration/TW.png')}}" alt=""></a>
        </div>
      </div>
    </div>

    <div class="footer">
      Copyright 2023 &copy; All rights Reserved. <br>
      Design by pangodiinvitation.com
    </div>

    <script>
      //menampilkan semua section setelah menekan tombol open
document.addEventListener('DOMContentLoaded', function() {
  var buttonOpen = document.getElementById('button-open');
  var section1 = document.querySelector('.section1');
  var section2 = document.querySelector('.section2');
  var section3 = document.querySelector('.section3');
  var section4 = document.querySelector('.section4');
  var section5 = document.querySelector('.section5');
  var section6 = document.querySelector('.section6');
  var section7 = document.querySelector('.section7');
  var section8 = document.querySelector('.section8');
  var section9 = document.querySelector('.section9');
  var footer = document.querySelector('.footer');

  buttonOpen.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah perilaku default dari tautan

    // Tampilkan elemen-elemen yang diinginkan
    section1.style.display = 'flex';
    section2.style.display = 'flex';
    section3.style.display = 'flex';
    section4.style.display = 'flex';
    section5.style.display = 'flex';
    section6.style.display = 'flex';
    @if($blueOcean->bride_account_number||$blueOcean->groom_account_number)
    section7.style.display = 'flex';
    @endif
    section8.style.display = 'flex';
    section9.style.display = 'flex';
    footer.style.display = 'flex';

    

    // Scroll ke elemen section1
    section1.scrollIntoView({ behavior: 'smooth' });
  });
});
    </script>

    <script src="{{asset('blueOceanStyle/script.js')}}"></script>
    

   
  </body>
</html>


