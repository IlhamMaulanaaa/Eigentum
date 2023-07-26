<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Multiple Form with Step Indicator</title>
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
                    <input type="text" placeholder="Nama" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>
                {{-- <div class="input-field">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <input type="texarea" placeholder="Alamat" />
                </div> --}}

                {{-- <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama Owner" />
                </div> --}}
                {{-- <div class="input-field">
                    <i class="fa-solid fa-mobile"></i>
                    <input type="number" placeholder="Nomer Handphone" />
                </div> --}}
                <label for="file-upload" class="file-label">
                    <input type="file" id="file-upload" class="file-input">
                    <span class="file-button">Choose a file</span>
                    <span class="file-name">foto ktp</span>
                </label>
                <label for="file-uploadandktp" class="file-label">
                    <input type="file" id="file-upload" class="file-input">
                    <span class="file-buttonandktp" >Choose a file</span>
                    <span class="file-name">foto dengan ktp</span>
                </label>
                <button type="submit" class="btn next " value="Sign up">DAFTAR</button>
            </div>

            <div class="form-step">
                <h2>Step 2</h2>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <button class="previous">Previous</button>
                <button class="next">Next</button>
            </div>

            <div class="form-step">
                <h2>Step 3</h2>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button class="previous">Previous</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById('cool-form');
        const formSteps = Array.from(form.querySelectorAll('.form-step'));
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
