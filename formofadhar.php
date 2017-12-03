<html>
  <head>
      <?php
      include_once('bootstrap.php')

      ?>
</head>      
    <body>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
      <form class="form-login" action="aadharregistration.php" method="post" enctype="multipart/form-data">
        <h2 class="form-login-heading" style="margin-left:90px;">Adhar Form</h2>
          <label for="inputname" class="sr-only">Name</label>
        <input type="text" id="inputname" class="form-control" placeholder="Name" required autofocus name="ClientName">
          <br>
            <h5>Date of Birth</h5>
           <div class="row">
                <div class="col-xs-4 col-md-4">
                   <div class="form-group">
                <select name="ClientDobMonth" class="form-control">
                  <option value="">Month</option>
                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select name="ClientDobDate" class="form-control">
                  <option value="">Date</option>
                  <option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option><option value="5">5 </option><option value="6">6 </option><option value="7">7 </option><option value="8">8 </option><option value="9">9 </option><option value="10">10 </option><option value="11">11 </option><option value="12">12 </option><option value="13">13 </option><option value="14">14 </option><option value="15">15 </option><option value="16">16 </option><option value="17">17 </option><option value="18">18 </option><option value="19">19 </option><option value="20">20 </option><option value="21">21 </option><option value="22">22 </option><option value="23">23 </option><option value="24">24 </option><option value="25">25 </option><option value="26">26 </option><option value="27">27 </option><option value="28">28 </option><option value="29">29 </option><option value="30">30 </option><option value="31">31 </option>                </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select name="ClientDobYear" class="form-control">
                  <option value="0">Year</option>
                  <option value="1955">1955 </option><option value="1956">1956 </option><option value="1957">1957 </option><option value="1958">1958 </option><option value="1959">1959 </option><option value="1960">1960 </option><option value="1961">1961 </option><option value="1962">1962 </option><option value="1963">1963 </option><option value="1964">1964 </option><option value="1965">1965 </option><option value="1966">1966 </option><option value="1967">1967 </option><option value="1968">1968 </option><option value="1969">1969 </option><option value="1970">1970 </option><option value="1971">1971 </option><option value="1972">1972 </option><option value="1973">1973 </option><option value="1974">1974 </option><option value="1975">1975 </option><option value="1976">1976 </option><option value="1977">1977 </option><option value="1978">1978 </option><option value="1979">1979 </option><option value="1980">1980 </option><option value="1981">1981 </option><option value="1982">1982 </option><option value="1983">1983 </option><option value="1984">1984 </option><option value="1985">1985 </option><option value="1986">1986 </option><option value="1987">1987 </option><option value="1988">1988 </option><option value="1989">1989 </option><option value="1990">1990 </option><option value="1991">1991 </option><option value="1992">1992 </option><option value="1993">1993 </option><option value="1994">1994 </option><option value="1995">1995 </option><option value="1996">1996 </option><option value="1997">1997 </option><option value="1998">1998 </option><option value="1999">1999 </option><option value="2000">2000 </option><option value="2001">2001 </option><option value="2002">2002 </option><option value="2003">2003 </option><option value="2004">2004 </option><option value="2005">2005 </option><option value="2006">2006 </option>                </select>
                </div>
            </div>
         
          <h5>Gender</h5>
       
          <label class="radio-inline">
                <input type="radio" name="ClientGender" id="inlineCheckbox1" value="male">
                Male
            </label>
          
          
         <label class="radio-inline">
                <input type="radio" name="ClientGender" id="inlineCheckbox2" value="female">
                Female
            </label>
          <br>
          
              <label for="inputname" class="sr-only">Fathers Name</label>
        <input type="text" id="inputname" class="form-control" placeholder="Fathers Name" required autofocus name="ClientFatherName">
       <br>
          
          <label for="inputadd" class="sr-only">Address</label>
        <input type="text" id="inputadd" class="form-control" placeholder="Address" required autofocus name="ClientAddress">
          <br>
          <h5>Address proof</h5>
          
           <label for="inputadd" class="sr-only">Address</label>
        <input type="file" id="inputaddproof" class="form-control" placeholder="Attachfile" required autofocus name="ClientAddressProof">
          
          <br>
          
          
          <label for="inputmob" class="sr-only">Mobile No.</label>
        <input type="text" id="inputmob" class="form-control" placeholder="Mobile no." required autofocus name="ClientMobileNumber">
           <br>
          <label for="inputemail" class="sr-only">Email Address</label>
          <input type="email" id="inputemail" class="form-control" placeholder="Email Address" name="ClientEmail">
          <br>
          
            <label for="inputname" class="sr-only">Pincode</label>
        <input type="text" id="inputname" class="form-control" placeholder="Pincode" required autofocus name="ClientPincode">
       <br>
            <label for="inputname" class="sr-only">City</label>
        <input type="text" id="inputname" class="form-control" placeholder="City" required autofocus name="ClientCity">
       <br>
            <label for="inputname" class="sr-only">State</label>
        <input type="text" id="inputname" class="form-control" placeholder="State" required autofocus name="ClientState">
       <br>
        <h5>Your Photo</h5>
           <label for="inputname" class="sr-only">Photo</label>
        <input type="file" id="inputaddproof" class="form-control" placeholder="Attachfile" required autofocus name="ClientImage">
          <br>
          <input type="hidden" name="controller" value="task">
          <input type="hidden" name="function" value="aadharregistration">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>
    </div>
        <div class="col-sm-4">
        </div>
    </div>
    </div>
    </body>
</html>