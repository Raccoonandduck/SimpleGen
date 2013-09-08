function switchHiddenF(element)
{
	element = document.getElementById(element);
	if(element.hidden==true)
	element.hidden = false;
	else
	element.hidden = true;
}