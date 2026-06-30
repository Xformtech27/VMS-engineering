<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Request Quote</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
    margin:0;
    padding:40px;
}

.container{
    max-width:500px;
    margin:auto;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.1);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

input,
textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:16px;
    box-sizing:border-box;
}

textarea{
    height:120px;
    resize:vertical;
}

button{
    width:100%;
    padding:14px;
    border:none;
    background:#25D366;
    color:#fff;
    font-size:18px;
    cursor:pointer;
    border-radius:5px;
}

button:hover{
    background:#1ebe5d;
}
</style>

</head>
<body>

<div class="container">

<h2>Request Quote</h2>

<form id="quoteForm" action="submit.php" method="POST">

<input
type="text"
name="name"
id="name"
placeholder="Your Name"
required>

<input
type="email"
name="email"
id="email"
placeholder="Your Email"
required>

<input
type="tel"
name="phone"
id="phone"
placeholder="Your Phone Number (Optional)">

<textarea
name="message"
id="message"
placeholder="Describe your requirements"
required></textarea>

<button type="button" onclick="requestQuote()">
Request Quote
</button>

</form>

</div>

<script>

function requestQuote(){

    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let phone=document.getElementById("phone").value;
    let message=document.getElementById("message").value;

    if(name=="" || email=="" || message==""){
        alert("Please fill all required fields.");
        return;
    }

    if(phone.trim()!=""){

        // Replace with your WhatsApp number
        let whatsappNumber="919876543210";

        let text=
`*New Quote Request*

Name: ${name}
Email: ${email}
Phone: ${phone}

Message:
${message}`;

        let url="https://wa.me/"+whatsappNumber+"?text="+encodeURIComponent(text);

        window.open(url,"_blank");

    }else{

        // Submit form normally
        document.getElementById("quoteForm").submit();

    }

}

</script>

</body>
</html>