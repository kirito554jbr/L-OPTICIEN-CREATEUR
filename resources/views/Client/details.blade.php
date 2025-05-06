<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="/ProduitClient" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Products
                </a>
            </div>
            <div class="col-md-6">
                <img src="{{ $produit->image ?? 'https://via.placeholder.com/500' }}" alt="{{ $produit->name }}"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h1 class="display-5">{{ $produit->name }}</h1>
                <p class="text-muted">Category: <span class="fw-bold">{{ $produit->categorie->name }}</span></p>
                <h4 class="text-success">Prix: ${{ number_format($produit->prix, 2) }}</h4>
                <p class="mt-3">{{ $produit->description }}</p>
                <form action="" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="1"
                            min="1">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Add to Cart <i
                            class="bi bi-cart-plus"></i></button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Related Products</h3>
                <div class="row g-4">
                    @foreach ($produits as $items)
                        @if ($items->id == $produit->id)
                            @continue
                        @endif
                        @if ($items->categorie->name != $produit->categorie->name)
                            @continue
                        @endif
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm" style="min-height: 100%; display: flex; flex-direction: column;">
                                <img src="{{ $items->image }}" class="card-img-top" alt="{{ $items->name }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $items->name }}</h5>
                                    <p class="card-text text-success">${{ number_format($items->prix, 2) }}</p>
                                    <a href="/show/{{ $items->id }}" class="btn btn-sm btn-outline-primary mt-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
