function showpass() {
    var x = document.getElementById("password");
    var y = document.getElementById("regnewpassword");
    var z = document.getElementById("regconfpassword");
    
    
    if (x.type === "password" || 
        y.type === "password" ||
        y.type === "password"
       ) {
        
        x.type = "text";
        y.type = "text";
        z.type = "text";
        
    } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
    }
}