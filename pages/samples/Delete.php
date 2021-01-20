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
            <?php require 'nav.php'; ?>
            <div class="main-panel">
               <div class="content-wrapper containerA">
                  <div class="row">
                     <div class="col-10 grid-margin">
                        <div class="card" style="width: fit-content;">
                           <div class="card-body">
                              <h1 class="text-center">Delete Students</h1>
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th> ID : </th>
                                          <th> Name : </th>
                                          <th> City : </th>
                                          <th> Delete : </th>
                                       </tr>
                                    </thead>
                                    <?php require 'Control/DeleteC.php'; ?>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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