            <?php
            require '../db.php';
            require '../deshboardPart/header.php';

            ?>




            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header ">
                                <h3 ">logo add</h3>
                </div>
                <div class=" container card-body text-center"">

                                    <form class="row" action="logoPost.php" method="post" enctype="multipart/form-data">
                                       
                                            <label for="image"></label>
                                            <input type="file" name="logo">
                                       
                                        
                                            <input class="mt-3" type="submit" value="add logo">
                                       
                                    </form>
                            </div>

                        </div>
                    </div>
          




            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header ">
                        <h3>logo show</h3>
                    </div>
                    <div class="card-body">

                        <table class="table p-1">
                            <tbody>

                                <tr>
                                    <th>image</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>


                                <?php

                                $select_loge = "SELECT * FROM logos";
                                $select_log_res = mysqli_query($db_connection, $select_loge);



                                ?>


                                <?php foreach ($select_log_res as $data) { ?>
                                    <tr>
                                        <td> <img width="100px" src="../upload/logo/<?= $data['logo_image'] ?>" alt="">

                                        </td>
                                        <td class="btn btn-secondary"> <a href="status_log.php?id=<?= $data['id'] ?>"><?= ($data['status'] == 1 ? 'Active' : 'Deactive') ?></a></td>

                                        <td> <a href="delete_loge_ad.php?id=<?= $data['id'] ?>">delete</a></td>
                                    </tr>
                                <?php } ?>





                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>















            <?php

            require '../deshboardPart/footer.php';

            ?>