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
    <link rel="stylesheet" href="css/mdb.min.css" />

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
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
<div class="container">
    






<a class="nav-link" float="left" href="{{ url('/') }}">{{ __('Ana Sayfa') }}</a>

<div class="row">
@role('Admin|Satici')
    <div class="col-md-12">
        <form method="POST" action="{{ url('/urunolustur') }}">
        @csrf
        <br>
    <div class="row mb-5">
        <div class="col">
            <div class="form-outline ">
                <input type="text" id="ukod" name="ukod" class="form-control" />
                <label class="form-label" for="ukod">Ürün kod</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="uad" name="uad" class="form-control" />
                <label class="form-label" for="uad">Ürün ad</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline mb-4">
                <input type="text" id="uresim" name="uresim" class="form-control" />
                <label class="form-label" for="uresim">Ürün resim</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline mb-4">
                <input type="text" id="ufiyat" name="ufiyat" class="form-control" />
                <label class="form-label" for="ufiyat">Ürün fiyat</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline mb-4">
                <input type="text" id="uadet" name="uadet" class="form-control" />
                <label class="form-label" for="uadet">Ürün adet</label>
            </div>
        </div>
        
            <input type="submit" name="kaydet" value="kaydet" class="btn btn-info btn-block">
        </form>

    </div>
    @endrole
    <div class="col-md-12">
    <table class="table table-sm">
        <thead>
            <tr class="table-dark">
                <th class="col">id</th>
                <th class="col">ürün kod</th>
                <th class="col">ürün ad</th>
                <th class="col">ürün resim</th>
                <th class="col">ürün fiyat</th>
                <th class="col">ürün adet</th>
                @role('Admin|Yonetici')<th class="col">satıcı</th>@endrole
                <th class="col">işlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($urun as $key => $urunler)
            <tr>
                <th class="col">{{$key+1}}</th>
                <th class="col">{{ $urunler->ukod }}</th>
                <th class="col">{{ $urunler->uad }}</th>
                <th class="col">{{ $urunler->uresim }}</th>
                <th class="col">{{ $urunler->ufiyat }}</th>
                <th class="col">{{ $urunler->uadet }}</th>
                @role('Admin|Yonetici')<th class="col">{{ $urunler->satici }}</th>@endrole
                <th class="col">
                @role('Admin|Yonetici') <a href="{{ url('/urunsil',$urunler->id) }}" class="btn btn-sm btn-danger">sil</a> @endrole
                    <a href="{{ url('/urunduzenle',$urunler->id) }}" class="btn btn-sm btn-info">düzenle</a>
                </th>
            </tr>
            @endforeach
        </tbody>

    </table>

    </div>
   
<div></div>

</div>


   



</div>


    
  </body>
</html>
