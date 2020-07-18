<?php

@extends('layouts.app')

@include('layouts.nav')

<div class="container">
    @section('content')
        @include('layouts.navigation')

        <form action="/home" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Send Message</h1>
                    </div>

                    <div class="form-group row">
                        <label for="phonenumber" class="col-form-label">Phone Number</label>
                        <input id="phonenumber"
                               type="tel"
                               class="form-control @error('message') is-invalid @enderror"
                               name="phonenumber"
                               autocomplete="phonenumber" autofocus>
                        @error('phonenumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label">Message</label>
                        <textarea id="message"
                                  maxlength="140"
                                  type="text"
                                  class="form-control @error('message') is-invalid @enderror"
                                  name="message"
                                  autocomplete="message"
                                  autofocus>
                        </textarea>
                        <p>
                            <span id="wordCount">140</span> Characters
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
