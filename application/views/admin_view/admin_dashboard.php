<?php $this->load->view('header'); ?>

<link rel="stylesheet" href="<?= base_url('public/assets/css/admin.css') ?>">

<div class="fixed-header">
    <?php $this->load->view('header'); ?>
</div>

<div class="content content-with-fixed-header">
    <h2>Recently Registered Users</h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <?php if (!empty($result)) : ?>
                <tbody>
                    <?php foreach ($result as $data) : ?>
                        <tr>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['mobile'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['role'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php else : ?>
                <tbody>
                    <tr>
                        <td colspan="4">No records found in the database!!</td>
                    </tr>
                </tbody>
            <?php endif; ?>
        </table>
    </div>

    <!-- Pagination links -->
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>

<?php $this->load->view('footer'); ?>
