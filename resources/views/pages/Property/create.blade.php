@extends('layout.main')


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            form {
                max-width: 600px;
                margin: 0 auto;
            }

            label {
                display: block;
                margin-top: 10px;
                font-weight: bold;
            }

            input[type="text"],
            textarea,
            select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                background-color: #2951A;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #1C395D;
            }

            .error-message {
                color: red;
                font-size: 12px;
                margin-top: 5px;
            }
        </style>
    </head>

    <body>
        <img class="imageHero" src="/assets/properti/imgHero.svg" alt="">
        <form id="myForm">
            @csrf
            <label for="nama_properti">Nama Properti:</label>
            <input type="text" id="nama_properti" name="nama_properti" required>

            <label for="deskripsi_properti">Deskripsi Properti:</label>
            <textarea id="deskripsi_properti" name="deskripsi_properti" required></textarea>

            <label for="alamat_properti">Alamat Properti:</label>
            <input type="text" id="alamat_properti" name="alamat_properti" required>

            <label for="provinsi">Provinsi:</label>
            <select id="provinsi" name="provinsi" required>
                <option value="">Pilih Provinsi</option>
                <!-- Tambahkan opsi provinsi di sini -->
                <option value="provinsi1">Provinsi 1</option>
                <option value="provinsi2">Provinsi 2</option>
                <option value="provinsi3">Provinsi 3</option>
            </select>

            <label for="kota">Kota:</label>
            <select id="kota" name="kota" required>
                <option value="">Pilih Kota</option>
                <!-- Tambahkan opsi kota di sini -->
                <option value="kota1">Kota 1</option>
                <option value="kota2">Kota 2</option>
                <option value="kota3">Kota 3</option>
            </select>

            <label for="distrik">Distrik:</label>
            <select id="distrik" name="distrik" required>
                <option value="">Pilih Distrik</option>
                <!-- Tambahkan opsi distrik di sini -->
                <option value="distrik1">Distrik 1</option>
                <option value="distrik2">Distrik 2</option>
                <option value="distrik3">Distrik 3</option>
            </select>

            <input type="submit" value="Submit">
        </form>

<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
    var isValid = this.checkValidity();
    if (!isValid) {
        event.preventDefault();
        displayErrorMessages();
    }
});

function displayErrorMessages() {
    var inputs = document.getElementsByTagName("input");
    var textareas = document.getElementsByTagName("textarea");
    var selects = document.getElementsByTagName("select");

    clearErrorMessages();

    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].checkValidity()) {
            showErrorMessage(inputs[i].id, "Field ini harus diisi.");
        }
    }

    for (var i = 0; i < textareas.length; i++) {
        if (!textareas[i].checkValidity()) {
            showErrorMessage(textareas[i].id, "Field ini harus diisi.");
        }
    }

    for (var i = 0; i < selects.length; i++) {
        if (!selects[i].checkValidity()) {
            showErrorMessage(selects[i].id, "Pilihan harus dipilih.");
        }
    }
}

function showErrorMessage(elementId, message) {
    var element = document.getElementById(elementId);
    var errorMessage = document.createElement("span");
    errorMessage.className = "error-message";
    errorMessage.textContent = message;
    element.parentNode.appendChild(errorMessage);
}

function clearErrorMessages() {
    var errorMessages = document.getElementsByClassName("error-message");
    while (errorMessages.length > 0) {
        errorMessages[0].parentNode.removeChild(errorMessages[0]);
    }
}

</script>
    </body>

    </html>
@endsection
