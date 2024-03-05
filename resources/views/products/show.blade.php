@extends('products.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Afficher le produit</h2>
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"><strong>Nom :</strong></label>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="author"><strong>Auteur :</strong></label>
                    {{ $product->author }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="detail"><strong>Détails :</strong></label>
            {{ $product->detail }}
        </div>
    </div>
@endsection
