
    <!-- header -->
    <div class="container-fluid container-header">
        <h1 class="text-center align-middle"><?=$view_bag['heading']?></h1>
    </div>

    <!-- body -->
    <div class="container-fluid container-table">
        <table class="table table-hover text-center align-middle">
            <thead>
                <tr>
                    <th scope="col" id="id">Student ID</th>
                    <th scope="col" id="fname">First name</th>
                    <th scope="col" id="mname">Middle Name</th>
                    <th scope="col" id="lname">Last name</th>
                    <th scope="col" id="suffix">Suffix</th>
                    <th scope="col" id="section">Section</th>
                    <th scope="col" id="sex">Sex</th>
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
                            <a class="btn button-edit-bg" type="submit" method="get">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ffffff">
                                            <path d="M131.96744,14.33333c-1.83376,0 -3.66956,0.69853 -5.06706,2.09961l-12.23372,12.23372l28.66667,28.66667l12.23372,-12.23372c2.80217,-2.80217 2.80217,-7.33911 0,-10.13412l-18.53255,-18.53255c-1.40108,-1.40108 -3.23329,-2.09961 -5.06706,-2.09961zM103.91667,39.41667l-82.41667,82.41667v28.66667h28.66667l82.41667,-82.41667z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="?delete=<?= $object->Student_ID ?>" class="btn button-delete-bg" type="submit" name="delete" method="get">
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