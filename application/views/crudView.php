<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Crud Igniter | View</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark justify-content-between">
        <a class="navbar-brand">JudyJJJJJJJ</a>
        <?php echo form_open("CrudController/search");?>
        <form class="form-inline">
            <button type="button" class="btn btn-primary mr-sm-2 " data-toggle="modal" data-target="#exampleModal">
                Add User
            </button>
            <!-- <select name="user">
        <option value=" "> Last Name</option>
        <option value=" "> First Name</option>
        <option value=" "> Middle Name</option>
        <option value=" "> Gender</option>
        <option value=" "> Age</option>
</select>
    <input class="form-control mr-sm-2" type="search"  name="searchbar" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button> -->
        </form>
        <?php echo form_close();?>
    </nav>
    <br><br>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('CrudController/create')?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="lastname" aria-describedby="emailHelp"
                                placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="firstname" aria-describedby="emailHelp"
                                placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Middle Name</label>
                            <input type="type" class="form-control" name="middlename" aria-describedby="emailHelp"
                                placeholder="Enter middle name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <input type="text" class="form-control" name="gender" aria-describedby="emailHelp"
                                placeholder="Enter gender">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" class="form-control" name="age" aria-describedby="emailHelp"
                                placeholder="Enter age">
                        </div>
                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->lastname; ?></td>
                    <td><?php echo $row->firstname; ?></td>
                    <td><?php echo $row->middlename; ?></td>
                    <td><?php echo $row->gender; ?></td>
                    <td><?php echo $row->age; ?></td>
                    <td> <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>"><button
                                type="delete" class="btn btn-success" value="delete">Delete</button></a> </td>
                    <td> <?php echo form_open("CrudController/edit");?><button type="button"
                            class="btn btn-danger mr-sm-2 " data-toggle="modal" data-target="#exampleModal1">
                            Edit User
                        </button> <?php echo form_close();?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post"
                            action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" name="lastname"
                                    value="<?php echo $row->lastname; ?>" aria-describedby="emailHelp"
                                    placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" name="firstname"
                                    value="<?php echo $row->firstname; ?>" aria-describedby="emailHelp"
                                    placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name</label>
                                <input type="text" class="form-control" name="middlename"
                                    value="<?php echo $row->middlename; ?>" aria-describedby="emailHelp"
                                    placeholder="Enter birthdate">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <input type="text" class="form-control" name="gender"
                                    value="<?php echo $row->gender; ?>" aria-describedby="emailHelp"
                                    placeholder="Enter contact no">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="text" class="form-control" name="age" value="<?php echo $row->age; ?>"
                                    aria-describedby="emailHelp" placeholder="Enter bio">
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Submit</button>
                            <a href="<?php echo site_url('CrudController')?>"><button type="button"
                                    class="btn btn-danger">Cancel</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br><br>
</body>

</html>