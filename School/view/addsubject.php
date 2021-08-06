<!DOCTYPE html>
 <html>
      <head>
           <h1 align ="center"><u>পাঠ্য বিষয়</u></h1>
           
      </head>
      <body style="background-color:LightGoldenrodYellow">
        <br>
        <br>
      <form action="addsubject.php" method="post">
        <div class="container" style="width:380px;">
          <br>
          <br>
                     <label>বিষয়ের নাম</label>
                     <input style="margin-left:3%;"  type="text" name="subname" class="form-control" required/>
                     <br>
                     <br>
                     <label>শ্রেণী</label>
                     <input style="margin-left:15%;"  type="text" name = "subclass" class="form-control" required/>
                     <br>
                     <br>
                     <br>


     
      
      <button style="margin-left:28%;" type="submit" name="btn_submit" class="btn btn-info"/>যোগ করুন</button>
       </div>
                </form>

           <div align = "left">
           <button style="margin:30px; margin-left:1%;" type="submit" name="button" class="btn btn-info" value = "button" onclick="window.location.href = 'admin_home.php';">Back To Profile</button>
             </div>
      </body>
 </html>
