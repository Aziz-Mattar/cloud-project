<?php require 'Control/Add1C.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin Panel</title>
      <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="../../assets/css/style.css">
      <link rel="shortcut icon" href="../../assets/images/favicon.png" />
      <style type="text/css">
         .containerA{
         background-color: #C5C9B8;
         width: 100%;          
         height: 100%;
         margin: 0 auto;
         overflow: hidden;
         padding: 10px 0;
         align-items: center;
         justify-content: space-around;
         display: flex;
         float: none;
         }
      </style>
   </head>
   <body>
      <div class=" containerA">
         <form method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="col-6 grid-margin">
                  <div class="card" style="width: fit-content;">
                     <div class="card-body">
                        <h1 class="text-center">Student Personal Information</h1>
                        <div class="table-responsive">
                           <table class="table">
                              <tr>
                                 <td>ID : </td>
                                 <td><input type="text" name="ID"></td>
                              </tr>
                              <tr>
                                 <td>Password : </td>
                                 <td><input type="Password" name="password"></td>
                              </tr>
                              <tr>
                                 <td>First Name : </td>
                                 <td><input type="text" name="FirstName"></td>
                              </tr>
                              <tr>
                                 <td>Last Name :</td>
                                 <td><input  name="LastName"></td>
                              </tr>
                              <tr>
                                 <td>DOB :</td>
                                 <td><input  name="Age" type="date"></td>
                              </tr>
                              <tr>
                                 <td>Email :</td>
                                 <td><input  name="Email"></td>
                              </tr>
                              <tr>
                                 <td>Address :</td>
                                 <td><input  name="Address"></td>
                              </tr>
                              <tr>
                                 <td>City :</td>
                                 <td><input  name="City"></td>
                              </tr>
                              <tr>
                                 <td>Photo :</td>
                                 <td><input  name="Photo" type="file"></td>
                              </tr>
                              <tr>
                                 <td>Birthday Certificate :</td>
                                 <td><input  name="birthdayCertificate" type="file"></td>
                              </tr>
                              <tr>
                                 <td>Identity Card :</td>
                                 <td><input  name="identityCard" type="file"></td>
                              </tr>
                              <tr>
                                 <td colspan="2"> <center><input type="submit" name="Add" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="Sign up"></center></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>
