<?php include 'web_control/dbc.php'; ?>
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
           <title>Faculty | Esaki Vidyaashram CBSE</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php include "comman/link.php"; ?>
     
    </head>
    <body class="defult-home">
         <?php include "comman/header.php"; ?>
    <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo1.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 
        <!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <section class="cbsehomepage">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 p-0">
                    <div class="">
                      <img src="assets/images/slider/faculty-banner.png" style="width: 100%;">
                      <div class="text-position"><p class="text-white hero-content">Our<span>Faculty</span></p></div>
                    </div>
                  </div>
                </div>
              </div>
            </section> 
            <!-- Breadcrumbs End -->

<!-- 
        <section>
        <div class="container">

		

		
		<div class="row">
			<div class="col-3">
				<ul class="nav nav-tabs flex-column" id="myTab" role="tablist" aria-orientation="vertical">
					<li class="nav-item" role="presentation">
						<a href="#menu1" class="nav-link active" data-toggle="tab" role="tab" aria-controls="menu1" aria-selected="true">Principal</a>
					</li>
					<li class="nav-item" role="presentation">
						<a href="#menu2" class="nav-link" data-toggle="tab" role="tab" aria-controls="menu2" aria-selected="false">PRT</a>
					</li>
					<li class="nav-item" role="presentation">
						<a href="#menu3" class="nav-link" data-toggle="tab" role="tab" aria-controls="menu3" aria-selected="false">TGT</a>
					</li>	
                    <li class="nav-item" role="presentation">
						<a href="#menu3" class="nav-link" data-toggle="tab" role="tab" aria-controls="menu3" aria-selected="false">PGT</a>
					</li>
                    <li class="nav-item" role="presentation">
						<a href="#menu3" class="nav-link" data-toggle="tab" role="tab" aria-controls="menu3" aria-selected="false">Physical Education</a>
					</li>	
                    <li class="nav-item" role="presentation">
						<a href="#menu3" class="nav-link" data-toggle="tab" role="tab" aria-controls="menu3" aria-selected="false">Non-Teaching Staff</a>
					</li>	
				</ul>
			</div>
			<div class="col-9">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="menu1">
					<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
					</div>
					<div class="tab-pane fade" id="menu2">
						<h3>Vertical Tab Menu2</h3>
						Second tab menu content. 
					</div>
					<div class="tab-pane fade" id="menu3">
						<h3>Vertical Tab Menu3</h3>
						Third tab menu content. 
					</div>				
				</div>
			</div>
		</div>

	</div>
                            </section> -->
                            
                    

    <style>
        /* Custom styling */
        .nav-pills .nav-link {
    border-radius: 0;
    width: 100%;
    text-align: center;
   
    background: 0 0;
    border: 0;
    border-radius: .25rem;
    text-align: start;
    background-color: #35476a;
    color: #fff !important;
    margin-top: 4px;
    background-color: #f0f0;
    border: 1px solid #000;
    color: #000 !important;
}
        @media (max-width: 767px) {
            /* Stack tabs one below the other in mobile view */
            .nav-pills {
                flex-direction: column !important;
                width: 100%;
            }

            .tab-content {
                margin-top: 10px;
            }
        }
    </style>



<div class="container mt-4 mb-4">
    <div class="row">
        <!-- Vertical Tabs -->
        <div class="col-md-3 col-12">
            <ul class="nav nav-pills flex-column" id="v-pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  tab-font active " id="tab1-tab" data-toggle="pill" href="#tab1" role="tab">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  tab-font" id="tab2-tab" data-toggle="pill" href="#tab2" role="tab">PRT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-font" id="tab3-tab" data-toggle="pill" href="#tab3" role="tab">TGT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  tab-font" id="tab4-tab" data-toggle="pill" href="#tab4" role="tab">PGT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  tab-font" id="tab5-tab" data-toggle="pill" href="#tab5" role="tab">Physical Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  tab-font" id="tab6-tab" data-toggle="pill" href="#tab6" role="tab">Non-Teaching Staff</a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="col-md-9 col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                  
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="faculty-tab-head  ">
                                <tr>
                                <th>S.No</th>
                                <th>Name Of The Staff</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody class="body_content body-table-background">
                                <tr class="faculty-table-content">
                                <td> 1</td>
                                <td>Monica D'Souza</td>
                                <td>M.Sc., M.Ed., P hD</td>
                                <td>Principal</td>
                                </tr>
                              </tbody>
                        </table>
                        

                    </div>
                </div>

                <div class="tab-pane fade" id="tab2" role="tabpanel">
                  
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead class="faculty-tab-head">
                                <tr>
                                <th>S.No</th>
                                <th>Name Of The Staff</th>
                                <th>Qualification</th>
                             
                                </tr>
                            </thead>
                            <tbody class="body-table-background">
                                <tr class="faculty-table-content">
                                <td>01</td>
                                <td>Ms. Kulanthaivel selvi</td>
                                <td>B.Sc,B.Ed</td>
                              
                                </tr>
                                <tr class="faculty-table-content">
                                <td>02</td>
                                <td>Ms.Suganya</td>
                                <td>	M.A,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 03</td>
                                <td>	Ms. Muthumari</td>
                                <td>B.A,D.Ted</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td>04</td>
                                <td>Ms.Chithra</td>
                                <td>B.A,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td>05</td>
                                <td>Ms.Parameswari</td>
                                <td>	B.A,D.Ted</td>
                        
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 06</td>
                                <td>Ms. Karthiga</td>
                                <td>B.Sc,B.Ed</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 07</td>
                                <td>Ms. Pitchammal </td>
                                <td>M.Sc,B.Ed</td>
                         
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 08</td>
                                <td>Ms.Vaijeyanthi</td>
                                <td>M.Com,B.Ed</td>
                           
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 09</td>
                                <td>Ms.Vaijeyanthi</td>
                                <td>M.Com,B.Ed</td>
                          
                             
                                <tr class="faculty-table-content">
                                <td> 10</td>
                                <td>Ms. Thirumalai Nacchiyar</td>
                                <td>B.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td>11</td>
                                <td>	Ms. Sanju</td>
                                <td>M.Com,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 12</td>
                                <td>Ms. Muthuselvi</td>
                                <td>	B.E,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 13</td>
                                <td>	Ms. Reena</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 14</td>
                                <td>	Ms. Usha Rani</td>
                                <td>	M.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 15</td>
                                <td>Ms. Poornima</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 16</td>
                                <td>Ms. Uma Maheshwari</td>
                                <td>M.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 17</td>
                                <td>	Ms. Mahalakshmi</td>
                                <td>	M.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 18</td>
                                <td>	Ms. Malar Vizhi</td>
                                <td>	B.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td>19</td>
                                <td>	Ms. Skathi Velammal</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 20</td>
                                <td>Ms. Durgesh Priyanka</td>
                                <td>	B.A,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 21</td>
                                <td>	Ms. Uma</td>
                                <td>	B.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 22</td>
                                <td>Ms. Ponni</td>
                                <td>B.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 23</td>
                                <td>	Ms. Ramalakshmi</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 24</td>
                                <td>	Ms. Pradeepa</td>
                                <td>	B.E,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 25</td>
                                <td>Ms. Ananthi</td>
                                <td>B.Sc,B.Ed</td>
                          
                                </tr>


                              
                                
                                <tr class="faculty-table-content">
                                <td> 26</td>
                                <td>Ms. Sathya</td>
                                <td>	M.A,D.Ted</td>
                          
                                </tr>
                                
                                <tr class="faculty-table-content">
                                <td> 27</td>
                                <td>	Ms. Princy Methalin</td>
                                <td>	B.A,B.Ed</td>
                                </tr>
                                
                                <tr class="faculty-table-content">
                                <td> 28</td>
                                <td>	Ms. Jameema</td>
                                <td>	M.A,B.Ed</td>
                                </tr>
                                    
                                <tr class="faculty-table-content">
                                <td> 29</td>
                                <td>	Ms. Subha</td>
                                <td>	M.A,B.Ed</td>
                                </tr>
                              </tbody>
                        </table>

             

                    </div>
                </div>
              <div class="tab-pane fade" id="tab3" role="tabpanel">
                  
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead class="faculty-tab-head">
               
                                <tr>
                                <th>S.No</th>
                                <th>Name Of The Staff</th>
                                <th>Qualification</th>
                             
                                </tr>
                            </thead>
                            <tbody class="body-table-background">
                                <tr class="faculty-table-content">
                                <td>01</td>
                                <td>	Mr. Stephen</td>
                                <td>	M.A,B.Ed</td>
                              
                                </tr>
                                <tr class="faculty-table-content">
                                <td>02</td>
                                <td>	Ms. Shenbaga pandeeswari</td>
                                <td>	M.A,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 03</td>
                                <td>Ms. Rohini</td>
                                <td>	M.A,M.Phil,B.Ed</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td>04</td>
                                <td>	Ms. Shanmuga Priya </td>
                                <td>	M.A,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td>05</td>
                                <td>Ms. Prema</td>
                                <td>M.A,B.Ed</td>
                        
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 06</td>
                                <td>Ms. Muthukumari</td>
                                <td>M.A,M.A,B.Ed</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 07</td>
                                <td>Ms. Manonmani</td>
                                <td>M.Sc,B.Ed</td>
                         
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 08</td>
                                <td>Ms. Vijaya lakshmi</td>
                                <td>B.Sc,B.Ed</td>
                           
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 09</td>
                                <td>Ms. Snehalatha</td>
                                <td>M.C.A,B.Ed</td>
                          
                             
                                <tr class="faculty-table-content">
                                <td> 10</td>
                                <td>Ms. Indira Gandhi</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td>11</td>
                                <td>Ms. Ponmalar selvi</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 12</td>
                                <td>Mr. Ravi shankar</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 13</td>
                                <td>	Mr. Selvan</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 14</td>
                                <td>	Ms. Chithra</td>
                                <td>M.Com,M.Phil,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 15</td>
                                <td>Ms. Jenusia</td>
                                <td>M.Sc, B.ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 16</td>
                                <td>	Ms. Aarthi</td>
                                <td>	M.C.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 17</td>
                                <td>Ms. Celestina</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 18</td>
                                <td>Mr. Antony Prasad</td>
                                <td>	M.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td>19</td>
                                <td>	Ms. Kamala Nachiyar</td>
                                <td>	M.A,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 20</td>
                                <td>Ms. Daisy Rani</td>
                                <td>	M.A,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 21</td>
                                <td>Ms. Baby Indirani</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 22</td>
                                <td>	Ms. Saira Banu</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 23</td>
                                <td>Ms. Jhoncy</td>
                                <td>M.A,M.Phil,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 24</td>
                                <td>	Mr. Gomathi sankar</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>

                                <tr class="faculty-table-content">
                                <td> 25</td>
                                <td>	Ms. Jegatha</td>
                                <td>	M.Sc,B.Ed</td>
                          
                                </tr>


                              
                                
                                <tr class="faculty-table-content">
                                <td> 26</td>
                                <td>Ms. Maha lakshmi</td>
                                <td>M.Sc,M.Phil,B.Ed</td>
                          
                                </tr>
                                
                                <tr class="faculty-table-content">
                                <td> 27</td>
                                <td>Ms. Mary Dhanya</td>
                                <td>	M.Sc,B.Ed</td>
                                </tr>
                                
                                <tr class="faculty-table-content">
                                <td> 28</td>
                                <td>	Ms. Packa Rathi</td>
                                <td>		M.A,B.Ed</td>
                                </tr>
                                    
                                <tr class="faculty-table-content">
                                <td> 29</td>
                                <td>	Ms. Subha</td>
                                <td>	M.A,B.Ed</td>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                </div>




                <div class="tab-pane fade" id="tab4" role="tabpanel">
          
                
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead class="faculty-tab-head">
               
                                <tr>
                                <th>S.No</th>
                                <th>Name Of The Staff</th>
                                <th>Qualification</th>
                             
                                </tr>
                            </thead>
                            <tbody class="body-table-background">
                                <tr class="faculty-table-content">
                                <td>01</td>
                                <td>Ms. Rita Mary</td>
                                <td>M.Sc,B.Ed</td>
                              
                                </tr>
                                <tr class="faculty-table-content">
                                <td>02</td>
                                <td>Mr. Chandran</td>
                                <td>M.A,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 03</td>
                                <td>Mr. Thirumalai kumar</td>
                                <td>B.Sc,B.Ed</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td>04</td>
                                <td>	Ms. Sornalatha </td>
                                <td>	M.Sc,B.Ed</td>
                               
                                </tr>
                                <tr class="faculty-table-content">
                                <td>05</td>
                                <td>Ms. Jeya Roselin</td>
                                <td>	M.Sc,B.Ed</td>
                        
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 06</td>
                                <td>	Mr. Arulanandu</td>
                                <td>	M.Sc,B.Ed</td>
                             
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 07</td>
                                <td>Ms. Philomine Joy</td>
                                <td>	M.A,B.Ed</td>
                         
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 08</td>
                                <td>	Mr. Mohammed Abdullah</td>
                                <td>	M.C.A,B.Ed</td>
                           
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 09</td>
                                <td>	Ms. Mable</td>
                                <td>	M.com,B.Ed</td>
                          
                             
                                <tr class="faculty-table-content">
                                <td> 10</td>
                                <td>Mr. Joseph Stalin</td>
                                <td>	M.A,LLB,M.Phil,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td>11</td>
                                <td>Ms. Jenifer Jaquline</td>
                                <td>	M.Com,B.Ed</td>
                          
                                </tr>
                                <tr class="faculty-table-content">
                                <td> 12</td>
                                <td>Ms. Maha Abirami</td>
                                <td>M.Sc,B.Ed</td>
                          
                                </tr>

                             

                              </tbody>
                        </table>
                    </div>
    </div>




    <div class="tab-pane fade" id="tab5" role="tabpanel">
          
                
          <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead class="faculty-tab-head">
         
                          <tr>
                          <th>S.No</th>
                          <th>Name Of The Staff</th>
                          <th>Qualification</th>
                       
                          </tr>
                      </thead>
                      <tbody class="body-table-background body-table-background">
                          <tr class="faculty-table-content">
                          <td>01</td>
                          <td>	Mr. Bala Murugan</td>
                          <td>M.Sc,M.PED</td>
                        
                          </tr>
                          <tr class="faculty-table-content">
                          <td>02</td>
                          <td>	Mr. Stephen Thangaraj</td>
                          <td>	B.Com,M.Phil, M.PED</td>
                         
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 03</td>
                          <td>	Ms. Sobiya</td>
                          <td>B.Sc,B.PED</td>
                       
                          </tr>
                          <tr class="faculty-table-content">
                          <td>04</td>
                          <td>Ms. Vaishnavi </td>
                          <td>	B.A,B.PED</td>
                         
                          </tr>
                         

                       

                        </tbody>
                  </table>
              </div>
</div>

<div class="tab-pane fade" id="tab6" role="tabpanel">
          
                
          <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead class="faculty-tab-head">
         
                          <tr>
                          <th>S.No</th>
                          <th>Name Of The Staff</th>
                          <th>Qualification</th>
                          <th>Designation</th>
                       
                          </tr>
                      </thead>
                      <tbody class="body-table-background ">
                          <tr class="faculty-table-content">
                          <td>01</td>
                          <td>	Mr. Palanisamy</td>
                          <td>	M.Com</td>
                          <td>	Accountant</td>
                        
                          </tr>
                          <tr class="faculty-table-content">
                          <td>02</td>
                          <td>	Ms. Radha</td>
                          <td>	D.ECE</td>
                          <td>	Data Processing</td>
                         
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 03</td>
                          <td>	Mr. Balasubraminan</td>
                          <td>	B.E</td>
                          <td>Transport</td>
                       
                          </tr>
                          <tr class="faculty-table-content">
                          <td>04</td>
                          <td>	Mr. Karthik </td>
                          <td>		M.C.A,B.Ed</td>
                          <td>	CCTV & Smart Board Incharge</td>
                         
                          </tr>
                          <tr class="faculty-table-content">
                          <td>05</td>
                          <td>	Ms. Selvarani</td>
                          <td>		B.E</td>
                          <td>	Office Clerk</td>
                  
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 06</td>
                          <td>Ms. Pooja</td>
                          <td>	B.Com</td>
                          <td>	Office Clerk</td>
                       
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 07</td>
                          <td>	Ms. Abarna</td>
                          <td>		B.E</td>
                          <td>	Computer Lab Assistant</td>
                   
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 08</td>
                          <td>	Ms. Murugammal</td>
                          <td>	D.CE</td>
                          <td>	Language Lab-Incharge</td>
                     
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 09</td>
                          <td>Mrs. Ayishal Fathima</td>
                          <td>B.A, M.Lic</td>
                          <td>	Librarian</td>
                    
                       
                          <tr class="faculty-table-content">
                          <td> 10</td>
                          <td>	Mr. Esaki Pandian</td>
                          <td>	B.Com,B.FA</td>
                          <td>	Art Master</td>
                    
                          </tr>
                          <tr class="faculty-table-content">
                          <td>11</td>
                          <td>	Mr. Geetha</td>
                          <td>	Dip.in.Nursing</td>
                          <td>	Nurse</td>
                    
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 12</td>
                          <td>	Ms. Jeeyaseeli</td>
                          <td>	M.A,B.Ed,(Spl. Ed. Mental Retardation)</td>
                          <td>	Counseller</td>
                    
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 13</td>
                          <td>	Mr. Sudalai Thangam  </td>
                          <td>	M.A,B.Ed,(Spl. Ed. Mental Retardation)</td>
                          <td>	Counseller</td>
                    
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 14</td>
                          <td>	Ms. Jeeyaseeli</td>
                          <td>	M.A,B.Ed,(Spl. Ed. Mental Retardation)</td>
                          <td>	Counseller</td>
                    
                          </tr>
                          <tr class="faculty-table-content">
                          <td> 12</td>
                          <td>	Ms. Jeeyaseeli</td>
                          <td>	M.A,B.Ed,(Spl. Ed. Mental Retardation)</td>
                          <td>	Counseller</td>
                    
                          </tr>

                       

                        </tbody>
                  </table>
              </div>
</div>


            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    
        


        <!-- Main content End --> 

                <!-- Newsletter section start -->
                <!-- <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-lg-8 sm-mb-30">
                                    <div class="sec-title">
                                        
                                        <h2 class="title mb-0 white-color">Enquiry Us to join Our Community </h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                       <div class="btn-part text-right" >
                                    <a class="readon2 mod" style="background: #283d67;" href="#">Read More</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End --> 
     
        <?php include "comman/footer.php"; ?>
        <?php include "comman/script.php"; ?>

    </body>

</html>