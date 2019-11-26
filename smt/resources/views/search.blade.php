<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if($word!=null)
        ผลการค้นหา : {{$ws}}
        @else
        SMT DICTIONARY
        @endif
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>
  <style>
      body {
      background-image:url("img/bg.png");

      }
    </style>
</head>

  <body>


    <ul   class="nav navbar navbar-dark bg-dark nav justify-content-end">

  <li class="nav-item">
    <a class="nav-link" href="./login" style="color:white">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">MADE BY SMT</a>
  </li>
</ul>

    <br><br><br><center>

      <img src="img/logo.png" class="card-img-top" alt="..."
      style="width: 300px; height: 200px;"><br>
        <nav>
          <form method="GET" action="{{ url('/s') }}">

          <div class="form-group row nav justify-content-center ">
                <div class="col-sm-3 ">
            <input id="search" data-keyboard="true" autocomplete="off" required pattern="[A-z ']*" oninvalid="กรุณากรอกข้อมูล" name="word" class="form-control typeahead" type="search" placeholder="ค้นหาคำศัพท์ภาษาอังกฤษ" aria-label="Search" />
                </div>
            <button class="btn btn-primary col-sm-1" type="submit">
              ค้นหา
            </button>
        </div>
          </form>
        </nav>
      </div></center><br><br>

      <div class="row d-flex justify-content-center ">
          <div class="col-8">



      @if($word!=null)
      <div class="card shadow p-3 mb-5 bg-white rounded">
                  <div class="card-body">
      <div class="container">
        <h4>รายละเอียด</h4>
        <table class="table table-striped">
          <thead>
            <center>
              <tr>
                <th>คำศัพท์</th>
                <th>ความหมาย</th>
              </tr>
            </center>
          </thead>
          <tbody>
                @foreach($word as $key)
            <tr>
              <td>{{$key->ws}}</td>
              <td>{{$key->meaning}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div></div>
    @endif

        </div>
      </div></div> <br>
      @if($word==null)
      <div class="footer fixed-bottom bg-dark ">
      @else
      <div class="footer bottom bg-dark ">
      @endif
      <center><img src="img/c.png"  style="width:20px; height: 20px;"> &nbsp;
        <b style="color:white " > COPYRIGHT SMT TEAM<b></center>
</div>

    <script type="text/javascript">

        var path = "{{ route('autocomplete') }}";

        $('#search').typeahead({
source:  function (query, process) {
return $.get(path, { query: query }, function (data) {
        return process(data);
    });
}
});

    </script>
  </body>
</html>
