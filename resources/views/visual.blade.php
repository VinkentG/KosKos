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
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script> --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

  <div  class="text-right mt-1 mb-1 d-fixed">
    <a class="btn btn-outline-warning mr-2" href="#">
      <span class="btn-text" data-toggle="modal" data-target="#staticBackdrop2">Add Employee</span>
    </a>
    <a class="btn btn-outline-warning mr-5" href="#">
        <span class="btn-text" data-toggle="modal" data-target="#staticBackdrop">Add Branch</span>
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
                <a type="button" class="btn btn-primary btn-sm shadow" href="/example/{{ Auth::user()->ID_Pemilik }}/{{ $b->ID_Bangunan }}/{{ $tahunini }}">View</a/>
                </div>
            </div>
            </div>
              @endforeach
            </div>
  </div>

  <!-- Modal -->
  {{-- 1 --}}
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Building/Branch</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form class="row g-3" action="addBangunan" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure want to add this?')">
                @csrf
                  <table class="table table-bordered border-primar" id="dynamic_field">
                    <thead class="table-dark">
                        <tr>
                            <th>Name Building/Branch</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                    <tr>
                        <td><input id="col0" type="text" name="NamaBangunan" placeholder="Masukan nama branch" class="form-control name_list" /></td>
                        <td><input id="col1" type="text" name="Alamat" placeholder="Masukan alamat" class="form-control name_list" /></td>
                        {{-- <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td> --}}
                    </tr>
                </tbody>
                </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  {{-- 2 --}}
  <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            {{-- <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($bangunan as $p)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->Nama }}</td>
                    <td>{{ $p->Alamat }}</td>
                    <td><button type="submit" class="btn btn-warning">Edit</button>
                        <form class="d-inline" action="deleteBangunan/{{$p->ID_Bangunan}}" method="post" onsubmit="return confirm('Are you sure to delete this?')">
                            @method('delete')
                            @csrf
                            <a href="#">
                            <button type="submit" class="btn btn-danger">Delete</button></a></td>
                        </form>
                  </tr>
                  @endforeach
                </tbody>
              </table> --}}
              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
              @endif
              <form id="validate" action="/addData" method="POST" onsubmit="return confirm('Are you sure want to add this?')">
                {{csrf_field()}}
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>Name Pegawai</th>
                            <th>Peran</th>
                            <th>Gaji</th>
                            <th>Branch</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="1col">
                        <tr>
                            <td id="col0"><input type="text" class="form-control" name="NamaPegawai[]" placeholder="Enter nama pegawai" required></td>
                            <td id="col1"><input type="text" class="form-control" name="Peran[]" placeholder="Enter peran" required></td>
                            <td id="col2"><input type="text" class="form-control" name="Gaji[]" placeholder="Enter gaji" required></td>
                            <td id="col3">
                                <select class="form-control" name="Gedung[]" id="dept" required>
                                    <option selected disabled>-- Select --</option>
                                    @foreach ($bangunan as $b)
                                    <option value="{{ $b->ID_Bangunan }}">{{ $b->Nama }}</option>
                                    @endforeach
                                </select>
                                <td><button type="button" class="btn btn-sm btn-success addRow">Add</button></td>
                            </td>
                        </tr>
                    </tbody>
                </table>
                {{-- <table>
                    <br>
                    <tr>
                        <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteRows()">Remore</button></td>
                        <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                        <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                        <td><button type="submit" class="btn btn-sm btn-success">Save</button></td>
                    </tr>
                </table> --}}


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="" value="Submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- <script>
    function addRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        var cellCount = table.rows[0].cells.length;
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++)
        {
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('col'+i).innerHTML;
            cell.innerHTML=copycel;
            if(i == 2)
            {
                var radioinput = document.getElementById('col2').getElementsByTagName('input');
                for(var j = 0; j <= radioinput.length; j++)
                {
                    if(radioinput[j].type == 'radio')
                    {
                        var rownum = rowCount;
                        radioinput[j].name = 'gender['+rownum+']';
                    }
                }
            }
        }
    }

    function deleteRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        if(rowCount > '2')
        {
            var row = table.deleteRow(rowCount-1);
            rowCount--;
        }else{
            alert('There should be atleast one row');
        }
    }
</script> --}}

<script type="text/javascript">
    // $('tbody').delegate('.quantity,.budget','keyup',function(){
    //     var tr=$(this).parent().parent();
    //     var quantity=tr.find('.quantity').val();
    //     var budget=tr.find('.budget').val();
    //     var amount=(quantity*budget);
    //     tr.find('.amount').val(amount);
    //     total();
    // });
    // function total(){
    //     var total=0;
    //     $('.amount').each(function(i,e){
    //         var amount=$(this).val()-0;
    //     total +=amount;
    // });
    // $('.total').html(total+".00 tk");
    // }
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
            '<td id="col0"><input type="text" class="form-control" name="NamaPegawai[]" placeholder="Enter nama pegawai" required></td>'+
            '<td id="col1"><input type="tel" class="form-control" name="Peran[]" placeholder="Enter peran" required></td>'+
            '<td id="col2"><input type="text" class="form-control" name="Gaji[]" placeholder="Enter gaji" required></td>'+
            '<td id="col3">'+
                '<select class="form-control" name="Gedung[]" id="dept" required>'+
                       '<option selected disabled>-- Select --</option>'+
                        '@foreach ($bangunan as $b)'+
                        '<option value="{{ $b->ID_Bangunan }}">{{ $b->Nama }}</option>'+
                        '@endforeach'+
                '</select>'+
            '</td>'+
            // '<td><button type="button" class="btn btn-sm btn-danger text-danger remove">Remove</button></td>'+
            '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }

    });
</script>


{{-- Script --}}
{{-- <script type="text/javascript">

    $(document).ready(function(){

      var postURL = "<?php echo url('addmore'); ?>";

      var i=1;

      $('#add').click(function(){

           i++;

           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="NamaBangunan" placeholder="Masukan Nama Bangunan" class="form-control name_list" /></td><td><input type="text" name="Alamat" placeholder="Masukan Alamat" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

      });



      $(document).on('click', '.btn_remove', function(){

           var button_id = $(this).attr("id");

           $('#row'+button_id+'').remove();

      });

      $.ajaxSetup({

          headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // 'X-CSRF-TOKEN': $('meta[Alamat="csrf-token"]').attr('content')
          }

      });

      $('#submit').click(function(){

           $.ajax({

                url:postURL,

                method:"POST",

                data:$('#addBangunan').serialize(),

                type:'json',

                success:function(data)

                {

                    if(data.error){

                        printErrorMsg(data.error);

                    }else{

                        i=1;

                        $('.dynamic-added').remove();

                        $('#addBangunan')[0].reset();

                        $(".print-success-msg").find("ul").html('');

                        $(".print-success-msg").css('display','block');

                        $(".print-error-msg").css('display','none');

                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');

                    }

                }

           });

      });

      function printErrorMsg (msg) {

         $(".print-error-msg").find("ul").html('');

         $(".print-error-msg").css('display','block');

         $(".print-success-msg").css('display','none');

         $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

         });

      }

    });

</script> --}}
@endsection
