<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMT DICTIONARY</title>
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
</head>

  <body>
    <div class="container">
      <div class="jumbotron" style="background-color: orange">
        <h1>DICTIONARY</h1>
        <nav>
          <form method="GET" action="{{ url('/s') }}">
                @csrf
                <div class="form-group row">
                <div class="col-sm-10">
            <input id="search" autocomplete="off" required name="word" class="form-control typeahead" type="search" placeholder="Search" aria-label="Search" />
                </div>
            <button class="btn btn-primary col-sm-1" type="submit">
              ค้นหา
            </button>
        </div>
          </form>
        </nav>
      </div>
      @if($word!=null)
      <div class="container">
        <h4>รายละเอียด</h4>
        <table class="table table-bordered">
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
    @endif


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
