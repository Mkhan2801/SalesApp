<x-nav>

@vite(['resources/css/main.css'])
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5 d-flex justify-content-around z-3" style="top: 70px;"  id='CashaddOn'>
    <div id='addOn' >
        
    </div>

    <div >  
      <input class="form-control me-2 " type="search" placeholder="Search" id="Search_name" >
      <div class="drpodown">
            <div id="myDropdown_2" class="dropdown-content">

            </div>
</div>

    </div>

  </nav>
  <hr class="mb-5 pb-3">



  {{$slot}}

<script>
  
    
let searchnameInput = document.getElementById('Search_name');
const div2 = document.getElementById("myDropdown_2");

function selectname(ele){
  searchnameInput.value = ele
div2.classList.remove("show");
  
}
</script>
</x-nav>


