<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home - Informatica Opdracht</title>

        <!-- Favicon -->
        <link rel="icon" type="apple-touch-icon" href="assets/img/apple-touch-icon.ico" />
        <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" />

        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>

    <body>
        <header id="navbar">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a href="/" class="navbar-brand">Employee</a>
                <div class="collapse navbar-collapse" id="siteNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#siteNavbar" aria-controls="siteNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Socials</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://github.com/CasDoorn0570" target="_blank">Github</a></li>
                                <li><a class="dropdown-item" href="https://instagram.com/cas_doorn06" target="_blank">Instagram</a></li>
                                <li><a class="dropdown-item" href="https://tiktok.com/@cas.doorn" target="_blank">Tiktok</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Over Mij</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" id="searchEmployee" placeholder="Search for employee" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" onclick="window.searchEmployee()" type="button">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        <header id="about">   
            <div class="aboutemployees">
                <div class="container">
                    <h1 class="abouth1">All about employees</h1>
                    <p>Hier een lijst van onze employees.<br>Ook kun je hier een nieuwe employee opvoeren.</p>
                    <p>
                        <a href="#create" class="btn btn-primary btn-lg" role="button">Learn more »</a>
                    </p>
                </div>
            </div>
        </header>

        <header id="table">
            <div class="container">        
                <table class="table table-striped table-bordered table-sortable" id="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Department Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee as $value)
                        <tr>
                            <td>{{ $value->first_name }}</td>
                            <td>{{ $value->last_name }}</td>
                            <td>{{ $value->department_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </header>

        <header id="create">
            <form action="{{ url('create') }}" method="post">
                @csrf
                <div class="container">
                    <table class="table table-bordered tableFixHead">
                        <thead class="table-secondary">
                            <h3>Create new employee:</h3>
                            <tr>
                                <th scope="col">First Name</th>
                                <th class="col">Last Name</th>
                                <th class="col">Department Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input type="text" class="form-control" name="first_name" placeholder="John" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="last_name" placeholder="Doe" required>
                            </td>
                            <td>
                                <select class="form-control" id="departmentName" name="department_id" placeholder="department" required>
                                    <option value="10">Administration</option>
                                    <option value="20">Marketing</option>
                                    <option value="50">Shipping</option>
                                    <option value="60">IT</option>
                                    <option value="80">Sales</option>
                                    <option value="90">Executive</option>
                                    <option value="110">Accounting</option>
                                    <option value="190">Contracting</option>
                                </select>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <div class="d-grid gap-2 mb-5">
                        <button type="submit" class="btn btn-outline-dark active" data-bs-toggle="submit" aria-pressed="true">Creeer nieuwe employee</button>
                    </div>
                </div>
            </form>
        </header>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>