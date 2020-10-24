<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
   
   // confirm if login before
    require_once("memberlogin_check.php");
    $username = $_SESSION['username'];
    
    
    $sql = "SELECT * ,Year(birthday) as year , Month(birthday) as month, 
            Day(birthday) as day FROM members WHERE username = '$username'"; 

    $result = mysqli_query($db,$sql) or die (mysqli_error($db));
    $row = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Profile</title>
    <script language="javascript">
         function checkForm()
        {
            if(document.form1.name.value == "")
            {
                window.alert("please enter name");
                document.form1.name.focus();
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
<?php require_once("member_menu.php");?>
    <div class="box">
        <table style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
            <tr valign="top">
            <td width="600">
            <form name="form1" method="post" action="member_update.php" onSubmit="return checkForm()">
            <h1>Update Member Profile</h1>
            <div>
                    <hr size="1"><br>            
                    <p><strong>Name</strong>:
                        <input type="text" name="name" minLength="5" maxlength="20" required
                        value="<?php echo $row["name"];?>">
                        <font color="#FF0000">*</font>
                    </P><br>
                    <p><strong>Gender</strong>:
                        <input type="radio" name="gender" value="M" 
                        <?php if($row["gender"]=="M") echo "checked";?>>M
                        <input type="radio" name="gender" value="F" 
                        <?php if($row["gender"]=="F") echo "checked";?>>F                     
                        <font color="#FF0000">*</font>
                    </p><br>
                    <p><strong>Birthday</strong>:
                        <select name="year">
                            <option>- Year -</option>
                            <option <?php if($row["year"] =="2020") echo"selected";?>>2020</option>
                            <option <?php if($row["year"] =="2019") echo"selected";?>>2019</option>
                            <option <?php if($row["year"] =="2018") echo"selected";?>>2018</option>
                            <option <?php if($row["year"] =="2017") echo"selected";?>>2017</option>
                            <option <?php if($row["year"] =="2016") echo"selected";?>>2016</option>
                            <option <?php if($row["year"] =="2015") echo"selected";?>>2015</option>
                            <option <?php if($row["year"] =="2014") echo"selected";?>>2014</option>
                            <option <?php if($row["year"] =="2013") echo"selected";?>>2013</option>
                            <option <?php if($row["year"] =="2012") echo"selected";?>>2012</option>
                            <option <?php if($row["year"] =="2011") echo"selected";?>>2011</option>
                            <option <?php if($row["year"] =="2010") echo"selected";?>>2010</option>
                            <option <?php if($row["year"] =="2009") echo"selected";?>>2009</option>
                            <option <?php if($row["year"] =="2008") echo"selected";?>>2008</option>
                            <option <?php if($row["year"] =="2007") echo"selected";?>>2007</option>
                            <option <?php if($row["year"] =="2006") echo"selected";?>>2006</option>
                            <option <?php if($row["year"] =="2005") echo"selected";?>>2005</option>
                            <option <?php if($row["year"] =="2004") echo"selected";?>>2004</option>
                            <option <?php if($row["year"] =="2003") echo"selected";?>>2003</option>
                            <option <?php if($row["year"] =="2002") echo"selected";?>>2002</option>
                            <option <?php if($row["year"] =="2001") echo"selected";?>>2001</option>
                            <option <?php if($row["year"] =="2000") echo"selected";?>>2000</option>
                            <option <?php if($row["year"] =="1999") echo"selected";?>>1999</option>
                            <option <?php if($row["year"] =="1998") echo"selected";?>>1998</option>
                            <option <?php if($row["year"] =="1997") echo"selected";?>>1997</option>
                            <option <?php if($row["year"] =="1996") echo"selected";?>>1996</option>
                            <option <?php if($row["year"] =="1995") echo"selected";?>>1995</option>
                            <option <?php if($row["year"] =="1994") echo"selected";?>>1994</option>
                            <option <?php if($row["year"] =="1993") echo"selected";?>>1993</option>
                            <option <?php if($row["year"] =="1992") echo"selected";?>>1992</option>
                            <option <?php if($row["year"] =="1991") echo"selected";?>>1991</option>
                            <option <?php if($row["year"] =="1990") echo"selected";?>>1990</option>
                            <option <?php if($row["year"] =="1989") echo"selected";?>>1989</option>
                            <option <?php if($row["year"] =="1988") echo"selected";?>>1988</option>
                            <option <?php if($row["year"] =="1987") echo"selected";?>>1987</option>
                            <option <?php if($row["year"] =="1986") echo"selected";?>>1986</option>
                            <option <?php if($row["year"] =="1985") echo"selected";?>>1985</option>
                            <option <?php if($row["year"] =="1984") echo"selected";?>>1984</option>
                            <option <?php if($row["year"] =="1983") echo"selected";?>>1983</option>
                            <option <?php if($row["year"] =="1982") echo"selected";?>>1982</option>
                            <option <?php if($row["year"] =="1981") echo"selected";?>>1981</option>
                            <option <?php if($row["year"] =="1980") echo"selected";?>>1980</option>
                            <option <?php if($row["year"] =="1979") echo"selected";?>>1979</option>
                            <option <?php if($row["year"] =="1978") echo"selected";?>>1978</option>
                            <option <?php if($row["year"] =="1977") echo"selected";?>>1977</option>
                            <option <?php if($row["year"] =="1976") echo"selected";?>>1976</option>
                            <option <?php if($row["year"] =="1975") echo"selected";?>>1975</option>
                            <option <?php if($row["year"] =="1974") echo"selected";?>>1974</option>
                            <option <?php if($row["year"] =="1973") echo"selected";?>>1973</option>
                            <option <?php if($row["year"] =="1972") echo"selected";?>>1972</option>
                            <option <?php if($row["year"] =="1971") echo"selected";?>>1971</option>
                            <option <?php if($row["year"] =="1970") echo"selected";?>>1970</option>
                            <option <?php if($row["year"] =="1969") echo"selected";?>>1969</option>
                            <option <?php if($row["year"] =="1968") echo"selected";?>>1968</option>
                            <option <?php if($row["year"] =="1967") echo"selected";?>>1967</option>
                            <option <?php if($row["year"] =="1966") echo"selected";?>>1966</option>
                            <option <?php if($row["year"] =="1965") echo"selected";?>>1965</option>
                            <option <?php if($row["year"] =="1964") echo"selected";?>>1964</option>
                            <option <?php if($row["year"] =="1963") echo"selected";?>>1963</option>
                            <option <?php if($row["year"] =="1962") echo"selected";?>>1962</option>
                            <option <?php if($row["year"] =="1961") echo"selected";?>>1961</option>
                            <option <?php if($row["year"] =="1960") echo"selected";?>>1960</option>
                        </select>Year   
                        <select name="month">
                            <option>- Month -</option>
                            <option <?php if($row["month"]=="1") echo "selected";?>>1</option>
                            <option <?php if($row["month"]=="2") echo "selected";?>>2</option>
                            <option <?php if($row["month"]=="3") echo "selected";?>>3</option>
                            <option <?php if($row["month"]=="4") echo "selected";?>>4</option>
                            <option <?php if($row["month"]=="5") echo "selected";?>>5</option>
                            <option <?php if($row["month"]=="6") echo "selected";?>>6</option>
                            <option <?php if($row["month"]=="7") echo "selected";?>>7</option>
                            <option <?php if($row["month"]=="8") echo "selected";?>>8</option>
                            <option <?php if($row["month"]=="9") echo "selected";?>>9</option>
                            <option <?php if($row["month"]=="10") echo "selected";?>>10</option>
                            <option <?php if($row["month"]=="11") echo "selected";?>>11</option>
                            <option <?php if($row["month"]=="12") echo "selected";?>>12</option>
                        </select>Month
                        <select name="day">
                        <option>- Day -</option>
                        <option <?php if($row["day"]=="1") echo "selected";?>>1</option>
                        <option <?php if($row["day"]=="2") echo "selected";?>>2</option>
                        <option <?php if($row["day"]=="3") echo "selected";?>>3</option>
                        <option <?php if($row["day"]=="4") echo "selected";?>>4</option>
                        <option <?php if($row["day"]=="5") echo "selected";?>>5</option>
                        <option <?php if($row["day"]=="6") echo "selected";?>>6</option>
                        <option <?php if($row["day"]=="7") echo "selected";?>>7</option>
                        <option <?php if($row["day"]=="8") echo "selected";?>>8</option>
                        <option <?php if($row["day"]=="9") echo "selected";?>>9</option>
                        <option <?php if($row["day"]=="10") echo "selected";?>>10</option>
                        <option <?php if($row["day"]=="11") echo "selected";?>>11</option>
                        <option <?php if($row["day"]=="12") echo "selected";?>>12</option>
                        <option <?php if($row["day"]=="13") echo "selected";?>>13</option>
                        <option <?php if($row["day"]=="14") echo "selected";?>>14</option>
                        <option <?php if($row["day"]=="15") echo "selected";?>>15</option>
                        <option <?php if($row["day"]=="16") echo "selected";?>>16</option>
                        <option <?php if($row["day"]=="17") echo "selected";?>>17</option>
                        <option <?php if($row["day"]=="18") echo "selected";?>>18</option>
                        <option <?php if($row["day"]=="19") echo "selected";?>>19</option>
                        <option <?php if($row["day"]=="20") echo "selected";?>>20</option>
                        <option <?php if($row["day"]=="21") echo "selected";?>>21</option>
                        <option <?php if($row["day"]=="22") echo "selected";?>>22</option>
                        <option <?php if($row["day"]=="23") echo "selected";?>>23</option>
                        <option <?php if($row["day"]=="24") echo "selected";?>>24</option>
                        <option <?php if($row["day"]=="25") echo "selected";?>>25</option>
                        <option <?php if($row["day"]=="26") echo "selected";?>>26</option>
                        <option <?php if($row["day"]=="27") echo "selected";?>>27</option>
                        <option <?php if($row["day"]=="28") echo "selected";?>>28</option>
                        <option <?php if($row["day"]=="29") echo "selected";?>>29</option>
                        <option <?php if($row["day"]=="30") echo "selected";?>>30</option>
                        <option <?php if($row["day"]=="31") echo "selected";?>>31</option>              
                        </select>Day
                        <font color="#FF0000">*</font> <br>
                    </p><br>
                    <p><strong>Email</strong>:
                        <input type="text" name="email" value="<?php echo $row["email"];?>">
                        <font color="#FF0000">*</font>
                    </p><br>
                </div>
                    <hr size="1"/><br>
                        <p align="center">
                            <input name="id" type="hidden" value="<?php echo $row["Member_ID"];?>">
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </p><br>
            </form>
            </td>
            </tr>
        </table>
    </div>
    <script>
        SetActive(document.getElementById("Profile"));
    </script>
</body>
</html>
    