@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                   เพิ่มภาษา
                    </div>
                <form method="POST" action="./postlang">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ws" class="col-md-4">ภาษา</label>

                                <div class="col-md-12">
                                    <input id="ws" type="text" class="form-control" name="name"
                                    value=""
                                    required autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meaning" class="col-md-4">รหัสภาษา</label>

                                    <div class="col-md-12">
                                        <input id="meaning" type="text" class="form-control" name="code"
                                        value=""
                                        required autofocus>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            <div style="margin-top: 2em;"></div>
            <center><button type="submit" class="btn btn-primary">บันทึก</button></center>


            </form>

            </div>
        </div>
    </div>
</div>
@endsection
