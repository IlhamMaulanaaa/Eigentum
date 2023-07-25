<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/pages/profile.css">
</head>
<body>
		<div class="">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="img/profile.png" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Jono Wicaksono</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Profile
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Kata Sandi
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Keamanan
						</a>
						<!-- <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Web
						</a> -->
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notifikasi
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Profil</h3>
						<h5 class="mb-4">Pemilik</h5>
						<div class="row" style="margin-top: -20px;">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nama Lengkap</label>
								  	<input type="text" class="form-control" value="Jono Wicaksono">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="jonowicaksono@gmail.com">
								</div>
							</div>
							<div class="col-md-6 form-group">
								<label>KTP</label>
								<div class="container-upload">
									<div class="wrapper wrapper4">
									   <div class="image">
										  <img src="" alt="">
									   </div>
									   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
										  <div class="icon">
											 <i class="fas fa-photo"></i>
										  </div>
										  <div class="text">
											 No file chosen, yet!
										  </div>
									   </div>
									   <div id="cancel-btn">
										  <i class="fas fa-times"></i>
									   </div>
									   <div class="file-name">
										  File name here
									   </div>
									</div>
									<button onclick="defaultBtnActive(5)" class="custom-btn" id="custom-btn">Upload</button>
									<input id="default-btn5" type="file" hidden>
								 </div>
							</div>
							<div class="col-md-6 form-group">
								<label>Wajah</label>
								<div class="container-upload">
									<div class="wrapper wrapper5">
									   <div class="image">
										  <img src="" alt="">
									   </div>
									   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
										  <div class="icon">
											 <i class="fas fa-camera"></i>
										  </div>
										  <div class="text">
											 No file chosen, yet!
										  </div>
									   </div>
									   <div id="cancel-btn">
										  <i class="fas fa-times"></i>
									   </div>
									   <div class="file-name">
										  File name here
									   </div>
									</div>
									<button onclick="defaultBtnActive(5)" class="custom-btn" id="custom-btn">Upload</button>
									<input id="default-btn5" type="file" hidden>
								 </div>
							</div>
						</div>
						<h5 class="mb-4" style="margin-top: 150px;">Developer</h5>
						<div class="row" style="margin-top: -20px;">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nama Lengkap</label>
								  	<input type="text" class="form-control" value="Jono Wicaksono">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nomor Telephone</label>
								  	<input type="text" class="form-control" value="+62 72438234328">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="jonowicaksono@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Perusahaan</label>
								  	<input type="text" class="form-control" value="PT Satu Raga">
								</div>
							</div>
							<div class="col-md-6 form-group">
								<label>Provinsi</label>
								<select class="form-control" name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi" required>
									<option>Pilih Provinsi</option>
									<option></option>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Kabupaten / Kota</label>
								<select class="form-control" name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi" required>
									<option>Pilih Kota</option>
									<option></option>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Kecamatan</label>
								<select class="form-control" name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi" required>
									<option>Pilih Kecamatan</option>
									<option></option>
								</select>
							</div>	
							<div class="col-md-6 form-group">
								<label>Desa</label>
								<select class="form-control" name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi" required>
									<option>Pilih Desa</option>
									<option></option>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Nomor Induk Berusaha</label>
								<div class="container-upload">
									<div class="wrapper wrapper1">
									   <div class="image">
										  <img src="" alt="">
									   </div>
									   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
										  <div class="icon">
											 <i class="fas fa-photo"></i>
										  </div>
										  <div class="text">
											 No file chosen, yet!
										  </div>
									   </div>
									   <div id="cancel-btn">
										  <i class="fas fa-times"></i>
									   </div>
									   <div class="file-name">
										  File name here
									   </div>
									</div>
									<button onclick="defaultBtnActive(1)" class="custom-btn" id="custom-btn">Upload</button>
									<input id="default-btn1" type="file" hidden>
								 </div>
							</div>
							<div class="col-md-6 form-group" >
								<label>Nomor Pokok Wajib Pajak</label>
								<div class="container-upload">
									<div class="wrapper wrapper2">
									   <div class="image">
										  <img src="" alt="">
									   </div>
									   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
										  <div class="icon">
											 <i class="fas fa-photo"></i>
										  </div>
										  <div class="text">
											 No file chosen, yet!
										  </div>
									   </div>
									   <div id="cancel-btn">
										  <i class="fas fa-times"></i>
									   </div>
									   <div class="file-name">
										  File name here
									   </div>
									</div>
									<button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
									<input id="default-btn2" type="file" hidden>
								 </div>
							</div>
							<div class="col-md-6 form-group" style="top: 130px;">
								<label>Sertifikat Badan Usaha</label>
								<div class="container-upload">
									<div class="wrapper wrapper3">
									   <div class="image">
										  <img src="" alt="">
									   </div>
									   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
										  <div class="icon">
											 <i class="fas fa-photo"></i>
										  </div>
										  <div class="text">
											 No file chosen, yet!
										  </div>
									   </div>
									   <div id="cancel-btn">
										  <i class="fas fa-times"></i>
									   </div>
									   <div class="file-name">
										  File name here
									   </div>
									</div>
									<button onclick="defaultBtnActive(3)" class="custom-btn" id="custom-btn">Upload</button>
									<input id="default-btn3" type="file" hidden>
								 </div>
							</div>
							
						</div>
						<div style="margin-top: 270px;">
							<button class="btn btn-primary">Memperbarui</button>
							<button class="btn btn-light">Membatalkan</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Pengaturan Kata Sandi</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Kata Sandi Lama</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Kata Sandi Baru</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Konfirmasi Kata Sandi Baru</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Memperbarui</button>
							<button class="btn btn-light">Membatalkan</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Pengaturan Keamanan</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Masuk</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Autentikasi dua faktor</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Pemulihan
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Memperbarui</button>
							<button class="btn btn-light">Membatalkan</button>
						</div>
					</div>
					<!-- <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Memperbarui</button>
							<button class="btn btn-light">Membatalkan</button>
						</div>
					</div> -->
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Pengaturan Notifikasi</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Terima notifikasi tentang properti baru yang sesuai dengan kriteria saya.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2">
								<label class="form-check-label" for="notification2">
									Terima notifikasi tentang penawaran dan promo terbaru.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3">
								<label class="form-check-label" for="notification3">
									Terima notifikasi tentang perkembangan terbaru di daerah properti yang saya pilih.
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Memperbarui</button>
							<button class="btn btn-light">Membatalkan</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>


	<script>
        function defaultBtnActive(wrapperNumber) {
        const wrapper = document.querySelector(".wrapper" + wrapperNumber);
        const fileName = wrapper.querySelector(".file-name");
        const defaultBtn = document.querySelector("#default-btn" + wrapperNumber);
        const customBtn = wrapper.querySelector(".custom-btn");
        const MembatalkanBtn = wrapper.querySelector("#Membatalkan-btn i");
        const img = wrapper.querySelector("img");
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

        defaultBtn.click();

        defaultBtn.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                const result = reader.result;
                img.src = result;
                wrapper.classList.add("active");
            };
            MembatalkanBtn.addEventListener("click", function () {
                img.src = "";
                wrapper.classList.remove("active");
            });
            reader.readAsDataURL(file);
            }
            if (this.value) {
            let valueStore = this.value.match(regExp);
            fileName.textContent = valueStore;
            }
        });
        }


      </script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>