<!doctype html>
<html lang="en">

<head>
  <title>Register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moul&family=Siemreap&display=swap" rel="stylesheet">
</head>
<style>
  body{
    font-family: 'Moul', serif;
    font-family: 'Siemreap', sans-serif;
    font-size:18px;
  }
</style>
<body>
  <div class="container-fluid mt-2 ">


    <header>

    </header>
    <div class="row">
      <div class="col">
        <main>
          <div class="register bg-success text-center">
            <span class=" text-white fw-bold fs-3 ">សុំចុះឈ្មោះចូលរៀននៅ</span>

          </div>
        </main>
      </div>
    </div>
    <section class="register__input mt-2">
      <form action="" method="post">
        <div class="row">
          <div class="col-sm">
            <label for="">អត្តលេខ</label>
            <input class="form-control" type="text" name="id" id="" required>
          </div>
          <div class="col-sm">
          <label for="">ឈ្មោះ</label>

            <input class="form-control" type="text" name="name" id="" required>
          </div>
          <div class="col-sm">
          <label for="">អាយុ</label>

            <input class="form-control" type="number" name="age" id="" required>
          </div>
          <!-- Gender -->

         
          <!-- New Row 2 Regiser__input -->
          <hr class="mt-4 text-danger">
          <div class="row2__input mt-2">
            <div class="row">
              <div class="col-sm">
                <label for="">ភេទ</label>
      
                  <select name="gender" id="" class="form-control form-select">
                    <option value="male">ប្រុស</option>
                    <option value="Female">ស្រី</option>
                    <option value="Other">ផ្សេងៗ</option>
                  </select>
                
                </div>
              <div class="col-sm">
                <label for="">អស័យដ្ឋាន</label>
                <input class="form-control" type="text" name="address" id="" placeholder="">
              </div>
              <div class="col-sm">
                <label for="">ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
                <input class="form-control" type="date" name="d_birth" id="" placeholder="">
              </div>
              <!-- Gender -->
             
            </div>
            <!-- Row 3 for School -->
            <div class="row3__iput mt-3">
              <div class="row">
                <div class="col-sm">
                  <label for="">ទីកន្លែងកំណើត</label>
                  <input class="form-control" type="text" name="p__birth" id="" placeholder="">
                </div>
                <div class="col-sm">
                  <label for="">លេខទូរស័ព្ទ</label>
                  <input class="form-control" type="text" name="phone" id="" placeholder="">
                </div>
                <div class="col-sm">
                  <label for="">អ៉ីមែល</label>
                  <input class="form-control" type="email" name="email" id="" placeholder="">
                </div>
                <!-- Gender -->
                
              </div>
            </div>
            <!-- finish form -->
            <div class="row mt-3">
              <div class="col-sm">
                <label for="">ជំនាញ</label>
                <select name="skill" id="" class="form-control form-select">
                 <option value="ព័ត៌មានវិទ្យា">ព័ត៌មានវិទ្យា</option>
                 <option value="គណនេយ្យ">គណនេយ្យ</option>
                 <option value="សំណង់ស៊ីវិល">សំណង់ស៊ីវិល</option>
                 <option value="អគ្គិសនី">អគ្គិសនី</option>
                 <option value="អេឡិចត្រូនិច">អេឡិចត្រូនិច</option>
                 <option value="គ្រប់គ្រង">គ្រប់គ្រង</option>
                 
                </select>
              </div>
                <div class="col-sm">
                  <label for="">ថ្នាក់សិក្សា</label>
                  <select name="level" id="" class="form-control form-select">
                    <option value="បរិញ្ញាប័ត្ររង">បរិញ្ញាប័ត្ររង</option>
                    <option value="បរិញ្ញាប័ត្រ">បរិញ្ញាប័ត្រ</option>
                    <option value="បរិញ្ញាប័ត្រជាន់ខ្ពស់">បរិញ្ញាប័ត្រជាន់ខ្ពស់</option>
                    <option value="វិជ្ជាជីវៈ">វិជ្ជាជីវៈ</option>
                    
                    
                   </select>
                </div>
                <div class="col-sm">
                  <div class="col-sm">
                    <label for="">វេនសិក្សា</label>
                    <select name="times" id="" class='form-control from-select'>
                    <option value="ពេលព្រឹក">ពេលព្រឹក</option>
                      <option value="ពេលរសៀល">ពេលរសៀល</option>
                      <option value="ពេលយប់">ពេលយប់</option>
                      <option value="សៅរ៍-អាទិត្យ">សៅរ៍-អាទិត្យ</option>
                    </select>
                  </div>
                </div>
            </div>
          </div>
          <!-- Create shift -->
          
          <div class="row">
           
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
// Create Code Php
if (isset($_POST['btnsave'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $d_birth=$_POST['d_birth'];
  $p__birth=$_POST['p__birth'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $skill=$_POST['skill'];
  $level=$_POST['level'];
  $times=$_POST['times'];
  
 

  

  


}
echo
"
 
    <table class='table  mt-3'>
    <tr class='bg-secondary opacity-75 text-white'>
    <th>អត្តលេខ</th>
    <th>ឈ្មោះ</th>
    <th>អាយុ</th>
    <th>ភេទ</th>
    <th>អាស័យដ្ឋាន</th>
    <th>ថ្ងៃ ខែ ឆ្នាំកំណើត</th>
    <th>ទីកន្លែងកំណើត</th>
    <th>លេខទូរស័ព្ទ</th>
    <th>អ៊ីមែល</th>
    <th>ជំនាញ</th>
    <th>ថ្នាក់សិក្សា</th>
    <th>វេនសិក្សា</th>
    
    </tr>
    <tr>
   <td>$id</td>
   <td>$name</td>
   <td>$age</td>
   <td>$gender</td>
   <td>$p__birth</td>
   <td>$d_birth</td>
   <td>$p__birth</td>
   <td>$phone</td>
   <td>$email</td>
   <td>$level</td>
   <td>$skill</td>
   
   <td>$times</td>
    
    </tr>
  </table>
  
";

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