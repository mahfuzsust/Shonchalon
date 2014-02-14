function formValidation()
{
	var username = document.registration.username;
	var password = document.registration.password;
	var fname = document.registration.fname;
	var presentadd = document.registration.presentadd;
	var email = document.registration.email;
	var msex = document.registration.msex;
	var fsex = document.registration.fsex; 
	if(username_validation(username,6,12))
	{
		if(password_validation(password,7,12))
		{
			if(allLetter(username))
			{
				if(alphanumeric(presentadd))
				{ 
					if(ValidateEmail(email))
					{
						if(validsex(msex,fsex))
						{
						}
					} 
				}
			} 
		}
	}
	return false;
} 

function userid_validation(username,mx,my)
{
	var username_len = username.value.length;
	if (username_len == 0 || username_len >= my || username_len < mx)
	{
		alert("User Id should not be empty / length be between "+mx+" to "+my);
		username.focus();
		return false;
	}
	return true;
}

function password_validation(password,mx,my)
{
	var password_len = password.value.length;
	if (password_len == 0 ||password_len >= my || password_len < mx)
	{
		alert("Password should not be empty / length be between "+mx+" to "+my);
		password.focus();
		return false;
	}
	return true;
}

function allLetter(fname)
{ 
	var letters = /^[A-Za-z]+$/;
	if(fname.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Username must have alphabet characters only');
		fname.focus();
		return false;
	}
}

function alphanumeric(presentadd)
{ 
	var letters = /^[0-9a-zA-Z]+$/;
	if(presentadd.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('User address must have alphanumeric characters only');
		presentadd.focus();
		return false;
	}
}

function ValidateEmail(email)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(mailformat))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		email.focus();
		return false;
	}
} 

function validsex(msex,fsex)
{
	x=0;

	if(msex.checked) 
	{
		x++;
	} 
	if(fsex.checked)
	{
		x++; 
	}
	if(x==0)
	{
		alert('Select Male/Female');
		msex.focus();
		return false;
	}
	else
	{
		alert('Form Succesfully Submitted');
		window.location.reload()
		return true;
	}
}