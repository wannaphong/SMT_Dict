@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เมนูจัดการคำศัพท์</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-warning" href="./word">จัดการคำศัพท์</a><br><br>
                    <a class="btn btn-warning" href="./lang">จัดการภาษา</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
