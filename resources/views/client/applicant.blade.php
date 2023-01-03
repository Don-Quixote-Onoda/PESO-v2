<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESO | Applicant's Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .form-container {
            height: 100vh;
        }

        .form-section:not(.active) {
            display: none;
        }
    </style>
</head>
<body>
    <section >
        <div class="container form-container d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-md-10 offset-md-3 mx-auto">
                    <div class="card">
                        <h5 class="card-header text-center">Applicant Registration Form</h5>
                        <div class="card-body">
                            <form class="row g-3">
                                @csrf
                                <div class="form-section row mt-3 active">
                                    <h6 class="my-3">I. Personal Information</h6>
                                    <hr>
                                    <div class="col-md-6  mb-3">
                                        <label for="surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="surname">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="middlename">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" placeholder="Ex. Sr., Jr., III etc.">
                                    </div>
                                    <div class="col-md-4  mb-3">
                                        <label for="religion" class="form-label">Religion</label>
                                        <input type="text" class="form-control" id="religion">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="civilstatus" class="form-label">Civil Status</label>
                                        <select id="civilstatus" class="form-select">
                                          <option selected value="">Choose...</option>
                                          <option value="Single">Single</option>
                                          <option>...</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                    <label for="sex" class="form-label">Sex</label>
                                        <div class="d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  Male
                                                </label>
                                              </div>
                                              <div class="form-check ms-3">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-section row mt-3">
                                    <h6 class="my-3">I. Personal Information</h6>
                                    <hr>
                                    <div class="col-md-6  mb-3">
                                        <label for="surname" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="surname">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="middlename">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" placeholder="Ex. Sr., Jr., III etc.">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <label for="religion" class="form-label">Religion</label>
                                        <input type="text" class="form-control" id="religion">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="civilstatus" class="form-label">Civil Status</label>
                                        <select id="civilstatus" class="form-select">
                                          <option selected value="">Choose...</option>
                                          <option value="Single">Single</option>
                                          <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                  <label for="inputEmail4" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label">Address</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                  <label for="inputAddress2" class="form-label">Address 2</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">City</label>
                                  <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                  <label for="inputState" class="form-label">State</label>
                                  <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label">Zip</label>
                                  <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div> --}}
                                <div class="form-navigation">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary float-start">Previous</button>
                                        <button type="button" class="btn btn-primary float-end">Next</button>
                                    </div>
                                </div>
                              </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</html>