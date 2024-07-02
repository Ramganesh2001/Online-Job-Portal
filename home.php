  <section id="banner">
   

        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/img5.jpg" alt="" />
              </li>
              
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
 
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Company</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Popular Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>  
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
 <div class="image-container col-sm-6 col-xs-12 pull-left">
    
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-15 col-sm-offset-44 col-xs-12 content">
        <div class="col-md-15">
                <div class="block-heading-two">
                  <center><h3><span>GOVERNMENT JOBS</span></h3></center>
                </div>     <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Employees State Insurance Corporation
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
					 <li><p>Click Here:<a href="https://www.esic.nic.in/">https://www.esic.nic.in/</a></p></li>
                      Salary: 70,000<BR>
					  Vacancy: 6000<BR>
					  Duration Date: 7/4/2022	to 	21/4/2022<br>
					  Qualification: 12th pass<br>
					  Name of the Post: Officer,MPS,UDC<br>
					  Payment of Exam Fees: 100
					  </div>
                   </div>
                  </div>
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> TNPSC GROUP IV
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
					 <li><p>Click Here:<a href="https://www.tnpsc.gov.in/">https://www.tnpsc.gov.in/</a></p></li>
                      Salary:7 0,000<BR>
					  Vacancy: 6000<BR>
					  Qualification: Any Degree<br>
					  Duration Date: 7/4/2022	to 	21/4/2022<br>
					  Name of the Post: VAO,Typist,Bill Collector etc....<br>
					  Payment of Exam Fees: 100
					  </div>
                   </div>
                  </div>
				 
				  
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> SSC
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
					<li><p>Click Here:<a href="https://ssc.nic.in/">https://ssc.nic.in/</a></p></li>
                      Salary:18,000 to 22,000<BR>
					  Vacancy: 7099<BR>
					  Qualification: Any Degree<br>
					  Duration Date: 22/3/2022	to 	30/4/2022<br>
					  Name of the Post: MTS<br>
					  Payment of Exam Fees: Male:100 / Female: Exemption
                      </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> TamilNadu Circle GDS
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                     <li><p>Click Here:<a href="https://indiapostgdsonline.gov.in/">https://indiapostgdsonline.gov.in/</a></p></li>
                      Salary:10,000 to 14,000<BR>
					  Vacancy: 6162<BR>
					  Qualification: Any Degree<br>
					  Duration Date: 02/05/2022	to 	05/06/2022<br>
					  Name of the Post: Post Master<br>
					  Payment of Exam Fees: Male:100 / Female: Exemption
					  </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> Institute of Banking Personal Selection(IBPS)
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
					<li><p>Click Here:<a href="https://ibpsonline.ibps.in/">"https://ibpsonline.ibps.in/</a></p></li>
                      Salary:28,000 to 30,000<BR>
					  Vacancy: 5,830<BR>
					  Qualification: Any Degree<br>
					  Duration Date: 22/3/2022	to 	30/4/2022<br>
					  Name of the Post: Clerk<br>
					  Payment of Exam Fees: Male:100 / Female: Exemption
                      </div>
                       </div>
					   
                   </div>
				    
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>  
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
  <br><br>
</section>
  
 
              
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>
		  