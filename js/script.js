function search() {
    var searchtext = document.getElementById('searchtxt').value;
    var ajaxUrl = "pages/controller/admin_controller.php?searchtext=";
    ajaxUrl = ajaxUrl.concat(searchtext);
    $.ajax(ajaxUrl,{async:true,complete:returnComplete});
}
function getApplicants(){
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=1";
    $.ajax(ajaxUrl,{async:true,complete:returnComplete});
}
function getNonApplicants(){
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=2";
    $.ajax(ajaxUrl,{async:true,complete:returnComplete});
}
function getReviewers(){
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=3";
    $.ajax(ajaxUrl,{async:true,complete:returnComplete});
}
function returnComplete(xhr, status) {
    if (status != "success") {
        console.log("Error");
        return;
    }
    var obj = $.parseJSON(xhr.responseText);
    var container = document.getElementById('content');
    container.innerHTML="";
    var div = "";
    var newdiv = "";
    for(var key in obj){
        var jsondata = $.parseJSON(obj[key]);
        for(data in jsondata){
        newdiv= "<div class=\"app-2\"><label>"+jsondata.username+"</label><div class=\"btns\"><button>Edit</button><button>Delete</button></div></div>";
    }
    div = div+newdiv;
}
    container.innerHTML=div;
    return
}

