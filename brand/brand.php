<?php 
    require '../deshboardPart/header.php';
?>
<div class="container-fluid">
    <div class="row">
      

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add brind</h3>
                </div>
                <div class="card-body">
                    <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                       
                      
                        <div class="mb-3">
                            <input type="file" name="file" class="form-control" ">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add brind</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require '../deshboardPart/footer.php';
?>


