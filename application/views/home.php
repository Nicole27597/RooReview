<body id="container">
<div  class="container">
    <br>
    <h1 class="text-center"> RooReview</h1>
        
    <h3 class="text-center"> The Home of the Internet's Best Reviews </h3>
        <br>
    <div class="col-md">
        <form class="text-center">
            <input id="search_text" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <br>        
        </form>
    </div>

   <div id="result"></div>
</div>
</body>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<!-- Webslesson. "Live Data Search in Codeigniter using Ajax JQuery." webslesson.info. 
https://www.webslesson.info/2018/03/live-data-search-in-codeigniter-using-ajax-jquery.html (accessed May 15, 2021). -->

<style>
    body {
        background-color: #DCDCDC;     
    }   
</style>