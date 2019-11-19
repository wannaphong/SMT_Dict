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
                <div class="card-header">รายการคำ</div>
                <a class="btn btn-primary" href="./addword">เพิ่มคำ</a>

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
