<x-nav2>
	
@vite(['resources\js\components\sales.js'])
<div class="container mb-5">
<table class="table table-striped table-class hidden-sm hidden-xs mb-5 mt-5" id= "table_div" >


</table>
</div>
<hr class='mb-5 pb-5'>

<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle invisible"  style="height: 100vh; width:100vw" id="overlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/saleAdd" style="top:20px;">
    @csrf
	<hr>
    <h1 class="h3 mb-3 fw-normal">Select Date</h1>
<hr>
	<div class="input-daterange input-group " id="datepicker">
        <div class="input-group-prepend">
          <span class="input-group-text">From</span>
        </div>
        <input type="text" class="input-sm form-control form-floating" name="from" />
		<hr>
        <div class="input-group-append">
          <span class="input-group-text">To</span>
        </div>
        <input type="text" class="input-sm form-control form-floating" name="to" />
      </div>
	  <hr>

    <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
  </form>
</main>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</x-nav2>