<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Pantau Penyebaran Virus Covid-19</title>
  <body>
    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <div class="container text-center">
        <h1 class="display-4" >Corona Virus </h1>
        <p class="lead" > PANTAU PENYEBARAN COVID-19 DI INDONESIA
                    <br>SECARA REAL-TIME</p>
        </div>
    </div>
    <style type="text/css">
        .box{
            padding: 30px 40px;
            border-radius: 5px;
            }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-danger box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Positif</h5>
                        <h2 id="data-idIDP">0</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                        <img src="sad.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-info box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>meninggal</h5>
                        <h2 id="data-idIDM">0</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                        <img src="cry.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-success box text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5>sembuh</h5>
                        <h2 id="data-idIDS">0</h2>
                        <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                        <img src="happy.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="bg-primary box text-white">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Jawa Timur</h2>
                        <h5 id="data-JW">Positif :2.152 orang <br>
                                        Meninggal :194 orang <br>
                                        Sembuh : 312 orang</h5>
                        </div>
                        <div>
                        <img src="indonesia.svg" style="width: 150px">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3" >
            <div class="card-header bg-danger text-white">
                <b>Data Kasus Corona Virus di Indonesia Berdasarkan Provinsi</b>
            </div>
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                        <th>No.</th>
                        <th>Nama Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                </thead>
                <tbody id="table-data">
                </tbody>
        </table>  
            </div>
            </div>
        
    </div>
</div>
    

    <footer class="bg-primary text-white text-center mt-3 bt-2 pb-2">
    iNewsJatimlur, Copyright @2020;
    </footer>
   
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function(){

        semuaData();
        dataNegaraIndonesia();
        dataProvinsi();

        setInterval(function(){
            semuaData();
        dataNegaraIndonesia();
        dataProvinsi();
        
       
        },5000);

        function semuaData(){
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/all',
                success : function(data){
                    try{
                        var json = data;
                        var kasus = data.cases;
                        var meninggal = data.deaths;
                        var sembuh = data.recovered;

                        $('#data-kasus').html(kasus);
                        $('#data-mati').html(meninggal);
                        $('#data-sembuh').html(sembuh);

                    }catch{
                        alert('error');
                    }
                }
            });
        }
        function dataNegaraIndonesia(){
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/countries',
                success : function(data){
                    try{
                        var json = data;
                        var html = [];

                        if(json.length > 0){
                            var i;
                            for(i = 0; i <json.length; i++){
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;

                                if(namaNegara === 'Indonesia'){
                                    var kasus = dataNegara.cases;
                                    var meninggal = dataNegara.deaths;
                                    var sembuh = dataNegara.recovered;
                                    $('#data-idIDP').html(
                                        ' ' +kasus+ '')
                                    $('#data-idIDM').html(
                                        ' ' +meninggal+ '')
                                    $('#data-idIDS').html(
                                        ' ' +sembuh+ '')
                                }
                            }
                        }

                    }catch{
                        alert('error');
                    }
                }
            });
        }

        
        function dataProvinsi(){
            $.ajax({
                url: 'url.php',
                type:'GET',
                success : function(data){
                    try{
                       
                        $('#table-data').html(data);
                       

                    }catch{
                        alert('errorr');
                    }
                }
            });
        }
        
    });
</script>