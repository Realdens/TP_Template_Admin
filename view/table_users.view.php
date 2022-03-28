<?php include("view/layout/head.inc.php"); ?>
<?php include("view/layout/nav.inc.php"); ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="table_articles.php">Articles</a></li>
                            <li class="breadcrumb-item active"><a href="table_categories.php">Catégories</a></li>
                            <li class="breadcrumb-item active"><a href="table_users.php">Users</a></li>
                            <li class="breadcrumb-item active"><a href="table_commentaires.php">Commentaires</a>
                            <li class="breadcrumb-item active"><a href="table_contacts.php">Contacts</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Table users
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                        </tr>
                                    </thead>
                                   <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        
                                    <?php foreach ($data as $onedata) { ?>
                                        <tr>
                                            <td><?= $onedata["display_name"] ?></td>                                            
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php include("view/layout/footer.inc.php"); ?>