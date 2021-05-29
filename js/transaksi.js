$(document).ready(function (){
    var max = null;
    loadData();
    function loadData(search, page){
        $.ajax({
            url: "transaksi.php",
            method: "POST",
            dataType: "json",
            data:{search:search,
                page:page,
            },
            success: function (data) {
                $("#table").html(data.output);
                $(".pagination").html(data.halaman);
                max = data.max;
            }
        });
    }
    $("#search").keyup(function (e){
        let txt = $(this).val();
        if(txt != ""){
            loadData(txt);
        }else{
            loadData();
        }
    });
    $(document).on("click", ".next", function(){
        let page = $(this).attr("id");
        let txt = $("#search").val();
        page++;
        if(page<=max){
            loadData(txt, page);
        }
    });
    $(document).on("click", ".previous", function(){
        let page = $(this).attr("id");
        let txt = $("#search").val();
        page--;
        if(page!=0){
            loadData(txt, page);
        }
    });
})