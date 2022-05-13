<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/circular-std/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <title>Inventaire</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <x-navbar></x-navbar>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">PRODUIT : {{$produit->nom}}</h3>
                                                <h3 class="product-price">PRIX : {{$produit->prix}}</h3>
                                            </div>
                                            <div class="product-size border-bottom">
                                                <h4>FOURNISSEUR : {{$produit->fournisseur}}</h4>
                                                <div class="product-qty">
                                                    <h4>QUANTITÉ : {{$produit->quantite}}</h4>
                                                </div>
                                            </div>
                                            <div class="product-description">
                                                <h4 class="mb-1">DESCRIPTION : </h4>
                                                <p>{{$produit->description}}</p>
                                                <div class="product-btn">
                                                    <a href="/Modify/{{$produit->id}}" class="btn btn-primary">Modifier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
</body>
 
</html>