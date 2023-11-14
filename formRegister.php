<!doctype html>
<html lang="en">

<head>
  <title>Register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid">


    <header>

    </header>
    <div class="row">
      <div class="col">
        <main>
          <div class="register bg-success text-center">
            <span class=" text-white fw-bold fs-3 ">Register Student </span>

          </div>
        </main>
      </div>
    </div>
    <section class="register__input mt-2">
      <form action="" method="post">
        <div class="row">
          <div class="col-sm">
            <input class="form-control" type="text" name="id" id="" placeholder="ID">
          </div>
          <div class="col-sm">
            <input class="form-control" type="text" name="name" id="" placeholder="Name">
          </div>
          <!-- Gender -->

          <div class="col-sm">
            <select name="gender" id="" class="form-control">
              <option value="male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <!-- New Row 2 Regiser__input -->
          <div class="row2__input mt-2">
            <div class="row">
              <div class="col-sm">
                <input class="form-control" type="text" name="address" id="" placeholder="Address">
              </div>
              <div class="col-sm">
                <input class="form-control" type="date" name="d_birth" id="" placeholder="Date of birth">
              </div>
              <!-- Gender -->
              <div class="col-sm">
                <input class="form-control" type="text" name="p__birth" id="" placeholder="Place of birth">
              </div>
            </div>
            <!-- Row 3 for School -->
            <div class="row3__iput mt-2">
              <div class="row">
                <div class="col-sm">
                  <input class="form-control" type="text" name="phone" id="" placeholder="Phone">
                </div>
                <div class="col-sm">
                  <input class="form-control" type="email" name="email" id="" placeholder="Email">
                </div>
                <!-- Gender -->
                <div class="col-sm">
                  <input class="form-control" type="text" name="" id="" placeholder="">
                </div>
              </div>
            </div>

          </div>
          <!-- button save and Cancel -->
          <div class="button mt-2">
            <div class="row">
              <div class="col">
                <button class="btn bg-success" name="btnsave" type="submit">Save</button>
                <button class="btn btn-warning" type="reset">Cancel</button>


              </div>
            </div>
          </div>
      </form>
    </section>
    <footer>

    </footer>
  </div>
  



<?php
if (isset($_POST['btnsave'])){
  $id=$_POST['id'];
  $sname=$_POST['name'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $d_birth=$_POST['d_birth'];

  echo"<Table>
        <tr>
          <td class='text-danger bg-primary'>$sname</td>
          <td></td>
          <td></td>
        </tr>
      </Table>";
}
?>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>




</body>

</html>