//Agar tombol berwarna kuning
var buttons = document.getElementsByClassName('btn-item');

function changeColor(button) {
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i] !== button) {
            buttons[i].classList.remove('clicked');
        }
    }

    button.classList.toggle('clicked');
}


//Untuk memindahkan input 'id' ke kotak bawah    
var inputText = document.getElementById("user-id");
var textarea = document.getElementById("output-id");
var nomoradmin = document.getElementById("adminwa");
var outputText = document.getElementById("hasil");

inputText.addEventListener("input", function () {
    textarea.value = inputText.value, "tekan verify";
});

inputText.addEventListener("input", function() {
    outputText.value = "Silahkan tekan verify";
});

inputText.addEventListener("input", function() {
    nomoradmin.value = "6281776000300";
});

//Untuk memindahkan input 'id-zone' ke kotak bawah    
var inputTextzone = document.getElementById("id-zone");
var textareazone = document.getElementById("output-zone");

inputTextzone.addEventListener("input", function () {
    textareazone.value = inputTextzone.value;
});


//FUNCTION UTAMA SYSTEM

function sendRequest() {
    var inputText = document.getElementById("inputText").value;
    var outputText = document.getElementById("outputText");
    var inputZone = document.getElementById("inputZone").value;
    var outputZone = document.getElementById("outputZone");

    // Buat objek XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Atur callback fungsi saat permintaan selesai
    xhr.onload = function () {
        if (xhr.status === 200) {
            outputText.value = xhr.responseText; // Menampilkan hasil response ke outputText
        }
    };

    // Mengirim permintaan ke API menggunakan metode POST
    xhr.open("POST", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("inputText=" + inputText);

    // Memeriksa apakah ada nilai yang disimpan di local storage
    if (localStorage.getItem("input_text_value")) {
        // Mengisikan nilai dari local storage ke dalam input
        inputText.value = localStorage.getItem("input_text_value");
    }

    // Event listener untuk menyimpan nilai input ke dalam local storage saat ada perubahan
    inputText.addEventListener("input", function () {
        localStorage.setItem("input_text_value", inputText.value);
    });



    // Buat objek XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Atur callback fungsi saat permintaan selesai
    xhr.onload = function () {
        if (xhr.status === 200) {
            outputZone.value = xhr.responseText; // Menampilkan hasil response ke outputText
        }
    };

    // Mengirim permintaan ke API menggunakan metode POST
    xhr.open("POST", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("inputZone=" + inputZone);
}

