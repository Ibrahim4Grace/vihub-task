<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Store and Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Create Store and Products</h2>
        <form action="create_store.php" method="POST">
            <!-- Store Details -->
            <div class="mb-3">
                <label for="store_name" class="form-label">Store Name</label>
                <input type="text" class="form-control" id="store_name" name="store_name" required>
            </div>
            <div class="mb-3">
                <label for="store_location" class="form-label">Store Location</label>
                <input type="text" class="form-control" id="store_location" name="store_location" required>
            </div>
            <div class="mb-3">
                <label for="store_opening_time" class="form-label">Store Opening Time</label>
                <input type="time" class="form-control" id="store_opening_time" name="store_opening_time" required>
            </div>
            <div class="mb-3">
                <label for="store_closing_time" class="form-label">Store Closing Time</label>
                <input type="time" class="form-control" id="store_closing_time" name="store_closing_time" required>
            </div>

            <!-- Product Details -->
            <div id="products">
                <h4>Products</h4>
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name[]" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity[]" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description[]" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price[]" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category[]" required>
                        <option value="Trousers">Trousers</option>
                        <option value="Cap">Cap</option>
                        <option value="Shirts">Shirts</option>
                    </select>
                </div>
            </div>

            <!-- Add another product button -->
            <button type="button" class="btn btn-secondary mb-3" id="add_product">Add Another Product</button>

            <button type="submit" class="btn btn-primary">Create Store</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#add_product').click(function () {
                $('#products').append(`
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description[]" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price[]" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category[]" required>
                            <option value="Trousers">Trousers</option>
                            <option value="Cap">Cap</option>
                            <option value="Shirts">Shirts</option>
                        </select>
                    </div>
                `);
            });
        });
    </script>
</body>
</html>
