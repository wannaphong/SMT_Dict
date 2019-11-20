@extends('layouts.app')

@section('content')
<div class="container">
<title>
SMT-DICT
</title>
 <h3>SMT-DICT<h3>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <img
            src="lo.png"
            class="card-img-top"
            style="width: 50px; height: 50px;"
          />
      <b style="color: beige">&nbsp;&nbsp; NAKARIN ART </b>
      <button
        class="navbar-toggler navbar-toggler-right custom-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon" style="color:white;" ></span>
      </button>

     <center> <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
          <li class="nav-item">
            <a class="nav-link" href="index.html" target="_blank"><b style="color: beige" >&nbsp;&nbsp;&nbsp;&nbsp; l </b><b style="color: skyblue">&nbsp;  &nbsp;หน้าแรก</b></a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
            <b style="color: beige" >  &nbsp;  &nbsp;l &nbsp;  &nbsp; เกี่ยวกับเรา </b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#Edu">Educational information </a>
              <a class="dropdown-item" href="#lm">General Information 1</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#ma">General Information 2</a>
            </div>
          </li>
         
        </ul>
        
        </form>
      </div>
    </nav></div></center><br>
@endsection
