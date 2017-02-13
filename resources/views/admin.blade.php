@extends('layouts.defaultLayout')
@section('content')
    <script type="application/javascript">
        function potvrdi() {

            var url1 = "/objave";
            var dataForm = new FormData($("#submit"));

            alert(dataForm);
            $.ajax({
                method: 'POST',
                url: url1,
                dataType: 'json',
                enctype:'multipart/form-data',
                data: dataForm,
                success: function (response) {
                    alert(response);
//                        var odgovor = response["poruka"];
//                        if(odgovor=="Novi admin je uspešno ubačen"){
//                            setTimeout(function() {
//                                swal({
//                                    title: "Uspesno...",
//                                    text: "Novi admin je uspesno ubacen!",
//                                    type: "success"
//                                }, function() {
//                                    window.location = "changeRestaurant.php";
//                                });
//                            }, 1000);
//                        } else {
//                            sweetAlert("Oops...", "Admin nije uspesno ubacen - username vec postoji u bazi", "error");
//                        }
                },
                error: function(){
                    alert(dataForm);
                }
            });
            return false;
        }
        //        function postavi() {
        //            var url1 = "/objave";
        //            var dataForm = new FormData($("#submit")[0]);
        //
        //            $.ajax({
        //                method: 'POST',
        //                url: url1,
        //                dataType: 'json',
        //                enctype:'multipart/form-data',
        //                data: dataForm,
        //                success: function (response) {
        //                    alert(response);
        ////                        var odgovor = response["poruka"];
        ////                        if(odgovor=="Novi admin je uspešno ubačen"){
        ////                            setTimeout(function() {
        ////                                swal({
        ////                                    title: "Uspesno...",
        ////                                    text: "Novi admin je uspesno ubacen!",
        ////                                    type: "success"
        ////                                }, function() {
        ////                                    window.location = "changeRestaurant.php";
        ////                                });
        ////                            }, 1000);
        ////                        } else {
        ////                            sweetAlert("Oops...", "Admin nije uspesno ubacen - username vec postoji u bazi", "error");
        ////                        }
        //                },
        //                error: function(){
        //                    alert(dataForm);
        //                }
        //            });
        //            return false;
        //        }


    </script>
    <div class="row">
        <div class="col-md-4 well well-lg">
            <div class="single_post_content">
                <h2><span>Oblast</span></h2>
                <ul class="tag_nav">
                    <li class="dropdown"> <a style="color: black" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Novosti</a>
                        <ul class="dropdown-menu">
                            <li><a style="color: white" href="#">Dodaj novost</a></li>
                            <li><a style="color: white" href="#">Izmeni novost</a></li>
                            <li><a style="color: white" href="#">Izbriši novost</a></li>
                        </ul>
                    </li>
                    <li><a style="color: black" href="#">Dodaj admina</a></li>
                    <li><a style="color: black" href="#">Dodaj kategoriju</a></li>
                    <li><a style="color: black" href="#">Komentari</a></li>
                </ul>
            </div>

        </div>
        <?php
        $url = 'http://web-portal/kategorije';
        $content = file_get_contents($url);
        $json_odgovor = json_decode($content, true);
        $array1 = [];
        foreach ($json_odgovor as $odgovor){
            $array1[''.$odgovor["naziv"].'']=$odgovor["naziv"];
        }
        ?>
        <div class="col-md-8">
            <div class="well well-lg single_post_content">
                <h2><span>Dodaj novost</span></h2>
                <div class="row" style="padding-bottom: 15%">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 well well-lg">
                        <form enctype="multipart/form-data" id="submit" role="form" method="POST" action="" onsubmit="return potvrdi();">
                            <div class="form-group">
                                <label>Naslov</label>
                                <input type="text" name="naziv" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tekst</label>
                                <textarea name="tekst" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategorija</label>
                                <select name="nazivKategorije" class="form-control">
                                    <?php
                                    foreach($array1 as $cc => $name) {
                                        echo '<option class="form-control" value="' . $cc . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Slika</label>
                                <input type="file" name="slika">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-warning" >Potvrdi</button>
                            </div>

                        </form>
                    </div>



                        {{--{!! Form::open(array(null, null, 'onsubmit' => 'return potvrdi();', 'id'=>'submit', 'files' => true)) !!}--}}
                        {{--<div class="form-group">--}}
                            {{--{{ Form::label('naziv', 'Naslov') }}--}}
                            {{--{{ Form::text('naziv', null, ['class' => 'form-control']) }}--}}

                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--{{ Form::label('tekst', 'Tekst') }}--}}
                            {{--{{ Form::textArea('tekst', null, ['class' => 'form-control']) }}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--{{ Form::label('nazivKategorije', 'Kategorija')  }}--}}
                            {{--{{ Form::select('nazivKategorije', $array1, null, array('class'=>'form-control','style'=>'' )) }}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('slika', 'Slika') !!}--}}
                            {{--{!! Form::file('slika', null) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group text-center">--}}
                            {{--{{ Form::submit('Potvrdi', array('class' => 'btn btn-warning')) }}--}}
                        {{--</div>--}}


                        {{--{!! Form::close() !!}--}}

                    <div class="col-md-2"></div>
                </div>
            </div>

        </div>

    </div>
@stop