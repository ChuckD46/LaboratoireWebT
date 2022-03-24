<script>

    export default {
        name:'Product',
        data() {
            return {
                Product:{

                    imgP: "",
                    nomP: "",
                    fourniseurP: "",
                    prixP: 0.00,
                    quantiteP: 0,
                    descriptionP: ""
                }
            }
        },
        methods: {
            addProduct: function() {
                let db 
                
                let request = indexedDB.open("MaBD",1)

                let objet = this; 

                request.onsuccess = e =>{
                    alert("Succes is called")
                    db = e.target.result;

                   
                        let transaction = db.transaction(["MonEntrepot"], "readwrite");
                        let monEntrepot = transaction.objectStore("MonEntrepot");
                        monEntrepot.add(
                           JSON.stringify(objet.Product.nom)
                        );
                   
                }
            }
        }
    }

</script>

<template>
    <div class="dashboard-main-wrapper">
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
                                            <h4>Nom</h4>
                                            <input v-model="nom" class="produit" type="text" value="Produit">
                                            <h4>Prix</h4>
                                            <input class="produit" type="text" value="0.00">{{prixP}}
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Fournisseur</h4>
                                            <input type="text" value="ACME Inc.">
                                            <div class="product-qty">
                                                <h4>Quantité</h4>
                                                <div class="quantity">
                                                    <input class="produit" type="number" value="1">{{quantieP}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <h4 class="mb-1">Description</h4>
                                            <input class="produit" type="texte">{{descriptionP}}
                                            <button class="addProduct" @click="addProduct" value="Sauvegarde">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                    </div>
                </div> 
            </div>
        </div>
    </div>
</template>