@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if ($word==null)
            เพิ่มคำใหม่
            @else
            แก้ไขคำ
            @endif
        </div>
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">คำ</div>
                @if ($word==null)
                <form method="POST" action="./postword">
                @else
                <form method="POST" action="../update_word">
                @endif
                @csrf
                <div class="card-body">
                    <div class="row">
                        @if ($word!=null)
                        <input type="hidden" name="id" value="{{$word->id}}">
                        @endif

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ws" class="col-md-4">คำ</label>

                                <div class="col-md-12">
                                    <input id="ws" type="text" class="form-control" name="ws"
                                    @if ($word==null)
                                    value=""
                                    @else
                                    value="{{$word->ws}}"
                                    @endif
                                    required autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lang_ws" class="col-md-4">ภาษาต้นทาง</label>

                                    <div class="col-md-12">
                                            <select name="lang_ws" class="form-control" id="lang_ws">
                                                    @foreach($lang as $key)
                                                    @if ($word==null)
                                                    <option value="{{$key->code}}">{{$key->name}}</option>
                                                    @else
                                                    @if($word->lang_ws==$key->code)
                                                    <option selected value="{{$key->code}}">{{$key->name}}</option>
                                                    @else
                                                    <option value="{{$key->code}}">{{$key->name}}</option>
                                                    @endif
                                                    @endif
                                                    @endforeach
                                                  </select>

                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meaning" class="col-md-4">ความหมาย</label>

                                    <div class="col-md-12">
                                        <input id="meaning" type="text" class="form-control" name="meaning"
                                        @if ($word==null)
                                        value=""
                                        @else
                                        value="{{$word->meaning}}"
                                        @endif
                                        required autofocus>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lang_m" class="col-md-4">ภาษาปลายทาง</label>

                                        <div class="col-md-12">
                                                <select name="lang_m" class="form-control" id="lang_m">
                                                        @foreach($lang as $key)
                                                        @if ($word==null)
                                                        <option value="{{$key->code}}">{{$key->name}}</option>
                                                        @else
                                                        @if($word->lang_m==$key->code)
                                                        <option selected value="{{$key->code}}">{{$key->name}}</option>
                                                        @else
                                                        <option value="{{$key->code}}">{{$key->name}}</option>
                                                        @endif
                                                        @endif
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
