
<!DOCTYPE html>
<html>
<head>   <style>

    .col1{ height: 100%;
    width: 100%;
    overflow: hidden;
    position: fixed;
    left:0px;
    top:0px;
    }
    
    .col2{ height: 100%;
    width: 100%;
    position: fixed;
    left:373px;
    top:0px;
    background-color: #f1f1f1;
    }
    .sidenav {
      background-color: #0F2027;
      height: 100%;
    }
    
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0}
nav{display:block}
a{background-color:transparent;text-decoration:none;}a:active,a:hover{outline:0}

.col1_rows{position:relative;min-height:1px;padding-right:15px;padding-left:15px}
.col1_rows{float:left}
.col1_rows{width:25%}

.nav{padding-left:0;margin-bottom:0;list-style:none}
.nav>li{position:relative;display:block}
.nav>li>a{position:relative;display:block;padding:10px 15px}
.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}

.nav-pills>li{float:left}
.nav-pills>li>a{border-radius:4px}
.nav-pills>li+li{margin-left:2px}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}
.nav-stacked>li{float:none}
.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}
table, th, td {
  border: none;
  border-collapse: collapse;
}
td {
  border-left:1px solid #f1f1f1; 
  border-top: 10px solid #f1f1f1; 
}
th, td {
  padding: 15px;
}
th {
  text-align: left; 
}
table {
  border-spacing: 5px;
}

  </style></head>
<body>
 
  <div class="col1">
    <div class="col1_rows sidenav">
      <h4 style="color: white;">Dashboard</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
      </ul>
    </div>
</div>
    <div class="col2">
      <br>
    <table style="width:1000px">

        <tr>
          <th>Customer Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Quantity Ordered</th>
          <th>PinCode</th>
          <th>City</th>
        </tr>

       
            @foreach($customers as $customer)
               <tr class="card"><div >
                  <td> {{ $customer->name }}</td>
                  <td> {{ $customer->email }}</td>
                  <td> {{ $customer->phoneNum }}</td>
                  <td> {{ $customer->quantity}}</td>
                  <td> {{ $customer->pinCode }}</td>
                  <td> {{ $customer->city }}</td>

               </div></tr>
             
            @endforeach
        
     </table>
     </div> 
</body>
</html>