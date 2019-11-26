@extends('layouts.app')

@section('content')
<script>
        function checkY() {
          confirm("คุณแน่ใจหรือไม่ ?");
        }
        </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ภาษา</div>
                <a href="./home">< กลับหน้าหลัก</a>


                <div class="card-body">
                        <a class="btn btn-primary" href="./addlang">เพิ่มภาษา</a>
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ภาษา</th>
                                  </tr>
                                </thead>
                                <tbody>
                    @foreach($langs as $key)
                    <tr>
                            <th scope="row">{{$key->lang_id}}</th>
                            <td>{{$key->name}}</td>
                         <!--   <td>
                                <a class="btn btn-warning" href="./edit_word/{{$key->lang_id}}">แก้ไข</a>
                                <a class="btn btn-danger" onclick="checkY()" href="./del_word/{{$key->lang_id}}">ลบ</a>
                            </td>-->
                    </tr>
                    @endforeach
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
