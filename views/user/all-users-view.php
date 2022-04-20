<?php
$admin_obj = new adminBack();
$msg = $admin_obj->displayUsers();

?>


<div class="card overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email / Phone</th>
                        <th>Country</th>
                        <th>Joining time</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($data = mysqli_fetch_assoc($msg)) { ?>

                        <tr>
                            <td data-label="User">
                                <div class="user">
                                    <span class="name"> <?php echo $data['fname'] . " ";
                                                        echo $data['lname'] ?> </span>
                                </div>
                            </td>
                            <td data-label="Email / Phone">
                                <p><?php echo $data['email'] ?></p>
                                <p><?php echo $data['mobile'] ?></p>
                            </td>
                            <td data-label="Country">
                                <span>
                                    <p><?php echo $data['country'] ?></p>
                                </span>
                            </td>
                            <td data-label="Joining time">
                                <p><?php echo $data['res_time'] ?></p>
                                <p>
                                    <?php
                                    $years = gmdate('y', (time() - strtotime($data['res_time']))) - 1;
                                    $mons = gmdate('m', (time() - strtotime($data['res_time']))) - 1;
                                    $days = gmdate('d', (time() - strtotime($data['res_time']))) - 1;
                                    $hours = gmdate('H', (time() - strtotime($data['res_time'])));
                                    $mins = gmdate('i', (time() - strtotime($data['res_time'])));
                                    $secs = gmdate('s', (time() - strtotime($data['res_time'])));

                                    if ($secs && $secs < 60 && $mins == 0 && $hours == 0 && $days == 0) {
                                        echo $secs . " secs";
                                    } else if ($mins && $mins < 60 && $hours == 0 && $days == 0) {
                                        echo $mins . " mins";
                                    } else if ($hours && $hours < 24 && $days == 0 && $mons == 0) {
                                        echo $hours . " hours";
                                    } else if ($days && $days < 30 && $mons == 0) {
                                        echo $days . " days";
                                    } else if ($mons && $mons < 12) {
                                        echo $mons + 1 . " mons";
                                    }
                                    ?>
                                    ago
                                </p>
                            </td>
                            <td data-label="Balance">
                                <p><?php echo $data['balance'] ?> USD</p>
                            </td>
                            <td data-label="Action">
                                <a href="?action=user-details&&id=<?php echo $data['id'] ?>" class="btn btn-sm btn-outline--primary">Details</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table><!-- table end -->
        </div>
    </div>
    <div class="card-footer py-4">
        <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div><!-- card end -->