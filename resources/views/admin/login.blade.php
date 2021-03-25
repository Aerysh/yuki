@extends('template.auth')

@section('title', 'Admin Login')

@section('content')
<div class="row d-flex justify-content-center" style="padding-top: 25%;">
    <div class="col-md-6">
        <div class="card border-primary mb-3 shadow">
            <div class="card-body">
                <form>
                    <h5 class="card-title">Admin Login</h5>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    {{-- IDK why the button sticking with password form --}}
                    <div class="form-group d-flex justify-content-center" style="padding-top: 10px;">
                        <button type="submit" class="btn btn-primary">Login</button>&nbsp;
                        <a href="/" class="btn btn-dark">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop