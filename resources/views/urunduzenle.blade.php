<!doctype html>
<html lang="en" class="h-100">
  <head>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body>
    <!-- MDB -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    
<div class="container">

<div class="row">
    
    <div class="col-md-4">
        <form method="POST" action="{{ url('/urunduzenle') }}">
        @csrf
        <br>
            <div class="form-outline mb-4">
                <input type="text" id="ukod" name="ukod"  value="{{ $urungetir->ukod}}" class="form-control " />
                <label class="form-label" for="ukod"></label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="uad" name="uad"  value="{{ $urungetir->uad}}" class="form-control" />
                <label class="form-label" for="uad"></label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="uresim" name="uresim"  value="{{ $urungetir->uresim}}" class="form-control" />
                <label class="form-label" for="uresim"></label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="ufiyat" name="ufiyat"  value="{{ $urungetir->ufiyat}}" class="form-control" />
                <label class="form-label" for="ufiyat"></label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="uadet" name="uadet"  value="{{ $urungetir->uadet}}" class="form-control" />
                <label class="form-label" for="uadet"></label>
            </div>
            <input type="hidden" name="id" value="{{$urungetir->id}}" class="btn btn-info btn-block">
            <input type="submit" name="guncelle" value="güncelle" class="btn btn-info btn-block">
        </form>

    </div>
<div></div>

</div>


   



</div>


    
  </body>
</html>
