<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Técnico</title>
    <link rel="shortcut icon" href="https://www.grupoacert.com.br/images/icones/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-12">
                    <input id="search" class="form-control mr-sm-2" type="search" placeholder="Pesquisar um usuário"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button"
                        onclick="getUserGitHub();">Pesquisar</button>
                </form>
            </div>
            <button class="btn btn-primary" type="button" onclick="getInfoAcert();" data-toggle="modal" data-target=".bd-example-modal-lg">
                Api Acert
            </button>
        </nav>
        <div class="row simple-cards users-card d-flex justify-content-center">
            <div class="col-md-12 col-xl-4">
                <div class="card user-card">
                    <div class="card-header-img">
                        <img id="avatar" class="img-fluid img-radius" width="460" height="460" src="{{ url('assets/img/git.png') }}"
                            alt="card-img">
                        <h4 id="name">GitHub Name</h4>
                        <h6 id="location">Location</h6>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div>
                                <i></i>
                                <label id="public-repos" class="badge badge-primary badge-top-right">0</label>
                                <span>Repositórios publicos</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div>
                                <i></i>
                                <label id="public-gists" class="badge badge-success badge-top-right">0</label>
                                <span> Gits públicos</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div>
                                <i></i>
                                <label id="followers" class="badge badge-danger badge-top-right">0</label>
                                <span>Seguidores</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div>
                                <i></i>
                                <label id="following" class="badge badge-info badge-top-right">0</label>
                                <span>Seguindo</span>
                            </div>
                        </div>
                    </div>
                    <p id="bio">
                        Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi
                        dunt ut labore et.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="d-flex justify-content-center">
                    <div class="acert"  id="acert-content">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
</body>

</html>