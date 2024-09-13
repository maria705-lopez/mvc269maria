let registerUsers = async () => {
    let = frm = document.getElementById("frm");
    let = url = frm.getAttribute("action");

    let name = document.getElementById("name").value;
    let apellido = document.getElementById("apellido").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let photo =  document.getElementById("photo").files[0];
 
    let data = new FormData();
    data.append("name", name);
    data.append("apellido", apellido);
    data.append("email", email);
    data.append("password", password);
    data.append("photo",  photo);
   
 let request = await fetch(url, {
        method: "POST",
        body: data
    });

    let response =  await request.json();
    
    frm.reset();
    Swal.fire({
        title: response["message"],
        text: "",
        icon: "success"
      });
 
      
    
}
let deleteusers = async(reference) =>{
    let uid = reference.getAttribute("data-id");
    Swal.fire({
        title: "¿Esta seguro de borrar este registro?",
        text: "Una vez eliminado no puede revertir el proceso!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, eliminalo!",
        cancelButtonText: "Cancelar",
    
      }).then((result) => {
        if (result.isConfirmed) {
            deletConfirm(uid,reference);
      }
      });
}

    
let deletConfirm = async(uid,reference) => {
    let request = await fetch('?controller=users&action=delete&uid='+uid);
    let response = await request.json();
    let row = reference.parentElement.parentElement;
    if(response["status"]==1){
        if(row)
            row.remove();
    }
        

    
   Swal.fire({
        title: response["message"],
        text: "",
        icon: response["icon"]
      });
} 
let validate = async()=>{
    let frm = document.getElementById("frm");
    let url = frm.getAttribute("action");

    let nombreusu = document.getElementById("nombreusu").value;
    let contrausu = document.getElementById("contrausu").value;
    if(nombreusu.trim()=="" || contrausu.trim() ==""){
        Swal.fire({
            title:"Todos los campos son obligatorios",
            text: "",
            icon:"error"
        })
    }else{
        let data = new FormData();
        data.append("nombreusu",nombreusu);
        data.append("contrausu",contrausu);
        let request = await fetch(url,{
            method:"post",
            body:data
        });
        let response = await request.json();
        if(response["status"] == 2){
            Swal.fire({
                title: response["message"],
                text: "",
                icon: "error"
            });
        }else{
            window.location.href="?controller=home&action=main";
        }
        console.log(response);
    }
}

let EditarUsers = async() =>{
    let frm = document.getElementById("frm");
    let url = frm.getAttribute("action");

    let name     = document.getElementById("name").value;
    let apellido = document.getElementById("apellido").value;
    let email    = document.getElementById("email").value;
    let photo =  document.getElementById("photo").files[0];
    let uid      = document.getElementById("uid").value

    let data = new FormData();
    data.append("name", name);
    data.append("apellido", apellido);
    data.append("email", email);
    data.append("photo", photo);
    data.append("uid", uid);
  
    let request = await fetch(url,{
        method:"post",
        body:data
    });
    let response = await request.json();
    console.log(response);
    if(response["status"]==1){
        Swal.fire({
            title: response["message"],
            text: "",
            icon: "success"
          });
       
    }else{
        Swal.fire({
            title: response["message"],
            text: "",
            icon: "error"
        });

    }
    
 
}








