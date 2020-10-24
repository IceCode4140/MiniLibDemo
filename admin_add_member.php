<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    require_once("adminlogin_check.php");
?>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Register Form</title>
    <script language="javascript">
        function checkForm()
        {
            if(document.form1.name.value == "")
            {
                window.alert("please enter name");
                document.form1.name.focus();
                return false;
            }
            if(document.form1.username.value == "")
            {
                window.alert("please enter username");
                document.form1.username.focus();
                return false;
            }

            if(document.form1.password.value == "")
            {
                window.alert("please enter password");
                document.form1.password.focus();
                return false;
            }
            if ( ( document.form1.gender[0].checked == "" )
            && ( document.form1.gender[1].checked == "" ) )
            {
                window.alert ( "Please choose your Gender: Male or Female" );
                document.form1.gender.focus();
                return false;
            }
            if(document.form1.year.selectedIndex == 0)
            {
                window.alert("please enter birthday-year");
                document.form1.year.focus();
                return false;
            }
            if(document.form1.month.selectedIndex == 0)
            {
                window.alert("please enter birthday-month");
                document.form1.month.focus();
                return false;
            }
            if(document.form1.day.selectedIndex == 0)
            {
                window.alert("please enter birthday-day");
                document.form1.day.focus();
                return false;
            }
            if(document.form1.email.value == "")
            {
                window.alert("please enter email address");
                document.form1.email.focus();
                return false;
            }
            if(!checkemail(document.form1.email))
            {
                document.form1.email.focus();
                return false;
            }
            else 

            return confirm("Submit?");            
        }

        function checkemail(inputText)
        {
          let mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          if(inputText.value.match(mailformat))
          {
            return true;
          }
          else
          {
            window.alert("please enter a valid email address.");
            return false;
          }
        }
    </script>
</head>
<body>
<?php require_once("admin_menu.php");?>
    <div class="box">
        <table style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
            <tr valign="top">
            <td width="600">
                <form name="form1" method="post" action="admin_addmember_action.php" onSubmit="return checkForm()">
                    <h1>New Member Account Registration</h1><br>
                    <hr size="1"><br>
                    <p><strong>Name</strong>:
                        <input type="text" name="name"  minLength="5" maxlength="20" required>
                        <font color="#FF0000">*</font>
                    </p><br>
                    <p><strong>Username</strong>:
                        <input type="text" name="username" minLength="5" maxlength="20" required >
                        <font color="#FF0000">*</font>
                    </p><br>
                    <p><strong>Password</strong>:
                        <input type="password" name="password" minLength="5" maxlength="20" required>
                        <font color="#FF0000">*</font>
                    </p><br>
                    <p><strong>Gender</strong>:
                        <input type="radio" name="gender" value="M">M
                        <input type="radio" name="gender" value="F">F   
                        <font color="#FF0000">*</font>
                    </p><br>
                    <p><strong>Birthday</strong>:
                    <select name="year">
                        <option>- Year -</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                    </select>Year
                    <select name="month">
                        <option>- Month -</option>
                        <option value="1">January</option>
                        <option value="2">Febuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>Month
                    <select name="day">
                    <option>- Day -</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>Day
                    <font color="#FF0000">*</font> <br>
                    </p><br>
                    <p><strong>Email</strong>:
                        <input type="text" name="email">
                        <font color="#FF0000">*</font>
                    </p><br>
                    <hr size="1"><br>
                    <p align="center">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset"  name="reset" value="Reset">
                    </p><br>
                </form>
            </td>
            </tr>
        </table> 
    </div> 
    <script>
        SetActive(document.getElementById("AddMember"));
    </script>
</body>
</html>