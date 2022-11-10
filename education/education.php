<?php 
    session_start();
    require '../db.php';
    require '../deshboardPart/header.php';

    $select = "SELECT * FROM educations";
    $select_edu = mysqli_query($db_connection, $select);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Education List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Percentage</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_edu as $key=>$edu){ ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$edu['title']?></td>
                            <td><?=$edu['year']?></td>
                            <td><?=$edu['percentage']?></td>
                            <td><a href="edu_status.php?id=<?=$edu['id']?>"><span class="badge text-bg-<?=($edu['status']==1?'success':'secondary')?>"><?=($edu['status']==1?'Active':'Deactive')?></span></a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>

                                    <a href="delete_edu.php?id=<?=$edu['id']?>"




                                    <!-- <div class="dropdown-menu">
                                        <button type="submit" data-link="delete_edu.php?id=<?=$edu['id']?>" class="dropdown-item delete_btn" href="">Delete</button>
                                    </div> -->
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Education</h3>
                </div>
                <div class="card-body">
                    <form action="edu_post.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="year" class="form-control" placeholder="Year">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="percentage" class="form-control" placeholder="Percentage">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Education</button>
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


