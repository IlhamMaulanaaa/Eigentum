<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>Eigentum</title>

    <link href="/css/admin/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-4 col-md-4 col-lg-4 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back</h1>
                            <p class="lead">
                                Sign in to continue or 
                                <a href="signup">Sign Up</a>
                            </p>
                        </div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									{{-- <div class="text-center">
										<img src="{{ asset('storage/' . $unit->image_1) }}" alt="Charles Hall"
											class="img-fluid rounded-circle" width="132" height="132" />
									</div> --}}
									<form action="/session/signin/create" method="post">
										@csrf
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input value="{{ Session::get('email') }}" class="form-control form-control-lg" type="email"
												name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password"
												name="password" placeholder="Enter your password" />
										</div>
										<div class="text-center mb-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>
                        

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/js/admin/app.js"></script>

</body>

</html>
