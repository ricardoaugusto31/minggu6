<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
        <!-- BARIS PERTAMA/HEADER -->
        <div class="row">
            <div class="col-lg-12 py-4 bg-primary">
              <div class="dropdown float-right">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-fill"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">
                    <div class="media">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsVllhuihxEE1PsOUjQ_qS6VsgoC6rCOeTYg&s"
                      width="50" height="50" class="align-self-center mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0">Lil Bah</h5>
                        <small><p class="mb-0"><i class="bi bi-clock"></i> PKL 17:00 WIB</p></small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a>
                  <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</a>
                </div>
              </div>
            </div>
        </div>
        <!-- BARIS KEDUA/BODY -->
         <div class="row">
            <div class="col-md-2 border vh-100">
              <div class="nav flex-column nav-pills mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link {{ ($key == 'home') ? 'active':'' }}" href="/" role="tab">Home</a>
                <a class="nav-link {{ ($key == 'movie') ? 'active':'' }}" href="/movie" role="tab">Movie</a>
                <a class="nav-link {{ ($key == 'genre') ? 'active':'' }}" href="/genre" role="tab">Genre</a>
                <a class="nav-link" href="https://www.netflix.com/id-en/" role="tab">Bioskop</a>
              </div>
            </div>
            <div class="col-md-10 vh-100">
              <div class="card mt-3">
                <div class="card-header"></div>
                <div class="card-body">
                    @yield('content')
                </div>
              </div>
            </div>
         </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>