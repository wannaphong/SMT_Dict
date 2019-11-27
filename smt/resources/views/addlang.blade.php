@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    @if ($lang==null)
                    เพิ่มคำใหม่
                    @else
                    แก้ไขคำ
                    @endif
                    </div>

                    <form method="POST"
                    @if ($lang==null)
                    action="./postlang"
                    @else
                    action="../updatelang"
                    @endif


                    >
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ws" class="col-md-4">ภาษา</label>

                                <div class="col-md-12">
                                    <input id="ws" type="text" class="form-control" name="name"

                                    @if ($lang==null)
                                    value=""
                    @else
                    value="{{$lang->name}}"
                    @endif
                                    required autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meaning" class="col-md-4">รหัสภาษา</label>

                                    <div class="col-md-12">
                                        <input id="meaning" type="text" class="form-control" name="code"
                                        @if ($lang==null)
                                    value=""
                    @else
                    value="{{$lang->code}}"
                    @endif
                                        required autofocus>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            <div style="margin-top: 2em;"></div>
            @if ($lang==null)

                    @else
                    <input type="hidden" name="id" value="{{$lang->lang_id}}">
                    @endif
            <center><button type="submit" class="btn btn-primary">บันทึก</button></center>


            </form>

            </div>
        </div>
    </div>
</div>
@endsection
