<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/auth/agent/login.css" />

    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{-- form Sign In  --}}
                {{-- action --}}
                <form action="#" class="sign-in-form">
                    {{-- end action --}}
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                {{-- form Sign Up --}}
                {{-- action --}}
                <form action="/session/auth/agent/signup/create" class="sign-up-form" id="div">
                    {{-- end action --}}
                    <h2 class="title signupTitle">Sign up</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Nama" name="nama" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Email" name="email"/>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" name="password"/>
                            </div>
                            <div class="input-field">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <input type="texarea" placeholder="Alamat" name="address"/>
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-mobile"></i>
                                <input type="number" placeholder="Nomer Handphone" name="telp"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            {{-- <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="drpdwn provinsi" />
                            </div> --}}
                            <label for="file-upload" class="file-label">
                                <input type="file" id="file-upload" class="file-input" name="ktp">
                                <span class="file-button">Choose a file</span>
                                <span class="file-name">Foto KTP</span>
                              </label>
                            <label for="file-upload" class="file-label">
                                <input type="file" id="file-upload" class="file-input" name="face">
                                <span class="file-button">Choose a file</span>
                                <span class="file-name">Foto selfie dengan KTP</span>
                              </label>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                    <select class="form-select"
                                        name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi" required>
                                        <option>Pilih Provinsi</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('provinces_id') == $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                        @error('province_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                                    <select class="form-select " name="regencies_id" id="kota"
                                        data-placeholder="Pilih Kota" required>
                                        <option></option>
                                        @if (old('provinces_id'))
                                            @foreach ($regencies as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('regencies_id') == $item->id }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                        @error('regency_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                                    <select class="form-select " name="districts_id" id="kecamatan"
                                        data-placeholder="Pilih kecamatan" required>
                                        <option></option>
                                        @if (old('regencies_id'))
                                            @foreach ($districts as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('districts_id') == $item->id }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                        @error('district_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-form-label" for="desa">Desa</label>
                                    <select class="form-select " name="villages_id" id="desa"
                                        data-placeholder="Pilih Desa" required>
                                        <option></option>
                                        @if (old('districts_id'))
                                            @foreach ($villages as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('villages_id') == $item->id }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                        @error('village_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                                                            

                            
                        </div>
                    </div>
                    <button type="submit" class="btn signupButton" value="Sign up" style="margin-left: 30px;">Submit</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content welcoming">
                    <h3>New here ?</h3>
                    <p id="greeting" class="">sudah punya akun!</p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker online.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel ">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent " id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/10d48cad5b.js" crossorigin="anonymous"></script>
    <script src="/js/auth/developer/login.js"></script>
    
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
