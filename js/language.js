/*********************************************************************************
* language.js                                                                    *
*                                                                                *
* -Handles the language selection.                                               *
* -If no selection -> geolocalisation to force a default language.               *
* -Language can be changed at any time from the navbar.                          *
*                                                                                *
*********************************************************************************/

// Save current language setting to a cookie
function set_lang(lang)
{	
	var d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "language=" + lang + ";" + expires + ";path=/; secure";
	display_lang(lang);
}

// Retrieve current language setting
function get_lang()
{	
    var name = "language=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i <  ca.length; i++) 
	{
        var c = ca[i];
        while (c.charAt(0) == " ") 
		{
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) 
		{
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Check if the language cookie is set
function check_lang() 
{
    var lang = get_lang();
    if (lang == "") 
	{
        return false;
    } 
    return true;
}

// Display selected language
function display_lang(lang) {
	
	if (lang == "en")
	{
	    $('[lang="en"]').show();
		$('[lang="fr"]').hide();
	}
	else 
	{
		$('[lang="en"]').hide();
		$('[lang="fr"]').show();
	}
}

// New page request language algorithm
function lang_select() 
{
	// No langugage is selected -> set default language
	if (check_lang() == false)
	{
		// Set language cookie as default language
		set_lang("fr");
	}
	else 
	{
		// Get the selected language and display
		set_lang(get_lang());
	}	
}