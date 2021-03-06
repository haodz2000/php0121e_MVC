$(document).ready(function(){
    $("#list-students").DataTable({
        responsive: true,
        processing: true,
        paging: true,
        order: [[ 2, "desc" ]],
        lengthMenu: [[2, 25, 50, -1], [2, 25, 50, "All"]]
    });
    $("#btn-search").click(function (){
        var key = $("#search").val();
        console.log(key);
        search(key);
    })
})
function search(ajaxActive,key)
{
    console.log(key);
    $.ajax({
        url: 'views/students/data-search.php',
        type : 'GET',
        dataType: 'html',
        data:{ ajaxActive: ajaxActive,key: key},
        success: function (result)
        {
            console.log(result);
            $("#info-students").html(result);
        },
        error: function ()
        {
            console.log('error');
        }
    })
}