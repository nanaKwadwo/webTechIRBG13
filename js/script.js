
function search() {
    var searchtext = document.getElementById('searchtxt').value;
    var ajaxUrl = "pages/controller/admin_controller.php?searchtext=";
    ajaxUrl = ajaxUrl.concat(searchtext);
    $.ajax(ajaxUrl, { async: true, complete: returnComplete });
}

function getApplicants() {
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=1";
    $.ajax(ajaxUrl, { async: true, complete: returnComplete });
}

function getNonApplicants() {
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=2";
    $.ajax(ajaxUrl, { async: true, complete: returnComplete });
}

function getReviewers() {
    var ajaxUrl = "pages/controller/admin_controller.php?cmd=3";
    $.ajax(ajaxUrl, { async: true, complete: returnComplete });
}


function returnComplete(xhr, status) {
    if (status != "success") {
        console.log("Error");
        return;
    }
    
    var obj = $.parseJSON(xhr.responseText);
    var container = document.getElementById('content');
    container.innerHTML = "";
    var div = "";
    var newdiv = "";
    for (var key in obj) {
        var jsondata = $.parseJSON(obj[key]);
        for (data in jsondata) {
            newdiv = "<div class=\"app-2\"><label>" + jsondata.username + "</label><div class=\"btns\"><button>Edit</button><button>Delete</button></div></div>";
        }
        div = div + newdiv;
    }
    container.innerHTML = div;
    return
}

function getApplications() {
    var ajaxUrl = "pages/controller/user_controller.php?cmd=1";
    $.ajax(ajaxUrl, { async: true, complete: getApplicationsComplete });
}
function getApplicationsComplete(xhr, status) {
    if (status != "success") {
        console.log("Error");
        return;
    }
    var btn = document.getElementById('add_save');
    btn.innerHTML=`<a href="IrbDoc.php">Add Application</a>`;
    var obj = $.parseJSON(xhr.responseText);
    var container = document.getElementById('content');
    container.innerHTML = "";
    var div = "";
    var newdiv = "";
    for (var key in obj) {
        var jsondata = $.parseJSON(obj[key]);
        for (data in jsondata) {
            newdiv = "<div class=\"app\"><label>" + jsondata.app_title + "</label><div class=\"btns\"><button onclick=\"getEditForm(" + jsondata.app_id + ")\">Edit</button><button>Delete</button></div></div>";
        }
        div = div + newdiv;
    }
    container.innerHTML = div;
    return
}
function getApplicationsReviewer() {
    console.log("Done")
    var ajaxUrl = "pages/controller/reviewer_controller.php?cmd=1";
    $.ajax(ajaxUrl, { async: true, complete: getApplicationsReviewerComplete });
}

function getApplicationsReviewerComplete(xhr, status) {
    if (status != "success") {
        console.log("Error");
        return;
    }
    var obj = $.parseJSON(xhr.responseText);
    var container = document.getElementById('content');
    container.innerHTML = "";
    var div = "";
    var newdiv = "";
    for (var key in obj) {
        var jsondata = $.parseJSON(obj[key]);
        for (data in jsondata) {
            newdiv = "<div class=\"app\"><label>" + jsondata.app_title + "</label><div class=\"btns\"><button>Review</button><button>" + jsondata.app_status + "</button></div></div>";
        }
        div = div + newdiv;
    }
    container.innerHTML = div;
    return

}
function saveform() {
    document.getElementById("statcolumn").value = "Save";
    document.getElementById("irbForm").submit();
}
function submitform() {
    document.getElementById("statcolumn").value = "Submit";
    document.getElementById("irbForm").submit();
}

function getEditForm(id) {
    var ajaxUrl = "pages/controller/IRB_controller.php?cmd=2&application_id=" + id;
    $.ajax(ajaxUrl, { async: true, complete: getEditFormComplete });

}

function getEditFormComplete(xhr, status) {
    if (status != "success") {
        console.log("Error");
        return;
    }

    var obj = $.parseJSON(xhr.responseText);
    var id = obj['id'];
    delete obj['id'];
    var container = document.getElementById('content');
    var btn = document.getElementById('add_save');
    btn.innerHTML=`<button>Save Application</button>`;
    container.innerHTML = "";
    var div = "";
    for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
            div=div+`<div class="section">
                    <label for="textarea1" id="name">`+key+`</label>
                    <textarea id="feild" form="irbform" >`+obj[key]+`</textarea>
                    <button onclick="saveChange(`+id+`)">Save</button>
                </div>`
        }
    }

    container.innerHTML = div;
    return
}

function saveChange(id){
    var name = document.getElementById('name').innerHTML;
    var data = document.getElementById('feild').value;
    var ajaxUrl = "pages/controller/IRB_controller.php?cmd=3&feild="+name+"&data="+data+"&id="+id;
    $.ajax(ajaxUrl, { async: true, complete: saveChangeComplete });
}
function saveChangeComplete(xhr,status){
        if (status != "success") {
        console.log("Error");
        return;
    }
    
    var obj = $.parseJSON(xhr.responseText);
    if(obj['result']==1){
        alert('Changes Saved');
    }else{
        alert('Error Occured');
    }
    
}