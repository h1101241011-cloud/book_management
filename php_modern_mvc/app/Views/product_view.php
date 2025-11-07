<h1>Produk: <?= htmlspecialchars($product->getName()); ?></h1>
<p>Harga: Rp <?= number_format($product->getPrice(), 2); ?></p>