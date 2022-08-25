                    <form class="form form-horizontal mb-4" action="{{ route('dataproduk.update',$produk->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Nama Produk</label>
                          <input type="text" value="{{$produk->nama_produk}}" id="namaproduk" name="namaproduk" class="form-control" placeholder="Enter Name" required />
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Stok Produk</label>
                          <div class="input-group">
                            <input type="number" value="{{$produk->stok_produk}}" id="stokproduk" name="stokproduk" class="form-control" placeholder="14 " required>
                            <span class="input-group-text">Kg</span>
                          </div>
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Harga Produk</label>
                          <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" value="{{$produk->harga}}" id="hargaproduk" name="hargaproduk" class="form-control" placeholder="14000 " required>
                          </div>
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Detail Produk</label>
                          <textarea class="form-control" rows="3" id="detailproduk" name="detailproduk">{{$produk->detail_produk}}</textarea>
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Rating</label>
                          <input type="text" value="{{$produk->rating}}" id="ratingproduk" name="ratingproduk" class="form-control" placeholder="Enter Rating" required />
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Likes</label>
                          <input type="text" value="{{$produk->likes}}" id="likesproduk" name="likesproduk" class="form-control" placeholder="Enter Likes" required />
                        </div>
                        <div class="mb-2">
                          <label for="nameWithTitle" class="form-label">Foto Produk</label>
                          <div class="input-group">
                            <img src="{{asset ('produk/'.$produk->foto_produk)}}" width="200px" class="img-fluid ">
                          </div>
                        </div>

                        <button class="btn btn-primary" type="submit" style="float: right">Save changes</button>
                    </form>