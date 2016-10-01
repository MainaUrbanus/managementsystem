<?php
print <<<EOF
<form>
<b>First Name:</b> <br />
<input type="text" id="firstname" name="firstname" required="required"/><br />
<b>Last Name:</b> <br />
<input type="text" id="lastname" name="lastname" required="required"/><br />
<b>E-mail:</b> <br />
<input type="text" id="email" name="email" required="required"/><br />
<b>Password:</b> <br />
<input type="password" id="password" name="password" required="required"/><br />
<b>Confirm Password:</b> <br />
<input type="password" id="password2" name="password2" required="required"/><br />
<input type="submit" id="submit" value="Register"/>

</form>
EOF;

