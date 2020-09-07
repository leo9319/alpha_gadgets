@extends('layouts.app')

@section('content')

<div class="container px-5">
    <form class="border border-gray rounded p-5" action="{{ route('preorder.store') }}" method="POST">
         @csrf
         <p class="h4 mb-4 text-center">Pre Order - iPhone 11 128GB</p>

         @if ($errors->any())
             <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
                </ul>
             </div>
         @endif

         <div class="form-row mb-4">
            <input type="text" name="full_name" class="form-control" placeholder="Full name*" required>
         </div>

         <div class="form-row mb-4">
            <div class="col">
               <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="col">
               <input type="text" name="mobile" class="form-control" placeholder="Mobile (11 digits)*" pattern="[0-9]{11}" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
            </div>
         </div>

         <div class="form-row mb-4">
            <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
         </div>

         <div class="form-row mb-4">
            <div class="col">
               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
               @error('password')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                  </span>
               @enderror
               <small id="emailHelp" class="form-text text-muted">You will need this password to login and check the status of your order</small>
            </div>
            <div class="col">
               <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
            </div>
         </div>

         <div class="form-check">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="terms">I agree to the terms and conditions set by alpha gadgets. Therefore, I am sharing my personal information for the pre-order of the aforementioned handset.</label>
         </div>

         <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
         <hr>
         <p class="text-center">By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>
         </p>
     </form>
</div>

@endsection