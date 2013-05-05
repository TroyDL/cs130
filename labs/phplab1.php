<html><head>TDL - PHP Lab 1</head>
<title>PHP Lab 1 - Troy Lonie</title>
<br>
<body>
<h1>Here I will test out some form tags and get ready for php.</h1>
<p>
<fieldset>
  <legend>Post Test</legend>
  <form name="input" action="echo.php" method="post">
    <label>First Name:</label> <input type="text" name="firstname"><br>
    <label>Last Name:</label> <input type="text" name="lastname"> <br>
    <label>Secret Stuff:</label> <input type="password" name="pwd1"> <br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    What operating systems are you familiar with?<br>
    <input type="checkbox" name="os" value="OSX">OSX<br>
    <input type="checkbox" name="os" value="Windows">Windows<br>
    <input type="checkbox" name="os" value="Linux">Linux<br>
    <input type="checkbox" name="os" value="Other">Other
    <input type="text" name="other_os"><br>

    <label>What is your favorite operating system?</label><br>
    <select multiple name="fav_os">
      <optgroup label="OSX">
        <option value="Snow Leopard">Snow Leopard</option>
        <option value="Lion">Lion</option>
        <option value="Mountain Lion">Mountain Lion</option>
      </optgroup>
      <optgroup label="Windows">
        <option value="Windows 7">Windows 7</option>
        <option value="Windows 8">Windows 8</option>
      </optgroup>
      <optgroup label="Linux">
        <option value="Ubuntu">Ubuntu</option>
        <option value="Arch">Arch</option>
        <option value="Debian">Debian</option>
      </optgroup>
      <optgroup label="Other">
        <option value="Other Unix">Other Unix</option>
        <option value="Other Linux">Other Linux</option>
        <option value="Other Other">Other Other</option>
      </optgroup>
    </select>
      <br>
    What programming languages are you familiar with?<br>
    <input type="checkbox" name="languages[]" value="C">C<br>
    <input type="checkbox" name="languages[]" value="C++">C++<br>
    <input type="checkbox" name="languages[]" value="Python">Python<br>
    <input type="checkbox" name="languages[]" value="Java">Java<br>
    <input type="checkbox" name="languages[]" value="Ruby">Ruby<br>
    <input type="checkbox" name="languages[]" value="PHP">PHP<br>
    <input type="checkbox" name="languages[]" value="Objective-C">Objective-C<br>
    <input type="checkbox" name="languages[]" value="C#">C#<br>

    <label>What is your favorite language?</label><br>
    <select name="Favorite Language">
      <option value="C">C</option>
      <option value="C++">C++</option>
      <option value="Python">Python</option>
      <option value="Java">Java</option>
      <option value="Ruby">Ruby</option>
      <option value="PHP">PHP</option>
      <option value="Objective-C">Objective-C</option>
      <option value="C#">C#</option>
      <option value="Other">Other</option>
    </select><br>

    Enter comments here:<br>
    <textarea rows="4" cols="50" name="comments"> </textarea><br>
    <input type="submit" value="Submit"><br>
    <input type="reset" value="Reset Form"><br>
    <input type="text" name="relocation" value="Enter URL Here">
  </form>
</fieldset>
<fieldset>
  <legend>Get Test</legend>
  <form name="input2" action="http://mulan.csufresno.edu/~twilson/echo.php" method="get">
    <label>First Name:</label> <input type="text" name="firstname"><br>
    <label>Last Name:</label> <input type="text" name="lastname"> <br>
    <label>Secret Stuff:</label> <input type="password" name="pwd1"> <br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    What operating systems are you familiar with?<br>
    <input type="checkbox" name="os" value="OSX">OSX<br>
    <input type="checkbox" name="os" value="Windows">Windows<br>
    <input type="checkbox" name="os" value="Linux">Linux<br>
    <input type="checkbox" name="os" value="Other">Other
    <input type="text" name="other_os"><br>

    <label>What is your favorite operating system?</label><br>
    <select multiple name="fav_os">
      <optgroup label="OSX">
        <option value="Snow Leopard">Snow Leopard</option>
        <option value="Lion">Lion</option>
        <option value="Mountain Lion">Mountain Lion</option>
      </optgroup>
      <optgroup label="Windows">
        <option value="Windows 7">Windows 7</option>
        <option value="Windows 8">Windows 8</option>
      </optgroup>
      <optgroup label="Linux">
        <option value="Ubuntu">Ubuntu</option>
        <option value="Arch">Arch</option>
        <option value="Debian">Debian</option>
      </optgroup>
      <optgroup label="Other">
        <option value="Other Unix">Other Unix</option>
        <option value="Other Linux">Other Linux</option>
        <option value="Other Other">Other Other</option>
      </optgroup>
    </select>
      <br>
    What programming languages are you familiar with?<br>
    <input type="checkbox" name="languages[]" value="C">C<br>
    <input type="checkbox" name="languages[]" value="C++">C++<br>
    <input type="checkbox" name="languages[]" value="Python">Python<br>
    <input type="checkbox" name="languages[]" value="Java">Java<br>
    <input type="checkbox" name="languages[]" value="Ruby">Ruby<br>
    <input type="checkbox" name="languages[]" value="PHP">PHP<br>
    <input type="checkbox" name="languages[]" value="Objective-C">Objective-C<br>
    <input type="checkbox" name="languages[]" value="C#">C#<br>

    <label>What is your favorite language?</label><br>
    <select name="Favorite Language">
      <option value="C">C</option>
      <option value="C++">C++</option>
      <option value="Python">Python</option>
      <option value="Java">Java</option>
      <option value="Ruby">Ruby</option>
      <option value="PHP">PHP</option>
      <option value="Objective-C">Objective-C</option>
      <option value="C#">C#</option>
      <option value="Other">Other</option>
    </select><br>

    Enter comments here:<br>
    <textarea rows="4" cols="50" name="comments"> </textarea><br>
    <input type="submit" value="Submit"><br>
    <input type="reset" value="Reset Form"><br>
    <input type="text" name="relocation" value="Enter URL Here">
  </form>
</fieldset>
</p>




</body>
</html>
