@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/developer/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control noscroll" id="company" name="company">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control noscroll" id="email" name="email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control noscroll" id="password" name="password"">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control noscroll" id="owner" name="owner" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control noscroll" id="address" name="address">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="nib" class="form-label">Nomor Induk Berusaha</label>
                                <input type="file" class="form-control noscroll" id="license_nib" name="license[]" multiple>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="npwp" class="form-label">Nomor Pokok Wajib Pajak</label>
                                <input type="file" class="form-control noscroll" id="license_npwp" name="license[]" multiple>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="sbu" class="form-label">Sertifikat Badan Usaha</label>
                                <input type="file" class="form-control noscroll" id="license_sbu" name="license[]" multiple>
                            </div>
                            
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="number" class="form-control noscroll" id="phone_number" name="phone_number">
                            </div>
                            <br>
                            
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/developer/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
