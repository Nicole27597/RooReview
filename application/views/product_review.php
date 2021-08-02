<body id="container">
<div class="container">
<br>
   <h1 class="text-center"> RooReview</h1>
        
        <h3 class="text-center"> The Home of the Internet's Best Reviews </h3>
        <br>
   <div class="col-md">
</div>
<div id="button" class="col-6 col-sm-4">
   <form>
      <input type="button" value="Go Back" onclick="history.back()">
   </form>
</div>
<div class="container">
   <div class="row">
   <div class="col">
   <img src="<?php echo base_url().$product->img;?>" class="img-thumbnail" width="500" height="600">
   </div>
   <div class="col">
      <h3 id="title"><?php echo $product->product_name;?></h3>
      <br><br>
      <p><?php echo $product->description;?></p>
   </div>
   </div>
</div>
<br>
<div class="container">
   <div class="row">
   <div class="col">
   <h3 id="rev">Reviews<h3>
   </div>

   </div>
</div>
</body>

<style>
   body {
      background-color: #DCDCDC;
   }

   p {
      font-size: 18px;
     }

   #title {
      font-weight: bold;
   }
   
   #rev {
      text-align: center;
      font-weight: bold;
      padding-top: 20px;
   }

   #button {
      font-size: 18px;
   }
   
</style>