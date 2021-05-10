<?php 
  require "header.php";
  $cate = 4;
  $query_for_grain = "select * from ingredients where in_cat = '$cate';";
  $result_for_grain = mysqli_query($conn, $query_for_grain);
  $dairy = 3;
  $query_for_dairy = "select * from ingredients where in_cat = '$dairy'";
  $result_for_dairy = mysqli_query($conn, $query_for_dairy);
  $result_for_fruit = mysqli_query($conn, "select * from ingredients where in_cat = 1");
 ?>   
    <!-- END header -->

    <div class="minimize-btn">
        <button type="button" class="btn btn-secondary">X</button>
    </div>

    <div class="new-div" id="new-div" >

        <div class="cart-row">
          <div class="col-img">

          </div>
          
          <div class="col-name">
          
          </div>

          <div class="col-end">
          
          </div>
        </div>

        

    </div>

    <section class="home-slider-loop-false  inner-page owl-carousel" >
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>cc này</h1>
            </div>
          </div>
        </div>

      </div>

      
    </section>

    

        <!-- filter button -->
    <div class="container-filter" style="position:fixed;width:100%;z-index:3;"> 

      <section class="filter1" id="idForFilter1"  style="width: 60px; height: 60px;display:flex;align-items:center;justify-content:center;cursor: pointer;float:right;">
          <i class="fas fa-bars fa-2x"></i>
      </section>

      <section class="filter2" id="idForFilter2" onmouseover="hover()" onmouseout="offHover()" style="width: 60px; height: 60px;display:flex;align-items:center;justify-content:center;cursor: pointer;">
        <i class="fas fa-bars fa-2x" id="huy"></i>
        <p id="huy1" style="display:none; z-index:4;color:black">Filtering</p>
      </section>
    
    </div>
  
    
    
    <!-- END slider -->

    
    <section class="section element-animate" style="padding-top: 0;margin-top: 60px;">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Grains</h2>
              <span class="back-text">Grains</span>
            </div>
          </div>
        </div>
      </div>


       <div class="container" >

        <?php 
        $count = 0;
          while(list($in_id, $in_name, $in_img, $ing_calo_1g, $in_detail, $in_cat) = mysqli_fetch_array($result_for_grain)){
          $count++;
        ?>



         <?php if($count %2 != 0 ) { echo '<div>';echo '<div class="row">';}?> 

          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex" style="width: 540px;height:278px;">
              <div class="bg-image" style="background-image: url('img/ingredients/<?php echo $in_img?>');"></div>
              <div class="text">
                <h3 class="title"><?php echo $in_name?></h3>
                <p class="sched-time">
                  <span><i class="fas fa-balance-scale"></i> <?php echo $ing_calo_1g?> kcal/gam</span> <br>
                </p>
                <p style="width:210px;height:110px;overflow:scroll"><?php echo $in_detail?></p>

                <p>
                  <button class="btn btn-primary btn-sm">Add to cart</button>
                </p>

              </div>

            </div>
          </div>
        <?php 
        if($count %2 == 0 ) {
            echo '</div>';
        }
          }

        ?>
      </div>

    </section>


    <section class="section element-animate" style="padding-top: 0;margin-top: 60px;margin-left:60px;margin-right:60px">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Dairy</h2>
              <span class="back-text">Dairy</span>
            </div>
          </div>
        </div>
      </div>


       <div class="container" >

        <?php 
        $count1 = 0;
          while(list($in_id2, $in_name2, $in_img2, $ing_calo_1g2, $in_detail2, $in_cat2) = mysqli_fetch_array($result_for_dairy)){
          $count1++;
        ?>



         <?php if($count1 %2 != 0 ) { echo '<div>';echo '<div class="row">';}?> 

          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex" style="width: 540px;height:278px;">
              <div class="bg-image" style="background-image: url('img/ingredients/<?php echo $in_img2?>');background-size: cover;background-position: center;"></div>
              <div class="text">
                <h3><?php echo $in_name2?></h3>
                <p class="sched-time">
                  <span><i class="fas fa-balance-scale"></i> <?php echo $ing_calo_1g2?> kcal/gam</span> <br>
                </p>
                <p style="width:210px;height:110px;overflow:scroll"><?php echo $in_detail2?></p>

                <p>
                  <button class="btn btn-primary btn-sm">Add to cart</button>
                </p>

              </div>

            </div>
          </div>
        <?php 
        if($count1 %2 == 0 ) {
            echo '</div>';
        }
          }

        ?>
      </div>

    </section>

    <section class="section element-animate" style="padding-top: 0;margin-top: 60px;margin-left:60px;margin-right:60px">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Fruits</h2>
              <span class="back-text">Fruits</span>
            </div>
          </div>
        </div>
      </div>


       <div class="container" >

        <?php 
        $count2 = 0;
          while(list($in_id3, $in_name3, $in_img3, $ing_calo_1g3, $in_detail3, $in_cat3) = mysqli_fetch_array($result_for_fruit)){
          $count2++;
        ?>



         <?php if($count2 %2 != 0 ) { echo '<div>';echo '<div class="row">';}?> 

          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex" style="width: 540px;height:278px;">
              <div class="bg-image" style="background-image: url('img/ingredients/<?php echo $in_img3?>');"></div>
              <div class="text">
                <h3><?php echo $in_name3?></h3>
                <p class="sched-time">
                  <span><i class="fas fa-balance-scale"></i> <?php echo $ing_calo_1g3?> kcal/gam</span> <br>
                </p>
                <p style="width:210px;height:110px;overflow:scroll"><?php echo $in_detail3?></p>

                <p>
                  <button class="btn btn-primary btn-sm">Add to cart</button>
                </p>

              </div>

            </div>
          </div>
        <?php 
        if($count2 %2 == 0 ) {
            echo '</div>';
        }
          }

        ?>
      </div>
    </section>

    <!-- Start JS -->
    <script>
        function hover() {
          document.getElementById('huy1').style.display = "block";
          document.getElementById('huy').style.display = "none";
        }
        
        function offHover() {
          document.getElementById('huy1').style.display = "none";
          document.getElementById('huy').style.display = "block";
        }

        document.getElementById("new-div").style.display = "none";
        function openNewDiv(){
          var newDiv = document.getElementById("new-div");
          if(newDiv.style.display == "none"){
            newDiv.style.display = "flex";
          }else{
            newDiv.style.display = "none";
          }
        }
        document.getElementById('idForFilter1').addEventListener('click', openNewDiv);
     

        function cartButton(){
          // row
          var cartRow = document.createElement("div");
          cartRow.classList.add("cart-row");
          // img
          var colImg = document.createElement("div");
          colImg.classList.add("col-img");
          // name
          var colName = document.createElement("div");
          colName.classList.add("col-name");
          // end
          var colEnd = document.createElement("div");
          colEnd.classList.add("col-end");

          // append
          cartRow.appendChild(colImg);
          cartRow.appendChild(colName);
          cartRow.appendChild(colEnd);

          document.getElementById("new-div").appendChild(cartRow);
        }

        function takeInfo(){
          let elementsAddBtn = document.getElementsByClassName("btn btn-primary btn-sm");
          for (let i = 0; i < elementsAddBtn.length; i++) {
            let temp = elementsAddBtn[i].parentElement.parentElement;
            let title = temp.getElementsByClassName("title")[0].innerHTML;
            console.log(title);
          }
         
          
        }

        var elementsAddBtn = document.getElementsByClassName("btn btn-primary btn-sm");
        for (let i = 0; i < elementsAddBtn.length; i++) {
          elementsAddBtn[i].addEventListener("click", cartButton);
          elementsAddBtn[i].addEventListener("click", takeInfo);
        }



    </script>

    <!-- End JS -->


     <?php 
    require "footer.php" ?>

    