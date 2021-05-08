@extends('master.main')
@section('title', 'Report 2 :: Fee Assignment')
@section('content')
<div class="jumbotron text-center">
          <p>Report 2</p> 
</div>
        <div class="container">
            <div class="content">
                <div class="col-md-12 form-group text-right">
                    <a class="btn btn-primary" href="{{ url('/')}}">Home</a>
                  </div>
                <div class="col-md-12 form-group">
                    <table id="report2" class="display">
                            <thead>
                                <tr>
                                    <th>Admno</th>
                                    <th>Roll no</th>
                                    <th>Amount</th>
                                    <th>Receipt no</th>
                                    <th>Receipt Date</th>
                                    <th>Academic Year</th>
                                    <th>Tuition Fee</th>
                                    <th>Exam Fee</th>
                                    <th>Library Fee</th>
                                    <th>Sports Fee</th>
                                    <th>Degree Fee</th>
                                    <th>Other Fee</th>
                                    <th>Misc Fee</th>
                                    <th>Convocation Fee</th>
                                    <th>Fine Fee</th>
                                    <th>Voucher Type</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
              </div>
         </div>
@stop
@section('footer-content')
<script type="text/javascript">
    $(document).ready(function () {
        $('#report2').DataTable({
            "processing": true,
            "info": true,
            "stateSave": true,
            "sDom": 'rtp',
            "bServerSide": true,
            "ajax": {
                "url": "get-report2-details",
                "type": "POST",
                "headers": {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                "data": function(){
                     var table = $('#report2').DataTable();
                        var info = table.page.info();
                    return info
                }
            },
           
        });
    });
</script>
@stop