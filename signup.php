<?php include("top.html"); ?>

<form action="signup-submit.php" method="post">
    <div>
        Name: <br />
        <input type="text" name="name" size="16" />
    </div>

    <div>
        Age: <br />
        <input type="text" name="age" size="5" />
    </div>

    <div>
        Gender: <br />
        <label><input type="radio" name="gender" /> Male</label>
        <label><input type="radio" name="gender" checked="checked" /> Female</label>
    </div>

    <div>
        Keirsey personality type
        (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>): <br />
        <input type="text" size="5" name="personality_type"maxlength="4" />
    </div>

    <div>
        Favorite operating system: <br />
        <select name="os">
            <option>Windows</option>
            <option>Mac OS X</option>
            <option>Linux</option>
            <option>other</option>
        </select>
    </div>

    <div>
        Seeking: <br/>
        <label><input type="checkbox"  name="min_age"checked="checked"/> Male</label>
        <label><input type="checkbox" name="max_age"/> Female</label>
    </div>

    <div>
        Between the ages of: <br />
        <input type="text" size="5" maxlength="2" /> and
        <input type="text" size="5" maxlength="2" />
    </div>

    <div>
        <input type="submit" value="Sign Up!">
    </div>
</form>

<?php include("bottom.html"); ?>