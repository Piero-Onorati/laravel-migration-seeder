@extends('layouts.app')
@section('title', 'Contacts')

@section('content')

  <div class="container d-flex justify-content-center pt-5">

    {{-- CARD --}}
    <div class="card mb-3" style="max-width: 940px;">
      <div class="row g-0">

        {{-- LEFT PART:img --}}
        <div class="col-md-4">
          <img src="{{asset('img/venice.jpg')}}" class="img-fluid rounded-start" alt="venice">
        </div>

        {{-- RIGHT PART: form --}}
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title pb-5">Do you have any questions for us? fill out the form, we will reply ASAP...</h3>
            <form class="row g-3 needs-validation" novalidate>

              {{-- Name --}}
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              {{-- Last-Name --}}
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              {{-- Username --}}
              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
              </div>

              {{-- City --}}
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              {{-- State --}}
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>

              {{-- ZIP --}}
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>

              {{-- terms and conditions --}}
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>

              {{-- Submit button --}}
              <div class="col-12">
                <button class="btn btn-dark" type="submit">Submit form</button>
              </div>
              
            </form>
          </div>
        </div>

      </div>
    </div>
      
  </div>

@endsection
