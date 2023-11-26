 // Tambahkan kode untuk menutup loader saat konten selesai dimuat
 window.addEventListener('load', function() {
  var loader = document.querySelector('.loader');
  loader.style.display = 'none';
});

//animasi section 1
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section1 .quote");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section1 .wedding");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

//end animasi section 1

//animasi section 2
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section2 .bridegroom .text-dec-groom");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section2 .bridegroom .text-dec-bride");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

//end animasi section 2

//animasi section 3
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section3 .countdown");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section3 .countdown-row");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section3 .wedding-announcement");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});
//end animasi section 3

//animasi section 4
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section4 .akad-details");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});


window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section4 .resepsi-details");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

//end animasi section 4

//animasi section 5
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section5 .decoration-story .circle1");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section5 .decoration-story .circle2");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section5 .decoration-story .circle3");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section5 .decoration-story .line1");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section5 .decoration-story .line2");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

//end animasi section 5

//animasi section 6


function addClassOnScroll(selector) {
  var elements = document.querySelectorAll(selector);
  var windowHeight = window.innerHeight;

  elements.forEach(function(element) {
    var position = element.getBoundingClientRect().top;

    if (position < windowHeight) {
      element.classList.add("show");
    }
  });
}

window.addEventListener("scroll", function() {
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto1");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto2");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto3");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto4");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto5");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto6");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto7");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto8");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto9");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto10");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto11");
  addClassOnScroll(".section6 .foto-galleries .col-auto .foto12");
});

//end animasi section 6

//animasi section 7
window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section7 .wrap-gift .gift-title");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section7 .wrap-gift .gift-content");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});

window.addEventListener("scroll", function() {
  var akadDetails = document.querySelector(".section7 .wrap-gift .gift-box");
  var position = akadDetails.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (position < windowHeight) {
    akadDetails.classList.add("show");
  }
});
//end animasi section 7




function showImage(element) {
  var imageURL = element.getAttribute("src");
  var modal = document.createElement("div");
  modal.classList.add("modal");
  modal.innerHTML = '<span class="close" onclick="closeModal()">&times;</span><img src="' + imageURL + '" class="modal-content">';
  document.body.appendChild(modal);
  document.body.style.overflow = "hidden";
}

function closeModal() {
  var modal = document.querySelector(".modal");
  if (modal) {
    modal.parentNode.removeChild(modal);
    document.body.style.overflow = "auto";
  }
}


//opening parallax

window.addEventListener("scroll", function () {
  var scrollPosition = window.pageYOffset;
  var parallaxElements = document.querySelectorAll(".parallax .opening");
  for (var i = 0; i < parallaxElements.length; i++) {
    parallaxElements[i].style.transform = "translate3d(0, " + scrollPosition * 0.5 + "px, 0)";
  }
});





//menjalankan audio setelah menekan tombol open 

document.addEventListener('DOMContentLoaded', function() {
  var buttonOpen = document.getElementById('button-open');
  var audio = document.getElementById('myAudio');

  buttonOpen.addEventListener('click', function(event) {
    event.preventDefault();
    audio.play();
  });
});


//maps 

// document.addEventListener('DOMContentLoaded', function() {
//   const showLocationLinks = document.querySelectorAll('.show-location');

//   showLocationLinks.forEach(function(link) {
//     link.addEventListener('click', function(e) {
//       e.preventDefault();
//       const latlong = this.getAttribute('data-latlong');
//       const mapsUrl = `https://www.google.com/maps?q=${latlong}`;

//       window.open(mapsUrl, '_blank');
//     });
//   });
// });

document.addEventListener('DOMContentLoaded', function() {
  const showLocationLinks = document.querySelectorAll('.show-location');

  showLocationLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const latlong = this.getAttribute('data-latlong');
      const mapsUrl = `https://www.google.com/maps/search/?api=1&query=${latlong}`;

      window.open(mapsUrl, '_blank');
    });
  });
});


// function showMap(latitude, longitude) {
//   const mapsUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;
//   window.open(mapsUrl, '_blank');
// }





document.addEventListener('DOMContentLoaded', function() {
  const showLocationLinks = document.querySelectorAll('.show-location');

  showLocationLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const latlong = this.getAttribute('data-latlong');
      const mapsUrl = `https://www.google.com/maps?q=${encodeURIComponent(latlong)}`;

      window.open(mapsUrl, '_blank');
    });
  });
});




//gift section


document.addEventListener('DOMContentLoaded', function() {
  var giftGroomButton = document.querySelector('.gift-button.groom');
  var giftBrideButton = document.querySelector('.gift-button.bride');
  var accountGroomDetail = document.querySelector('.account-number-detail-groom');
  var accountBrideDetail = document.querySelector('.account-number-detail-bride');

  giftGroomButton.addEventListener('click', function() {
    accountGroomDetail.classList.add('show');
    accountBrideDetail.classList.remove('show');
  });

  giftBrideButton.addEventListener('click', function() {
    accountBrideDetail.classList.add('show');
    accountGroomDetail.classList.remove('show');
  });
});


//salin no rekening lama


  document.addEventListener('DOMContentLoaded', function() {
    var copyButtons = document.querySelectorAll('.account-button a');

    copyButtons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault();

        var accountNumber = this.parentNode.parentNode.querySelector('h1');
        var originalText = this.textContent;

        // Salin nomor rekening
        var dummyInput = document.createElement('input');
        dummyInput.setAttribute('value', accountNumber.textContent);
        document.body.appendChild(dummyInput);
        dummyInput.select();
        document.execCommand('copy');
        document.body.removeChild(dummyInput);

        // Ubah teks tombol menjadi "Disalin"
        this.textContent = 'Disalin';

        // Setelah 3 detik, kembalikan teks tombol ke kondisi awal
        setTimeout(function() {
          button.textContent = originalText;
        }, 3000);
      });
    });
  });

//salin rekening baru
document.addEventListener('DOMContentLoaded', function() {
  var copyButtons = document.querySelectorAll('.account-button a');

  copyButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault();

      var accountNumber = this.parentNode.parentNode.querySelector('.account-number');
      var originalText = this.textContent;

      // Salin nomor rekening
      var dummyInput = document.createElement('input');
      dummyInput.setAttribute('value', accountNumber.textContent);
      document.body.appendChild(dummyInput);
      dummyInput.select();
      document.execCommand('copy');
      document.body.removeChild(dummyInput);

      // Ubah teks tombol menjadi "Disalin"
      this.textContent = 'Disalin';

      // Setelah 3 detik, kembalikan teks tombol ke kondisi awal
      setTimeout(function() {
        button.textContent = originalText;
      }, 3000);
    });
  });
});


//animsi section 2
window.addEventListener("scroll", function() {
  var section2 = document.querySelector(".section2");
  var section2Offset = section2.offsetTop;
  var scrollPosition = window.pageYOffset;

  if (scrollPosition >= section2Offset) {
    section2.classList.add("animate");
  } else {
    section2.classList.remove("animate");
  }
});



//animasi section 


























