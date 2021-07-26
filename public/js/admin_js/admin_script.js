$(document).ready(function() {
    //Checando as senhas
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
            type:'POST',
            url: '/admin/check-current-pwd',
            data: {current_pwd:current_pwd},
            success: function(resp) {
                // alert(resp);
                if(resp=="false") {
                    $("#chkCurrentPwd").html("<font color=red>Senha atual incorreta</font>");
                } else if(resp=="true") {
                    $("#chkCurrentPwd").html("<font color=green>Senha atual Correta</font>");
                }
            },error:function() {
                alert('ERROR');
            }
        });
    });
    


    // Atualização das sections status
    $(".updateSectionStatus").click(function() {
        var status = $(this).text();
        var section_id = $(this).attr("section_id");
        // alert(status);
        // alert(section_id);
        $.ajax({
            type:'post',
            url:'/admin/update-section-status',
            data:{status:status,section_id:section_id},
            success:function(resp){
                // alert(resp['status']);
                // alert(resp['section_id']);
                if(resp['status']==0){
                    $("#section-"+section_id).html("<a class='updateSectionStatus' href='javascript:void(0)'>Inativo</a>");
                } else if(resp['status']==1){
                    $("#section-"+section_id).html("<a class='updateSectionStatus' href='javascript:void(0)'>Ativo</a>");
                }
            },error:function(){
                alert('ERROR');
            }
        });
    });
    


    // Atualização da categoria status
    $(".updateCategoryStatus").click(function() {
        var status = $(this).text();
        var category_id = $(this).attr("category_id");
        // alert(status);
        // alert(category_id);
        $.ajax({
            type:'post',
            url:'/admin/update-category-status',
            data:{status:status,category_id:category_id},
            success:function(resp){
                // alert(resp['status']);
                // alert(resp['category_id']);
                if(resp['status']==0){
                    $("#category-"+category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Inativo</a>");
                } else if(resp['status']==1){
                    $("#category-"+category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Ativo</a>");
                }
            },error:function(){
                alert('ERROR');
            }
        });
    });




    // Nível de categorias de apêndice.
    $("#section_id").change(function() {
        var section_id = $(this).val();
        // alert(section_id);
        $.ajax({
            type:'post',
            method:'post',
            url:'/admin/append-categories-level',
            data:{section_id:section_id},
            success:function(resp){
               $("#appendCategoriesLevel").html(resp);
            },error:function(){
                alert('ERROR');
            }
        });
    });

    // Mensagem de alerta para deletar categoria 
    // $(".confirmDelete").click(function() {
    //     var name = $(this).attr("name");
    //     if(confirm("Tem certeza que deseja excluir esta "+name+"?")){
    //         return true;
    //     }
    //     return false;
    // });

    // Mensagem de alerta com sweertalert
    $(".confirmDelete").click(function() {
        var record = $(this).attr("record");
        var recordid = $(this).attr("recordid");
        Swal.fire({
            title: 'Deseja execulta a operação?',
            text: "Isso não tera mas volta!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, Apagar!'
          }).then((result) => {
            if (result.isConfirmed) {
            //   Swal.fire(
            //     'Deleted!',
            //     'Categoria deletada.',
            //     'success'
            //   )
              window.location.href="/admin/delete-"+record+"/"+recordid;
            }
        });
    });
}); 