const maincategoriesd = document.getElementById("maincategories");
        const studentdiv = document.getElementById("studentdiv");
       const studentdiva=document.getElementById("studentdiva");
       const studentdivb=document.getElementById("studentdivb");

        maincategoriesd.addEventListener("change",function(){
            const selectcategories = maincategoriesd.value;

            if(selectcategories === "student"){
                studentdiv.style.display="";
                studentdiva.style.display="";
                studentdivb.style.display="";

            }
            else{
                studentdiv.style.display = "none";
                
            }
        });