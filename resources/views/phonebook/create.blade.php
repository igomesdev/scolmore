@extends('layouts.app')

<div class="container">

    @section('content')

        @include('layouts.navigation')

        <form action="/phonebook/create" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Send Message</h1>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-form-label">Phone Number</label>
                        <input id="phone"
                               class="form-control"
                               name="phone"
                               autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label">Message</label>

                        <textarea id="message"
                                  maxlength="2000"
                                  type="text"
                                  class="form-control @error('message') is-invalid @enderror"
                                  name="message"
                                  autocomplete="message"
                                  autofocus>
                        </textarea>
                        <p>
                            <span id="wordCount">2000</span> Characters
                        </p>

                        @error('message')
                        <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
    @endsection
</div>
