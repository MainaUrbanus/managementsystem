<?php
print <<<EOF
<form action="/handleLogin" method="Get">
<b>E-mail:</b> <br />
<input type="text" id="email" name="email" required="required"/><br />
<b>Password:</b> <br />
<input type="password" id="password" name="password" required="required"/><br />
<input type="submit" id="submit" value="Login"/>
<input type="reset" id="clear" value="Clear"/>
</form>
EOF;
