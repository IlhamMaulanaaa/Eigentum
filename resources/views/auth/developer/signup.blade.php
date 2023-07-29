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
                    <input type="text" placeholder="Nama" name="name" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="owner_emal" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="owner_password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>

                <label for="file-upload" class="file-label">
                    <input type="file" id="file-upload" class="file-input" name="ktp">
                    <span class="file-button">Choose a file</span>
                    <span class="file-name">foto ktp</span>
                </label>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="face">
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
                    <input type="text" placeholder="Nama Perusahaan" name="company" />
                </div>
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="number" placeholder="Nomer Telp Perusahaan" name="telp" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" />
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
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Provinsi</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Kabupaten</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Kecamatan</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Desa</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br><br>

                <button class="previous btn">Previous</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

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
