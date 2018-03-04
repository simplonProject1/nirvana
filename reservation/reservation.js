function toChoose () {

	// changing sections display
	
	document.getElementById("first").style.display = "none";
	document.getElementById("second").style.display = "block";

	// colecting data from the form

	var startingDate = document.forms['firstForm']['startDate'].value;
	var endingDate = document.forms['firstForm']['endDate'].value;
	var destination = document.forms['firstForm']['destination'].value;

	// making calculation based on the imput

	var days = countDays(startingDate, endingDate) + 1;
	var price = days * 1000;

	// adding content on the page

	addContent(startingDate, "addStartDate");
	addContent(endingDate, "addEndDate");
	addContent(destination, "addDestination");
	addContent(days, "days");
	addContent(price, "price");

	// sending input to the final form

	document.forms["finalForm"]["sDateToSubmit"].value = startingDate;
	document.forms["finalForm"]["eDateToSubmit"].value = endingDate;
	document.forms["finalForm"]["destinationToSubmit"].value = destination;

}

function toReserve () {

	document.getElementById("second").style.display = "none";
	document.getElementById("third").style.display = "block";
}

function toConfirm () {

	document.getElementById("third").style.display = "none";
	document.getElementById("fourth").style.display = "block";

	var fname = document.forms['thirdForm']['firstname'].value;
	var lname = document.forms['thirdForm']['lastname'].value;
	var email = document.forms['thirdForm']['email'].value;

	addContent(fname, "addName")
	addContent(email, "addEmail")
	
	document.forms["finalForm"]["fnameToSubmit"].value = fname;	
	document.forms["finalForm"]["lnameToSubmit"].value = lname;
	document.forms["finalForm"]["emailToSubmit"].value = email;
}

function countDays (startingDate, endingDate) {

	var oneDay = 24*60*60*1000; 								

	var date1 = changingDateFormat(startingDate);
	var date2 = changingDateFormat(endingDate);

	var daysDifference = Math.round(Math.abs(date1 - date2)/(oneDay));		// comparing the dates
	return daysDifference;
}

function addContent (whatToAdd, whereToAdd) {

	var tagToAdd = document.createElement("span"); 				// creating a HTML element
	var contentToAdd = document.createTextNode(whatToAdd); 		// preparing content
	tagToAdd.appendChild(contentToAdd); 						// putting content into a HTML tag
	var element = document.getElementById(whereToAdd); 			// pointing out a place where to put a tag
	element.appendChild(tagToAdd); 								// displaing the content on the page
}

function changingDateFormat (date) {
	var changingDate = date.replace(/-/g, ","); 				// input type="date" returns a different format
	var milliseconds = new Date(changingDate); 					// milliseconds since 1 January 1970 UTC
	return milliseconds;
}
