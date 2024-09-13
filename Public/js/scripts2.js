let registerProduct = async () => {
    let = frm = document.getElementById("frm");
    let = url = frm.getAttribute("action");

    let name = document.getElementById("name").value;
    let price = document.getElementById("price").value;
    let Descripcion = document.getElementById("Descripcion").value;
    let photo =  document.getElementById("photo").files[0];
 
    let data = new FormData();
    data.append("name", name);
    data.append("price", price);
    data.append("Descripcion", Descripcion);
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
let deleteproduct = async(reference) =>{
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
            deletConfirmproduct(uid,reference);
      }
      });
}

    
let deletConfirmproduct = async(uid,reference) => {
    let request = await fetch('?controller=product&action=delete&uid='+uid);
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
// let validateproduct = async()=>{
//     let frm = document.getElementById("frm");
//     let url = frm.getAttribute("action");

//     let nombrepro = document.getElementById("nombrepro").value;
//     let contrapro = document.getElementById("contrapro").value;
//     if(nombrepro.trim()=="" || contrapro.trim() ==""){
//         Swal.fire({
//             title:"Todos los campos son obligatorios",
//             text: "",
//             icon:"error"
//         })
//     }else{
//         let data = new FormData();
//         data.append("nombrepro",nombrepro);
//         data.append("contrapro",contrapro);
//         let request = await fetch(url,{
//             method:"post",
//             body:data
//         });
//         let response = await request.json();
//         if(response["status"] == 2){
//             Swal.fire({
//                 title: response["message"],
//                 text: "",
//                 icon: "error"
//             });
//         }else{
//             window.location.href="?controller=home&action=main";
//         }
//         console.log(response);
//     }
// }

let EditarProduct = async() =>{
    let = frm = document.getElementById("frm");
    let = url = frm.getAttribute("action");

    let name        = document.getElementById("name").value;
    let price       = document.getElementById("price").value;
    let Descripcion = document.getElementById("Descripcion").value;
    let photo       = document.getElementById("photo").files[0];
    let uid         = document.getElementById("uid").value

    let data = new FormData();
    data.append("name", name);
    data.append("price", price);
    data.append("Descripcion", Descripcion);
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




















