@extends('master.main')
@section('title', 'Report 1 :: Fee Assignment')
@section('content')
<div class="jumbotron text-center">
          <p>Report 1</p> 
</div>
        <div class="container">
            <div class="content">
              <div class="col-md-12 form-group text-right">
                <a class="btn btn-primary" href="{{ url('/')}}">Home</a>
              </div>
                <div class="col-md-12 form-group">
                  <table id="report1" class="display">
                          <thead>
                              <tr>
                                  <th>Admno</th>
                                  <th>Roll no</th>
                                  <th>Receipt no</th>
                                  <th>Receipt Date</th>
                                  <th>Academic Year</th>
                                  <th>Due Amount</th>
                                  <th>Paid Amount</th>
                                  <th>Consession Amount</th>
                                  <th>Reverse Consession Amount</th>
                                  <th>Writeoff Amount</th>
                                  <th>Adujusted Amount</th>
                                  <th>Refund Amount</th>
                                  <th>Fund Transfer Amount</th>
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
        $('#report1').DataTable({
            "processing": true,
            "info": true,
            "stateSave": true,
            "sDom": 'rtp',
            "bServerSide": true,
            "ajax": {
                "url": "get-report1-details",
                "type": "POST",
                "headers": {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                "data": function(){
                     var table = $('#report1').DataTable();
                        var info = table.page.info();
                    return info
                }
            },
           
        });
    });
</script>
@stop