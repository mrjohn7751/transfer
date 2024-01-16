$(document).ready(function (){
    var allData=[]
    $("#fileInput").change(function () {
        if($("#fileInput").val() != ""){
            alert("Rasm yuklandi")
        }
    })
    $("#addChildren").click(function (){
        var data={}
        data.firstName=$("#childName").val();
        data.lastName=$("#childLName").val();
        data.year=$("#childYear").val();
        data.month=$("#childMonth").val();
        data.day=$("#childDay").val();
        data.sex=''
        data.country=$("#tg_davlat").select().val()
        data.city=$("#tg_joy").select().val()
        var jins=$(".childjins");
        $(jins).each(function(index){
            if ($( this ).is(":checked")){
                data.sex=$(this).val()
            }
        });
        if(data.firstName && data.lastName && data.year && data.month && data.day && data.country && data.city && data.sex){
            allData.push(data);
            $("#childName").val('')
            $("#childLName").val('')
            $("#childYear").val('')
            $("#childMonth").val('');
            $("#childDay").val('')
            $("#tg_davlat").val('Tanlanmagan')
            $("#tg_joy").val('')
            $(".childjins").prop('checked', false);
            $("#exampleModal").modal("hide")
        }else {
            alert("Maydonni to'ldiring!")
        }
    })
    $("#fileInput").change(function () {
    })
    $("#send").click(function (){
        send()
    })
    $("#admin-loginBtn").click(function () {
        adminLogin()
    })
    $(".text-warning").click(function () {
        $("#children-tbody tr").remove()
        $("#exampleModal").modal("show")
        var id =$(this).closest("tr").find(".d-none").text()
        $.ajax({
            url: '/admin/children/'+id,
            type: 'GET',
            contentType: 'application/json;charset=utf-8',
            success: function (habar, ogoh, sts) {
                var tbody = $("#children-tbody")
                var i = 0
                $(habar).each(function (idx, qiymat) {
                    i++;
                    tbody.append(
                        '<tr>' +
                        '<td>'+ i +'</td>' +
                        '<td>'+ qiymat.firstName +'</td>' +
                        '<td>'+ qiymat.lastName +'</td>' +
                        '<td>'+ qiymat.year +'</td>' +
                        '<td>'+ qiymat.month +'</td>' +
                        '<td>'+ qiymat.day +'</td>' +
                        '<td>'+ qiymat.sex +'</td>' +
                        '<td>'+ qiymat.country +'</td>' +
                        '<td>'+ qiymat.city +'</td>' +
                        '<tr>'
                    )
                })
            },
            error: function (xato) {
                alert("xato")
            }
        })
    })
function validateFileType() {
    const fileInput = document.getElementById('fileInput');
    const filePath = fileInput.value;
    const allowedExtensions = /(\.jpg|\.png)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Please upload JPG or PNG files only.');
        fileInput.value = '';
        return false;
    }
}
function validateImageSize() {
    const imageInput = document.getElementById('imageInput');
    const fileSize = imageInput.files[0].size;
   if (fileSize > 5097152) {
        alert('Rasm hajmi  5 mb oshmasligi kerak.');
        imageInput.value = '';
        return false;
    }
}
function send(){
   var firstName=$("#firstName").val(),
    lastName=$("#lastName").val(),
    year=$("#year").val(),
    month=$("#month").val(),
    day=$("#day").val(),
    country=$("#country").val(),
    city=$("#city").val(),
    currentCountry=$("#currentCountry").val(),
    currentRegion=$("#currentRegion").val(),
    currentCity=$("#currentCity").val(),
    phoneNumber=$("#phoneNumber").val(),
    address=$("#address").val(),
    yourInfo=$("#yourInfo").val(),
    yourMartialSts=$("#yourMartialSts").val(),
    rasm=$("#fileInput").val(),
       sex;
    var jins=$(".jins");
    $(jins).each(function(index){
        if ($( this ).is(":checked")){
            sex=$(this).val()
        }
    });
    if (firstName && lastName && year && month && day && country && city && currentCountry && currentRegion && currentCity && phoneNumber && address && yourInfo && yourMartialSts && sex && rasm){
        var form = $('#addUser')[0];
        var data = new FormData(form);
        $.ajax({
            url: "/admin/sign-up",
            type: "POST",
            enctype:'multipart/form-data',
            data:data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (habar, ogoh, sts) {
                addChildren(phoneNumber);
                alert(habar)
                location.reload()
            },
            error: function (xato) {
                alert("Fayl xajmi 2mb dan katta")
            }
        })
    }else {
        alert("Maydonni to'ldiring")
    }
}
function addChildren(phoneNumber) {
    $.ajax({
        url: "/admin/add-children/"+phoneNumber,
        type: "POST",
        data: JSON.stringify(allData),
        contentType: 'application/json;charset=utf-8',
        success: function (habar, ogoh, sts) {
        },
        error: function (xato) {
        }
    })
}
function adminLogin() {
    login = {}
    login.username = $("#admin-username").val()
    login.password = $("#admin-password").val()
    if (login.username && login.password) {
        $.ajax({
            url: "/admin/login-check",
            type: "POST",
            data: JSON.stringify(login),
            contentType: 'application/json;charset=utf-8',
            success: function (habar, ogoh, sts) {
                if (sts.status == "200") {
                    document.cookie = "Auth="+habar
                    window.location.href="/admin/home"
                }
                if (sts.status == "208") {
                    alert(habar)
                }
                // location.reload()
            },
            error: function (xato) {
            }
        })
    }else {
        alert("Maydonni to'ldiring");
    }
}
})
