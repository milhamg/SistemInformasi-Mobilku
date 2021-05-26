<!DOCTYPE html>
<html>
    <!-- Font Awesome -->
     <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- icheck bootstrap -->
     <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if($belanja->status == 1)
                <div class="row">
                    <div class="col-md-12">
                        <button id="pay-button" type="button" class="btn btn-primary center-block">pay!</button>
                    </div>
                </div>
            @elseif($belanja->status == 2)
            <div class="card">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col">
                            <table class="table" style="border-top : hidden">
                                <tr>
                                    <td>Virtual Akun</td>
                                    <td>:</td>
                                    <td>{{$va_number}}</td>
                                </tr>
                                <tr>
                                    <td>Bank</td>
                                    <td>:</td>
                                    <td>{{$bank}}</td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td>:</td>
                                    <td>{{$gross_amount}}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{$transaction_status}}</td>
                                </tr>
                                <tr>
                                    <td>Batas Waktu Pembayaran</td>
                                    <td>:</td>
                                    <td>{{$deadline}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<div>

<form id="payment-form" method="get" action="Payment">
    <input type="hidden" name="result_data" id="result-data" value=""></div>
</form>

</body>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-KpArcZoQqrSuhIKZ"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');
        function changeResult(type,data){
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
            // resultType.innerHTML = type;
            // resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay('<?=$snapToken?>', {
            //optional
            onSuccess: function(result){
                changeResult('success', result);
                console.log(result.status_message);
                console.log(result);
                $("#payment-form").submit();
            },
            onPending: function(result){
                changeResult('pending', result);
                console.log(result.status_message);
                $("#payment-form").submit();
            },
            onError: function(result){
                changeResult('error', result);
                console.log(result.status_message);
                $("#payment-form").submit();
            }
        });
    };
</script>

<!-- jQuery -->
<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>

</body>
</html>