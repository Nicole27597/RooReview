<body>
<br>
<div id="button" class="col-6 col-sm-4">
   <form>
      <input type="button" value="Go Back" onclick="history.back()">
   </form>
</div>
<div class="container" id="container">
    <h2><?php echo $this->session->userdata('name')
        ?>'s Profile</h2>
    
    <ul class="col-4 offset-4">
        <li class="list-group-item" id="text">
        Your Email: <?php echo $this->session->userdata('email')
        ?>
        </li>
    </ul>
    <br>
    <div class="row">
    <div class="col-4 offset-4">
        <?php echo form_open(base_url().'profile/update'); ?>
            <h3>Update your email</h3>
            <div class="form-group">
            <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"  class="form-control">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        <?php echo form_close(); ?>
    </div>
    </div>

</div>
</body>

<style>
    h2 {
        text-align: center;
    }

    #text {
        font-size: 20px;
        text-align: center;
    }

    #container {
        font-family: Verdana, sans-serif;
        padding: 10px 12px 10px;   
    }
    
    body {
      background-color: #DCDCDC;
    }

    #button {
        font-size: 18px;
    }
</style>