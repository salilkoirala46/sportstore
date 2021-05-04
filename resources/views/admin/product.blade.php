@extends('layout.backend.app')


@section('content')
 <!-- Main content -->
 <section class="content">
 <div class="row"  style="max-width:800px;">
    <div class="col-md-12">
          <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Product List</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <tbody>                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Product rating</th>
                    </tr>
                <tr>
                <?php foreach($products as $product) {?>
                    <tr>
                      <td><?php echo $product['id'] ?></td>
                      <td><?php echo $product['product_name'] ?></td>
                      <td><?php echo '$ '.$product['product_price'] ?></td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td><?php echo $product['product_rating'] ?></td>
                    </tr>
                    <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="card-footer clearfix">
                {{$products->links()}}
              </div>
          </div>         
            <button type="button" class="btn btn-block btn-primary" style="max-width:120px; margin:5px;">Add Product</button>
          </div>
        </div>
    </section>
@endsection
 
 
