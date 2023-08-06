<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigentum</title>
    <link rel="stylesheet" href="/css/auth/developer/register.css" />


</head>

<body>
    <div class="container">
        <div class="step-indicator">
            <div class="active"></div>
            <div></div>
            <div></div>
        </div>
        <form id="cool-form" action="/admin/developer/add" method="POST">
            <div class="form-step active">
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="text"
                                            class="form-control noscroll @error('name') is-invalid @enderror" id="name"
                                            name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text"
                                            class="form-control noscroll @error('owner_email') is-invalid @enderror"
                                            id="email" name="owner_email" value="{{ old('owner_email') }}">
                                        @error('owner_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password"
                                            class="form-control noscroll @error('owner_password') is-invalid @enderror"
                                            id="password" name="owner_password" value="{{old('owner_password')}}">
                                        @error('owner_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>

                <label for="file-upload" class="file-label">
                    <input type="file"
                                            class="file-input form-control noscroll @error('ktp') is-invalid @enderror" id="file-upload" name="
                                            name="ktp" value="{{ old('ktp') }}">
                                        @error('ktp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                    <span class="file-button">Choose a file</span>
                    <span class="file-name">foto ktp</span>
                </label>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file"
                                            class="file-input form-control noscroll @error('face') is-invalid @enderror" id="file-uploadandktp"
                                            name="face">
                                        @error('face')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                    <span class="file-buttonandktp">Choose a file</span>
                    <span class="file-name">foto dengan ktp</span>
                </label>
                <br>
                <br>
                <br>

                <button type="submit" class="btn next " value="Sign up">NEXT</button>
            </div>

            <div class="form-step">
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="text"
                                            class="form-control noscroll @error('company') is-invalid @enderror"
                                            id="company" name="company" value="{{ old('company') }}">
                                        @error('company')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                </div>
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="number" placeholder="Nomer Telp Perusahaan" name="telp" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email"
                    class="form-control noscroll @error('email') is-invalid @enderror"
                    id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password"
                                            class="form-control noscroll @error('password') is-invalid @enderror"
                                            id="password" name="password" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonSBU">Choose a file</span>
                    <span class="file-name">Sertifikat Badan Usaha</span>
                </label>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonNIU">Choose a file</span>
                    <span class="file-name">Nomer Induk Usaha</span>
                </label>
                <button class="previous btn">Previous</button>
                <button class="next btn">Next</button>
            </div>

            <div class="form-step">
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonNPWP">Choose a file</span>
                    <span class="file-name">Nomer Pokok Wajib Pajak</span>
                </label><br>
                <div class="form-group">
                    <div class="form-group">
                        <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                        <select class="form-select"
                            name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi"
                            required>
                            <option>Pilih Provinsi</option>
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
                    <div class="form-group">
                        <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                        <select class="form-select " name="regencies_id" id="kota"
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
                    <div class="form-group">
                        <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                        <select class="form-select " name="districts_id" id="kecamatan"
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
                    <div class="form-group">
                        <label class="col-md-3 col-form-label" for="desa">Desa</label>
                        <select class="form-select " name="villages_id" id="desa"
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
                </div>

                <button class="previous btn">Previous</button>
                <button type="submit" class="btn">Submit</button>
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

    <script>
        const form = document.getElementById('cool-form');
        const formSteps = Array.from(form.querySelectorAll('.form-step'));
        // Add an event listener to toggle the dropdown
        const dropdownWrapper = document.querySelector('.input-field.dropdown .select-wrapper');
        dropdownWrapper.addEventListener('click', () => {
            dropdownWrapper.classList.toggle('open');
        });

        // Add event listeners to handle dropdown option selection
        const dropdownOptions = document.querySelectorAll('.input-field.dropdown .dropdown-list li');
        dropdownOptions.forEach((option) => {
            option.addEventListener('click', () => {
                const selectedOption = option.textContent;
                const selectedOptionElement = dropdownWrapper.querySelector('.selected-option');
                selectedOptionElement.textContent = selectedOption;
                dropdownWrapper.classList.remove('open');
            });
        });

        let currentStep = 0;

        function showStep(stepIndex) {
            formSteps.forEach((step, index) => {
                step.classList.toggle('active', index === stepIndex);
            });

            const stepIndicators = document.querySelectorAll('.step-indicator div');
            stepIndicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === stepIndex);
            });
        }

        function goToPreviousStep() {
            currentStep--;
            if (currentStep < 0) {
                currentStep = 0;
            }
            showStep(currentStep);
        }

        function goToNextStep() {
            currentStep++;
            if (currentStep >= formSteps.length) {
                currentStep = formSteps.length - 1;
            }
            showStep(currentStep);
        }

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // Handle form submission here
            // You can use JavaScript or send the data to a server using fetch/axios, etc.
            // Example:
            // const formData = new FormData(form);
            // fetch('your-server-url', {
            //     method: 'POST',
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => console.log(data))
            // .catch(error => console.error(error));
        });

        const previousBtns = form.querySelectorAll('.previous');
        previousBtns.forEach((btn) => {
            btn.addEventListener('click', goToPreviousStep);
        });

        const nextBtns = form.querySelectorAll('.next');
        nextBtns.forEach((btn) => {
            btn.addEventListener('click', goToNextStep);
        });

        showStep(currentStep);
    </script>
    </script>
</body>

</html>
