<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary " style="width: 25vw;">

    


      <div class="container p-3 my-3 bg-white mt-3">
	      <div class="bg-dark text-light rounded text-center text-uppercase mb-3" style="letter-spacing:.25rem;"><h1>Invoice</h1></div>
	        <div class="row">
		        <div class="col">
			        <address class="mb-1">
                <div class="font-weight-bold">Test Name</div>
                <div>**** </div>
                <div>*****</div>
			        </address>
			        <div>sample@test.com</div>
		        </div>
            <div class="col">
              <div class="">
                Invoce No. <span>0000</span>
              </div>   
            </div>
	        </div> <!-- end of row -->
          
          <hr>
	        
          <div class="row">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>

          <div class="row">
            <div class="container table-responsive py-5"> 
              <table class="table table-bordered table-hover">
                <thead class="bg-dark text-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Chocolate</td>
                    <td>1</td>
                    <td>10</td>
                    <td>10</td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <div class="row">
                <div class="col">
                  Total: 
                </div>
                
                <div class="col text-end">
                  <span class="">000</span>
                </div>
              </div>
              
            </div>

          </div>

          <div class="row">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                Cash
              </button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-outline-danger btn-lg btn-block">
                Cr
              </button>
            </div>
            
          </div>
      
        </div> 
      </div> <!-- end of container -->

      <div class="b-example-divider b-example-vr"></div>
    
      {{$slot}}

    </div>

</div>
