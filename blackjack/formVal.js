var formErrors = "";
function cUser(){
	cUserCheck();
	if(formErrors != "")
	{
		alert("You have the following errors: \n" + formErrors);
                return false;
                formErrors = "";
	}
        else
        {
            return true;
        }
	formErrors = "";
}
function cUserCheck()
{
	cuser = document.cUserF.cuser.value;
	cpass = document.cUserF.cpass.value;
	if (cuser == "")
	{
		formErrors += "Please enter a User Name. \n"
	}
	if (cpass == "")
		{
			formErrors +="Please enter a Password. \n"
		}
	
}

var fromErrors = "";
function nUser(){
	nUserCheck();
	if(formErrors != "")
	{
		alert("New: You have the following errors: \n" + formErrors);
                formErrors = "";
                return false;
	}
        else
        {
            return true;
        }
	formErrors = "";
}
function nUserCheck()
{
	nuser = document.nUserF.nuser.value;
	npass = document.nUserF.npass1.value;
        npass2 = document.nUserF.npass2.value;
	if (nuser == "")
	{
		formErrors += "Please enter a User Name. \n"
	}
	if (npass == "" || npass2 == "")
	{
		formErrors +="Please enter a Password. \n"
	}
        if (npass != npass2)
        {
            formErrors +="Please enter the same password for each value. \n"
        }
          
	
}
function admin(){
    aCheck();
	if(formErrors != "")
	{
		alert("You have the following errors: \n" + formErrors);
                formErrors = "";
                return false;
                
	}
        else
        {
            return true;
        }
	formErrors = "";
}
    
function aCheck()
{
	uid = document.adminF.uid.value;
	money = document.adminF.money.value;
        money = parseInt(money);
        adm = document.adminF.adm.value;
        if (adm !== '')
        {
            adm = parseInt(adm);
            if (adm !== 1 && adm !== 0)
            {
                formErrors +="Admin must be a 1 or 0. \n";
            }
        }
	if (uid == "")
	{
		formErrors += "Please enter a uid. \n";
	}
//	if (money == "" || money < 0)
//		{
//			formErrors +="Please make the money greater than 0. \n";
//		}
        
        
	
}