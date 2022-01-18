@extends('layouts.app')
@section('Nav1')
<li class="scroll-to-section"><a class="nav-link" href="/home">Home</a></li>
<li class="scroll-to-section"><a class="nav-link" href="/visual">Visualization</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">About Us</a></li>
<li class="scroll-to-section"><a class="nav-link" href="#login">Contact</a></li>
@endsection
<style>
.gambar{
    margin-left: 30px;

}
.container1{
    margin: 30px;
}
.box{
    margin-top: 0;
}
.col .card{
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
}
.bb{
    margin-bottom: 5px;
    margin-left: 10px;
    font-weight: bold;
    color: black;
}
.btn{
    margin-bottom: 10px;
}
.card{
    width: 300px;
    margin: 10px;
}
.card-img-top{
    width: 150px;
    height: 150px;
}
</style>

@section('content')
{{-- <div class="container"> --}}
{{-- <svg class="gambar" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
  </svg> --}}
  <div  class="text-right mt-1 mb-1 d-fixed">
    <!-- Button trigger modal -->
    <a class="btn btn-outline-warning mr-5" href="#">
      <span class="btn-text" data-toggle="modal" data-target="#staticBackdrop">Add Data</span>
    </a>
  </div>

  <div class="container1">
        <div class="row justify-content-center">
            @foreach($bangunan as $b)
            <div class="col-md-3 mb-5">
            <div class="card shadow">
              <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="1137" height="693.11183" viewBox="0 0 1137 693.11183" xmlns:xlink="http://www.w3.org/1999/xlink"><title>coming home</title><path d="M168.89819,796.55591l-1.95117-.43945c21.75586-96.751,76.43018-184.60937,153.95117-247.3916A444.114,444.114,0,0,1,1033.053,794.9358l-1.94922.44336C985.05005,593.17017,807.82935,451.94459,600.134,451.94459,395.1604,451.94459,213.79956,596.87427,168.89819,796.55591Z" transform="translate(-31.5 -103.44409)" fill="#3f3d56"/><circle cx="417.13335" cy="69.40326" r="54.31516" fill="#ff6584"/><path d="M214.63058,784.217c1.694,6.26185,7.4961,10.14,7.4961,10.14s3.05572-6.27434,1.36177-12.53619-7.49609-10.14-7.49609-10.14S212.93664,777.95518,214.63058,784.217Z" transform="translate(-31.5 -103.44409)" fill="#3f3d56"/><path d="M217.11972,782.87129c4.64821,4.52485,5.216,11.48059,5.216,11.48059s-6.9685-.38048-11.61672-4.90533-5.216-11.4806-5.216-11.4806S212.4715,778.34644,217.11972,782.87129Z" transform="translate(-31.5 -103.44409)" fill="#6c63ff"/><path d="M343.63058,784.217c1.69395,6.26185,7.4961,10.14,7.4961,10.14s3.05572-6.27434,1.36177-12.53619-7.49609-10.14-7.49609-10.14S341.93664,777.95518,343.63058,784.217Z" transform="translate(-31.5 -103.44409)" fill="#3f3d56"/><path d="M346.11972,782.87129c4.64821,4.52485,5.216,11.48059,5.216,11.48059s-6.9685-.38048-11.61672-4.90533-5.216-11.4806-5.216-11.4806S341.4715,778.34644,346.11972,782.87129Z" transform="translate(-31.5 -103.44409)" fill="#6c63ff"/><polygon points="337.71 181.988 317.286 165.648 431.66 63.529 721.679 63.529 721.679 153.394 533.779 280.022 337.71 181.988" fill="#3f3d56"/><polygon points="774.556 120.812 774.556 65.569 736.05 65.569 736.05 79.098 721.679 63.529 627.729 165.648 590.966 190.157 533.964 606.62 619.93 692.585 819.714 692.585 819.714 169.733 774.556 120.812" fill="#ccc"/><rect x="317.28615" y="165.64842" width="310.44316" height="526.93642" fill="#f2f2f2"/><rect x="437.78711" y="563.91431" width="57.1869" height="128.67052" fill="#ccc"/><polygon points="376.515 600.677 376.515 580.253 352.007 580.253 352.007 600.677 374.473 600.677 376.515 600.677" fill="#3f3d56"/><polygon points="374.473 617.016 352.007 617.016 352.007 637.44 376.515 637.44 376.515 617.016 374.473 617.016" fill="#3f3d56"/><rect x="392.85455" y="580.25343" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="392.85455" y="617.01643" width="24.50867" height="20.42389" fill="#3f3d56"/><polygon points="543.991 600.677 543.991 580.253 519.483 580.253 519.483 600.677 541.949 600.677 543.991 600.677" fill="#3f3d56"/><polygon points="541.949 617.016 519.483 617.016 519.483 637.44 543.991 637.44 543.991 617.016 541.949 617.016" fill="#3f3d56"/><rect x="560.33046" y="580.25343" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="560.33046" y="617.01643" width="24.50867" height="20.42389" fill="#3f3d56"/><polygon points="715.552 192.199 715.552 171.776 691.043 171.776 691.043 192.199 713.51 192.199 715.552 192.199" fill="#3f3d56"/><polygon points="713.51 208.539 691.043 208.539 691.043 228.962 715.552 228.962 715.552 208.539 713.51 208.539" fill="#3f3d56"/><rect x="731.89116" y="171.77558" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="731.89116" y="208.53859" width="24.50867" height="20.42389" fill="#3f3d56"/><polygon points="715.552 306.573 715.552 286.149 691.043 286.149 691.043 306.573 713.51 306.573 715.552 306.573" fill="#3f3d56"/><polygon points="713.51 322.912 691.043 322.912 691.043 343.336 715.552 343.336 715.552 322.912 713.51 322.912" fill="#3f3d56"/><rect x="731.89116" y="286.14938" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="731.89116" y="322.91238" width="24.50867" height="20.42389" fill="#3f3d56"/><polygon points="715.552 420.947 715.552 400.523 691.043 400.523 691.043 420.947 713.51 420.947 715.552 420.947" fill="#3f3d56"/><polygon points="713.51 437.286 691.043 437.286 691.043 457.71 715.552 457.71 715.552 437.286 713.51 437.286" fill="#3f3d56"/><rect x="731.89116" y="400.52318" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="731.89116" y="437.28618" width="24.50867" height="20.42389" fill="#3f3d56"/><polygon points="715.552 535.321 715.552 514.897 691.043 514.897 691.043 535.321 713.51 535.321 715.552 535.321" fill="#3f3d56"/><polygon points="713.51 551.66 691.043 551.66 691.043 572.084 715.552 572.084 715.552 551.66 713.51 551.66" fill="#3f3d56"/><rect x="731.89116" y="514.89697" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="731.89116" y="551.65998" width="24.50867" height="20.42389" fill="#3f3d56"/><rect x="352.00676" y="192.19947" width="236.91715" height="49.01734" fill="#3f3d56"/><rect x="352.00676" y="290.23416" width="236.91715" height="49.01734" fill="#3f3d56"/><rect x="352.00676" y="388.26884" width="236.91715" height="49.01734" fill="#3f3d56"/><rect x="352.00676" y="486.30352" width="236.91715" height="49.01734" fill="#3f3d56"/><rect y="690.52882" width="1137" height="2" fill="#3f3d56"/><rect x="190.4049" y="459.61475" width="5.87477" height="232.05349" fill="#3f3d56"/><path d="M281.99715,592.63138c.374,81.14332-56.71464,147.18749-56.71464,147.18749s-57.695-65.51515-58.06894-146.65847,56.71464-147.18749,56.71464-147.18749S281.62317,511.48806,281.99715,592.63138Z" transform="translate(-31.5 -103.44409)" fill="#6c63ff"/><path d="M281.99715,592.63138c.374,81.14332-56.71464,147.18749-56.71464,147.18749s-57.695-65.51515-58.06894-146.65847,56.71464-147.18749,56.71464-147.18749S281.62317,511.48806,281.99715,592.63138Z" transform="translate(-31.5 -103.44409)" opacity="0.1"/><rect x="114.03286" y="459.61475" width="5.87477" height="232.05349" fill="#3f3d56"/><path d="M205.62511,592.63138c.374,81.14332-56.71464,147.18749-56.71464,147.18749s-57.695-65.51515-58.06894-146.65847,56.71465-147.18749,56.71465-147.18749S205.25114,511.48806,205.62511,592.63138Z" transform="translate(-31.5 -103.44409)" fill="#6c63ff"/><path d="M977.0545,268.76437c-46.27672.21329-83.94415.897-83.94415.897s44.77365-59.30728,83.77623-37.33436,83.80663,36.56195,83.80663,36.56195S1023.33123,268.55108,977.0545,268.76437Z" transform="translate(-31.5 -103.44409)" fill="#f2f2f2"/><path d="M206.0545,382.76437c-46.27672.21329-83.94415.897-83.94415.897s44.77365-59.30728,83.77623-37.33436,83.80663,36.562,83.80663,36.562S252.33123,382.55108,206.0545,382.76437Z" transform="translate(-31.5 -103.44409)" fill="#f2f2f2"/><path d="M374.0545,144.76437c-46.27672.21329-83.94415.897-83.94415.897s44.77365-59.30728,83.77623-37.33436,83.80663,36.562,83.80663,36.562S420.33123,144.55108,374.0545,144.76437Z" transform="translate(-31.5 -103.44409)" fill="#f2f2f2"/><rect x="1035.03286" y="459.61475" width="5.87477" height="232.05349" fill="#3f3d56"/><path d="M1126.62511,592.63138c.374,81.14332-56.71464,147.18749-56.71464,147.18749s-57.695-65.51515-58.06894-146.65847,56.71465-147.18749,56.71465-147.18749S1126.25114,511.48806,1126.62511,592.63138Z" transform="translate(-31.5 -103.44409)" fill="#6c63ff"/><polygon points="824.667 547.629 883.956 547.629 883.956 533.318 916.667 533.318 916.667 547.629 978 547.629 978 611.007 916.667 611.007 916.667 690.74 883.956 690.74 883.956 611.007 824.667 611.007 794 576.251 824.667 547.629" fill="#3f3d56"/></svg>
              <div class="card-body">
                <h5 class="card-title">{{ $b->Nama }}</h5>
                <p class="card-text">{{ $b->Alamat }}</p>
                <a type="button" class="btn btn-primary btn-sm shadow" href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $b->ID_Bangunan }}">View</a/>
                </div>
            </div>
            </div>
              @endforeach
            </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form class="row g-3">
                @csrf
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>



@endsection
