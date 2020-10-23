<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us"> 
        <h1 align=center>Teacher Registration Form</h1>
    </head>
<body>


<form action="../Result.php" method-'post'  >
    <table style="width:30%" align=center >

        <tr>
            <td>Name      :</td>
            <td> <input type="text"  ></td>
            
        </tr>
        
        <tr>
            <td>Email      :</td>
            <td><input type="email"  ></td>
        </tr>

        <tr><td><table>
            <tr>
                <b>Date of Birth</b><br>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
            </tr>
        </table></td></tr>

        <tr><td><table >
            <tr>
                <td><label for="gender"> Gender: </label></td>
                <td><input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <td>
            </tr>
        </table></td></tr>

        <tr><td><table >
            <tr>
                <td><label for="blood">Blood Group:</label></td>
                <td><select name="blood" id="blood">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select></td>
            </tr>
        </table></td></tr>

        <tr>
            <td>Contact Number  :</td>
            <td><input type="text"  ></td>
        </tr>

        <tr>
            <td>Address :</td>
            <td><input type="text"   ></td>
        </tr>

        <tr>
            <td>Religion :</td>
            <td><input type="text"   ></td>
        </tr>
        <tr>
            <td>Joining Year :</td>
            <td><input type="text"   ></td>
        </tr>

        <tr><td><table >
            <tr>
                <td><label for="dept"> Department:</label></td>
                <td><select name="dept" id="dept">
                    <option value="CS">CS</option>
                    <option value="EEE">EEE</option>
                    <option value="Math">Math</option>
                    <option value="Englisg">English</option>
                    </select></td>
            </tr>
        </table></td></tr>

        <tr>
            <td>designation :</td>
            <td><input type="text"   ></td>
        </tr>
        <tr>
            <td>working Experience :</td>
            <td><input type="text"   ></td>
        </tr>
        <tr>
            <td>salary :</td>
            <td><input type="text"   ></td>
        </tr>
        <tr>
            <td>Password  :</td>
            <td><input type="password"  ></td>
        </tr>


            <tr><td><table>
                <tr>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </tr>
        </table></td></tr>
    </table>

        
</form>
</body>
</html>