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
                <div class="card-header">จัดการคำศัพท์</div>
                <a href="./home">< กลับหน้าหลัก</a>


                <div class="card-body">
                        <a class="btn btn-primary" href="./addword">เพิ่มคำ</a>
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">คำศัพท์</th>
                                    <th scope="col">ภาษา</th>
                                    <th scope="col">ความหมาย</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                    @foreach($words as $key)
                    <tr>
                            <th scope="row">{{$key->ws}}</th>
                            <th scope="row">{{$key->name}}</th>
                            <td>{{$key->meaning}}</td>
                            <td>
                                <a class="btn btn-warning" href="./edit_word/{{$key->id}}">แก้ไข</a>
                                <a class="btn btn-danger" onclick="checkY()" href="./del_word/{{$key->id}}">ลบ</a>
                            </td>
                    </tr>
                    @endforeach
                                </tbody>
                        </table>
                    {{ $words->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
