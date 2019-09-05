<!DOCTYPE html>
<html>
<head>
  <title><?php echo $__env->yieldContent('title','AsianPaints'); ?> </title>
</head>
<style>

footer{
  width: 100%;
  background-color: #222;
  color:white;
      }
.footer-widgets{
  width:100%;  
  height: 75%; 
  font-family: 'Open Sans', sans-serif;
 
}
.footer-widget{
   float:center;
   display: inline-block;
   width:25%;  
   padding:0 10% 0 10%;
}
.footer-cpyright{
  text-align: center;
  height: 25%;
    width:100%;
}

p {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
}

</style>
<body>


<?php echo $__env->yieldContent('footer'); ?>
<footer>
          <hr />
         <div class="footer-widgets">
          <div class="footer-widget">
          <b><h4>
            <p>
              AsianPaints LLC<br>
              244 5th Avenue<br>
              New York, New York, 10001
            </p>
          </h4></b>
         </div>
        
         <div class="footer-widget">
          <b><h4>Want to start a partnership with us?</h4>
            <h5>
              <p>
              Phone: 646-666-9714<br>
              Fax: 917-398-5032</p>
              <p>Email: info@AsianPaints.com<br>
              Skype: AsianPaintssupport</p>
            </h5>
          </b>
          </div>
       </div>
         <hr />
        <div class="footer-cpyright">
           <p> &copy;1997-2017 AsianPaints, All rights reserved.</p>
        </div>
    </footer>
</body>
    </html><?php /**PATH C:\Users\Dilip\Desktop\Laravel\asianPaints\resources\views/layout.blade.php ENDPATH**/ ?>