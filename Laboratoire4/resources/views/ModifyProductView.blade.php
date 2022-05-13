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
        <form method="post" action="/Modify/{{$produit->id}}">
            @csrf
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content "> 
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider">
										<img class="d-block" src="assets/images/eco-slider-img-1.png" alt="First slide">
                                        <a href="#" class="btn btn-primary btn-block btn-lg">Choisir une image</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3">
                                                <input name="nom" type="text" placeholder="Nom du produit" value="{{$produit->nom}}">
                                            </h2>
                                            <h3 class="mb-0 text-primary">
                                                $<input name="prix" type="text" placeholder="Prix" value="{{$produit->prix}}">
                                            </h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Fournisseur</h4>
                                            <input name="fournisseur" type="text" placeholder="Fournisseur" value="{{$produit->fournisseur}}">
                                            <div class="product-qty">
                                                <h4>Quantité</h4>
                                                <div class="quantity">
                                                    <input name="quantite" type="number" placeholder="Quantité" value="{{$produit->quantite}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <h4 class="mb-1">Description</h4>
                                            <textarea name="description" rows="4" cols="50" placeholder="Description" >{{$produit->description}}</textarea>
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sauvegarder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>   
                    </div>
                </div>
            </div> 
        </div>
        </form>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
    </div>

    
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        
        
</body>

 
</html>