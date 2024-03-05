@extends('products.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Modifier le produit</h2>
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oups !</strong> Il y avait des problèmes avec votre saisie.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author">Auteur :</label>
                        <input type="text" name="author" value="{{ $product->author }}" class="form-control" placeholder="Auteur">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="detail">Détail :</label>
                <textarea class="form-control" name="detail" placeholder="Détail du livre" rows="4">{{ $product->detail }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Modifier le produit</button>
            </div>
        </form>
    </div>
@endsection
