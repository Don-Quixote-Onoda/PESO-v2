<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Applicant Form</title>

    <!-- Favicons -->
  <link href="{{'img\homepage\peso_icon.png'}}" rel="icon">


<body class="bg-dark">
    <div class="text-light text-center container-sm">
        <h1><span class="mainhead">PESO EMPLOYMENT INFORMATION SYSTEM</span></h1>
        <h1><span class="mainhead">APPLICANT REGISTRATION FORM</span></h1>
        <h4><span class="instruction here">Instructions here</span></h4>
    </div>
    <div class="container text-light">
        <h5><span class="category">I. PERSONAL INFORMATION</span></h5>
        <div class="row">
            <div class="col-sm-3">
                <input type="text" class="form-control mb-2" placeholder="SURNAME" id="sname" name="sname">
                <input type="text" class="form-control mb-2" placeholder="FIRST NAME" id="fname" name="fname">
                <input type="text" class="form-control mb-2" placeholder="MIDDLE NAME" id="mname" name="mname">
                <input type="text" class="form-control mb-2" placeholder="SUFFIX(Ex: Sr. Jr. III Etc.)" id="suffix" name="suffix">

                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">EMAIL ADDRESS</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="email" name="email">
                </div>

                <div class="input-group mt-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">DISABILITY</span>
                    </div>
                    <select class="custom-select" id="disability" name="disabilty">
                        <option selected>Please Select</option>
                        <option value="1">Visual</option>
                        <option value="2">Hearing</option>
                        <option value="3">Speech</option>
                        <option value="4">Physical</option>
                        <option value="5">Others</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Others, specify." id="others" name="disablity">
                </div>
                <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text mb-4" id="inputGroup-sizing-default">EMPLOYMENT STATUS TYPE</span>
                    </div>
                    <div class="form-check form-check-inline mx-3 mb-1">
                        <input class="form-check-input" type="radio" name="estatus" id="inlineRadio1" value="employed">
                        <label class="form-check-label" for="inlineRadio1">Employed</label>

                    </div>
                    <div class="input-group mt-1 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">If Employed</span>
                        </div>
                        <select class="custom-select" id="employed" name="etype">
                            <option selected>Please Choose...</option>
                            <option value="1">Wage Employed</option>
                            <option value="2">Self Employed</option>
                        </select>
                    </div>
                    <div class="form-check form-check-inline mt-1 mx-3">
                        <input class="form-check-input" type="radio" name="estatus" id="inlineRadio2"
                            value="unemployed">
                        <label class="form-check-label" for="inlineRadio2">Unemployed</label>
                    </div>
                </div>

                <div class="input-group mt-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">If Unemployed</span>
                    </div>
                    <select class="custom-select" id="unemployed" name="etype">
                        <option selected>Please Choose...</option>
                        <option value="1">New Entrant/Fresh Graduate</option>
                        <option value="2">Finished Contract</option>
                        <option value="3">Resigned</option>
                        <option value="4">Retired</option>
                        <option value="5">Terminated/Laidoff(local)</option>
                        <option value="5">Terminated/Laidoff(abroad)</option>
                        <option value="5">Others, specify</option>
                    </select>
                </div>
                <input type="text" class="form-control" placeholder="Specify..." id="others" name="etype">
            </div>

            <div class="col-sm-3">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">DATE OF BIRTH</span>
                    </div>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="dob">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">PLACE OF BIRTH</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="pob">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">SEX</span>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-4">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">RELIGION</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="religion">
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Are you actively looking for
                            work?</span>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="work" id="inlineRadio1" value="employed">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="work" id="inlineRadio2"
                            value="unemployed">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>
                <div class="input-group sm-mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">How long have you been
                            looking for work?</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="jobsearch">
                </div>
                <div class="input-group sm-mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Willing to work
                            immediately?</span>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="willing" id="inlineRadio1" value="employed">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="willing" id="inlineRadio2"
                            value="unemployed">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">If no, when?</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="ifno">
                </div>




            </div>


            <div class="col-sm-3">
                <h6><span class="category mt-2">PRESENT ADDRESS</span></h6>
                <input type="text" class="form-control" placeholder="House No./Sreet Village" id="strt" name="strt">
                <input type="text" class="form-control" placeholder="Barangay" id="brgy" name="brgy">
                <input type="text" class="form-control" placeholder="Municipality/City" id="cty" name="cty">
                <input type="text" class="form-control" placeholder="Province" id="prvnc" name="prvnc">

                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Are you a 4PSs benefeciary?/span>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="benefeciary" id="inlineRadio1" value="benefeciary">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline mt-2 mx-2">
                        <input class="form-check-input" type="radio" name="benefeciary" id="inlineRadio2"
                            value="benefeciary">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">If yes, Household ID No.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="ifyes">
                </div>

            </div>

            <div class="col-sm-3">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">CIVIL STATUS</span>
                    </div>
                    <select class="custom-select" id="cstatus" name="cstatus">
                        <option selected>Please Select one</option>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                        <option value="3">Widowed</option>
                        <option value="4">Separated</option>
                        <option value="5">Live-in</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default" >TIN</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="tin" name="tin">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">GSIS/SSS ID No.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="sss" name="sss">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">PAGIBIG No.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="pagibig" name="pagibig">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">TIN</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="tin" name="tin">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">PHILHEALTH No.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="philhealth" name="philhealth">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">HEIGHT</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="height" name="height">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">LANDLINE NUMBER</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="lnum" name="lnum">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">CELLPHONE NUMBER</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="cnum" name="cnum">
                </div>

            </div>
        </div>

        <h5 class="mt-5">II. JOB PREFERENCE</h5>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mt-2">PREFERRED OCCUPATION</h6>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="job1" name="job1">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="job2" name="job2">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="job3" name="job3">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">4.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="job4" name="job4">
                </div>
                <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Expected Salary (Range)</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="range" name="range">
                </div>


            </div>
            <div class="col-sm-4">
                <h6 class="mt-2"><span class="">PREFERRED WORK LOCATION</span></h6>
                <div class="">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="workloc" value="Local">
                    <label class="form-check-label" for="exampleCheck1">Local, specify cities/municipalities.</label>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="loc1" name="loc1">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="loc2" name="loc2">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="loc3" name="loc3">
                </div>
                <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Passport No.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="passport" name="passport">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Expiry date</span>
                    </div>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="edate" name="edate">
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="workloc" value="Overseas">
                    <label class="form-check-label" for="exampleCheck1">Overseas, specify countries.</label>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="over1" name="over1">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="over2" name="over2">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="over3" name="over3">
                </div>
            </div>
        </div>

        <h5 class="mt-5">III. LANGUAGE/DIALECT PROFICIENCY</h5>
        <div class="row">
            <div class="col">
                <span>Check if applicable</span>
                <div class="form-group form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="english" value="English">
                    <label class="form-check-label" for="exampleCheck1">English</label>
                </div>
                <div class="form-group form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="filipino" value="Filipino">
                    <label class="form-check-label" for="exampleCheck1">Filipino</label>
                </div>
                <div class="form-group form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="others" value="Others">
                    <label class="form-check-label" for="exampleCheck1">Others:</label>
                    <input type="text" class="form-control mb-2" placeholder="Others, please specify.)"
                        id="langothers" name="others">
                </div>
            </div>
            <div class="col">
                <div class="input-group justify-content-center">
                    <div class="input-group-prepend">
                        <h6 class="">READ</h6>
                    </div>

                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="reng">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="feng">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="oeng">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">WRITE</h6>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="wreng">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="wrfil">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="wong">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">SPEAK</h6>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="speng">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="spfil">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="spother">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">UNDERSTAND</h6>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="undeng">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="unfil">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="unot">
            </div>
        </div>

        <h5 class="mt-5">IV. EDUCATIONAL BACKGROUND</h5>
        <div>
            <div class="row">
                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">Elementary</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="School" id="elemschool"
                        name="elemschool">
                    <input type="text" class="form-control mb-2" placeholder="Grade Level" id="elemcourse"
                        name="elemcourse">
                    <input type="text" class="form-control mb-2" placeholder="Year Graduated" id="elemgrad"
                        name="elemgrad">
                    <input type="text" class="form-control mb-2" placeholder="Awards Received" id="elem"
                        name="elemcourse">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">If undergraduate,</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="What level?" id="elemlevel"
                        name="elemlevel">
                    <input type="text" class="form-control mb-2" placeholder="Year last attended" id="elemlast"
                        name="elemlast">

                </div>

                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">Secondary</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="School" id="secschool" name="secschool">
                    <input type="text" class="form-control mb-2" placeholder="Grade Level" id="seccourse"
                        name="seccourse">
                    <input type="text" class="form-control mb-2" placeholder="Year Graduated" id="elemgrad"
                        name="secgrad">
                    <input type="text" class="form-control mb-2" placeholder="Awards Received" id="secawards"
                        name="secawards">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">If undergraduate,</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="What level?" id="seclevel"
                        name="seclevel">
                    <input type="text" class="form-control mb-2" placeholder="Year last attended" id="seclast"
                        name="seclast">
                </div>

                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">Tertiary</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="School" id="terschool" name="terschool">
                    <input type="text" class="form-control mb-2" placeholder="Grade Level" id="tercourse"
                        name="tercourse">
                    <input type="text" class="form-control mb-2" placeholder="Year Graduated" id="tergrad"
                        name="tergrad">
                    <input type="text" class="form-control mb-2" placeholder="Awards Received" id="terawards"
                        name="terawards">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">If undergraduate,</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="What level?" id="terlevel"
                        name="elemlevel">
                    <input type="text" class="form-control mb-2" placeholder="Year last attended" id="terlast"
                        name="terlast">
                </div>

                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">Graduate Studies</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="School" id="gradschool"
                        name="gradschool">
                    <input type="text" class="form-control mb-2" placeholder="Grade Level" id="gradcourse"
                        name="gradcourse">
                    <input type="text" class="form-control mb-2" placeholder="Year Graduated" id="gradgrad"
                        name="gradgrad">
                    <input type="text" class="form-control mb-2" placeholder="Awards Received" id="gradawards"
                        name="gradcourse">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">If undergraduate,</h6>
                    </div>
                    <input type="text" class="form-control mb-2" placeholder="What level?" id="gradlevel"
                        name="gradlevel">
                    <input type="text" class="form-control mb-2" placeholder="Year last attended" id="gradlast"
                        name="gradlast">
                </div>

            </div>
        </div>

        <h5 class="mt-5">IV. TECHNICAL/VOCATIONAL AND OTHER TRAINING <span class="fs-6">(Include
                courses takens as part of college education)</span></h5>
        <div>
            <div class="row">
                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">TRAINING/VOCATIONAL COURSE</h6>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="tvoccourse" name="tvoccourse1">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="tvcourse" name="tvoccourse2">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="tvcourse" name="tvoccourse3">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">DURATION</h6>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="duration1">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="duration2">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="duration3">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">TRAINING INSTITUTION</h6>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training1">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training2">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training3">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group-prepend input-group justify-content-center">
                        <h6 class="">CERTIFICATES RECEIVED <span class="fs-6">(NC I, NC II, NC
                                II, NC IV, etc)</span></h6>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training1">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training2">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="duration" name="training3">
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mt-5">VI. ELIGIBILITY/PROFESSIONAL LICENSE</h5>
        <div class="row">
            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">TRAINING/VOCATIONAL COURSE</h6>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="voccourse" name="voccourse1">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="voccourse" name="voccourse2">
                </div>

            </div>
            <div class="col">
                <div class="input-group justify-content-center">
                    <div class="input-group-prepend">
                        <h6 class="">RATING</h6>
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="rat1">
                <input type="text" class="form-control mt-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="rat2">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">DATE OF EXAMINATION</h6>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="dat1">
                <input type="text" class="form-control mt-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="dat2">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">PROFESSIONAL LICENSE (PRC)</h6>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="prlicense" name="prlicense1">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="prlicense" name="prlicense2">
                </div>
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">VALID UNTIL</h6>
                </div>
                <input type="date" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="date1">
                <input type="date" class="form-control mt-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="date2">
            </div>
        </div>


        <h5 class="mt-5">VII. WORKING EXPERIENCE <span class="fs-6">(Limit to 10 years period,
                start with the most recent employment)</span></h5>
        <div class="row">
            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">Company Name</h6>
                </div>
                <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="companyname" name="cname1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="companyname" name="cname2">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="companyname" name="cname3">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">4.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="companyname" name="cname4">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">5.</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" id="companyname" name="cname4">
                </div>

            </div>
            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">Address</h6>
                </div>
                <p class="text-center">(City, Municipality)</p>
                <input type="text" class="form-control mt-4" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="add1">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="add2">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="add3">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="add4">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="add5">
            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">Position</h6>
                </div>
                <input type="text" class="form-control mt-5" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="pos1">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="pos2">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="pos3">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="pos4">
                <input type="text" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="pos5">

            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">Inclusive Dates</h6>
                </div>
                <div class="input-group-prepend input-group justify-content-center mt-5">
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate1">
                    <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate2">
                </div>
                <div class="input-group-prepend input-group justify-content-center">
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate3">
                    <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate4">
                </div>
                <div class="input-group-prepend input-group justify-content-center">
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate5">
                    <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate6">
                </div>
                <div class="input-group-prepend input-group justify-content-center">
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate7">
                    <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate8">
                </div>
                <div class="input-group-prepend input-group justify-content-center">
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate9">
                    <span class="input-group-text" id="inputGroup-sizing-default">TO</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="indate10">
                </div>

            </div>

            <div class="col">
                <div class="input-group-prepend input-group justify-content-center">
                    <h6 class="">Status</h6>
                </div>
                <p class="text-center mb-4">(Permanent, Contractual, Part-time, Probationary)</p>

                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="stat1">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="stat2">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="stat3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="stat4">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="stat5">

            </div>
        </div>

        <h5 class="mt-5">VIII. OTHER SKILLS ACQUIRED WITHOUT FORMAL TRAINING</h5>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="AUTO MECHANIC" id="defaultCheck1" name="other1">
                        <label class="form-check-label" for="defaultCheck1">
                            AUTO MECHANIC
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="BEAUTICIAN" id="defaultCheck1" name="other2">
                        <label class="form-check-label" for="defaultCheck1">
                            BEAUTICIAN
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CARPENTRY WORK" id="defaultCheck1" name="other3">
                        <label class="form-check-label" for="defaultCheck1">
                            CARPENTRY WORK
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="COMPUTER LITERATE" id="defaultCheck1" name="other4">
                        <label class="form-check-label" for="defaultCheck1">
                            COMPUTER LITERATE
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="DOMESTIC CHORES" id="defaultCheck1" name="other5">
                        <label class="form-check-label" for="defaultCheck1">
                            DOMESTIC CHORES
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=" DRIVER" id="defaultCheck1" name="other6">
                        <label class="form-check-label" for="defaultCheck1">
                            DRIVER
                        </label>
                    </div>
                </div>


                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ELECTRICIAN" id="defaultCheck1" name="other7">
                        <label class="form-check-label" for="defaultCheck1">
                            ELECTRICIAN
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="EMBROIDERY" id="defaultCheck1" name="other8">
                        <label class="form-check-label" for="defaultCheck1">
                            EMBROIDERY
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="GARDENING" id="defaultCheck1" name="other9">
                        <label class="form-check-label" for="defaultCheck1">
                            GARDENING
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="MASONRY" id="defaultCheck1" name="other10">
                        <label class="form-check-label" for="defaultCheck1">
                            MASONRY
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PAINTER/ARTIST" id="defaultCheck1" name="other11">
                        <label class="form-check-label" for="defaultCheck1">
                            PAINTER/ARTIST
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PAINTING JOBS" id="defaultCheck1" name="other12">
                        <label class="form-check-label" for="defaultCheck1">
                            PAINTING JOBS
                        </label>
                    </div>
                </div>


                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PHOTOGRAPHY" id="defaultCheck1" name="other13">
                        <label class="form-check-label" for="defaultCheck1">
                            PHOTOGRAPHY
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PLUMBING" id="defaultCheck1" name="other14">
                        <label class="form-check-label" for="defaultCheck1">
                            PLUMBING
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="SEWING DRESSES" id="defaultCheck1" name="other15">
                        <label class="form-check-label" for="defaultCheck1">
                            SEWING DRESSES
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="STENOGRAPHY" id="defaultCheck1" name="other16">
                        <label class="form-check-label" for="defaultCheck1">
                            STENOGRAPHY
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="TAILORING" id="defaultCheck1" name="other17">
                        <label class="form-check-label" for="defaultCheck1">
                            TAILORING
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="OTHERS" id="defaultCheck1" name="other18">
                        <label class="form-check-label" for="defaultCheck1">
                            OTHERS
                        </label>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" id="others" name="otherskills">
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <div class="row">
                <div class="col-6">
                    <h5 class="mt-5 text-center">CERTIFICATION/AUTHORIZATION</h5>
                    <p class="text-center">This is to certify that all data/information that i have provided in
                        this form are true to the
                        best of my knowledge.
                        This is also to authorized the DOLE to include my profile in the PESO Employment Management
                        Information System, which is a subsystem
                        of the PhiljobNet. It us understand that my name shall be made a available to employers who have
                        access to the Registry.
                        I am also aware that DOLE is not obliged to seek employment on my behalf</p>

                    <form>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlFile1">Upload an E-Signature of the Applicant</label>
                        </div>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="esig">
                    </form>
                </div>

                <div class="col-6">

                </div>
            </div>
        </div>




    </div>
</body>

</html>
