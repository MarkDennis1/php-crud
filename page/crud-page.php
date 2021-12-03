<!-- header -->
<div class="container-fluid">
    <h1 class="text-center align-middle"><?= $view_bag['heading'] ?></h1>
</div>

<!-- body -->
<div class="container-fluid container-table">
    <table class="table table-hover text-center align-middle" id="table">
        <thead>
            <tr>
                <th scope="col" id="id">Student ID</th>
                <th scope="col" id="fname">First name</th>
                <th scope="col" id="mname">Middle Name</th>
                <th scope="col" id="lname">Last name</th>
                <th scope="col" id="suffix">Suffix</th>
                <th scope="col" id="section">Sex</th>
                <th scope="col" id="sex">Section</th>
                <th scope="col" id="bday">Birthday</th>
                <th scope="col" id="address">Address</th>
                <th scope="col" id="number">Contact number</th>
                <th scope="col" id="email">E-mail address</th>
                <th scope="col" id="query">Query</th>
            </tr>
        </thead>
        <tbody>
       
            <?php foreach ($contents as $object) : ?>
                <tr>
                    <td><?= $object->Student_ID ?></td>
                    <td><?= $object->Student_First_Name ?></td>
                    <td><?= $object->Student_Middle_Name ?></td>
                    <td><?= $object->Student_Last_Name ?></td>
                    <td><?= $object->Student_Suffix ?></td>
                    <td><?= $object->Student_Sex ?></td>
                    <td><?= $object->Student_Section ?></td>
                    <td><?= $object->Student_Birthday ?></td>
                    <td><?= $object->Student_Address ?></td>
                    <td><?= $object->Student_Contact_Number ?></td>
                    <td><?= $object->Student_Email_Address ?></td>
                    <td>
                        <a class="btn button-edit-bg" type="submit" data-bs-toggle="modal" data-bs-target="#showEditModal">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#ffffff">
                                        <path d="M131.96744,14.33333c-1.83376,0 -3.66956,0.69853 -5.06706,2.09961l-12.23372,12.23372l28.66667,28.66667l12.23372,-12.23372c2.80217,-2.80217 2.80217,-7.33911 0,-10.13412l-18.53255,-18.53255c-1.40108,-1.40108 -3.23329,-2.09961 -5.06706,-2.09961zM103.91667,39.41667l-82.41667,82.41667v28.66667h28.66667l82.41667,-82.41667z"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a class="btn button-delete-bg" type="submit" name="delete" method="get" data-bs-toggle="modal" data-bs-target="#showDeleteModal">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#ffffff">
                                        <path d="M71.66667,14.33333l-7.16667,7.16667h-35.83333v14.33333h7.16667v107.5c0,7.83362 6.49972,14.33333 14.33333,14.33333h71.66667c7.83362,0 14.33333,-6.49972 14.33333,-14.33333v-107.5h7.16667v-14.33333h-14.33333h-21.5l-7.16667,-7.16667zM50.16667,35.83333h71.66667v107.5h-71.66667zM69.56706,59.43294l-10.13411,10.13411l16.43295,16.43294l-16.43295,16.43294l10.13411,10.13411l16.43294,-16.43294l16.43294,16.43294l10.13411,-10.13411l-16.43294,-16.43294l16.43294,-16.43294l-10.13411,-10.13411l-16.43294,16.43295z"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Modal for edit button-->
<div class="modal fade" id="showEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header header-bg">
                <h5 class="modal-title" id="showAEditModalLabel">Edit student record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method = "post">
                    <div class="mb-3">
                        <label for="student-id" class="col-form-label">Student ID:</label>
                        <input type="text" class="form-control" id="student-id" name="student-id">
                        <label for="student-fname" class="col-form-label">First name:</label>
                        <input type="text" class="form-control" id="student-fname" name="student-fname">
                        <label for="student-mname" class="col-form-label">Middle Name:</label>
                        <input type="text" class="form-control" id="student-mname" name="student-mname">
                        <label for="student-lname" class="col-form-label">Last name:</label>
                        <input type="text" class="form-control" id="student-lname" name="student-lname">
                        <label for="student-suffix" class="col-form-label">Suffix:</label>
                        <input type="text" class="form-control" id="student-suffix" name="student-suffix">
                        <label for="student-section" class="col-form-label">Section:</label>
                        <input type="text" class="form-control" id="student-section" name="student-section">
                        <label for="student-sex" class="col-form-label">Sex:</label>
                        <input type="text" class="form-control" id="student-sex" name="student-sex">
                        <label for="student-birthday" class="col-form-label">Birthday:</label>
                        <input type="date" class="form-control" id="student-birthday" name="student-birthday">
                        <label for="student-address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="student-address" name="student-address">
                        <label for="student-number" class="col-form-label">Contact number:</label>
                        <input type="text" class="form-control" id="student-number" name="student-number">
                        <label for="student-email" class="col-form-label">E-mail address:</label>
                        <input type="text" class="form-control" id="student-email" name="student-email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn button-bg" method="post" name="btnUpdateStudent">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    var table = document.getElementById("table")

    for (var i = 1; i < table.rows.length; i++) {

        table.rows[i].onclick = function() {
            
            document.getElementById("student-id").value = this.cells[0].innerHTML;
            document.getElementById("student-fname").value = this.cells[1].innerHTML;
            document.getElementById("student-mname").value = this.cells[2].innerHTML;
            document.getElementById("student-lname").value = this.cells[3].innerHTML;
            document.getElementById("student-suffix").value = this.cells[4].innerHTML;
            document.getElementById("student-sex").value = this.cells[5].innerHTML;
            document.getElementById("student-section").value = this.cells[6].innerHTML;
            document.getElementById("student-birthday").value = this.cells[7].innerHTML;
            document.getElementById("student-address").value = this.cells[8].innerHTML;
            document.getElementById("student-number").value = this.cells[9].innerHTML;
            document.getElementById("student-email").value = this.cells[10].innerHTML;
        };
    }
</script>

<!-- Modal for delete confirmation -->
<div class="modal fade" id="showDeleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete student record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you really want to delete this record
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="?delete=<?= $object->Student_ID ?>" type="submit" name="delete" method="get">
                    <button type="button" class="btn btn-primary">Delete</button>
                </a>
            </div>
        </div>
    </div>
</div>