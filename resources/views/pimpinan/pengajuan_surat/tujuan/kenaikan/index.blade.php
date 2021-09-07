@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>Surat Mutasi</b>
                </div>

                <div class="card-body">
                    <?php ?>
                    @if (isset($_GET['status']))
                    @if ($_GET['status'] == 'sukses')
                    <div class="alert alert-success" role="alert">
                        Surat Berhasil Disimpan
                    </div>
                    @else
                    <div class="alert alert-primary" role="alert">
                        Surat Berhasil Di Disposisikan
                    </div>
                    @endif

                    @endif

                    <div class="card-body">
                        <div class="tab">
                            <button class="tablinks btn btn-sm btn-info" id="defaultOpen" onclick="openCity(event, 'London')">Disposisi</button>
                            <button class="tablinks btn btn-sm btn-primary" onclick="openCity(event, 'Paris')">Belum Disetujui</button>
                            <button class="tablinks btn btn-sm btn-success " onclick="openCity(event, 'Tokyo')">Disetujui </button>
                        </div>

                        <div id="London" class="tabcontent">
                            <h3>Disposisi </h3>

                        </div>

                        <div id="Paris" class="tabcontent">
                            <h3>Belum Disetujui</h3>

                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h3>Disetujui</h3>

                        </div>

                        <script>
                            function openCity(evt, cityName) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";
                            }

                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection