@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            เพิ่มคำใหม่
        </div>
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">คำ</div>
                <form method="POST" action="./postword">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ws" class="col-md-4">คำ</label>

                                <div class="col-md-12">
                                    <input id="ws" type="text" class="form-control" name="ws" value="" required autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lang_ws" class="col-md-4">ภาษาต้นทาง</label>

                                    <div class="col-md-12">
                                            <select name="lang_ws" class="form-control" id="lang_ws">
                                                    @foreach($lang as $key)
                                                    <option value="{{$key->code}}">{{$key->name}}</option>
                                                    @endforeach
                                                  </select>

                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meaning" class="col-md-4">ความหมาย</label>

                                    <div class="col-md-12">
                                        <input id="meaning" type="text" class="form-control" name="meaning" value="" required autofocus>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lang_m" class="col-md-4">ภาษาปลายทาง</label>

                                        <div class="col-md-12">
                                                <select name="lang_m" class="form-control" id="lang_m">
                                                        @foreach($lang as $key)
                                                        <option value="{{$key->code}}">{{$key->name}}</option>
                                                        @endforeach
                                                      </select>

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
