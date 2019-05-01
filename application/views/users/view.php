<div class="container my-5">
    <div class="row">
        <div class="d-flex flex-row col mb-2">
            <h5>Users Table</h5>
            <div class="ml-auto">
                <a href="add-data" class="btn btn-primary btn-sm rounded mb-0">Add</a>
            </div>
                    </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $row){?>
                <tr>
                    <th scope="aa"><?php echo $row->id;?></th>
                    <td><?php echo $row->username;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->password;?></td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm rounded-pill"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm rounded-pill "><i class="fas fa-trash"></i></a>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>