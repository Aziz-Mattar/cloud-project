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
      <div class="container-scroller">
         <div class="container-fluid page-body-wrapper">
            <?php require 'nav2.php'; ?>
            <div class="main-panel">
               <div class="content-wrapper containerA">
                  <form method="post" action="otherPage.php">
                     <div class="row">
                        <div class="col-12 grid-margin">
                           <div class="card" style="width: fit-content;">
                              <div class="card-body">
                                 <h1 class="text-center">Select Student ID</h1>
                                 <div class="table-responsive">
                                    <table class="table">
                                       <tr>
                                          <td>ID : </td>
                                          <td><select id="type" name="ID">
                                             <option value="">Select</option>
                                              <?php require 'Control/ViewC.php'; ?>                   
                                             </select>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td colspan="2"> <input class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task" type="submit" name="View" value="View"></td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
      <script src="../../assets/js/off-canvas.js"></script>
      <script src="../../assets/js/hoverable-collapse.js"></script>
      <script src="../../assets/js/misc.js"></script>
   </body>
</html>