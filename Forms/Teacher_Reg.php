<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us">
        <h1>Web University Bangladesh</h1>
    </head>
    <body>
        <fieldset style="width:40%" >
            <legend><b>Teacher Registration</b></legend>
            <form action="../Result.php" metdod='post'  >
                <table align=center >
                    <tr>
                        <td>Name </td>
                        <td> :   <input type="text"  ></td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>:   <input type="email"  ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="birtdday">Date of Birth</label>
                        </td>
                        <td> 
                            :   <input type="date" id="birtdday" name="birtdday">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender"> Gender  </label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        <td>
                    </tr>
                    <tr>
                        <td><label for="blood">Blood Group:</label></td>
                        <td>
                            : 
                            <select name="blood" id="blood">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Contact Number  </td>
                        <td>:   <input type="text"  ></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td>Religion </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td>Joining Year </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td><label for="dept"> Department:</label></td>
                        <td>
                            : 
                            <select name="dept" id="dept">
                                <option value="CS">CS</option>
                                <option value="EEE">EEE</option>
                                <option value="Matd">Matd</option>
                                <option value="Englisg">English</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td>Working Experience </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td>Salary </td>
                        <td>:   <input type="text"   ></td>
                    </tr>
                    <tr>
                        <td>Password  </td>
                        <td>:   <input type="password"  ></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>