<?php include('../config/constants.php') ?>
<?php include('../reusePages/base.php') ?>
<div class="categoriesManage">
    <?php include('./navbar/mainNavbar.php') ?>
    <div class="adminManageContent">
        <h2>Manage Category</h2>
        <hr>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Title</th>
            <th scope="col">Image name</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>jhJASBFJSA@gmail.com</td>
            <td><button type="button" class="btn btn-success">Update</button>   <button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>jhJASBFJSA@gmail.com</td>
            <td><button type="button" class="btn btn-success">Update</button>   <button type="button" class="btn btn-danger">Delete</button></td>

            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>jhJASBFJSA@gmail.com</td>
            <td><button type="button" class="btn btn-success">Update</button>   <button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
        </table>
        <a href="./addAdmin.php"><button class="addAdminButton">Add Admin</button></a>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>