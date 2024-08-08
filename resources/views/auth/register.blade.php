@extends('users.layouts.app')


@section('content')
    <div id="page-content">
        <!--Body Container-->
        <!--Breadcrumbs-->
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page"></a> <span
                        aria-hidden="true"></span> <span></span></div>
            </div>
        </div>
        <!--End Breadcrumbs-->
        <!--Page Title with Image-->
        <div class="page-title">
            <h1>Create An Account</h1>
        </div>
        <!--End Page Title with Image-->
        <div class="container">
            <!--Main Content-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 box">
                    <div class="mb-4">
                        <h3>Personal Information</h3>
                        <form method="post" action="/register" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name"> Name <span class="required">*</span></label>
                                        <input id="name" type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">

                                        <label for="username">Username <span class="required">*</span></label>
                                        <input id="username" type="text" name="username" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="no_telepon"> No Telepon <span class="required">*</span></label>
                                        <input id="no_telepon" type="text" name="no_telepon" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat <span class="required">*</span></label>
                                        <input id="alamat" type="text" name="alamat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email"> Email Address <span class="required">*</span></label>
                                        <input id="email" type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Password <span class="required">*</span></label>
                                        <input id="password" type="password" name="password" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn mb-3">Submit</button>
                                </div>
                                <div class="text-right col-12 col-sm-12 col-md-6 col-lg-6">
                                    <a href="/login">« Back To Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div><!--End Body Container-->

    </div><!--End Page Wrapper-->
@endsection
