<?php include("top.html"); ?>

<form action="signup-submit.php" method="post">
    <div>
        Name: <br />
        <input type="text" size="16" />
    </div>

    <div>
        Name: <br />
        <input type="text" size="16" />
    </div>

    <div>
        Age: <br />
        <input type="text" size="5" />
    </div>

    <div>
        Gender: <br />
        <label><input type="radio" /> Male</label>
        <label><input type="radio" checked="checked" /> Female</label>
    </div>

    <div>
        Keirsey personality type
        (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>): <br />
        <input type="text" size="5" maxlength="4" />
    </div>

    <div>
        Favorite operating system: <br />
        <select>
            <option>Windows</option>
            <option>Mac OS X</option>
            <option>Linux</option>
            <option>other</option>
        </select>
    </div>

    <div>
        Seeking: <br/>
        <label><input type="checkbox" checked="checked"/> Male</label>
        <label><input type="checkbox"/> Female</label>
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