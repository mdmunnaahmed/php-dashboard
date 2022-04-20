<?php
$admin_obj = new adminBack();
$msg = $admin_obj->displayTicket();

?>

<div class="card overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Submitted By</th>
                        <th>Status</th>
                        <th>Last Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($data = mysqli_fetch_assoc($msg)) { ?>

                        <tr>
                            <td data-label="User">
                                <div class="user">
                                    <p><?php echo $data['ticket_id'] ?></p>
                                    <span class="name"><?php echo $data['subject'] ?></span>
                                </div>
                            </td>
                            <td data-label="Email / Phone">
                                <p><?php echo $data['username'] ?></p>
                                <p><?php echo $data['email'] ?></p>
                            </td>
                            <td data-label="Country">
                                <?php if ($data['status'] == 1) { ?>
                                    <span class="text--small badge font-weight-normal badge--success">Active</span>
                                <?php } else if ($data['status'] == 2) { ?>
                                    <span class="text--small badge font-weight-normal badge--danger">Closed</span>
                                <?php } ?>
                            </td>
                            <td data-label="Joining time">
                                <p><?php echo $data['last_message'] ?></p>
                                <p>
                                    <?php
                                    $years = gmdate('y', (time() - strtotime($data['last_message']))) - 1;
                                    $mons = gmdate('m', (time() - strtotime($data['last_message']))) - 1;
                                    $days = gmdate('d', (time() - strtotime($data['last_message'])));
                                    $hours = gmdate('H', (time() - strtotime($data['last_message'])));
                                    $mins = gmdate('i', (time() - strtotime($data['last_message'])));
                                    $secs = gmdate('s', (time() - strtotime($data['last_message'])));

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
                                    // echo $mons;
                                    ?>
                                    ago
                                </p>
                            </td>
                            <td data-label="Action">
                                <button class="icon-btn bg--danger" data-bs-toggle="tooltip" title="" data-original-title="Details"><i class="las la-tv"></i></button>
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