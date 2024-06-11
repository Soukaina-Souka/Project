<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="css/register.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>

<!-- <body> -->
    <!-- <div class="signup-box">
    <h1>Register</h1>
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
        <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="user" class="form-label">Utilisateur</label>
                <input type="text" id="username" name="username" value="" class="form-control" placeholder="utilisateur" required>
            <label>Choose a city:</label>
           
   
  </div>
</div> -->
<!-- <select id="ville" name="ville" onchange="selectAllCities(this)">
                <option value="all">Select All</option>
                <option value="Agadir">Agadir</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Fès">Fès</option>
                <option value="Tanger">Tanger</option>
            </select> -->
            <!-- <div class="multiselect">
            <div class="selectBox" onclick="showCheckboxes()">
    <select>
      <option>Select an Ville</option>
    </select>
    <div class="overSelect"></div>
  </div>
  <div id="checkboxes" class="checkboxes">
    <label for="all">
      <input type="checkbox" id="all"/>Select All</label>
    <label for="agadir">
      <input type="checkbox" id="agadir" />Agadir</label>
    <label for="casablanca">
      <input type="checkbox" id="casablanca" />Casablanca</label>
      <label for="rabat">
      <input type="checkbox" id="rabat" />Rabat</label>
      <label for="fès">
      <input type="checkbox" id="fès" />Fès</label>
      <label for="tanger">
      <input type="checkbox" id="tanger" />Tanger</label>
  </div>
</div> 
</div> -->

<body>
    <div class="signup-box">
        <h1>Register</h1>
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <label for="user" class="form-label">Utilisateur</label>
            <input type="text" id="username" name="username" value="" class="form-control" placeholder="utilisateur"
                required>
                <br><br>





                <!-- <div class="dropdown"> -->
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    select ville
                    </button>
                        <div class="dropdown-menu p-4">
                        <!-- <div class="mb-3"> -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='checkall' value="all">
                            <label class="form-check-label" for="dropdownCheck2">
                        Select All
                            </label>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='ville[]' value="agadir">
                            <label class="form-check-label" for="dropdownCheck2">
                        AGADIR
                            </label>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='ville[]' value="casablanca">
                            <label class="form-check-label" for="dropdownCheck2">
                            Casablanca
                            </label>
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='ville[]' value="fes">
                            <label class="form-check-label" for="dropdownCheck2">
                            Fes
                            </label>
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='ville[]' value="rabat">
                            <label class="form-check-label" for="dropdownCheck2">
                            Rabat
                            </label>
                        </div>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name='ville[]' value="tanger">
                            <label class="form-check-label" for="dropdownCheck2">
                            Tanger
                            </label>
                        </div>
                        </div>
                        </div>



              </div>

         
            


            <br><br>
            <button type="submit" class="btn btn-primary"><a href="/home">Register</a></button>

            <div class="register-link">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>

</body>





            <!-- <br><br>
            <button class="btn btn-primary">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div> -->

    <script src="{{ asset('script/script.js') }}"></script>

</body>

</html>