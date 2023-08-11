<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
   <style>
    /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0c40e8;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #0c40e8;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #0c40e8;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}
.masuk p{
    font-weight: 400;
    font-size: 1rem;
    color: #151111;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
  }
  .masuk a{
    font-weight: 500;
    font-size: 1rem;
    color: #151111;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
  }
   </style>
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <div class="masuk" style="margin-top: 5px;">
            <p>Sudah Punya Akun Develop? <a class="linkmasuk" style=" text-decoration: none;" href="http://127.0.0.1:8000/session/auth/agent/signin">Masuk</a></p>
        </div>

        <form method="post" action="/session/auth/agent/signup/create" enctype="multipart/form-data">
            @csrf

            <div class="form first">
                <div class="details address">
                    <span class="title">Agent</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control noscroll @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control noscroll @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label for="password" class="form-label">Password</label>
                            <input type="password"
                                class="form-control noscroll @error('password') is-invalid @enderror" id="password"
                                name="password" value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                            <select required class="form-select"
                                name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi"
                                required>
                                <option required>Provinsi</option>
                                @foreach ($provinces as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('provinces_id') == $item->id  }}>
                                        {{ $item->name }}</option>
                                @endforeach
                                @error('province_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </select>
                        </div>
                        <div class="input-field">
                            <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                            <select required class="form-select " name="regencies_id" id="kota"
                                data-placeholder="Pilih Kota" required>
                                <option></option>
                                @if (old('provinces_id'))
                                    @foreach ($regencies as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('regencies_id') == $item->id  }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                @endif
                                @error('regency_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </select>
                        </div>
                        <div class="input-field">
                            <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                            <select required class="form-select " name="districts_id" id="kecamatan"
                                data-placeholder="Pilih kecamatan" required>
                                <option></option>
                                @if (old('regencies_id'))
                                    @foreach ($districts as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('districts_id') == $item->id  }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                @endif
                                @error('district_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </select>
                        </div>
                        <div class="input-field">
                            <label class="col-md-3 col-form-label" for="desa">Desa</label>
                            <select required class="form-select " name="villages_id" id="desa"
                                data-placeholder="Pilih Desa" required>
                                <option></option>
                                @if (old('districts_id'))
                                    @foreach ($villages as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('villages_id') == $item->id  }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                @endif
                                @error('village_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </select>
                        </div>
                        

                        <div class="input-field">
                            <label for="address" class="form-label">Address</label>
                            <input type="text"
                                class="form-control noscroll @error('address') is-invalid @enderror"
                                id="address" name="address" value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label for="telp" class="form-label">Telephone</label>
                            <input type="text"
                                class="form-control noscroll @error('telp') is-invalid @enderror" id="telp"
                                name="telp" value="{{ old('telp') }}">
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <label for="ktp" class="form-label">Ktp</label>
                            <input style="padding-top: 8px;" type="file" class="form-control noscroll @error('ktp') is-invalid @enderror"
                                id="ktp" name="ktp">
                            @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <label for="face" class="form-label">Wajah</label>
                            <input style="padding-top: 8px;" type="file" class="form-control noscroll @error('face') is-invalid @enderror"
                                id="face" name="face">
                            @error('face')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="details family">
                    

                    <div class="buttons">
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.form-control, .form-select, .form-control, .form-check-input').on('focus', function() {
                        $(this).removeClass('is-invalid');
                        $(this).next('.invalid-feedback').remove();
                        if ($(this).hasClass('form-check-input')) {
                            $(this).closest('.form-check').find('.invalid-feedback').remove();
                        }
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    function onChangeSelect(url, id, name) {
                        // send ajax request to get the regency of the selected province and append to the select tag
                        $.ajax({
                            url: url,
                            type: 'GET',
                            data: {
                                id: id
                            },
                            success: function(data) {
                                let target = $('#' + name);
                                target.attr('disabled', false);
                                target.empty()
                                target.attr('placeholder', target.data('placeholder'))
                                target.append(`<option> ${target.data('placeholder')} </option>`)
                                $.each(data, function(key, value) {
                                    target.append(`<option value="${key}">${value}</option>`)
                                });
                            }
                        });
                    }

                    $('#kota').prop('disabled', true);
                    $('#kecamatan').prop('disabled', true);
                    $('#desa').prop('disabled', true);


                    $('#provinsi').on('change', function() {
                        var id = $(this).val();
                        var url = `{{ route('get.regency') }}`;
                        $('#kota').empty().prop('disabled', false);
                        $('#kecamatan').empty().prop('disabled', true);
                        $('#desa').empty().prop('disabled', true);
                        onChangeSelect(url, id, 'kota');
                    });

                    $('#kota').on('change', function() {
                        var id = $(this).val();
                        var url = `{{ route('get.districts') }}`;
                        $('#kecamatan').empty().prop('disabled', false);
                        $('#desa').empty().prop('disabled', true);
                        onChangeSelect(url, id, 'kecamatan');
                    });

                    $('#kecamatan').on('change', function() {
                        var id = $(this).val();
                        var url = `{{ route('get.villages') }}`;
                        $('#desa').empty().prop('disabled', false);
                        onChangeSelect(url, id, 'desa');
                    });

                    // $('.single-select-field').select2({
                    //     theme: "bootstrap-5",
                    //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    //         'style',
                    //     placeholder: $(this).data('placeholder'),
                    // });
                });
            </script>
</body>
</html>