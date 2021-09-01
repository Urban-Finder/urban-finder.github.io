
  
function sendEmail() {
	/*Email.send({
    SecureToken : "0e3180c5-858e-4f4a-8340-99ade1c2be37",
	To : 'lopezbarrientosrosadamaris@gmail.com',
	From : "urban.finder.user1@gmail.com",
	Subject : "importante",
	Body : "Esto es un",
	}).then(
		message => alert("mail sent successfully")
	);*/

	var link = "mailto:lopezbarrientosrosadamaris@gmail.com"
             + "?cc=urban.finder.user1@gmail.com"
             + "&subject=" + encodeURIComponent("This is my subject")
             + "&body=" + encodeURIComponent(document.getElementById('myText').value)
    ;
    
    window.location.href = link;
}