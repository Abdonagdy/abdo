<?php
          include_once('signupuser.php');

         ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

   if(document.form1.name.value=="")
  {
    alert("Please Enter Your Name");
	document.form1.name.focus();
	return false;
  }

 if(document.form1.pass.value==""||document.form1.pass.value=="*"||document.form1.pass.value=="-")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
    

      }
    
  
</script>  
<link rel="stylesheet" href="main2.css"/>

</head>

<body>
        <h2 class="h">Thank You For visited My Wep Page Full The Form to start Exam </h2>
 <table  class="s">
   <tr>
     <td ><h1>
         Sign Up</h1></td>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="signup.php" onSubmit="return check();">
                <table class="s1">
            <tr>
           <td>Name</td>
           <td><input name="name" type="text" id="name" value="<?php echo $username?>"></td>
         </tr>
        
          <tr>
           <td >Password</td>
           <td><input type="password" name="pass" ></td>
         </tr>
         <tr>
           <td >Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
  
         <tr>
           <td  >E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
           <tr>
             <td ><a href="login.php">Login</a></td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
    

</body>
</html>