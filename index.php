<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="My blog form" content="form of my professional blog"/>
    <link rel="stylesheet" href="styles.css"/>
    <script src="https://kit.fontawesome.com/fd32bd8604.js" crossorigin="anonymous"></script>
    <title>My blog form</title>
  </head>

  <body>

    <form 
    class="formContainer" 
    method="get"
    action="data_base.php">

        <img src="icon.png" />
        <h1 class="titleForm">My Blog's Form</h1>

        <label class="labelItem">Country: </label>
        <select 
        id="countryList" 
        name="countryList">
        </select>

        <label class="labelItem">Age: </label>
        <input 
        type="text" 
        id="age" 
        name="age" 
        autocomplete="off"/>

        <label class="labelItem">Gender: </label>
        <select 
        id="gender" 
        name="gender">
          <option selected></option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>

        <label class="labelItem">Education: </label>
        <select 
        id="education" 
        name="education">
          <option selected></option>
          <option value="Elementary">Elementary</option>
          <option value="High School">High School</option>
          <option value="College">College</option>
          <option value="Bachelors Degree">Bachelor's Degree</option>
          <option value="Masters Degree">Master's Degree</option>
          <option value="Other">Other</option>
        </select>

        <label class="labelItem">Work area: </label>
        <select 
        id="work" 
        name="work">
          <option selected></option>
          <option value="Student">Student</option>
          <option value="Education">Education</option>
          <option value="Administrative">Administrative</option>
          <option value="Engineering">Engineering</option>
          <option value="Web development">Web development</option>
          <option value="Other">Other</option>
        </select>

        <label class="labelItem">Rate my web: </label>
        <select 
        id="rate" 
        name="rate"
        onfocus="this.size=5">
          <option selected></option>
          <option value= 1>1</option>
          <option value= 2>2</option>
          <option value= 3>3</option>
          <option value= 4>4</option>
          <option value= 5>5</option>
          <option value= 6>6</option>
          <option value= 7>7</option>
          <option value= 8>8</option>
          <option value= 9>9</option>
          <option value= 10>10</option>
        </select>

        <input 
        type="submit" 
        id="submit" 
        name="submit" 
        value="Submit">

    </form>

    <script src="country_list.js"></script>

  </body>

</html>