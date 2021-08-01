<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_delete.php">
                <input type="hidden" class="prodid" name="id">
                <div class="text-center">
                    <p>DELETE PRODUCT</p>
                    <h2 class="bold name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Product</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_edit.php">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                  <label for="edit_name" class="col-sm-1 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_name" name="name" required>
                  </div>

                  <label for="edit_category" class="col-sm-1 control-label">Category</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="edit_category" name="category">
                      <option selected id="catselected"></option>
                    </select>
                  </div>
                </div>
                <label for="nos" class="col-sm-1 control-label">No of products</label>
                  <div>
                      .
                  </div>
                  <div class="col-sm-5">
                    <input type="number" min=1 class="form-control" id="edit_nos" name="nos">
                  </div>

                <div class="form-group">
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>

                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="edit_price" name="price">
                  </div>
                </div>
                <label for="ram" class="col-sm-1 control-label">RAM</label>

                  <div class="col-sm-5">
                    <input type="number"  class="form-control" id="ram" name="ram" required>
                  </div> 
                  <label for="rom" class="col-sm-1 control-label">ROM</label>

                  <div class="col-sm-5">
                    <input type="text"  class="form-control" id="rom" name="rom" required><br>

                  </div>
                  
                  <label for="cam" class="col-sm-1 control-label">Camera</label>

                  <div class="col-sm-5">
                    <input type="number"  class="form-control" id="camera" name="camera" required>
                  </div><br>
                  <label for="battery" class="col-sm-1 control-label">Battery</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="battery" name="battery" required><br>
                  </div><br>
                  <label for="chip" class="col-sm-1 control-label">Chipset</label>

                  <div class="col-sm-5">
                    <input type="text"  class="form-control" id="chip" name="chip" required>
                  </div>
                  <div> <br> </div>
                  
                <br><br><br><br><br><br><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

