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
    <title>Code Igniter | Edit</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark justify-content-between">
        <a class="navbar-brand">JudyJJJJJJJ</a>
        <!-- <form class="form-inline" >

            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </nav>
    <div class="container">
        <br>
        <br>
        <center><h1>Edit User</h1><br></center>
        <div class="row justify-content-md-center" >
       
            <div class="col col-lg-6" style="border:2px solid ;padding:20px;background-color:pink">
                <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo $row->lastname; ?>"
                            aria-describedby="emailHelp" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname; ?>"
                            aria-describedby="emailHelp" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" class="form-control" name="middlename"
                            value="<?php echo $row->middlename; ?>" aria-describedby="emailHelp"
                            placeholder="Enter birthdate">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $row->gender; ?>"
                            aria-describedby="emailHelp" placeholder="Enter contact no">
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
    <br><br>
</body>

</html>