<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js.download"></script>
    <script src="bootstrap/bootstrap.min.js.download"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Q Ctrl-Del</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<body>
<div class="container">
    <div class="row" style="margin-top:100px;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form class="form-login" action="signup.php" method="post">
                <h2 class="form-login-heading" style="margin-left:130px;">Sign up</h2>
                <label for="inputname" class="sr-only">Name</label>
                <input type="text" id="inputname" class="form-control" placeholder="Name" required autofocus name="UserName">
                <br>
                <label for="mobilenumber" class="sr-only">Mobile Number</label>
                <input type="text" id="mobilenumber" class="form-control" placeholder="Mobile Number" required autofocus name="UserMobileNumber">

                <br/> <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="UserEmail">

                <h4>Date of Birth</h4>
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <div class="form-group">
                            <select name="UserDobMonth" class="form-control">
                                <option value="">Month</option>
                                <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select name="UserDobDate" class="form-control">
                            <option value="">Date</option>
                            <option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option><option value="5">5 </option><option value="6">6 </option><option value="7">7 </option><option value="8">8 </option><option value="9">9 </option><option value="10">10 </option><option value="11">11 </option><option value="12">12 </option><option value="13">13 </option><option value="14">14 </option><option value="15">15 </option><option value="16">16 </option><option value="17">17 </option><option value="18">18 </option><option value="19">19 </option><option value="20">20 </option><option value="21">21 </option><option value="22">22 </option><option value="23">23 </option><option value="24">24 </option><option value="25">25 </option><option value="26">26 </option><option value="27">27 </option><option value="28">28 </option><option value="29">29 </option><option value="30">30 </option><option value="31">31 </option>                </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select name="UserDobYear" class="form-control">
                            <option value="0">Year</option>
                            <option value="1955">1955 </option><option value="1956">1956 </option><option value="1957">1957 </option><option value="1958">1958 </option><option value="1959">1959 </option><option value="1960">1960 </option><option value="1961">1961 </option><option value="1962">1962 </option><option value="1963">1963 </option><option value="1964">1964 </option><option value="1965">1965 </option><option value="1966">1966 </option><option value="1967">1967 </option><option value="1968">1968 </option><option value="1969">1969 </option><option value="1970">1970 </option><option value="1971">1971 </option><option value="1972">1972 </option><option value="1973">1973 </option><option value="1974">1974 </option><option value="1975">1975 </option><option value="1976">1976 </option><option value="1977">1977 </option><option value="1978">1978 </option><option value="1979">1979 </option><option value="1980">1980 </option><option value="1981">1981 </option><option value="1982">1982 </option><option value="1983">1983 </option><option value="1984">1984 </option><option value="1985">1985 </option><option value="1986">1986 </option><option value="1987">1987 </option><option value="1988">1988 </option><option value="1989">1989 </option><option value="1990">1990 </option><option value="1991">1991 </option><option value="1992">1992 </option><option value="1993">1993 </option><option value="1994">1994 </option><option value="1995">1995 </option><option value="1996">1996 </option><option value="1997">1997 </option><option value="1998">1998 </option><option value="1999">1999 </option><option value="2000">2000 </option><option value="2001">2001 </option><option value="2002">2002 </option><option value="2003">2003 </option><option value="2004">2004 </option><option value="2005">2005 </option><option value="2006">2006 </option>                </select>
                    </div>
                </div>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="UserPassword">
                <label class="radio-inline">
                    <input type="radio" name="UserGender" id="inlineCheckbox1" value="male">
                    Male
                </label>

                <label class="radio-inline">
                    <input type="radio" name="UserGender" id="inlineCheckbox2" value="female">
                    Female
                </label>
                <br/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                <input type="hidden" value="task" name="controller">
                <input type="hidden" value="register" name="function">
            </form>
        </div>
        <div class="col-sm-4">







        </div>
    </div>
</div>
</body>
</html>