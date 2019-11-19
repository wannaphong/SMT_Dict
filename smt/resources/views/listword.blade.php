@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการคำ</div>
                <a href="./addword">เพิ่มคำ</a>

                <div class="card-body">
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">คำ</th>
                                    <th scope="col">ความหมาย</th>
                                    <th scope="col">กระทำ</th>
                                  </tr>
                                </thead>
                                <tbody>
                    @foreach($words as $key)
                    <tr>
                            <th scope="row">{{$key->ws}}</th>
                            <td>{{$key->meaning}}</td>
                            <td></td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
