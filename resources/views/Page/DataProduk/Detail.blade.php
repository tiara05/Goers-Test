
    <div class="row g-0">
      <div class="col-md-4">
        <img class="card-img-top" src="{{ asset('produk/' . $produk->foto_produk) }}" alt="Card image cap" style="height: 15rem;" />
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">{{$produk->nama_produk}}</h4>
          <div class="row">
            <div class="col-lg-4">
                <p>Detail Produk</p>
            </div>
            <div class="col-lg-8">
              <p>: {{$produk->detail_produk}} </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
                <p>Harga</p>
            </div>
            <div class="col-lg-8">
              <p>: {{$produk->harga}} </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
                <p>Stok</p>
            </div>
            <div class="col-lg-8">
              <p>: {{$produk->stok_produk}} </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
                <p>Rating</p>
            </div>
            <div class="col-lg-8">
              <p>: {{$produk->rating}} </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
                <p>Likes</p>
            </div>
            <div class="col-lg-8">
              <p>: {{$produk->likes}} </p>
            </div>
          </div>
          
        </div>
      </div>
   </div>
                