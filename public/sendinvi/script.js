function addInvitee() {
    var nameInput = document.getElementById("name-input");
    var names = nameInput.value.trim().split("\n");
    var messageInput = document.getElementById("message-input");
    var message = messageInput.value.trim();
  
    if (names.length === 0 || names[0] === "") {
      alert("Nama tidak boleh kosong");
      return;
    }
  
    var table = document.getElementById("invitee-list");
  
    for (var i = 0; i < names.length; i++) {
      var name = names[i].trim();
  
      if (name !== "") {
        var row = table.insertRow(-1);
        var nameCell = row.insertCell(0);
        var linkCell = row.insertCell(1);
  
        nameCell.innerHTML = name;
        var personalizedMessage = message.replace("[link-undangan]", generateInvitationLink(name));
        personalizedMessage = personalizedMessage.replace("[nama]", name);
        linkCell.innerHTML = '<a href="https://wa.me/?text=' + encodeURIComponent(personalizedMessage) + '">Kirim WA</a>';
      }
    }
  
    nameInput.value = "";
    messageInput.value = "";
  }
  
  

function generateInvitationLink(name) {
    var currentURL = window.location.href;
    var baseUrl = currentURL.split("/kirim-undangan")[0]; // Mendapatkan URL dasar tanpa path "/sendinvi"
    var encodedName = encodeURIComponent(name);
    var invitationLink = baseUrl + "?tamu=" + encodedName;
    return invitationLink;
  }



  
  