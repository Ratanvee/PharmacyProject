<?php include_once("adminheader.php") ?>
 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2 style="font-style: italic;text-decoration: underline;">Show Register User</h2>
            </div>
            <div class="page_link">
              <a href="admin.php">Home</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        

      <div class="row">
        <div class="col-lg-12">
            <style type="text/css">
                th{
                    text-align: center;
                    line-height: 100px;
                    color: black;
                    text-transform: uppercase;
                }
            </style>
        <?php
        $a=$_REQUEST['a'];
        include_once("connect.php");
        $data=mysqli_query($con,"select * from register where email='$a'")
        or die(mysqli_error($con));
        if(mysqli_num_rows($data)>0){
            echo"<table class='table table-striped table-bordered'>
                    <tr>
                        <th>Name</th>
                        <th>email-id</th>
                        <th>Password</th>
                        <th>Mobile-No</th>
                        <th>state</th>
                        <th>city</th>
                        <th>address</th>
                        <th>Action</th>
                    </tr>";
        while($s=mysqli_fetch_assoc($data)){
            echo"<tr>
                    <th>".$s['name']."</th>
                    <th>".$s['email']."</th>
                    <th>".$s['pwd']."</th>
                    <th>".$s['no']."</th>
                    <th>".$s['state']."</th>
                    <th>".$s['city']."</th>
                    <th>".$s['address']."</th>
                    <th><a href='delete_user.php?a=".$s['id']."'><img src=my/del.png height=50 width=50></a></th>
                    </tr>";
        } 
        echo"</table>";  
        }
        ?> 
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
        <?php include_once("footer.php") ?>